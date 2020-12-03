@extends('layouts.client')
@push('title')
	All Choices
@endpush
@push('breadcrumbs')
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.index')}}">Quizes</a></li>
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.show', $quiz)}}">{{$quiz->name}}</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('quizzes.questions.index', $quiz)}}">Questions</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('quizzes.questions.show', [$quiz, $question])}}">{{$question->question}}</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('quizzes.questions.choices.index', [$quiz, $question])}}">Choices</a></li>
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
							<a class="btn btn-success" href="{{route('quizzes.questions.choices.show', [$quiz, $question, $choice])}}">View Choice</a>
							<a class="btn btn-primary" href="{{route('quizzes.questions.choices.edit', [$quiz, $question, $choice])}}">Edit Choice</a>
							<a class="btn btn-danger" href="{{route('quizzes.questions.choices.show', [$quiz, $question, $choice])}}">Delete Choice</a>
						</td>
					</tr>
				@empty
				@endforelse
			</table>
		</div>
	</div>
</div>
@endsection