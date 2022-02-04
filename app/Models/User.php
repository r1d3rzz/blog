<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    //Accessors and mutators Attribute eg.(setColumnAttribute)

    public function setPasswordAttribute($value)// This is the mutators,Use in dataInsert Time Change Data
    {
        $this->attributes['password']=bcrypt($value);
    }

    public function getNameAttribute($value) //This is the Accessors, Use in Show Data in UI Change data
    {
        return ucfirst($value);
    }

    //end Accessors, mutators
}
