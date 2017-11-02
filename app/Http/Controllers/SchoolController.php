<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use \App\Models\School;


class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = School::all();
        return  View::make('school.index')->with('schools',$models);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('school.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('school/create')
                            ->withErrors($validator);
          
        } else {
            // school
            $school = new School;
            $school->name = Input::get('name');
            $school->phone = Input::get('phone');
            $school->address = Input::get('address');
            $school->homepage = Input::get('homepage');
            $school->city = Input::get('city');
            $school->save();

            // redirect
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('school');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
         $model = School::find($id);

        // show the edit form and pass the nerd
        return View::make('school.edit')
                        ->with('model', $model);
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
         $rules = array(
            'name' => 'required',
      
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('school/' . $id . '/edit')
                            ->withErrors($validator);
           
        } else {
            // store
            $model = School::find($id);
            $model->name = Input::get('name');
            $model->phone = Input::get('phone');
            $model->address = Input::get('address');
            $model->homepage = Input::get('homepage');
            $model->city = Input::get('city');
            $model->save();

            // redirect
            Session::flash('message', 'Successfully updated School!');
            return Redirect::to('school');
        }
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
