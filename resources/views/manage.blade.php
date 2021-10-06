@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">

</head>
<body>

    <!-- Page Content -->
    <div class="container">
        <form action="/manage/search2" method="GET" class="form-inline">
            <input type="search" class="form-control mr-sm-2"name="search" placeholder="Cari Artikel .." value="{{ old('search') }}">
            <input type="submit" value="Search" class="btn btn-secondary">
        </form>
        <hr>
        <div class="row">
            <a href="/add"class="btn btn-primary float-left" >Tambah Data</a>
                @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                @endif
            <a href="/article/cetak_pdf"  class="btn btn-primary float-right" target="_blank">Cetak PDF</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead class="thead">
                <tr>
                    <th>No</th> 
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($article as $a)
                <tr>
                <td>{{$a->id}}</td>
                    <td>{{$a->title1}}</td>
                    <td>{{$a->created_at}}</td>
                    <td><img width="150px" src="{{asset('storage/'.$a->featured_image1)}}"></td>
                    <td>
                        <a href="/edit/{{ $a->id }}" class="badge badge-warning">Edit</a>
                        <a href="/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>    
    </div>   
@endsection