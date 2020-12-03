@extends('layouts.client')
@push('title')
	All Choices
@endpush
@push('breadcrumbs')
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.index')}}">Appraisals</a></li>
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.show', $quiz)}}">{{$quiz->name}}</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('quizzes.choices.index', $quiz)}}">Choices</a></li>
@endpush
@section('page')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<tr>
					<th>Choice</th>
					<th>Rating Value</th>
					<th>Section</th>
					<th>Actions</th>
				</tr>
				@forelse($choices as $choice)
					<tr>
						<td>{{$choice->choice}}</td>
						<td>{{$choice->rating_value}}</td>
						<td>{{$choice->section}}</td>
						<td>
							<a class="btn btn-success" href="{{route('quizzes.choices.show', [$quiz, $choice])}}">View Choice</a>
							<a class="btn btn-primary" href="{{route('quizzes.choices.edit', [$quiz, $choice])}}">Edit Choice</a>
							<a class="btn btn-danger" href="{{route('quizzes.choices.show', [$quiz, $choice])}}">Delete Choice</a>
						</td>
					</tr>
				@empty
				@endforelse
			</table>
		</div>
	</div>
</div>
@endsection