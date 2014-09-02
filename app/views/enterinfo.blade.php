<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generate Sample Storage Form</title>
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/bootstrap-theme.css') }}
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:700);
        body {
            margin: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center">Sample Storage Form</h2>
    
    {{ Form::open(array('action' => 'HomeController@generatePDF')) }}

    <div class="form-horizontal">
        <div class="form-group">
            {{ Form::label('emp_name', 'Employee Name', array('class' => 'col-sm-4 control-label')) }}
            <div class="col-sm-4">
                {{ Form::text('emp_name', '', array('id' => 'emp_name', 'class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('emp_phone', 'Employee Phone Number', array('class' => 'col-sm-4 control-label')) }}
            <div class="col-sm-4">
                {{ Form::text('emp_phone', '', array('id' => 'emp_phone', 'class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('sales_team', 'Sales Team', array('class' => 'col-sm-4 control-label')) }}
            <div class="col-sm-4">
                {{ Form::text('sales_team', '', array('id' => 'sales_team', 'class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('territory_number', 'Territory Number', array('class' => 'col-sm-4 control-label')) }}
            <div class="col-sm-4">
                {{ Form::text('territory_number', '', array('id' => 'territory_number', 'class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('storage_unit_name', 'Storage Unit Name', array('class' => 'col-sm-4 control-label')) }}
            <div class="col-sm-4">
                {{ Form::text('storage_unit_name', '', array('id' => 'storage_unit_name', 'class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('storage_address', 'Storage Address', array('class' => 'col-sm-4 control-label')) }}
            <div class="col-sm-4">
                {{ Form::text('storage_address', '', array('id' => 'storage_address', 'class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('storage_city', 'Storage City', array('class' => 'col-sm-4 control-label')) }}
            <div class="col-sm-4">
                {{ Form::text('storage_city', '', array('id' => 'storage_city', 'class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('storage_state', 'Storage State', array('class' => 'col-sm-4 control-label')) }}
            <div class="col-sm-4">
                {{ Form::text('storage_state', '', array('id' => 'storage_state', 'class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('storage_phone', 'Storage Phone #', array('class' => 'col-sm-4 control-label')) }}
            <div class="col-sm-4">
                {{ Form::text('storage_phone', '', array('id' => 'storage_phone', 'class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
            {{ Form::submit('Generate PDF', array('class' => 'btn btn-success')) }}
            </div>
        </div>
    </div> <!-- form-horizontal -->
    {{ Form::close() }}
</div> <!-- .container -->

{{ HTML::script('js/jquery.js') }} 
{{ HTML::script('js/bootstrap.js') }}
</body>
</html>