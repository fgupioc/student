<?php

namespace App\Http\Controllers;

use App\Academic;
use App\Batch;
use App\Course;
use App\Group;
use App\Level;
use App\Program;
use App\Shift;
use App\Time;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('admin.courses.create', compact('academics', 'programs', 'levels', 'shifts', 'times', 'batches', 'groups', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = Course::create($request->all());
        if ($request->ajax()) {
            return response()->json(Course::getCourses(array('courses.id' => $curso->id))->first());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    public function getSearchCourses(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(Course::getCourses($this->getInputs(array_filter($request->all())))->get());
        }
    }

    function getInputs($arrays){
        $res=[];
        foreach ($arrays as $key => $value){
            if($key !== '_token')
                $res[$this->getTables($key)] = $value;
        }
        return $res;
    }
    function getTables($value){
        switch ($value){
            case 'academic_id':
                return 'academics.id' ;
                break;
            case 'program_id':
                return "levels.program_id";
                break;
            case 'level_id':
                return 'levels.id';
                break;
            case 'shift_id':
                return 'shifts.id';
                break;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Course $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
