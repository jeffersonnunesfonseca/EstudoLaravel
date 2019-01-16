@extends('template.template1')
@section('content')
    <table>
        <tr>
            <td>Nome</td>
            <td>Descrição</td>
        </tr>
        @foreach($products as $prod)
        <tr>
            <td>
                {{$prod->name}}
            
            </td>
            <td>
                {{$prod->description}}
            </td>
        </tr>
        @endforeach
        </table>
@endsection