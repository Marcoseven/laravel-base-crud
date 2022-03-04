@extends('layouts.app')
@section('page-title', 'comic-page')

@section('content')
<div class="comic">
    <div class="poster">
        <img class="image_comic" src="{{ $comic->thumb }}" alt="{{ $comic->title }} poster">
        <div id="comic_gallery">
            <h6 class="text-uppercase text-center light">View Gallery</h6>
        </div>
    </div>
</div>
<div class="row_blue"></div>

<div class="container_comics">
    <div id="content">
        <div class="col-10 text_comic">
            <h4>{{ $comic->title }}</h4>
            <div class="row_green d-flex ">
                <div class="col-4">
                    <h6>
                        <span class="price">U.S. Price: </span>
                        {{ $comic->price }}
                    </h6>
                </div>
                <div class="col-2 available" >
                    <h6 class="text-uppercase">Available</h6>
                </div>
                <div class="col-2 vr"></div>
                <div class="col-4 check">
                    <p>
                        Check Availability
                        <i class="fas fa-sort-down"></i>
                    </p>
                </div>
            </div>
            <div>
                <p>
                    {{ $comic->description }}
                </p>
            </div>
        </div>
        <div class="col-2 image_right">
            <h5>ADVERTISEMENT</h5>
            <img src="{{ asset('img/adv.jpg') }}" alt=""> 
        </div>
    </div>
</div>

<div class="container_description">
    <div class="content_description">
            <div class="w-50">
                <h3>Talent</h3>
                <div class="d-flex flex-column">
                    <div class="artists">
                        <h4 class="col-2">Art by: </h4>
                        <p class="col-10">
                            <span></span>
                        </p>
                        <hr>
                    </div>
                    <div class="writers">
                        <h4 class="col-2">Written by: </h4>
                        <p class="col-10">
                            <span></span>
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="w-50">
                <h3>Specs</h3>
                <div class="d-flex flex-column">
                    <div class="content_specs">
                        <h4 class="col-2">Series: </h4>
                        <p class="col-10">
                            {{ $comic->series }}
                        </p>
                        <hr>
                    </div>
                    <div class="content_specs">
                        <h4 class="col-2">U.S. Price: </h4>
                        <p class="col-10">
                             {{ $comic->price }}
                        </p>
                        <hr>
                    </div>
                    <div class="content_specs">
                        <h4 class="col-2">On Sale Date: </h4>
                        <p class="col-10">
                           Oct 02 2018
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection