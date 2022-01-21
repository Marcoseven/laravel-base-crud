@extends('layouts.app')
@section('content')

<!-- #row_cards -->
<div id="row_cards">
    <div class="container">
        <span id="button_series">
			<h2>CURRENT SERIES</h2>
		</span>
        <div class="row gy-5">
            @foreach($comics as $comic) 
                 <div class="col-2">
                    <a href="{{ route('comic', $comic->id) }}"></a>
                    <img src="{{ $comic->thumb }}" class="image_comic" alt="{{ $comic->title }}">
                    <div class="text-uppercase">{{ $comic->series }}</div>
                 </div>
             @endforeach
        </div>
        <div id="button_more" class="col-12" >
            <button type="submit">LOAD MORE</button> 
        </div>
    </div>
</div>
<!-- /#row_cards -->

<!-- #row_icons -->
<div id="row_icons">
	<div class="container d-flex justify-content-between">
		<div class="col-2">
			<a href="#">
				<img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="immagine di un tablet con raffigurato il logo della Digital Comics"> 
				<h6>DIGITAL COMICS</h6>
			</a>
		</div>
		<div class="col-2">
			<a href="#">
				<img src="{{asset('img/buy-comics-merchandise.png')}}" alt="immagine che raffigura una maglietta">
				<h6>DC MERCHANDISE</h6>
			</a>
		</div>
		<div class="col-2">
			<a href="#">
				<img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="immagine di due card">
				<h6>SUBSCRIPTION</h6>
			</a>
		</div>
		<div class="col-2">
			<a href="#">
				<img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="immagine che raffigura la localizzazione di un luogo">
				<h6>COMIC SHOP LOCATOR</h6>
			</a>
		</div>
		<div class="col-2">
			<a href="#">
				<img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="immagine che raffigura una card">
				<h6>DC POWER VISA</h6>
			</a>
		</div>
	</div>
</div>
<!-- /#row_icons -->
@endsection




