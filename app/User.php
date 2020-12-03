<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'UserFirstname', 'UserPrefix', 'UserLastname', 'UserPhonenumber', 'UserCity', 'UserStreet', 'UserHousenumber', 'UserPostalcode', 'UserGender', 'UserBirthdate', 'password', 'email', 'UserIsAmin'
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

    public function formatGender() {
        switch($this->UserGender) {
            case 1: 
                return "Man";
            break;

            case 2: 
                return "Vrouw";
            break;

            case 3: 
                return "Anders";
            break;
        }
    }
}
