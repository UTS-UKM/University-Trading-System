<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $users = user::where('id', auth()->user()->id)->get();
        
        return view('user.index',compact('users'));
    }
   public function edit($id)
    {
        $users = User::where('user_id', auth()->user()->id)
                        ->where('id', $id)
                        ->first();

        return view('pages.user_profile', compact('id', 'name'));
    } 
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = new User();
        $data = $this->validate($request, [
            'name'=>'required',
        ]);
        $data['id'] = $id;
        $users->updateUser($data);

        return redirect('/user_profile');
    }

}
