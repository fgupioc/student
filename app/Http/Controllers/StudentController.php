<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academic;
use App\Batch;
use App\Course;
use App\Group;
use App\Level;
use App\Program;
use App\Shift;
use App\Time;


class StudentController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        $academics = Academic::pluck('academic', 'id');
        $programs = Program::pluck('program', 'id');
        $levels = Level::pluck('level', 'id');
        $shifts = Shift::pluck('shift', 'id');
        $times = Time::pluck('time', 'id');
        $batches = Batch::pluck('batch', 'id');
        $groups = Group::pluck('group', 'id');
        $courses = Course::getCourses(array())->get();
        return view('admin.students.create', compact('academics', 'programs', 'levels', 'shifts', 'times', 'batches', 'groups','courses'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
