<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Student ::get();
        // dd($data);
        // dd('student controller ok');

        return view('student.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // dd('hello create');
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       
 
        $data = new Student;
         
        $data->name = $request->name;
        $data->age = $request->age;
         
        $data->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    //    dd($id);
    // $data=Student ::get();//=>index select all
    $data=Student ::find($id);//where id=$id
    // $data=Student ::where('id',$id);    
//   dd($data);
    return view('student.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // dd($request->all());
        // dd('update ok');
        // $input=$request->except(['_token','_method']);
        $data=Student ::find($id);//呼叫table
        $input=$request->all();//印出table全部的值
        $data->name=$input['name'];//要修改的欄位
        $data->age=$input['age'];//要修改的欄位
        $data->save();//存回table
        return redirect()->route('students.index');//回到index

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // dd('刪除成功');
        Student ::find($id)->delete();//找到此id,從table把這個id刪掉
        return redirect()->route('students.index');//回到index
    }
    public function excel() 
    {
        return Excel::download(new StudentsExport, 'student.xlsx');
    }
}