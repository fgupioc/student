<?php

namespace App\Http\Controllers;

use App\Time;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function index(){

    }

    public function create(){

    }

    public function store(Request $request){
        $time = Time::create(['time'=>$request->text]);

        if ($request->ajax()) {
            $data['id']= $time->id;
            $data['data'] =Time::pluck('time', 'id');

            return response()->json($data);
        }
    }
}
