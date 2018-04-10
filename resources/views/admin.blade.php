@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Спортклуб "Сила"</div>

                <div class="card-body">
                    @component('components.who')
                    @endcomponent
                    <p>Код паспорту - {{Request::user()->passport_code}}</p>
                    <p>Прізвище - {{Request::user()->surnm_admin}}</p>
                    <p>Імя - {{Request::user()->name}}</p>
                    <p>По батькові  - {{Request::user()->lastnm_admin}}</p>
                    <p>Дата народження - {{Request::user()->birth_date}}</p>
                    <p>Освіта - {{Request::user()->srudying}}</p>
                    <p>Зарплатня - {{Request::user()->salary}}</p>
                    <p>Код залу над яким здійснюється кервництво - {{Request::user()->fkclbid}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
