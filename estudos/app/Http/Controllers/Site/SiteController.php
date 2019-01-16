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
        return view('site.home.teste',compact('teste','teste2'));
    }

    public function categoria($id=null){
        return "hello world = {$id}";
    }

    public function contato(){
        $teste = 1;
        // $teste2 =2;
        $var1 = 123;
        $array = [1,2,3,4,5,6,7,8,9,10];
        return view('site.contact.index',compact('teste','teste2','var1','array'));
    }
}
