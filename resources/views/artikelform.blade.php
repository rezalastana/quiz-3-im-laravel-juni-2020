@extends('layouts.master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h2 class="card-title">Artikel Baru</h2>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/artikel" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="judul_pertanyaan">Judul Artikel:</label>
                    <input type="text" class="form-control" id="judul_artikel" name="judul_artikel">
                </div>

                <div class="form-group">
                    <label for="judul_pertanyaan">Slug:</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Samakan dengan judul artikel">
                </div>

                <div class="form-group">
                    <label for="isi_pertanyaan">Isi Artikel:</label>
                    <textarea class="form-control" id="isi_artikel" name="isi_artikel" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="judul_pertanyaan">TAG:</label>
                    <input type="text" class="form-control" id="tag" name="tag">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection