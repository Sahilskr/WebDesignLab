@extends('template')
@section('title','Home Page')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('content')

<h1>Welcome to laravel...</h1>
<main>
		<div class="photo">
			<figure >
			<img src="img/index.jpeg"/>
			</figure>
			<h1>
				Sahil Sakharkar
			</h1>
		</div>

		<p class="about">
			I'm a Full Stack Web Developer and Assistant Professor based in Mumbai Metropolitan Region (MMR), India. I have passion for database and web development. I love to create, teach and design applications for web and mobile devices
		</p>
		<div>
			<p>
				<ul>
					<li>
						M.Tech Level expertise at database system and design patterns.
					</li>
					<li>
						My passion for programming and getting at the crux of the problem.
					</li>
					<li>
						2.5+ years volunteer experience in building web applications.
					</li>
				</ul>

			</p>
			<a href="resume.html">Know More About Me!</a>
		</div>
		<div>
			<a href="contact.html">Contact Me</a>
		</div>
		<div>
			<a href="blog.html">See my writings</a>
		</div>
		<div>
			<a href="gallery.html">Take a look of my world</a>
		</div>
	</main>

@endsection


@section('footer')
    @include('partials.footer')
@endsection

