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
          <li><a href="{{ URL::to('coaches/create') }}">ДОДАТИ ДАНІ ПРО ТРЕНЕРА</a>
      </ul>
  </nav>

  <h1>ВСІ ТРЕНЕРА</h1>

  <!-- will be used to show any messages -->
  @if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
  @endif

  <table class="table table-striped table-bordered">
      <thead>
          <tr>
              <td>КОД ПАСПОРТУ</td>
              <td>ПРІЗВИЩЕ</td>
              <td>ІМЯ</td>
              <td>ПО БАТЬКОВІ</td>
              <td>ДАТА НАРОДЖЕННЯ</td>
              <td>СПОРТИВНА КАТЕГОРІЯ</td>
              <td>СТАТЬ</td>
          </tr>
      </thead>
      <tbody>
      @foreach($coaches as $key => $value)
          <tr>
              <td>{{ $value->ps_code }}</td>
              <td>{{ $value->surnm_coach}}</td>
              <td>{{ $value->name_coach }}</td>
              <td>{{ $value->lastnm_coach }}</td>
              <td>{{$value ->birth_date}}</td>
              <td>{{$value->sport_category}}</td>
              <td>{{$value->gender_coach}}</td>

              <!-- we will also add show, edit, and delete buttons -->
              <td>
                {{ Form::open(array('url' => 'coaches/' . $value->numb_coach, 'class' => 'pull-right')) }}
                                  {{ Form::hidden('_method', 'DELETE') }}
                                  {{ Form::submit('ВИДАЛИТИ ДАНІ', array('class' => 'btn btn-warning')) }}
                              {{ Form::close() }}
                  <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                  <!-- we will add this later since its a little more complicated than the other two buttons -->

                  <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                  <a class="btn btn-small btn-success" href="{{ URL::to('coaches/' . $value->numb_coach) }}">ПЕРЕГЛЯД</a>

                  <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                  <a class="btn btn-small btn-info" href="{{ URL::to('coaches/' . $value->numb_coach . '/edit') }}">ЗМІНИТИ ДАНІ</a>

              </td>
          </tr>
      @endforeach
      </tbody>
  </table>
</div>
</body>
</html>
