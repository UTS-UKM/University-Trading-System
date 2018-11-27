<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use DB;

class UsersController extends Controller
{

    public function viewUsers(){
        $users=User::all();
        return view('admin.users.view_users',compact('users'));
    }


    public function deleteusers($id){
        $data = DB::table('users')->where('id',$id)->delete();
        // session::flash('message','Products deleted successfully!!!');
        return redirect()->back()->with('message','Users deleted successfully');
      } 

     public function index()
    {
        $users = user::where('id', auth()->users()->id)->get();
        
        return view('users.index',compact('users'));
    }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


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
     * @param  \Illuminate\HttpData was gathered from participants in experimental speed dating events from 2002-2004. During the events, the attendees would have a four minute "first date" with every other participant of the opposite sex. At the end of their four minutes, participants were asked if they would like to see their date again.\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = new User();
        $data = $this->validate($request, [
            'name'=>'required',
            'user_contact'=>'required',
            'user_birthday'=>'required',
            'user_address'=>'required',
        ]);
        $data['id'] = $id; 
        $users->updateUser($data);

        return redirect('/user_profile');
    }

}
