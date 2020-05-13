<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;
use Carbon\Carbon;


class EmployeesController extends Controller
{
    public function index(){
        $employees = Employees::all();
        return view ('employees.index', compact('employees'));
    }
    public function store(Request $request){
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'cp_number' => 'required',
            'salaryeverypresent' => 'required',

           
            
        ]);

        $employee = new Employees;
        $employee->first_name = $request->first_name;
        $employee->middle_name = $request->middle_name ? $request->middle_name: 'N/A';
        $employee->last_name = $request->last_name;
        $employee->age = $request->age;
        $employee->address = $request->address;
        $employee->cp_number = $request->cp_number;
        $employee->salaryeverypresent = $request->salaryeverypresent;
        $employee->dayspresent =0;
        $employee->salary =0;
        $employee->save();
    
        return redirect()->route('employees.index')->withStatus('Employee Added');
}
public function update(Request $request)
{
    $this->validate( $request,[
        
        'first_name' => 'required',
        'middle_name' => 'required',
        'last_name' => 'required',
        'age' => 'required',
        'address' => 'required',
        'cp_number' => 'required',
        'salaryeverypresent' => 'required',
        'dayspresent' => 'required',

       
        
    ]);

    $employee =Employees::find($request->id);
    if($employee){
    $employee->first_name = $request->first_name;
    $employee->middle_name = $request->middle_name ? $request->middle_name: 'N/A';
    $employee->last_name = $request->last_name;
    $employee->age = $request->age;
    $employee->address = $request->address;
    $employee->cp_number = $request->cp_number;
    $employee->salaryeverypresent = $request->salaryeverypresent;
    $employee->dayspresent = $request->dayspresent;
    $employee->salary = $employee->salaryeverypresent * $employee->dayspresent;
    $employee->save();
    }
    return redirect()->route('employees.index')->withStatus('Employee Updated');    
}
    public function destroy(Request $request){
        $employee = Employees::find($request->id);

        if($employee){
            $employee->delete();
        }
        return redirect()->route('employees.index')->withStatus('Employee Deleted');  
    }
} 
