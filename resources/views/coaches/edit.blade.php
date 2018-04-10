<!DOCTYPE html>
<html>
<head>
    <title>ТРЕНЕРА</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('coaches') }}">ТРЕНЕРА</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('coaches') }}">ПОКАЗАТИ ДАНІ ПРО ВСІХ ТРЕНЕРІВ</a></li>
        <li><a href="{{ URL::to('coaches/create') }}">ДОДАТИ ДАНІ ПРО НОВОГО ТРЕНЕРА</a>
    </ul>
</nav>

<h1>ЗМІНИТИ ДАНІ ПРО ТРЕНЕРА {{ $coach->name_coach }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($coach, array('route' => array('coaches.update', $coach->numb_coach), 'method' => 'PUT')) }}

<div class="form-group">
    {{ Form::label('ps_code', 'КОД ПАСПОРТУ') }}
    {{ Form::text('ps_code', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('surnm_coach', 'ПРІЗВИЩЕ') }}
    {{ Form::text('surnm_coach',null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('name_coach', 'ІМЯ') }}
    {{ Form::text('name_coach', null, array('class' => 'form-control'))  }}
</div>

<div class="form-group">
    {{ Form::label('lastnm_coach', 'ПО БАТЬКОВІ') }}
    {{ Form::text('lastnm_coach',  null, array('class' => 'form-control'))  }}
</div>

<div class="form-group">
    {{ Form::label('birth_date', 'ДАТА НАРОДЖЕННЯ') }}
    {{ Form::text('birth_date',  null, array('class' => 'form-control'))  }}
</div>

<div class="form-group">
    {{ Form::label('sport_category', 'СПОРТИВНА КАТЕГОРІЯ (не обовязково вказувати)') }}
    {{ Form::text('sport_category',  null, array('class' => 'form-control'))  }}
</div>

<div class="form-group">
    {{ Form::label('СТАТЬ', 'gender coach') }}
    {{ Form::text('gender_coach',  null, array('class' => 'form-control'))  }}
</div>

    {{ Form::submit('ДАНІ ПРО ТРЕНЕРА ЗМІНЕНО!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
