<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clubcard;
use View;
use Illuminate\Html\HtmlFacade;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cards =Clubcard::all();
      return View::make('cards.index')
          ->with('cards', $cards);
    }
    public function create()
    {
        return View::make('cards.create');
    }
     public function store()
        {
            $rules = array(
                'clubcard_number'=>'required',
                'price_clubcard'=>'required',
                'start_date'=>'required',
                'finish_date'=>'required',
                'fkclntid'=>'required'
            );
            $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails()) {
                return Redirect::to('cards/create')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
            } else {
                $card = new Clubcard;
                $card->clubcard_number= Input::get('clubcard_number');
                $card->price_clubcard= Input::get('price_clubcard');
                $card->start_date= Input::get('start_date');
                $card->finish_date= Input::get('finish_date');
                $card->fkclntid=Input::get('fkclntid');
                $card->save();
                Session::flash('message', 'ДАНІ ПРО НОВОГО ТРЕНЕРА ДОДАНО!');
                return Redirect::to('cards');
            }
        }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
