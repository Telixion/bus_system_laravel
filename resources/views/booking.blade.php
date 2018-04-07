@extends('layouts.app')

@section('content')
<section class="booking">
		<div class="container">
		<h1>Booku Youru Ticket Now!</h1>
			<form action="store" method="POST">
			<fieldset>
			<span>Name: </span><input type="text" name="name">
			<div class="spacer" style="height: 2em;"></div>
			<legend>Choose Trip</legend>
				<p>
				<label>To:</label>
				<select id = "myList" name="destination">
					<option value = "#"></option>
					<option value = "Seri Iskandar">Seri Iskandar</option>
					<option value = "Tronoh">Tronoh</option>
					<option value = "Ipoh">Ipoh</option>
					<option value = "Manjung">Manjung</option>
					<option value = "Bota Kiri">Bota Kiri</option>
					<option value = "Batu Gajah">Batu Gajah</option>
				</select>
				</p>
			</fieldset>
			<fieldset>
		<legend>When?</legend>
			<p>
			<label>Date:</label>
				<select id = "myList" name="date" >
					<option value = "#"></option>
					<option value = "23/3/2018">23/3/2018</option>
					<option value = "5/2/2018">5/2/2018</option>
					<option value = "30/4/2018">30/4/2018</option>
					<option value = "29/3/2018">29/3/2018</option>
					<option value = "15/3/2018">15/3/2018</option>
					<option value = "16/3/2018">16/3/2018</option>
				</select>
			</p>
			<p>
			<label>Time:</label>
				<select id = "myList" name="time">
					<option value = "#"></option>
					<option value = "8:00am">8:00am</option>
					<option value = "10:00am">10:00am</option>
					<option value = "11:30am">11:30am</option>
					<option value = "2:00pm">2:00pm</option>
					<option value = "4:00pm">4:00pm</option>
					<option value = "6:00pm">6:00pm</option>
				</select>
			</p>
		</fieldset>
		<fieldset>
			<legend>Price</legend>
				<p>
				<label>MYR 42</label>
				</p>
		</fieldset>
		<fieldset>
		<button>Submit</button>
		<button>Reset</button>
	</fieldset>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
	</div>
</section>
@endsection
