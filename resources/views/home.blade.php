@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">
    <!-- <img class="img-fluid rounded" src="home.png" alt="" > -->
    <h1 class="my-4">Selamat Datang</h1>
    <hr></hr>

        <div class="row">
            
            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- Blog Post -->
                @foreach($article as $a)
                    <div class="card mb-4">
                        <!-- <img class="card-img-top" src="{{$a->featured_image1}}" alt="Card image cap"> -->
                        <img class="card-img-top" src="{{asset('storage/'.$a->featured_image1)}}" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">{{$a->title1}}</h2>
                            <p class="card-text">{{$a->content1}}</p>
                            <a href="article/{{$a->id}}" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="card-footer text-muted">
                            <p> Posted {{$a->created_at}} </p> by
                            <a href="#">Tsania Risqi El Istiqomah</a>
                        </div>
                    </div>
                @endforeach
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
    <div class="pagination justify-content-center">
      {{$article-> links()}}
    </div>
@endsection
