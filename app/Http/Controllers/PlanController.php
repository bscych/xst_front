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
use \App\Models\Plan;
use \App\Models\Course;
use \App\Models\Teacher;
use \App\Models\ClassRoom;
use \App\Models\Constant;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $plans = Plan::all();
        $plans = DB::table('plans')
            ->join('courses', 'plans.course_id', '=', 'courses.id')
            ->join('teachers', 'plans.teacher', '=', 'teachers.id')
            ->join('teachers', 'plans.supervisor', '=', 'teachers.id')
            ->join('class_rooms', 'plans.classroom_id', '=', 'class_rooms.id')
            ->join('schools', 'plans.school_id', '=', 'schools.id')
            ->select('plans.code', DB::raw('plans.name as plan_name'), DB::raw('courses.name as course_name'),DB::raw('teachers.name as teacher_name'),DB::raw('teachers.name as supervisor_name'),DB::raw('class_rooms.name as classroom_name'),DB::raw('schools.name as school_name'),'plans.numberOfPeriod','plans.numberOfStudent','plans.start_at','plans.end_at')
            ->get();
        return view('plan.index',['models'=>$plans]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();
        $classrooms = ClassRoom::all();
        $courses = Course::all();
        return View::make('plan.create',['teachers'=>$teachers,'classrooms'=>$classrooms,'courses'=>$courses]);
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
            return Redirect::to('plan/create')
                            ->withErrors($validator);
          
        } else {
            // school
            $plan = new Plan;
            $plan->code = Input::get('code');
            $plan->name = Input::get('name');
            $plan->description = Input::get('description');
            $plan->course_id = Input::get('course_id');
            $plan->teacher = Input::get('teacher');
            $plan->supervisor = Input::get('supervisor');
            $plan->classroom_id = Input::get('classroom_id');
            $user = Auth::user();
            $plan->school_id = $user->school_id;
            $plan->numberOfPeriod = Input::get('numberOfPeriod');
            $plan->numberOfStudent = Input::get('numberOfStudent');
            $plan->start_at = Input::get('start_at');
            $plan->end_at = Input::get('end_at');
            $plan->save();

            // redirect
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('plan');
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
