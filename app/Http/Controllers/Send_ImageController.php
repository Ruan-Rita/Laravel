<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class Send_ImageController extends Controller
{
    //

    public function index(){
        return view('send_image', []);
    }

    public function store(Request $request){
        $image = new Image();
        if($request->hasFile('img') && $request->file('img')->isValid()){
            $requestImage = $request->img;
            $extension = $requestImage->extension();
            $FileName = md5($requestImage->getClientOriginalName() . strtotime("now")). '.'.$extension;

            $requestImage->move(public_path('/img'),$FileName);

            $image->diretorio = $FileName;
            $image->save();

        }
        return redirect('/')->with('response','Imagem Inserida');
    }


}
