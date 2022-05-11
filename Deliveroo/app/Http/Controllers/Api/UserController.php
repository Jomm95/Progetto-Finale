<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Type;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        $users = User::with(['types']);
        // $types = Type::all();

        return response()->json(
            [
                'results' => $users,
                'success'=> true
            ]
        );

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function getClientesPorRuta(Request $request) {
    //     $rutas = $request->input('rutas');
    //     $tipos = $request->input('tipos');

    //     // Code like this doesn't work
    //     $index = 0;
    //     $register = Ruta::where('CODIRUTA','=',$rutas[$index])->first();
    //   }

    public function filter($filter) {

        // $users = User::with(['types']);

        $filter = explode(",", $filter);
        $usersArray = [];

        foreach($filter as $test) {

            $users = User::with(['types'])->where('types', $test)->first();
            $usersArray[] = $users;
        }


        // $tester = $request;



        // for($i=0; $i<count($filter); $i++){

        //     foreach($users as $user){

        //         for($n=0; $n<count($user->types); $n++){

        //             if($user->types[$n]->id == $filter[$i]){

        //                 if(!in_array($user, $usersArray)){
        //                     $usersArray[] = $user;
        //                 }
        //             }
        //         }
        //     }
        // }

        return response()->json(
            [
                'results' => $usersArray,
                'success'=> true,
            ]
        );

    }

    public function show($slug)
    {

        $users = User::where('slug', $slug)->first();

        if($users) {
            return response()->json(
                [
                    'results' => $users,
                    'success' => true,
                ]
            );
        } else {
            return response()->json(
                [
                    'results' => 'errore',
                    'success' => false,
                ]
            );
        }

        return response();
    }
}
