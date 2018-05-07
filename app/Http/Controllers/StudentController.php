<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use \App\Models\Student;
use \App\Models\Userinfo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $students = DB::table('students')
                ->join('userinfos','userinfos.id','=','students.userinfo_id')
                //->join('schools','students.school_id','=','schools.id')
                ->select('students.code','userinfos.id','students.comments','students.primaryschool')
                ->get();
        return View::make('student.index')->with('students',$students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('student.create');
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
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('student/create')
                            ->withErrors($validator);
            
        } else {
         
            $userinfo = new UserInfo;
           
            $userinfo->birthday = Input::get('birthday');
            $userinfo->mobile = Input::get('mobile');
            $userinfo->wechat = Input::get('wechat');
            $userinfo->qq = Input::get('qq');
            $userinfo-> operator= Auth::id();
            $userinfo->save();
            
            $student = new Student;
            $student->name = Input::get('name');
            $student->code = Input::get('code');
            $student->comments = Input::get('comments');
            
            $student->primaryschool = Input::get('primaryschool');
            $student->userinfo_id = $userinfo->id;
            
            $school_id = DB::table('school_userinfo')->select('school_userinfo.school_id')->join('user_userinfo','user_userinfo.userinfo_id','=','school_userinfo.userinfo_id')->where('user_userinfo.user_id','=',Auth::id())->first();
            $student->school_id =$school_id->school_id;
            $student->save();

            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('student');
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
        $model = Student::find($id);
        return View::make('student.edit')->with('model',$model);
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
