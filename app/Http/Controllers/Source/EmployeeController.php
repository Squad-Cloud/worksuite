<?php

namespace App\Http\Controllers\Source;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\designation;
use Auth;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::where('parent_id',Auth::user()->id)->get();
        return view('employee.index');
    }
    public function create()
    {
        $department = Department::get();
        $designation = Designation::get();
        return view('employee.create',compact('department','designation'));
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'emp_id' => 'required|numeric|max:25',
            'emp_email' => 'required|email|max:255',
            'emp_name' => 'required|max:25',

        ]);

        $name = $request->emp_name;
        $emp_id = $request->emp_id;
        $emp_email = $request->emp_email;
        $password = Hash::make($request->emp_password);
        $slack = $request->emp_slack;
        $joindate = $request->emp_join_date;
        $exit = $request->emp_exit;
        $gender = $request->emp_gender;
        $address = $request->emp_address;
        $skills = $request->emp_skills;
        $deisgnation = $request->designation;
        $department = $request->department;
        $hourly_rate = $request->hourly_rate;
        $code = $request->code;
        $mobile = $request->mobile;
        $login = $request->is_login;
        $notification = $request->emp_notification;
        $lang = $request->language;
        $image = $request->file('image');
        $filename = '';
        if ($request->hasFile('image')) {
            $filename = time().'.'.$image->extension();
            $image->move(base_path().'/public/uploads/', $filename);
        } else {
            dd('No file Available');
        }
        
        $employee = new Employee();
        $employee->emp_id = $emp_id;
        $employee->emp_name = $name;
        $employee->emp_email = $emp_email;
        $employee->emp_password = $password;
        $employee->parent_id = Auth::user()->id;
        $employee->slack = $slack;
        $employee->joining_date = $joindate;
        $employee->exit_date = $exit;
        $employee->gender = $gender;
        $employee->address = $address;
        $employee->skills = $skills;
        $employee->designation_id = $deisgnation;
        $employee->department_id = $department;
        $employee->mobile = $mobile;
        $employee->hourly_rate = $hourly_rate;
        $employee->login = $login;
        $employee->email_is_notify = 1;
        $employee->language = $lang;
        $employee->image = $filename;

        $employee->save();


    }

}
