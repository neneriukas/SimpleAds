<div class="row pull-right">
	@if (Auth::check())
		@include('includes.logged')
	@else
		@include('includes.login')
	@endif
</div>