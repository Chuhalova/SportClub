<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Client;
use View;
use Illuminate\Html\HtmlFacade;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clients = Client::all();
      // load the view and pass the nerds
      return View::make('clients.index')
          ->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return View::make('clients.create');
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
          'ps_code'=>'required',
          'surnm_client'=>'required',
          'name_client'=>'required',
          'lastnm_client'=>'required',
          'birth_date'=>'required'
      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('clients/create')
              ->withErrors($validator)
              ->withInput(Input::except('password'));
      } else {
          // store
          $client = new Client;
          $client->ps_code=Input::get('ps_code');
          $client->surnm_client=Input::get('surnm_client');
          $client->name_client = Input::get('name_client');
          $client->lastnm_client=Input::get('lastnm_client');
          $client->birth_date = Input::get('birth_date');
          $client->save();
          // redirect
          Session::flash('message', 'ДАНІ ПРО НОВОГО ТРЕНЕРА ДОДАНО!');
          return Redirect::to('clients');
      }
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($numb_client)
     {
       // get the nerd
       $client  = Client::find($numb_client);
       // show the view and pass the nerd to it
       return View::make('clients.show')
           ->with('client', $client);
     }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($numb_client)
    {
      $client= Client::find($numb_client);
      // show the edit form and pass the nerd
      return View::make('clients.edit')
          ->with('client', $client);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $numb_client)
    {
      $rules = array(
        'ps_code'       => 'required',
        'surnm_client'      => 'required',
        'name_client' => 'required',
        'lastnm_client'=>'required',
        'birth_date'=>'required',
      );
      $validator = Validator::make(Input::all(), $rules);
      // process the login
      if ($validator->fails()) {
          return Redirect::to('clients/' . $numb_client . '/edit')
              ->withErrors($validator)
              ->withInput(Input::except('password'));
      } else {
          // store
          $client= Client::find($numb_client);
          $client->ps_code       = Input::get('ps_code');
          $client->surnm_client     = Input::get('surnm_client');
          $client->name_client = Input::get('name_client');
          $client->lastnm_client      = Input::get('lastnm_client');
          $client->birth_date     = Input::get('birth_date');
          $client->save();
          // redirect
          Session::flash('message', 'ДАНІ ПРО КЛІЄНТА ОНОВЛЕНО!');
          return Redirect::to('clients');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($numb_client)
    {
      // delete
      $client = Client::find($numb_client);
      $client->delete();

      // redirect
      Session::flash('message', 'ДАНІ ПРО КЛІЄНТА ВИДАЛЕНО!');
      return Redirect::to('clients');
    }
}
