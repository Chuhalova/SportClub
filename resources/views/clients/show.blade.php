
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

<h1>ПЕРЕГЛЯД ДАНИХ ПРО КЛІЄНТА ПО ПРІЗВИЩУ {{ $client->name_client }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $client->name_client }}</h2>
        <p>
            <strong>КОД ПАСПОРТУ :</strong> {{ $client->ps_code }}<br>
            <strong>ПРІЗВИЩЕ :</strong> {{ $client->surnm_client }}<br>
            <strong>ІМЯ :</strong>{{$client->name_client}}<br>
            <strong>ПО БАТЬКОВІ :</strong>{{$client->lastnm_client}}<br>
            <strong>ДАТА НАРОДЖЕННЯ :</strong>{{$client->birth_date}}<br>
            <button class="btn" type="button" name="button" onclick="show()">ДІЗНАТИСЬ ВІК</button>
            <div id='shower' style='opacity:0'><strong>ВІК:</strong>{{$client->getAge()}}</div>
        </p>
    </div>

</div>
<script type="text/javascript">
  function show(){
    var x = document.getElementById("shower");
    if (x.style.opacity === "0") {
        x.style.opacity = "1";
    } else {
        x.style.opacity = "0";
    }
  }
</script>
