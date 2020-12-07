@extends('layouts.client')
@push('title')
	All Appraisals
@endpush
@push('breadcrumbs')
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.index')}}">Appraisals</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('quizzes.index')}}">List</a></li>
@endpush
@section('page')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<tr>
					<th>Name</th>
					<th colspan="3">Actions</th>
				</tr>
				@forelse($quizzes as $quiz)
					<tr>
						<td>{{$quiz->name}}</td>
						<td>
							<a class="btn btn-success btn-block" href="{{route('quizzes.show', $quiz)}}">View Appraisal</a>
							<a class="btn btn-primary btn-block" href="{{route('quizzes.edit', $quiz)}}">Edit Appraisal</a>
							<a class="btn btn-danger btn-block" href="{{route('quizzes.show', $quiz)}}">Delete Appraisal</a>
						</td>
						<td>
							<a class="btn btn-success btn-block" href="{{route('quizzes.questions.index', $quiz)}}">View Questions</a>
							<a class="btn btn-warning btn-block" href="{{route('quizzes.questions.create', $quiz)}}">Add Questions</a>
						</td>
						<td>
							<a class="btn btn-success btn-block" href="{{route('quizzes.choices.index', $quiz)}}">View Choices</a>
							<a class="btn btn-warning btn-block" href="{{route('quizzes.choices.create', $quiz)}}">Add Choices</a>
						</td>
					</tr>
					<tr >
						<td class="border-top-0" >Individual Appraisal Link for {{$quiz->name}}</td>
						<td class="border-top-0" colspan="3">
							<input class="form-control" type="text" name="no" value="{{route("quizzes.user", $quiz)}}" />
						</td>
					</tr>
				@empty
				@endforelse
			</table>
		</div>
	</div>
</div>
@endsection