<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$this->authorize('index', \App\Model\Category::class);
        $model = \App\Models\CourseCategory::all();
        return View::make('courseCategory.index')->with('courseCategories',$model);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courseCategory/create');
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
            'name' => 'required|unique:course_categories',
            
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('$courseCategory/create')
                            ->withErrors($validator);
        } else {
            // store
            $courseCategory = new \App\Models\CourseCategory;
            $courseCategory->name = Input::get('name');
            $courseCategory->save();

            // redirect
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('courseCategory');
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
         $courseCategory = \App\Models\CourseCategory::find($id);

        // show the edit form and pass the nerd
        return View::make('courseCategory.edit')
                        ->with('courseCategory', $courseCategory);
        
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
            return Redirect::to('courseCategory/' . $id . '/edit')
                            ->withErrors($validator);
           
        } else {
            // store
            $courseCategory = \App\Models\CourseCategory::find($id);
            $courseCategory->name = Input::get('name');
          
            $courseCategory->save();

            // redirect
            Session::flash('message', 'Successfully updated nerd!');
            return Redirect::to('courseCategory');
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
