<?php

namespace App\Http\Controllers;

use App\Models\Second;
use App\Models\Third;
use Illuminate\Http\Request;

class DxsswzxController extends Controller
{
    function  second(request $request)
    {
        $input = $request->all();
        $id = $input['second'];
        $data=Second::where('id',$id)->get();
        return response()->json([
            'state' => 'success',
            'data' => $data
        ]);
    }
    function  third(request $request)
    {
        $is = 1;
        $input = $request->all();
        $second_id = $input['second'];
        $id = $input['third'];
        $data=Third::where('id',$id)->where('second_id',$second_id)->get();
        if(empty($data) == false)   //判断数组是否为空
        {
            $is=0;


        }
        if($is == 1)
        {
            $success = success;
        }
        if($is == 0)
        {
            $success = false;

        }

        return response()->json([
            'state' => $success,
            'data' => $data
        ]);
    }
    public  function  click(request $request)
    {
            $input = $request->all();
            $id = $input['third'];
            $click = $input['click']+1;
            Third::where('id',$id)->update(['click'=>$click]);
            return response()->json([
               'state' => 'success'
            ]);

    }
}
