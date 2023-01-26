<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\PHP;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('get-employee-data');
    }

    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->surname = $request->input('surname');
        $employee->workStatus = $request->input('workStatus');
        $employee->email = $request->input('email');
        $employee->address = $request->input('address');
        $employee->workData = $request->input('workData');
        $employee->json = $request->input('json');
        $employee->save();

//        //Можем вывести все параметры по очереди с новой строки:
//        echo $employee->name . PHP_EOL;
//        echo $employee->surname . PHP_EOL;
//        echo $employee->workStatus . PHP_EOL;
//        echo $employee->email . PHP_EOL;
//        echo $employee->address . PHP_EOL;
//        echo $employee->workData . PHP_EOL;
//        echo $employee->json . PHP_EOL;
//
//        //Или вывести все параметры в массиве:
//        print_r($request->all());
//
//        //Или определенный параметр из массива:
//        echo $request->all()['name'] . PHP_EOL;
//
//        //Или с помощью коллекции:
//        $request->collect()->each(function ($field) {
//            echo $field . PHP_EOL;
//        });

        //Выводим json
        $json = $request->input('json');
        print_r(json_decode($json)->address);
        print_r(json_decode($json)->address->city);
        print_r(json_decode($json)->address->geo->lat);
    }

    public function update (Request $request, $id)
    {
        DB::table('employees')
            ->where('id', '=', $id)
            ->update(
                [
                    'name'       => $request->input('name'),
                    'surname'    => $request->input('surname'),
                    'workStatus' => $request->input('workStatus'),
                    'email'      => $request->input('email'),
                    'address'    => $request->input('address'),
                    'workData'   => $request->input('workData'),
                    'json'       => $request->input('json'),
                    ]
            );
    }

    public function delete (Request $request, $id)
    {
        DB::table('employees')
            ->where('id', '=', $id)
            ->delete();
    }

    public function truncate()
    {
        DB::table('employees')->truncate();
    }

    public function getPath(Request $request)
    {
        return $request->path();
    }

    public function getUrl(Request $request)
    {
        return $request->url();
    }
}
