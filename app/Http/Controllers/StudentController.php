<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('index~~~');
        // $data=[
        //     'name'=>'kai',
        //     'age'=>'18',
        // ];
        $data=[
            ['name'=>'amu',
             'moblie'=>'0387-878878'
        ],
            ['name'=>'bob',
            'moblie'=>'0387-787787'
    ],
            ['name'=>'eee',
             'moblie'=>'0387-888888'
        ],
    ];

        return view('student.index',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function hello(){
        dd('hello');
    }
    public function excel(){
        echo"excel";
        // return view('student.excel');
    }
    public function child(){
        
        return view('child');
    }
}
