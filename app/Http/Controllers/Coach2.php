<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coach;
use View;
use Illuminate\Html\HtmlFacade;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class Coach2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $coaches =Coach::all();

      // load the view and pass the nerds
      return View::make('coaches.index')
          ->with('coaches', $coaches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('coaches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store()
        {
            $rules = array(
                'ps_code'       => 'required',
                'surnm_coach'      => 'required',
                'name_coach' => 'required',
                'lastnm_coach'=>'required',
                'birth_date'=>'required',
                'sport_category'=>'',
                'gender_coach'=>'required'
            );
            $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails()) {
                return Redirect::to('coaches/create')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
            } else {
                $coach = new Coach;
                $coach->ps_code       = Input::get('ps_code');
                $coach->surnm_coach     = Input::get('surnm_coach');
                $coach->name_coach = Input::get('name_coach');
                $coach->lastnm_coach      = Input::get('lastnm_coach');
                $coach->birth_date     = Input::get('birth_date');
                $coach->sport_category = Input::get('sport_category');
                $coach->gender_coach      = Input::get('gender_coach');
                $coach->save();
                Session::flash('message', 'ДАНІ ПРО НОВОГО ТРЕНЕРА ДОДАНО!');
                return Redirect::to('coaches');
            }
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($numb_coach)
    {
      // get the nerd
      $coach = Coach::find($numb_coach);

      // show the view and pass the nerd to it
      return View::make('coaches.show')
          ->with('coach', $coach);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($numb_coach)
    {
      $coach = Coach::find($numb_coach);

      // show the edit form and pass the nerd
      return View::make('coaches.edit')
          ->with('coach', $coach);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $numb_coach)
    {
      $rules = array(
        'ps_code'       => 'required',
        'surnm_coach'      => 'required',
        'name_coach' => 'required',
        'lastnm_coach'=>'required',
        'birth_date'=>'required',
        'sport_category'=>'',
        'gender_coach'=>'required'
      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('coaches/' . $numb_coach . '/edit')
              ->withErrors($validator)
              ->withInput(Input::except('password'));
      } else {
          // store
          $coach = Coach::find($numb_coach);
          $coach->ps_code       = Input::get('ps_code');
          $coach->surnm_coach     = Input::get('surnm_coach');
          $coach->name_coach = Input::get('name_coach');
          $coach->lastnm_coach      = Input::get('lastnm_coach');
          $coach->birth_date     = Input::get('birth_date');
          $coach->sport_category = Input::get('sport_category');
          $coach->gender_coach      = Input::get('gender_coach');
          $coach->save();

          // redirect
          Session::flash('message', 'ДАНІ ПРО ТРЕНЕРА ОНОВЛЕНО!');
          return Redirect::to('coaches');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($numb_coach)
      {
          // delete
          $coach = Coach::find($numb_coach);
          $coach->delete();

          // redirect
          Session::flash('message', 'ДАНІ ПРО ТРЕНЕРА ВИДАЛЕНО!');
          return Redirect::to('coaches');
      }
}
