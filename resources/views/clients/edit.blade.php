<!DOCTYPE html>
<html>
<head>
    <title>КЛІЄНТИ</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('clients') }}">КЛІЄНТИ</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('clients') }}">ПОКАЗАТИ ДАНІ ПРО ВСІХ КЛІЄНТІВ</a></li>
        <li><a href="{{ URL::to('clients/create') }}">ДОДАТИ ДАНІ ПРО НОВОГО КЛІЄНТА</a>
    </ul>
</nav>

<h1>ЗМІНИТИ ДАНІ ПРО КЛІЄНТА {{ $client->name_client }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($client, array('route' => array('clients.update', $client->numb_client), 'method' => 'PUT')) }}

<div class="form-group">
    {{ Form::label('ps_code', 'КОД ПАСПОРТУ') }}
    {{ Form::text('ps_code', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('surnm_client', 'ПРІЗВИЩЕ') }}
    {{ Form::text('surnm_client',null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('name_client', 'ІМЯ') }}
    {{ Form::text('name_client', null, array('class' => 'form-control'))  }}
</div>

<div class="form-group">
    {{ Form::label('lastnm_client', 'ПО БАТЬКОВІ') }}
    {{ Form::text('lastnm_client',  null, array('class' => 'form-control'))  }}
</div>

<div class="form-group">
    {{ Form::label('birth_date', 'ДАТА НАРОДЖЕННЯ') }}
    {{ Form::text('birth_date',  null, array('class' => 'form-control'))  }}
</div>

    {{ Form::submit('ДАНІ ПРО КЛІЄНТА ЗМІНЕНО!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
