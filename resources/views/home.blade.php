@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Головна</div>
<p>Ви увійшли  {{ $user->name }} </p>
                <div class="card-body">
                  @component('components.who')
                  @endcomponent
                  <p>Код паспорту - {{Request::user()->ps_code}}</p>
                  <p>Прізвище - {{Request::user()->surnm_coach}}</p>
                  <p>Імя - {{Request::user()->name}}</p>
                  <p>По батькові  - {{Request::user()->lastnm_coach}}</p>
                  <p>Дата народження - {{Request::user()->birth_date}}</p>
                  <p>Спортивна категорія - {{Request::user()->sport_category}}</p>
                  <p>Стать - {{Request::user()->gender_coach}}</p>
                  <p>Код залу, в якому працює - {{Request::user()->fkclbid}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
