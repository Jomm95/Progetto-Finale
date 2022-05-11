<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Type;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        
        $users = User::all();
        $types = Type::all();

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

    public function filter($filter) {

        $users = User::with(['types']);
        //TODO filtro dati lato server (eloquent)

        $filter = explode(",", $filter);
        // $tester = $request;

        $usersArray = [$filter];

        for($i=0; $i<count($filter); $i++){

            foreach($users as $user){

                for($n=0; $n<count($user->types); $n++){

                    if($user->types[$n]->id == $filter[$i]){

                        if(!in_array($user, $usersArray)){
                            $usersArray[] = $user;
                        }
                    }
                }
            }
        }

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
        $types = [];

        foreach($users->$types as $element) {
            $types[] = $element->name;
        }


        if($users) {
            return response()->json(
                [
                    'allUsers' => $users,
                    'allTypes' => $types,
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
