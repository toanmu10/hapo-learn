<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function courses_user()
    {
        return $this->belongsToMany(Courses::class);
    }

    public function courses_teacher()
    {
        return $this->belongsToMany(Courses::class, 'teacher_course', 'user_id');
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'date_of_birth',
        'gender',
        'phone',
        'address',
        'intro',
        'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
