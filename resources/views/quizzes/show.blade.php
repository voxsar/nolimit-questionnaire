@extends('layouts.client')
@push('title')
	{{$quiz->name}}
@endpush
@push('breadcrumbs')
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.index')}}">Appraisals</a></li>
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.show', $quiz)}}">{{$quiz->name}}</a></li>
@endpush
@section('page')
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
	<div class="row">
		<div class="col-md-12">
			<h4>Performance Rating Definitions:</h4>
		</div>
	</div>
	@forelse($quiz->choices->groupBy('section') as $key => $sections)
		<div class="row">
			<div class="col-md-12">
				<h5>Rating Definitions for {{$key}}</h5>
				<table class="table">
					<tr>
						<th>Score</th>
						<th>Rating Scale</th>
						<th>Definition</th>
					</tr>
					@forelse($sections as $choice)
						<tr>
							<td>{{$choice->rating_value}}</td>
							<td>{{$choice->choice}}</td>
							<td>{!!$choice->definition!!}</td>
						</tr>
					@empty
					@endforelse
				</table>
			</div>
		</div>
	@empty
	@endforelse
	<div class="row mt-2">
		<div class="col-md-12">
			<h5>Section Scores:</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<table class="table">
				<tr>
					<th>Sections</th>
					<th>Total</th>
				</tr>
				@forelse($table->unique('score') as $row)
					<tr>
						<td>{{$row['score']}}</td>
						<td>{{$row['total']}}</td>
					</tr>
				@empty
				@endforelse
				<tr>
					<th>Total Score</th>
					<th>{{$table->unique('score')->sum('total')}}</th>
				</tr>
				<tr>
					<th>Total in %</th>
					<th>{{$table->unique('score')->sum('total')}}</th>
				</tr>

			</table>
		</div>
	</div>
</div>
@endsection