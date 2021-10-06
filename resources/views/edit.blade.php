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
        <div class="row">
        <form action="/update/{{$article->id}}" method="post" enctype="multipart/form-data">
    </div>
</html>
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$article->id}}"></br>
    <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" class="form-control" required="required" name="title" value="{{$article->title1}}"></br>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="form-control" required="required" name="content" value="{{$article->content1}}"></br>
    </div>
    <div class="form-group">
        <label for="image">Feature Image</label>
        <input type="file" class="form-control" required="required" name="image" value="{{$article->featured_image1}}"></br>
        <img width="150px" src="{{asset('storage/'.$article->featured_image1)}}">
    </div>
<button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
</form>
@endsection