<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{    
    public function store(Request $request) 
    {
        //dd($request->all());
        //dd($request->file('arquivo'));

        $arquivo = $request->file('arquivo');

        if($arquivo->isValid()) {
            $arquivo->storeAs('arquivos', $arquivo->getClientOriginalName());

            $data = [
                'message' => 'Arquivo enviado com sucesso', 
                'status' => true
            ];
            return response()->json($data);
        }
    }
}
