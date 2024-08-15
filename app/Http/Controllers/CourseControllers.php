<?php

namespace App\Http\Controllers;
use App\Models\course;

use Illuminate\Http\Request;

class CourseControllers extends Controller
{
    //
    function index()
    {
    
         $courses =course::orderBy('created_at',"desc")->paginate(5);
        
        return view('CoursesData',compact("courses"));
    }

    function view($id)
    {
      $courses=course::find($id);
      return view('CourseData',compact("courses"));
    }

    // create and store data

    public function create()
    {
        return view('CourseCreate');
    }

    public function store(Request $request)
    {

        course::create([
          'name'=> $request->name,
          'totalGrade'=> $request->totalGrade,
          'description'=> $request->description,
          
         ]);
         return redirect(route('Courses.index'));
      }

      // delete course data

      public function destroy($id)
    {
        $courses = course::find($id);

        if ($courses) {
            $courses->delete();
            return redirect()->route('Courses.index');
        } else {
            return redirect()->route('Courses.index');
        }
    }

    // update course data

  public function edit($id){
      $course = course::FindOrFail($id);
      return view('CourseEdit',compact('course'));
  }
  public function update(Request $request,$id){
      $course = course::FindOrFail($id);
      $track->update([
          'name'=> $request->name,
          'totalGrade'=> $request->totalGrade,
          'description'=> $request->description
      ]);
      return redirect(route('Courses.index'));
  }
  
}
