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

    protected $fillable = [
        'username',
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

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class,'user_course');
    }

    public function teacherCourses()
    {
        return $this->belongsToMany(Course::class, 'teacher_course');
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }

    public function scopeTeachers($query)
    {
        return $query->where('role','=', '1');
    }
}
