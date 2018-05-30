<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function store(Request $request){
        $group = Group::create(['group'=>$request->text]);

        if ($request->ajax()) {
            $data['id']= $group->id;
            $data['data'] =Group::pluck('group', 'id');

            return response()->json($data);
        }
    }
}
