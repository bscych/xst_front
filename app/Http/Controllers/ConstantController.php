<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use \App\Models\Constant;
use \App\Models\ConstantCategory;


class ConstantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $constant_category_id = Input::get('constant_category_id');
        $constantCategory = ConstantCategory::where('id',$constant_category_id)->first();
        $constants = Constant::where('constant_category_id',$constant_category_id)->get();
        return View::make('constant.constant_index')->with('models',$constants)->with('constantCategory',$constantCategory);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('constant.constant_create')->with('constant_category_id',Input::get('constant_category_id'));
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
            'value' => 'required|string|max:255'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        $constant_category_id = Input::get('constant_category_id');
        if ($validator->fails()) {
            return Redirect::to('constant/create')
                            ->withErrors($validator);
            
        } else {
         
            $constant = new Constant;
            $constant->value = Input::get('value');
            $constant->constant_category_id = $constant_category_id;
            $constant->label_name = ' ';
            $constant->save();

            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('constant?constant_category_id='.$constant_category_id);
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
