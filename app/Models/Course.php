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
        return $this->belongsToMany(User::class, 'user_course', 'course_id');
    }

    public function teachers()
    {
        return $this->belongsToMany(User::class, 'teacher_course', 'course_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function scopeMain($query)
    {
        return $query->limit(config('homepage.home_course_number'));
    }

    public function scopeOther($query)
    {
        return $query->orderBy('name', config('homepage.sort_low_to_hight'))->limit(config('homepage.home_course_number'));
    }
    public function getTotalLessonsAttribute()
    {
        return $this->lessons->count();
    }

    public function getTotalTimesAttribute()
    {
        return $this->lessons->sum('time');
    }

    public function getTotalLearnersAttribute()
    {
        return $this->users->count();
    }

    public function scopeSearch($query, $data)
    {
        if (isset($data['keyword'])) {
            $query->where('name', 'LIKE', '%' . $data['keyword'] . '%')->orWhere('description', 'LIKE', '%' . $data['keyword'] . '%');
        }

        if (isset($data['created_time'])) {
            $data['created_time'] == 'newest' ? $query->orderBy('courses.created_at', 'desc') : $query->orderBy('courses.created_at');
        }

        if (isset($data['teachers']) && !empty($data['teachers'])) {
            $query->join('teacher_course', 'courses.id', '=', 'teacher_course.course_id')->whereIn('user_id', $data['teachers']);
        }

        if (isset($data['learner']) && !empty($data['learner'])) {
            $query->withCount('users')->orderBy('users_count', $data['learner']);
        }

        if (isset($data['time']) && !empty($data['time'])) {
            $query->withCount('lessons')->withSum('lessons', 'time')->orderBy('lessons_sum_time', $data['time']);
        }

	    if (isset($data['lesson']) && !empty($data['lesson'])) {
            $query->withCount('lessons')->orderBy('lessons_count', $data['lesson']);
        }

        if (isset($data['tags']) && count($data['tags']) > 0) {
            $query->join('course_tag', 'courses.id', '=', 'course_tag.course_id')->whereIn('tag_id', $data['tags']);
        }

        if (isset($data['review']) && !empty($data['review'])) {
            $query->withCount('reviews')->orderBy('reviews_count', $data['review']);
        }

        return $query;
    }
}
