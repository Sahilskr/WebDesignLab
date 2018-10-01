@extends('template')
@section('title','Gallery')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('content')

<h1>Welcome to laravel...</h1>
<main>
		<div class="gallery">
				<h1>Gallery</h1>
			<figure>
				<img src="img/cactus.jpg" alt="Cactus Plant">
				<figcaption>A cactus plant</figcaption>
			</figure>

			<figure>
				<img src="img/arrangement.jpg" alt="A flower">
				<figcaption>Flowers</figcaption>
			</figure>

			<figure>
				<img src="img/beach.jpg" alt="A beach">
				<figcaption>A beautiful beach</figcaption>
			</figure>

			<figure>
				<img src="img/clock.jpg" alt="A Clock">
				<figcaption>A Clock</figcaption>
			</figure>

			<figure>
				<img src="img/mobile-phone.jpg" alt="A mobile phone">
				<figcaption>A Mobile Phone</figcaption>
			</figure>

			<figure>
				<img src="img/mobile.jpg" alt="A Mobile">
				<figcaption>Another Mobile</figcaption>
			</figure>

			<figure>
				<img src="img/village.jpg" alt="My village">
				<figcaption>My village</figcaption>
			</figure>

			<figure>
				<img src="img/me.jpg" alt="Itzz me">
				<figcaption>Its me</figcaption>
			</figure>

			<figure>
				<img src="img/sis.jpg" alt="My sis">
				<figcaption>My sis</figcaption>
			</figure>

			<figure>
				<img src="img/bff.jpg" alt="My paltan">
				<figcaption>My Paltan</figcaption>
			</figure>

			<figure>
				<img src="img/bhai.jpg" alt="bhai">
				<figcaption>Bhai bhabhi</figcaption>
			</figure>

			<figure>
				<img src="img/sagar.jpg" alt="sagar bhai">
				<figcaption>Frnd kam Bhai</figcaption>
			</figure>

			<figure>
				<img src="img/life.jpg" alt="Mom and dad">
				<figcaption>My Life.Mom and dad</figcaption>
			</figure>

			<figure>
				<img src="img/love.jpg" alt="Nana and nani">
				<figcaption>Nana nani</figcaption>
			</figure>

			<figure>
				<img src="img/sib.jpg" alt="siblings">
				<figcaption>Me and my siblings</figcaption>
			</figure>





			<figure class="bf">
				<img src="img/pengu.jpg" alt="Best friend">
				<figcaption >My Best friend</figcaption>
			</figure>
		</div>

	</main>

@endsection


@section('footer')
    @include('partials.footer')
@endsection

