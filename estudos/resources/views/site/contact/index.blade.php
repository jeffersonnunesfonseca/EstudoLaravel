@extends('site.template.template1')
@section('title')
  contato

@endsection
@section('content')
    {{$teste or 'nao existe'}} - {{$teste2 or 'nao existe'}}
    @if($var1 == '123')
        <p>éigual</p>
    @else
        <p>diferente</p>
    @endif

    <!-- verifica se e falso -->
    @unless($var1 != 123)
        <p>falso</p>
    @endunless
{{--
    @foreach($array as $arr)
        <p>{{$arr}}</p>
        
    @endforeach
--}}
@include('site.includes.sidebar')
@endsection

<!-- scripts dinamico -->
@push('scripts')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
@endpush