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
<section id="admin">
	<div class="container">
		<h1 class="text-center">Bus Schedule</h1>
		<table>
			<tr>
				<th>Destination</th>
				<th>No. Plate</th>
				<th>Time</th>
				<th>Date</th>
			</tr>
			@foreach($users as $row)
			<tr>
				<td>{{ $row -> destination }}</td>
				<td>{{ $row -> plate }}</td>
				<td>{{ $row -> time }}</td>
				<td>{{ $row -> date }}</td>
			</tr>
			@endforeach
		</table>
		</br>
		<form action="store1" method="POST">	
		<div class="row">
			<div class="col-sm-3">
			<label>Destination:</label>
				<select id = "myList" name="destination">
					<option value = ""></option>
					<option value = "Seri Iskandar">Seri Iskandar</option>
					<option value = "Tronoh">Tronoh</option>
					<option value = "Ipoh">Ipoh</option>
					<option value = "Manjung">Manjung</option>
					<option value = "Bota Kiri">Bota Kiri</option>
					<option value = "Batu Gajah">Batu Gajah</option>
				</select>
			</div>
			<div class="col-sm-3">
			<label>Plate No:</label>
				<select id = "myList" name="plate">
					<option value = ""></option>
					<option value = "JAA 3243">JAA 3243</option>
					<option value = "WRG 8694">WRG 8694</option>
					<option value = "AEQ 5433">AEQ 5433</option>
					<option value = "FAR 6900">FAR 6900</option>
					<option value = "ARS 4248">ARS 4248</option>
					<option value = "MOO 7263">MOO 7263</option>
				</select>
			</div>
			<div class="col-sm-3">
			<label>Date:</label>
				<select id = "myList" name="date">
					<option value = ""></option>
					<option value = "23/3/2018">23/3/2018</option>
					<option value = "5/2/2018">5/2/2018</option>
					<option value = "30/4/2018">30/4/2018</option>
					<option value = "29/3/2018">29/3/2018</option>
					<option value = "15/3/2018">15/3/2018</option>
					<option value = "16/3/2018">16/3/2018</option>
				</select>
			</div>
			<div class="col-sm-2">
			<label>Time:</label>
				<select id = "myList" name="time">
					<option value = ""></option>
					<option value = "8:00am">8:00am</option>
					<option value = "10:00am">10:00am</option>
					<option value = "11:30am">11:30am</option>
					<option value = "2:00pm">2:00pm</option>
					<option value = "4:00pm">4:00pm</option>
					<option value = "6:00pm">6:00pm</option>
				</select>
			</div>
			</div>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<button>Add</button>
		</form>
		
		</br>
		</div>
		<div class="row">
		<div class="col-sm-9">
		</div>
		<div class="col-sm-2">
			
			{{-- <button>Reset</button>
			<button>Delete</button> --}}</div>
		</div>
		<div class="row"></br>
		</div>
		

		<fieldset style="text-align: center">
		<a href="{{url('bookingTable')}}">view booking</a>
			
		</fieldset>
	</div>
</section>

@endsection