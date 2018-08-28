@extends('layouts.home')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/followus.css') }}">  
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/barangay.css') }}">
<div class="container-fluid sgd-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">{{ $page }}</li>
            <li class="breadcrumb-item"><a href="{{ route('barangay') }}">{{ $breadcrumb }}</a></li>
            <li class="breadcrumb-item"><a href="{{ url()->current() }}">{{ $barangay->name }}</a></li>
        </ol>
    </nav>
</div>
<br>
<div class="container-fluid">    
    <div class="row">
        <div class="col-sm-2 col-md-2 col-lg-2">
            @include('frontend.government._leftbrgy')
        </div>
        <div class="col-sm-7 col-md-7 col-lg-7"> 

            <div class="callout secondary">
                <h5>Barangay<small>Profile</small></h5>
                @include('frontend.widgets._sharethis')     
                <hr>
                <div class="w3-container">
                    <img src="{{ asset('images/barangay/sample.jpg') }}" style="width: 100%">
                    <div class="w3-panel">
                    <ul>
                        <li>
                            <span class="fa fa-clock-o" aria-hidden="true"></span>
                            <time datetime="2018-06-01" itemprop="datePublished" pubdate="">{{ $barangay->created_at }}</time>
                        </li>
                        <li class="meta-author">
                            <span class="fa fa-user" aria-hidden="true"></span><span itemprop="name">
                                <span class="fn">
                                    <a href="" rel="author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person" data-wpel-link="internal">Girish Karthik</a>
                                </span>
                            </span>
                        </li>
                        <li class="meta-category">
                            <span class="fa fa-folder-o" aria-hidden="true"></span>
                            <a href="{{ route('barangay') }}" title="Website Templates">Barangays</a>
                        </li>
                       <!--  <li class="meta-comments comment-scroll">
                            <span class="fa fa-comment-o" aria-hidden="true"></span>
                            <a href="https://colorlib.com/wp/free-news-website-templates/#view_comments" class="comments-link" data-wpel-link="internal">2 Comments</a>
                        </li> -->
                    </ul>
                </div>
                    <header>
                        <h1 class="w3-teal barangay-title">Barangay {{ $barangay->name }}</h1>
                        <p>
                            <ul style="list-style: none;">
                                <li><b>Captain: </b> {{ $barangay->captain }}</li>
                                <li><b>Mobile no.: </b> {{ $barangay->cellnumber }}</li>
                                <li><b>Telephone no.: </b> {{ $barangay->telnumber }}</li>
                            </ul>
                        </p>
                        <!-- <p>
                            <aside>
                                <h6 style="font-weight: 400">History:</h6>
                                <p>none</p>
                            </aside>
                        </p> -->
                    </header>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3">
            @include('frontend.government._rightbrgy')
        </div>
    </div>
</div>
<div id="news" style="margin-top:50px">
    @include('frontend.home._news')
</div>
@endsection