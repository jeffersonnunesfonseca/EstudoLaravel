<?php

namespace App\Models\Painel\Products;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    /**
     * segurança, utilizando insert com metodo create
     *  deve-se utilizar os modificadores de acesso e nome de atributo
     *  da mesma forma que abaixo
     */

    //lista de campos liberados
    protected $fillable = [
        'name','number','active','category','description'
    ];

    //lista de campos bloqueados
    protected $guarded = [];


}
