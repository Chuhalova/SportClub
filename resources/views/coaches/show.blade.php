
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

<h1>ПЕРЕГЛЯД ДАНИХ ПРО ТРЕНЕРА ПО ПРІЗВИЩУ {{ $coach->name_coach }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $coach->name_coach }}</h2>
        <p>
            <strong>КОД ПАСПОРТУ :</strong> {{ $coach->ps_code }}<br>
            <strong>ПРІЗВИЩЕ :</strong> {{ $coach->surnm_coach }}<br>
            <strong>ІМЯ :</strong>{{$coach->name_coach}}<br>
            <strong>ПО БАТЬКОВІ :</strong>{{$coach->lastnm_coach}}<br>
            <strong>ДАТА НАРОДЖЕННЯ :</strong>{{$coach->birth_date}}<br>
            <strong>СПОРТИВНА КАТЕГОРІЯ :</strong>{{$coach->sport_category}}<br>
            <strong>СТАТЬ :</strong>{{$coach->gender_coach}}
        </p>
    </div>

</div>
