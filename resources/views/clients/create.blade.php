
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
<h1>ДОДАТИ ДАНІ ПРО НОВОГО КЛІЄНТА</h1>
<!-- if there are creation errors, they will show here -->
{{Html::ul($errors->all()) }}
{{ Form::open(array('url' => 'clients')) }}
    <div class="form-group">
        {{ Form::label('ps_code', 'КОД ПАСПОРТУ') }}
        {{ Form::text('ps_code', Input::old('ps_code'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('surnm_client', 'ПРІЗВИЩЕ') }}
        {{ Form::text('surnm_client', Input::old('surnm_client'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name_client', 'ІМЯ') }}
        {{ Form::text('name_client',  Input::old('surnm_client'), array('class' => 'form-control'))  }}
    </div>

    <div class="form-group">
        {{ Form::label('lastnm_client', 'ПО БАТЬКОВІ') }}
        {{ Form::text('lastnm_client',  Input::old('lastnm_client'), array('class' => 'form-control'))  }}
    </div>

    <div class="form-group">
        {{ Form::label('birth_date', 'ДАТА НАРОДЖЕННЯ') }}
        {{ Form::text('birth_date',  Input::old('birth_date'), array('class' => 'form-control'))  }}
    </div>
    {{ Form::submit('ДОДАНО ДАНІ ПРО НОВОГО КЛІЄНТА!', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}
</div>
</body>
</html>
