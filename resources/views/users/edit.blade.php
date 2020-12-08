@extends('layouts.client')
@push('title')
	New User
@endpush
@push('breadcrumbs')
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('users.index')}}">Users</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('users.create')}}">Create</a></li>
@endpush
@section('page')
<form action="{{route('users.update', $user)}}" method="post">
	@csrf
	@method('PATCH')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<x-input name="name" value="{{$user->name}}" help="Name of the employee" label="Name" />
			</div>
			<div class="col-md-6">
				<x-input name="department" value="{{$user->department}}" help="Name of the department" label="Department Name" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<x-input name="emp_no" value="{{$user->emp_no}}" help="Employee no" label="Employee No" />
			</div>
			<div class="col-md-6">
				<x-input name="designation" value="{{$user->designation}}" help="Designation of the Employee" label="Designation" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<x-input name="service_period" value="{{$user->service_period}}" help="Service Period" label="Service Period" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<input type="submit" value="Update User" class="btn btn-success">
			</div>
		</div>
	</div>
</form>
@endsection