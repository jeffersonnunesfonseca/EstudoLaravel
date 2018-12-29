<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function __construct(){
        
        //autentica nos metodos
        // $this->middleware('auth')->only(['categoria']);
    }
    public function index(){
        $teste = 1;
        $teste2 =2;
        return view('site.teste',compact('teste','teste2'));
    }

    public function categoria($id=null){
        return "hello world = {$id}";
    }
}
