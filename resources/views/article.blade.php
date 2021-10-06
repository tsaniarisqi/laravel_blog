@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div class="container">

    <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

        <!-- Title -->
        <h2 class="card-title">{{$article->title1}}</h2>

        <!-- Author -->
        <p class="lead">
        by
        <a href="#">Tsania Risqi El Istiqomah</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p> Posted on {{$article->created_at}} </p>

        <hr>

        <!-- Blog Post -->
            <div class="card mb-4">
            
            <img class="img-fluid rounded" src="{{asset('storage/'.$article->featured_image1)}}" alt="">
                <div class="card-body">
                    <p class="card-text">{{$article->content1}}</p>
                </div>
            </div>
        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
        <h5 class="card-header">Leave a Comment:</h5>
        <div class="card-body">
            <form action="" method="post">
            @csrf
            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <div class="form-group">
                    <p>Name : </p>
                    <input class="form-control" type="text" name="nama"></input>
                </div>
                <div class="form-group">
                    <p>Comment : </p>
                    <input class="form-control" type="text" name="komentar"></input>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>

        <!-- Single Comment -->
        @foreach($komen as $k)
        @if($k->id_article==$id)
        <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
                <h5 class="mt-0">{{$k->name}}</h5>
                <p>{{$k->comment}}</p>
            </div>
        </div>
        @endif
        @endforeach

        <!-- Comment with nested comments -->
        <!-- <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

            <div class="media mt-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
            </div>

            <div class="media mt-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
            </div>

        </div>
        </div> -->

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <form action="/manage/search" method="GET" class="form-inline">
                    <input type="search" class="form-control mr-sm-2" name="search" placeholder="Cari Artikel .." value="{{ old('search') }}">
                    <input type="submit" value="Search" class="btn btn-secondary">
                </form>
            </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                <li>
                    <a href="#">Web Design</a>
                </li>
                <li>
                    <a href="#">HTML</a>
                </li>
                <li>
                    <a href="#">Freebies</a>
                </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                <li>
                    <a href="#">JavaScript</a>
                </li>
                <li>
                    <a href="#">CSS</a>
                </li>
                <li>
                    <a href="#">Tutorials</a>
                </li>
                </ul>
            </div>
            </div>
        </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
        </div>

    </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
@endsection