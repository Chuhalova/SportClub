
<!DOCTYPE html>
<html>
<head>
    <title>КЛУБНІ КАРТИ</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('cards') }}">КЛУБНІ КАРТИ</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('cards') }}">ПОКАЗАТИ ДАНІ ПРО ВСІ КЛУБНІ КАРТИ</a></li>
        <li><a href="{{ URL::to('cards/create') }}">ДОДАТИ ДАНІ ПРО НОВУ КЛУБНУ КАРТУ</a>
    </ul>
</nav>
<h1>ДОДАТИ ДАНІ ПРО НОВУ КЛУБНУ КАРТУ</h1>
{{Html::ul($errors->all()) }}
{{ Form::open(array('url' => 'cards')) }}
    <div class="form-group">
        {{ Form::label('clubcard_number', 'НОМЕР КАРТИ') }}
        {{ Form::text('clubcard_number', Input::old('clubcard_number'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('price_clubcard', 'ВАРТІСТЬ КАРТИ') }}
        {{ Form::text('price_clubcard', Input::old('price_clubcard'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('start_date', 'ДАТА ПОЧАТКУ ДІЇ') }}
        {{ Form::date('start_date', Input::old('start_date'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('finish_date', 'ДАТА ЗАКІНЧЕННЯ ДІЇ') }}
        {{ Form::date('finish_date', Input::old('finish_date'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('fkclntid', 'КОД ПАСПОРТУ КЛІЄНТА - ВЛАСНИКА КАРТКИ') }}
        {{ Form::text('fkclntid', Input::old('fkclntid'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('ДОДАНО ДАНІ ПРО НОВУ КЛУБНУ КАРТУ!', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}
</div>
</body>
</html>
