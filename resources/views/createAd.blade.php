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
				{{ $title }}
			</h1>
					{!! Form::open(array('action' => 'AdsController@post')) !!}
						<div class="form-group">
						  <label for="title">Title:</label>
						  <input type="title" name="title" class="form-control" id="title" placeholder="Enter title">
						</div>

						<div class="form-group">
						  <label for="description">Description:</label>
						  <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter description"></textarea>
						</div>

						<div class="form-group">
						  <label for="price">Price:</label>
						  <input type="text" name="price" class="form-control" id="price" placeholder="Enter price"></input>
						</div>

						<div class="form-group">
							<select class="form-control" id="category" name="category">
								@foreach($categoryNames as $id => $categoryName)
									<option name="{{$categoryName}}" value="{{$id}}">{{$categoryName}}</option>
								@endforeach
							</select>
						</div>
	
						<div class="text-center">
							{{Form::submit('Submit', ['class' => 'btn btn-success'])}}
						</div>
					{!! Form::close() !!}
				
		</div>

		<footer class="row text-center">
			@include('includes.footer')
		</footer>
		</div>
	</body>
</html>