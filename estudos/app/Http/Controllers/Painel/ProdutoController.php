<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Products\Produto;
class ProdutoController extends Controller
{
    private $product;

    public function __construct(Produto $product){
        $this->prod = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Produto $prod)
    {
        $products = $this->prod->all();
        return view('painel.produto.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function teste()
    {
        
        /*
        //maneira com save

        $produto =  $this->prod;
        $produto->name="TESTE MODEL SAVE";
        $produto->number=11212121;
        $produto->active=TRUE;
        $produto->category="eletronicos";
        $produto->description="TESTE INSERT COM SAVE";
        $insert = $produto->save();

        if($insert)
            return "Inserido com sucesso";
        else
            return "falha ao inserir";
        */

        //maneira com insert, NÃO SEGURA
        // $insert = $this->prod->insert([
        //     "name"        => "TESTE COM INSERT",
        //     "number"      => 1212121,
        //     "active"      => true,
        //     "category"    => "eletronicos",
        //     "description" => "TESTE COM INSER"
        // ]);

        // if($insert)
        //      return "Inserido com sucesso";
        //  else
        //     return "falha ao inserir";

        //maneira com create, segura, é definido na model quais colunas podem ser inseridas pelo usuarios
        $insert = $this->prod->create([
            "name"        => "TESTE COM INSERT",
            "number"      => 1212121,
            "active"      => true,
            "category"    => "eletronicos",
            "description" => "TESTE COM INSER"
        ]);

        if($insert)
             return "Inserido com sucesso " . $insert->id;
         else
            return "falha ao inserir";
    
    }
}
