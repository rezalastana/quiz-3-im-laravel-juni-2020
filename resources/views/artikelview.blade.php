@extends('layouts.master')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Artikel</th>
                <th scope="col">Detail Artikel</th>
                <th scope="col">Edit Artikel</th>
                <th scope="col">Delete Artikel</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artikel as $key => $artikel)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$artikel->judul_artikel}}</td>
                <td>
                    <a href="{{ url('/artikel/'.$artikel->id_artikel)}}">
                        <button class="btn btn-primary">Lihat Detail Artikel</button>
                    </a>
                </td>
                <td>
                    <a href="{{ url('/artikel/'.$artikel->id_artikel).'/edit'}}">
                        <button class="btn btn-warning">Edit Artikel</button>
                    </a>
                </td>
                <td>
                    <form method="POST" action="{{ url('/artikel/'.$artikel->id_artikel)}}">
                        @csrf
                        {{ method_field('delete')}}
                        <button type="submit" class="btn btn-danger">Delete Artikel</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/artikel/create') }}">
        <button class="btn btn-primary"> Buat Artikel Baru</button>
    </a>
    
    <script type="text/javascript">
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
    </script>
@endsection