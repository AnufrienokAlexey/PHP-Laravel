<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessorController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function store(Request $request)
    {
//        В комментарии первая часть задания - просто вывод json
//        $user = new \StdClass();
//        $user->name = $request->input('name');
//        $user->surname = $request->input('surname');
//        $user->email = $request->input('email');

//        Вариант 1:
//        $json = json_encode($user);
//        $response = new Response($json);
//        $response->header('Content-Type', 'application/json');
//        return $response;

//        Вариант 2:
//        return response()->json($user);

        return view('hello', [
            'name'    => $request->input('name'),
            'surname' => $request->input('surname'),
            'email'   => $request->input('email')
        ]);
    }

}
