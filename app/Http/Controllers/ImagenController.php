<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ImagenController extends BaseController
{
    public function subir(Request $request){
        $datos = $request->validate([
            'img' => ['image', 'mimes:jpg,png,jpeg,gif,svg']
        ]);
        $imgRuta = '';
        if ($request->hasfile('img')){
            $archivo = $request->file('img');
            $nombre = $archivo->getClientOriginalName();
            $archivo->move(public_path().'\img',$nombre);
            $imgRuta = 'img/'.$nombre;
        }

        return view('welcome');
    }
}
