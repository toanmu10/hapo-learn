<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'photo',
        'name',
        'description',
        'price',
        'time'
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(User::class, 'teacher_course', 'course_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function showCourses($courseNumber)
    {
        $courses = Course::limit($courseNumber)->get();
        return $courses;
    }

    public function showOtherCourses($otherCourseNumber, $isAsc)
    {
        $otherCourses = Course::limit($otherCourseNumber)->orderBy('name', $isAsc)->get();
        return $otherCourses;
    }

    public function countCourses()
    {
        $countCourses = Course::get()->count();
        return $countCourses;
    }
}
