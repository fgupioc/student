<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = true;
    protected $fillable = ['id','academic_id', 'level_id', 'shift_id', 'time_id', 'group_id', 'batch_id', 'start_date', 'end_date', 'active'];

    public function scopeGetCourses($query, $array)
    {
        return $query->join('academics', 'academics.id', '=', 'courses.academic_id')
            ->join('levels', 'levels.id', '=', 'courses.level_id')
            ->join('programs', 'programs.id', '=', 'levels.program_id')
            ->join('shifts', 'shifts.id', '=', 'courses.shift_id')
            ->join('times', 'times.id', '=', 'courses.time_id')
            ->join('batches', 'batches.id', '=', 'courses.batch_id')
            ->select('courses.id', 'courses.start_date', 'courses.end_date', 'courses.active', 'academics.academic', 'levels.level', 'programs.program', 'shifts.shift', 'times.time', 'batches.batch', 'groups.group')
            ->join('groups', 'groups.id', '=', 'courses.group_id')
            ->where($array)
            ->orderBy("courses.id", 'desc');
    }
}
