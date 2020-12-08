@extends('layouts.client')
@push('title')
	All Users
@endpush
@push('breadcrumbs')
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('users.index')}}">Users</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('users.index')}}">List</a></li>
@endpush
@section('page')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<tr>
					<th>Emp No</th>
					<th>Name</th>
					<th>Department</th>
					<th>Designation</th>
					<th>Service Date</th>
					<th>Actions</th>
				</tr>
				@forelse($users as $user)
					<tr>
						<td>{{$user->emp_no}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->department}}</td>
						<td>{{$user->designation}}</td>
						<td>{{$user->service_period}}</td>
						<td>
							<a class="btn btn-success btn-sm btn-block" href="{{route('users.show', $user)}}">View User</a>
							<a class="btn btn-primary btn-sm btn-block" href="{{route('users.edit', $user)}}">Edit User</a>
							<a class="btn btn-danger btn-sm btn-block" href="{{route('users.show', $user)}}">Delete User</a>
							<a class="btn btn-warning btn-sm btn-block" href="{{route('users.quizzes.index', $user)}}">Appraisals</a>
						</td>
					</tr>
				@empty
				@endforelse
			</table>
		</div>
	</div>
</div>
@endsection