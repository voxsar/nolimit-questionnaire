@extends('layouts.client')
@push('title')
	New User
@endpush
@push('breadcrumbs')
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('users.index')}}">Users</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('users.create')}}">Create</a></li>
@endpush
@section('page')
<form action="{{route('users.store')}}" method="post">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<x-input name="name" help="Name of the employee" label="Name" />
			</div>
			<div class="col-md-6">
				<x-input name="department" help="Name of the department" label="Department Name" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<x-input name="emp_no" help="Employee no" label="Employee No" />
			</div>
			<div class="col-md-6">
				<x-input name="designation" help="Designation of the Employee" label="Designation" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<input type="submit" value="Add User" class="btn btn-success">
			</div>
		</div>
	</div>
</form>
@endsection