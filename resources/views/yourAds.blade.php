<!doctype html>
<html lang="en">
	<head>
		@include('includes.head')
	</head>
	<body>
		<div class="container">
			<span class="row">
				@include('includes.header')
				@include('includes.back')
			</span>

			<h1 class="text-center">
				{{$title}}
			</h1>
			<div class="row is-table-row">
				@if(count($ads) > 0)
					@foreach ($ads as $ad)
							<div class="well col-lg-3 col-md-6 col-sm-12 col-xs-12">
								<h4 class="text-center">{{ $ad->title }}</h4>
								<p>{{ $ad->description }}</p>
								<p><span class="glyphicon glyphicon-euro"></span>
									<strong class="ad-price">{{ $ad->price }} </strong>
								</p>
								<hr>
									<p>{{ $ad->getUser($ad->user_id)->name}}</p>
									<p>
										<span class="glyphicon glyphicon-earphone"></span>
										{{ $ad->getUser($ad->user_id)->phone}}
									</p>
									<i class="pull-right">{{ $ad->created_at }}</i>
									</br>
										</br>
										
										{!!Form::open([
											'method'=>'delete',
											'route' => ['ads.deleteAd', $ad->id]])
										!!}
										<div class="text-center">
											{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
										</div>
										{!!Form::close()!!}
							</div>
					@endforeach
				@else
					<h4 class="text-center text-danger">Sorry, you don't have any ads</h4>
				@endif
			</div>


		<footer class="row text-center">
			@include('includes.footer')
		</footer>
		</div>
	</body>
</html>