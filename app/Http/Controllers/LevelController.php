<?php

namespace App\Http\Controllers;

use App\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index(){

    }

    public function create(){

    }

    public function store(Request $request){

        $level = Level::create($request->all());
        if ($request->ajax()) {
            $data['id']= $level->id;
            $data['data'] =Level::pluck('level', 'id');

            return response()->json($data);
        }
    }

}
