<?php

namespace App\Http\Controllers;

use App\Shift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function index(){

    }

    public function create(){

    }

    public function store(Request $request){
        $shift = Shift::create(['shift'=>$request->text]);

        if ($request->ajax()) {
            $data['id']= $shift->id;
            $data['data'] =Shift::pluck('shift', 'id');

            return response()->json($data);
        }
    }
}
