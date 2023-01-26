<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function save()
    {
        $employee = new Employee();
        $employee->first_name = 'Ivan';
        $employee->second_name = 'Ivanov';
        $employee->save();
    }
}
