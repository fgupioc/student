<?php

namespace App\Http\Controllers;

use App\Batch;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function store(Request $request)
    {
        $batch = Batch::create(['batch'=>$request->text]);
        if ($request->ajax()) {
            $data['id']= $batch->id;
            $data['data'] =Batch::pluck('batch', 'id');

            return response()->json($data);
        }
    }
}
