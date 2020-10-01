<?php

namespace App\Http\Controllers;
use \Illuminate\Http\Request;
// use \Illuminate\Http\Response;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function generateKey()
    {
        return \Illuminate\Support\Str::random(32);
    }

    public function fooExample()
    {
        return 'Example Controller from POST Request';
    }

    public function getUser($id)
    {
        return 'User id = ' . $id;
    }

    public function getPost($cat1, $cat2)
    {
        return 'Category 1 = ' . $cat1 . 'Category 2 ' . $cat2;
    }

    public function getProfile()
    {
        // return 'Route Profile Action : ' . route('profile.action');
        echo '<a href="' . route('profile.action') . '">Profile Action</a>'; 
    }

    public function getProfileAction()
    {
        return 'Router Profile : ' . route('profile');
    }

    public function fooBar(Request $request)
    {
        // if ($request->is('foo/bar')) {
        //     return 'Succes';
        // } else {
        //     return 'Fail';
        // }
        
        // return $request->path();
        return $request->method();
    }

    public function userProfile(Request $request)
    {
        // $user['name'] = $request->name;
        // $user['username'] = $request->username;
        // $user['email'] = $request->email;
        // $user['password'] = $request->password;

        // return $user;

        // return $request->all();
        // return $request->input('name', 'johndoe');
        // if ($request->has('name','email')) {
        //     return 'Succes';
        // } else {
        //     return 'Fail';
        // }

        // return $request->only(['username', 'password']);
        return $request->except(['username', 'password']);

        
    }

    public function response()
    {
        // $data['status'] = 'Succes';
        // return (new Response($data, 201))
        //         ->header('Content-Type', 'application/json');
        // return response($data, 201);
        return response()->json([
            'message' => 'Fail Not Found',
            'status' => false
        ], 404);
    }
}
