<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $employeeslist= Employee:: all();
      
        return view('tableEmp',compact('employeeslist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createEmp');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= $request->except('_token');
        Employee::create($data);
        $employee = new Employee;
        $employee->firstname = $data['firstname'];
        $employee->lastname = $data['lastname'];
        $employee->address = $data['address'];
        $employee->city = $data['city'];
        $employee->state = $data['state'];
        $employee->zip = $data['zip'];
        $employee->save();
        return redirect()->route('emplindex');
       

        dd("success");
      
    }

    /**
     * Display the specified res ource.
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
