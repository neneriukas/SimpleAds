<!doctype html>
<html lang="en">
	<head>
		@include('includes.head')
	</head>
	<body>
		<div class="container">
			<span class="row">
				@include('includes.header')
			</span>

			<h1 class="text-center">
				Apple Skelbimai
			</h1>
			<div class="row">
				@foreach ($categories as $category)
					<a	href="{{ action("CategoryController@index", [$category->id]) }}">
						<div class="well col-lg-3 col-md-6 col-sm-12 col-xs-12 text-center">
							<img src="{{$category->image}}"/>
							<h4>{{ $category->name }}</h4>
						</div>
					</a>
				@endforeach
			</div>


		<footer class="row text-center">
			@include('includes.footer')
		</footer>
		</div>
	</body>
</html>