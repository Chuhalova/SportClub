
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
<h1>ДОДАТИ ДАНІ ПРО НОВОГО ТРЕНЕРА</h1>
<!-- if there are creation errors, they will show here -->
{{Html::ul($errors->all()) }}
{{ Form::open(array('url' => 'coaches')) }}
    <div class="form-group">
        {{ Form::label('ps_code', 'КОД ПАСПОРТУ') }}
        {{ Form::text('ps_code', Input::old('ps_code'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('surnm_coach', 'ПРІЗВИЩЕ') }}
        {{ Form::text('surnm_coach', Input::old('surnm_coach'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name_coach', 'ІМЯ') }}
        {{ Form::text('name_coach',  Input::old('surnm_coach'), array('class' => 'form-control'))  }}
    </div>

    <div class="form-group">
        {{ Form::label('lastnm_coach', 'ПО БАТЬКОВІ') }}
        {{ Form::text('lastnm_coach',  Input::old('lastnm_coach'), array('class' => 'form-control'))  }}
    </div>

    <div class="form-group">
        {{ Form::label('birth_date', 'ДАТА НАРОДЖЕННЯ') }}
        {{ Form::text('birth_date',  Input::old('birth_date'), array('class' => 'form-control'))  }}
    </div>

    <div class="form-group">
        {{ Form::label('sport_category', 'СПОРТИВНА КАТЕГОРІЯ (не обовязково вказувати)') }}
        {{ Form::text('sport_category',  Input::old('sport_category'), array('class' => 'form-control'))  }}
    </div>

    <div class="form-group">
        {{ Form::label('gender_coach', 'СТАТЬ') }}
        {{ Form::text('gender_coach',  Input::old('gender_coach'), array('class' => 'form-control'))  }}
    </div>

    {{ Form::submit('ДОДАНО ДАНІ ПРО НОВОГО ТРЕНЕРА!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
