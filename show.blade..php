@extends('layouts.app')

@section('content')

<h1 class="text-center text-info"> Show file : {{$file->id}}</h1>
<div class="container col-6">
    <div class="card">
    {{$file->title}}
        <div class="card-body">
            Description :   {{$file->desc}}
            <img width="150" src="{{ asset("uploads/$file->mainFile") }}" alt="">
            <a href="{{ route('file.download',$file->id)}}" class="btn btn-block btn-info m-2"> Download</a>
        </div>
    </div>
</div>

@endsection