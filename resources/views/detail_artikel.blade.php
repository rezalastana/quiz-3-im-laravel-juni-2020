@extends('layouts.master')

@section('content')
<div class="card">
    <h3>Judul: {{$artikel->judul_artikel}}</h3>
    <p>{{$artikel->slug}}</p> <br>
    <p>{{$artikel->isi_artikel}}</p>
    <p>{{$artikel->tag}}</p>
</div>
    
@endsection