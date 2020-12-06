@extends('layouts.client')
@push('title')
	User's Appraisals
@endpush
@push('breadcrumbs')
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('users.index')}}">Users</a></li>
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('users.show', $user)}}">{{$user->name}}</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('users.quizzes.index', $user)}}">Appraisals</a></li>
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
							<a class="btn btn-success" href="{{route('users.quizzes.show', [$user, $quiz])}}">Fill Appraisal</a>
						</td>
					</tr>
				@empty
				@endforelse
			</table>
		</div>
	</div>
</div>
@endsection