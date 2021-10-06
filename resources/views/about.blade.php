@extends('layouts.app')

@section('title', 'Profil')
@section('sidebar')
@parent
    <h1>Sidebar halaman Profil</h1>
@endsection
@section('content')
    
    <div class="container marketing">
        <!-- START THE FEATURETTES -->
        <img class="img-fluid rounded" src="aboutMe.png" alt="" >
        <hr class="featurette-divider">
        
        <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Hai!! </h2>
            <p class="lead">
                <br>
                    Perkenalkan nama saya Tsania Risqi El Istiqomah.
                    Saya berasal dari Kota Malang, Jawa Timur.
                    Saya salah satu mahasiswa di Politeknik Negeri Malang.
                    Program studi Manajemen Informatika.
                    Jurusan Teknologi Informasi
                </br>
            </P>
        </div>
        <div class="col-md-5">
            <img class="img-fluid rounded" src="me.png" alt="" width="500" height="500">
        </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Pendidikan</span></h2>
            <p class="lead">
                <br>TK Sunan Giri</br>
                <br>SDN 37 Ampenan</br>
                <br>MTsN 2 Malang</br>
                <br>SMAN 4 Malang</br>
            </p>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="img-fluid rounded" src="sch.png" alt="" width="500" height="500">  
        </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one.</h2>
            <p class="lead">
                <br>Terima kasih sudah mengunjungi blog ini</br>
                Bye bye
        </p>
        </div>
        <div class="col-md-5">
            <img class="img-fluid rounded" src="last.png" alt="" width="500" height="500">
        </div>
        </div>

        <hr class="featurette-divider">
        
        <center>
        <h1>Contact</h1> 
        <br>
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <a href="https://twitter.com/Twitter" target='_blank'>
                <img class="bd-placeholder-img rounded-circle" src="twitter.png"  width="120" height="120">
                </a>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <a href="https://www.instagram.com/instagram/" target='_blank'>
                <img class="bd-placeholder-img rounded-circle" src="insta.png"  width="120" height="120">
                </a>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <a href="https://www.facebook.com/facebook/" target='_blank'>
                <img class="bd-placeholder-img rounded-circle" src="fb.png"  width="120" height="120">
                </a>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <br>
        </center>
        <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->
@endsection