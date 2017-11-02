<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use \App\Models\PaymentCategory;
class PaymentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = PaymentCategory::all();
        return  View::make('paymentCategory.index')->with('paymentCategories',$model);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('paymentCategory/create');
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
            'name' => 'required|unique:payment_categories',
            
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('$paymentCategory/create')
                            ->withErrors($validator);
        } else {
            // store
            $model = new PaymentCategory;
            $model->name = Input::get('name');
            $model->save();

            // redirect
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('paymentCategory');
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
        
         $model = PaymentCategory::find($id);

        // show the edit form and pass the nerd
        return View::make('paymentCategory.edit')
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
            return Redirect::to('paymentCategory/' . $id . '/edit')
                            ->withErrors($validator);
           
        } else {
            // store
            $model = PaymentCategory::find($id);
            $model->name = Input::get('name');
          
            $model->save();

            // redirect
            Session::flash('message', 'Successfully updated PaymentCategory!');
            return Redirect::to('paymentCategory');
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
