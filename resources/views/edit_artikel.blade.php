@extends('layouts.master')

@section('content')
    <form action="{{ url('/artikel/'.$id_artikel)}}" method="POST">
            {{ method_field('put')}}
            @csrf
            <input hidden name="id_artikel" value="{{$id_artikel}}">
            <div class="card-body">
                <div class="form-group">
                    <label for="judul_pertanyaan">Judul Artikel:</label>
                    <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" value="{{ $artikel->judul_artikel }}">
                </div>

                <div class="form-group">
                    <label for="judul_pertanyaan">Slug:</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $artikel->slug }}">
                </div>

                <div class="form-group">
                    <label for="isi_pertanyaan">Isi Artikel:</label>
                    <input type="text" class="form-control" id="isi_artikel" name="isi_artikel" value="{{ $artikel->isi_artikel }}"></input>
                </div>

                <div class="form-group">
                    <label for="judul_pertanyaan">TAG:</label>
                    <input type="text" class="form-control" id="tag" name="tag" value="{{ $artikel->tag }}">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update Artikel</button>
            </div>
        </form>
@endsection