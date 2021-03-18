<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsToMany('App\Role');
    }

    public function hasAnyRoles($roles){
        if($this->roles()->whereIn('name',$roles)->first()){
            return true;
        }
        return false;
    }
    public function hasRole($roles){
        if($this->roles()->where('name',$roles)->first()){
            return true;
        }
        return false;
    }
    public function getRole(){
        return $this->roles()->get()->first();
}
public static function getRoleUser($id){
    $role_user = DB::table('role_user')->where('id',$id)->first();

    $role = $role_user != null ? DB::table('roles')->where('id',$role_user->role_id)->first() : "";

    return $role;
}
}
