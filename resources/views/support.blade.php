@extends('layouts.app')
@section('title-block','proel.ru')
@section('content')
<h1>записи таблицы support</h1> 
@foreach($data as $item)
    <div class="alert alert-info">
        <h2>{{$item->name}}</h2>
    </div>
@endforeach

@endsection