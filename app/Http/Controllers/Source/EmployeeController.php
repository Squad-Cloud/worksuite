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
        $employee = Employee::with('department')->with('designation')->where('parent_id',Auth::user()->id)->get();
        return view('employee.index',compact('employee'));
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
            'emp_id' => 'required|numeric',
            'emp_email' => 'required|email',
            'emp_name' => 'required',
            'emp_password' => 'required|numeric',
            'emp_slack' => 'required',
            'emp_join_date' => 'required',
            'emp_exit' => 'required',
            'emp_gender' => 'required',
            'emp_address' => 'required',
            'emp_skills' => 'required',
            'designation' => 'required',
            'department' => 'required',
            'mobile' => 'required|numeric',
            'hourly_rate' => 'required|numeric',
            'is_login' => 'required',
            'emp_notification' => 'required',
            'language' => 'required',
            'image' => 'required',


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
        $employee->email = $emp_email;
        $employee->password = $password;
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

        $employee = Employee::with('department')->with('designation')->where('parent_id',Auth::user()->id)->get();
        return view('employee.index',compact('employee'));

    }

}