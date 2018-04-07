@extends('layouts.app')
<style>
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	}
	
	td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
	}

	tr:nth-child(even) {
    background-color: #dddddd;
	}
</style>
@section('content')
<div class="container">
			<legend></legend>
			<h1 class="text-center">Customer Booking</h1>
			<table>
			<tr>
				<th>Name</th>
				<th>Destination</th>
				<th>Time</th>
				<th>Date</th>
			</tr>
			@foreach($users as $row)
			<tr>
				<td>{{ $row -> name }}</td>
				<td>{{ $row -> destination }}</td>
				<td>{{ $row -> time }}</td>
				<td>{{ $row -> date }}</td>
			</tr>
			@endforeach
			</table>
			<a href="{{url('admin')}}">back</a>
		</div>
@endsection