<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showForm()
	{
		return View::make('enterinfo');
	}
	public function generatePDF()
	{
		$emp_name = Input::get('emp_name');
		$emp_phone = Input::get('emp_phone');
		$sales_team = Input::get('sales_team');
		$territory_number = Input::get('territory_number');
		$storage_unit_name = Input::get('storage_unit_name');
		$storage_address = Input::get('storage_address');
		$storage_city = Input::get('storage_city');
		$storage_state = Input::get('storage_state');
		$storage_phone = Input::get('storage_phone');
		$html = 
		'<html><head>
		<title></title>
		<style>
		body {
			font-family: Helvetica, sans-serif;
			font-size: 12pt;
		}
		img { width: 100px; }
		table { width: 100%; }
		td { width: 250px; }
		.container {
			width: 800px;
			/*text-align: center;*/
			margin: 0 auto;
		}
		.fine-print {
			font-size: .5em;
			width: 500px;
			margin: 10px;
		}
		</style>
		</head>
		<body>
		<div class="container">
			<img src="images/APS_logo.png"/>
			<h3>Sample Storage Location Identification Form</h3>
			<div class="fine-print">
	        	Instructions: Please print. Enter all information required in the spaces below. Clearly identify the location(s) where you intend to store product samples. Be as specific as possible. Include name of storage facility, unit number, and phone number of storage facility.
	        </div>
	        <table>
		        <tr><td>Employee Name: '.$emp_name.'</td><td>Employee Phone Number: '.$emp_phone.'</td></tr>
		        <tr><td>Sales Team: '.$sales_team.'</td><td>Territory Number: '.$territory_number.'</td></tr>
        	</table>
        	<br>
        	<h3>Sample Storage Location Information</h3>
        	<table>
		        <tr><td colspan="2">Storage Unit Name: '.$storage_unit_name.'</td></tr>
		        <tr><td>Address: '.$storage_address.'</td><td>Unit Number: </td></tr>
		        <tr><td>City: '.$storage_city.'</td><td>State: '.$storage_state.'</td></tr>
		        <tr><td colspan="2">Phone Number: '.$storage_phone.'</td></tr>
        	</table>
		</div>
		</body></html>';
		return PDF::load($html, 'A4', 'portrait')->show();
	}

}
