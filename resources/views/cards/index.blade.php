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
          <li><a href="{{ URL::to('cards/create') }}">ДОДАТИ ДАНІ ПРО КЛУБНУ КАРТУ</a>
      </ul>
  </nav>

  <h1>ВСІ КЛУБНІ КАРТИ</h1>

  <!-- will be used to show any messages -->
  @if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
  @endif

  <table class="table table-striped table-bordered">
      <thead>
          <tr>
              <td>НОМЕР КАРТИ</td>
              <td>ВАРТЫСТЬ КАРТИ</td>
              <td>ДАТА ПОЧАТКУ ДІЇ</td>
              <td>ДАТА ЗАКІНЧЕННЯ ДІЇ</td>
              <td>ПАСПОРТ КЛІЄНТА - ВЛАСНИКА КАРТКИ</td>
          </tr>
      </thead>
      <tbody>
      @foreach($cards as $key => $value)
          <tr>
              <td>{{ $value->clubcard_number}}</td>
              <td>{{ $value->price_clubcard}}</td>
              <td>{{ $value->start_date}}</td>
              <td>{{ $value->finish_date}}</td>
              <td>{{$value->fkclntid}}</td>
              <td></td>
              <td>
                {{ Form::open(array('url' => 'cards/' . $value->numb_clubcard, 'class' => 'pull-right')) }}
                                  {{ Form::hidden('_method', 'DELETE') }}
                                  {{ Form::submit('ВИДАЛИТИ ДАНІ', array('class' => 'btn btn-warning')) }}
                              {{ Form::close() }}
                  <a class="btn btn-small btn-success" href="{{ URL::to('cards/' . $value->numb_clubcard) }}">ПЕРЕГЛЯД</a>
              </td>
          </tr>
      @endforeach
      </tbody>
  </table>
</div>
</body>
</html>
