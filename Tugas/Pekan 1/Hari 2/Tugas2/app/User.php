<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;
    

    /**
     * The "booting" function of model
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

    protected $fillable = [
        'name', 'password', 'email','id_role',
    ];
    protected $primaryKey = 'id_users';

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function otp()
    {
        return $this->hasOne('App\Otp');
    }

    public function role()
    {
        return $this->hasMany('App\Role');
    }

    public function verif()
    {
        if($this->email_verified_at != null )
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function status()
    {
        if($this->id_role =='0')
        {
            return true;
        }
        else
        {
            false;
        }
    }
}