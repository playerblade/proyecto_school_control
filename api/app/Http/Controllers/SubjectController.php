<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        echo "welcome index";
        $subject = Subject::get();
        echo json_encode($subject);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        //function create
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        echo "welcome store";
//        print_r($request->all());
        $subject = new Subject();
        $subject->name = $request->input('name');
        $subject->description = $request->input('description');
        $subject->save();
        echo json_encode($subject);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
//    public function show(Subject $subject)
//    {
//        //function show
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
//    public function edit(Subject $subject)
//    {
//        //function edit
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $subject_id)
    {
//        echo "welcome update";
        $subject = Subject::find($subject_id);
        $subject->name = $request->input('name');
        $subject->description = $request->input('description');
        $subject->save();
        echo json_encode($subject);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($subject_id)
    {
//        echo "welcome delete";
        $subject = Subject::find($subject_id);
        $subject->delete();
    }
}
