<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use File;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $posts = Student::all();
        return view('backend.pages.student.index',compact('posts'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
              'name'  => 'required',
              'email'  => 'required|unique:students',
              'phone'  => 'required',
              'age'  => 'required',
              'image'  => 'required'
              
        ]);
        // Student::create($request->all());
        $file = $request->file('image');
        $timestamp = strtotime("now");
        $filename = $timestamp . '-' . $file->getClientOriginalName();
        
        $file->move(public_path('images/clients-img'), $filename);

        $post = new Student;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->phone_number = $request->phone;
        $post->age = $request->age;
        $post->images = $filename;    
        $post->save();

        return redirect()->route('studentreg.index')
            ->with('success', 'Post created successfully.');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $studentreg)
    {
        return view('backend.pages.student.show',compact('studentreg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $studentreg)
    {
        return view('backend.pages.student.edit',compact('studentreg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id,$path)
    { 
       
        if ($request->image) {
            unlink("images/clients-img/".$path);
            $file = $request->file('image');
            $timestamp = strtotime("now");
            $filename = $timestamp . '-' . $file->getClientOriginalName();
            $file->move(public_path('images/clients-img'), $filename);
        }

     $student = Student::find($id);  
      $student->name = $request->name;
      //print_r($student->name);exit;
      $student->email = $request->email;
      $student->phone_number = $request->phone;
      $student->age = $request->age;
      if($request->image){
      $student->images = $filename; 
      }   
      $student->save();

      return redirect()->route('studentreg.index')
          ->with('success', 'Post Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$path)
    {  
        //echo 123;exit;
        $filePath = public_path('images/clients-img/' . $path);
        if (!File::isDirectory($filePath)) {
            unlink("images/clients-img/" . $path);
        }
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('studentreg.index')
            ->with('success', 'Post deleted successfully.');
    }
}
