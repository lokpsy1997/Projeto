<?php

namespace App\Http\Controllers\User;
// use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create(Request $request)
    {
        // 

    }
    /**
     *  Display a listing all of the resource
     *
     * @return \Illuminate\Http\Response
     */
    
    public function listAll()
    {
        //
            // return 'ok';
        try {
            $result = User::all();
     
        return response()->json([
            'success' => true,
            'data' => $result,
            'message' =>'Successfully records the User!',

        ], 200);

    } catch (\Illuminate\Database\QueryException $exception) {
        // You can check get the details of the error using `errorInfo`:
        $errorInfo = $exception->errorInfo;
    
        // Return the response to the client..
    } 
    }
    /**
     *  Display a listing all of the resource
     *
     * @return \Illuminate\Http\Response
     */
    
     public function list($id)
     {
         //  
        try { 
            $result = User::find($id);
               
        return response()->json([
            'success' => true,
            'data' => $result,
            'message' =>'Successfully record the User!',

        ], 200);

    } catch (\Illuminate\Database\QueryException $exception) {
        // You can check get the details of the error using `errorInfo`:
        $errorInfo = $exception->errorInfo;
    
        // Return the response to the client..
    } 
     }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'api_token' => Str::random(60),
        ]);
 
        return response()->json([
            'success' => true,
            'data' => $user,
            'message' => 'Successfully create the User!',

        ], 200);
    } catch (\Illuminate\Database\QueryException $exception) {
        // You can check get the details of the error using `errorInfo`:
        $errorInfo = $exception->errorInfo;
    
        // Return the response to the client..
    } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        try {
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:4'],
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            }
        $user = User::findOrFail($id);
 
        // $user = User::find($id);
        $user->name       =$request['name'];
        // $user->email      = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();
     
        return response()->json([
            'success' => true,
            'data' => $user,
            'message' => 'Successfully updater the User!',

        ], 200);

    } catch (\Illuminate\Database\QueryException $exception) {
        // You can check get the details of the error using `errorInfo`:
        $errorInfo = $exception->errorInfo;
    
        // Return the response to the client..
    } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
  
        $user = User::findOrFail($id);
  
        $user->delete();
     
        return response()->json([
            'success' => true, 
            'data' => $user,
            'message' =>'Successfully deleted the User!',
        ], 200);

    } catch (\Illuminate\Database\QueryException $exception) {
        // You can check get the details of the error using `errorInfo`:
        $errorInfo = $exception->errorInfo;
    
        // Return the response to the client..
    } 
    }
}
