<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function updateUser($data)
{
        $user = $this->find($data['id']); 
        $user->name = $data['name'];
        $user->user_contact = $data['user_contact'];
        $user->user_birthday = $data['user_birthday'];
        $user->user_address = $data['user_address'];
        $user->save();
        return 1;
}
    protected $fillable = [
        'name', 'email', 'password', 'gender', 'user_contact', 'user_birthday', 'user_address',
    ];
    public function images()
    {
        return $this->hasMany(UserImage::class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
