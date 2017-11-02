<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use \App\Models\Course;
use \App\Models\CourseCategory;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $course = DB::table('courses')
                ->join('course_categories','courseCategory_id','=','course_categories.id')
                ->select('courses.id','courses.name','courses.price','courses.duration','course_categories.name as courseCategoryName')
                ->get();
        return  View::make('course.index')->with('courses',$course);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return View::make('course.create')->with('courseCategories',CourseCategory::all());
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
            'name' => 'required',
            'price' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('course/create')
                            ->withErrors($validator);
            
        } else {
         
            $course = new Course;
            $course->name = Input::get('name');
            $course->price = Input::get('price');
            $course->duration = Input::get('duration');
            $course->courseCategory_id = Input::get('courseCategory_id');
            $course->save();

            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('course');
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
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $model = Course::find($id);
       
       return view('course.edit',['model'=>$model,'courseCategories'=>CourseCategory::all()]);
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
