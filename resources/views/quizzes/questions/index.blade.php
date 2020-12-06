@extends('layouts.client')
@push('title')
	All Questions
@endpush
@push('breadcrumbs')
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.index')}}">Appraisals</a></li>
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.show', $quiz)}}">{{$quiz->name}}</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('quizzes.questions.index', $quiz)}}">Questions</a></li>
@endpush
@section('page')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<tr>
					<th>Name</th>
					<th>Category</th>
					<th>Section</th>
					<th>Type</th>
					<th>Actions</th>
				</tr>
				@forelse($questions as $question)
					<tr>
						<td>{{$question->question}}</td>
						<td>{{$question->category}}</td>
						<td>{{$question->section}}</td>
						<td>{{$question->type}}</td>
						<td>
							<a class="btn btn-success" href="{{route('quizzes.questions.show', [$quiz, $question])}}">View Question</a>
							<a class="btn btn-primary" href="{{route('quizzes.questions.edit', [$quiz, $question])}}">Edit Question</a>
							<a class="btn btn-danger" href="{{route('quizzes.questions.show', [$quiz, $question])}}">Delete Question</a>
						</td>
					</tr>
				@empty
				@endforelse
			</table>
		</div>
	</div>
</div>
@endsection