<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::get();
    
        foreach ($teachers as $teacher) {
            echo $teacher->name . "<br>";
            echo $teacher->email . "<br>";
    
            // Iterate over each role for the current teacher
            foreach ($teacher->role as $role) {
                echo $role->role_name . "<br>" ;
    }
}
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teacher = Teacher::find(4);
        $rr = [1,2,3,4];
        return $teacher->role()->attach($rr);
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
}
