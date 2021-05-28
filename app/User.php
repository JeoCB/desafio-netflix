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

    /**
     * Set last activity
     * 
     * Sets user's last activity
     * 
     * @param Carbon $date
     * 
     * @return null|User returns null if action is invalid or User action is valid
     */
    public function setLastActivity(\Carbon\Carbon $date){

        try {
            $this->last_activity=$date;
            $this->save();
            return $this;
        } catch (\Throwable $th) {
            return null;
        }
    }
    
    /**
     * Refresh last activity
     *
     * Sets user's last activity as now()
     *
     * @return null|User Returns user when operation is valid or null when the operation is invalid
     */
    public function refreshLastActivity()
    {
        return $this->setLastActivity(now());
    }
}