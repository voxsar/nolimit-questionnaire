@extends('layouts.client')
@push('title')
	All Quizes
@endpush
@push('breadcrumbs')
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.index')}}">Quizes</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('quizzes.index')}}">List</a></li>
@endpush
@section('page')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<tr>
					<th>Name</th>
					<th>Actions</th>
				</tr>
				@forelse($quizzes as $quiz)
					<tr>
						<td>{{$quiz->name}}</td>
						<td>
							<a class="btn btn-success" href="{{route('quizzes.show', $quiz)}}">View Quiz</a>
							<a class="btn btn-primary" href="{{route('quizzes.edit', $quiz)}}">Edit Quiz</a>
							<a class="btn btn-danger" href="{{route('quizzes.show', $quiz)}}">Delete Quiz</a>
							<a class="btn btn-primary" href="{{route('quizzes.questions.index', $quiz)}}">View Questions</a>
							<a class="btn btn-primary" href="{{route('quizzes.questions.create', $quiz)}}">Add Questions</a>
						</td>
					</tr>
				@empty
				@endforelse
			</table>
		</div>
	</div>
</div>
@endsection