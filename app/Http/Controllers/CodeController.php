<?php

namespace App\Http\Controllers;

use App\Models\Codes;
use App\Models\UserCodes;
use Illuminate\Http\Request;

class CodeController extends Controller
{
    public function index()
    {
        $userCodes = UserCodes::get();

        $data = [];

        foreach ($userCodes as $userCode) {
            $a = [
                $userCode->code->code,
                $userCode->name,
                $userCode->assistents,
                date('d-m-Y', strtotime($userCode->created_at))
            ];

            array_push($data, $a);
        }

        return response()->json($data);
    }

    public function store(Request $request)
    {
        $code = $request->code;
        $name = $request->name;
        $assists = $request->assists;
        
        $checkCode = Codes::where('code', $code)->where('in_use', false)->first();

        if ($checkCode) {
            UserCodes::create([
                'code_id' => $checkCode->id,
                'name' => $name,
                'assistents' => $assists
            ]);

            $checkCode->in_use = true;
            $checkCode->save();

            return response()->json([
                'message' => 'Gracias por tu confirmación.',
                'status' => true
            ]);
        } else {
            return response()->json([
                'message' => 'El código ya se encuentra en uso',
                'status' => false
            ]);
        }
    }
}
