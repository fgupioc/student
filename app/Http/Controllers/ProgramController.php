<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {

    }

    public function create(Request $request)
    {

    }

    public function store(Request $request)
    {
        $program = Program::create(['program'=>$request->text]);

        if ($request->ajax()) {
            $data['id']= $program->id;
            $data['data'] =Program::pluck('program', 'id');

            return response()->json($data);
        }
    }

    public function getProgramLevels(Request $request){
        return response()->json(Program::with("levels")->findOrFail($request->id));
    }
}
