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
					<th>Controls</th>
				</tr>
				@forelse($quizzes as $quiz)
					<tr>
						<td>{{$quiz->name}}</td>
						<td>
							@if($quiz->answers()->where('user_id', $user->id)->exists())
								<a class="btn btn-warning" href="{{route('users.quizzes.edit', [$user, $quiz])}}">Edit Appraisal</a>
							@else
								<a class="btn btn-success" href="{{route('users.quizzes.show', [$user, $quiz])}}">Fill Appraisal</a>
							@endif
						</td>
						<td>
							<a class="btn btn-success" href="{{route('users.quizzes.print', [$user, $quiz])}}">Print</a>
						</td>
					</tr>
				@empty
				@endforelse
			</table>
		</div>
	</div>
</div>
@endsection