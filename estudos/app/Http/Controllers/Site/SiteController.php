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
        return "hello world";
    }

    public function categoria($id=null){
        return "hello world = {$id}";
    }
}
