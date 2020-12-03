@extends('layouts.client')
@push('title')
	{{$quiz->name}}
@endpush
@push('breadcrumbs')
@endpush
@section('page')
<form action="{{route('quizzes.store')}}" method="post">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				{!! $quiz->purpose !!}
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-12">
				{!! $quiz->instructions !!}
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-12">
				<a href="{{route('quizzes.section', [$quiz, $next])}}">Next Section</a>
			</div>
		</div>
	</div>
</form>
@endsection