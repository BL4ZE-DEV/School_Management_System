<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SchoolController extends Controller
{
    Public function Create(Request $request){

        $School = School::create([
            'id' => Str::uuid(),
            'SchoolName' => $request->SchoolName, 
            'Domain'=> Str::slug($request->SchoolName).'edu.test',
            'Database' => Str::slug($request->SchoolName,'_').'_db'
        ]);
        

        if($School){
            return response()->json([
                'message' => ' Success',
                'Data' => $School
            ]);
        }else{
            return response()->json([
                'Message' => 'Error'
            ]);
        }
    }
}
