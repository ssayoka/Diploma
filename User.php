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
        'name', 'email', 'password', 'title', 'degree', 'head_of_department', 'department',
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


    public function bookedDocuments()
    {
        return $this->belongsToMany('App\Document');
    }

    public function documents()
    {
        return $this->hasMany('App\Document');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function researchAdditionals()
    {
        return $this->hasMany('App\ResearchAdditional', 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function researchEducations()
    {
        return $this->hasMany('App\ResearchEducation', 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function researchResearchs()
    {
        return $this->hasMany('App\ResearchResearch', 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function researchSocials()
    {
        return $this->hasMany('App\ResearchSocial', 'user_id', 'id');
    }


}
