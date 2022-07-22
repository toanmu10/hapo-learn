<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCourse extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'user_course';

    protected $fillable = [
        'user_id',
        'course_id',
        'register_course_time'
    ];

    public function scopeSelectField($query, $selectField)
    {
        $selectField = $query->select($selectField);
        return $selectField;
    }

    public function scopeGroupByField($selectField, $groupByField)
    {
        return $selectField->groupBy($groupByField);
    }
}
