<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class LoginController extends Controller
{


    public function viewInsert(Request $request)
    {
    //  dd($request->all());
     $Email =User::where('email', $request->email)->first();
          $pswd =User::where('password', $request->password)->first();

    //  dd($pswd,$request->all());
     if($Email== null && $pswd==null){
     return redirect('/')->with('msg','Wrong username and Password');        
    }else{

        return redirect('/RegisterForm')->with('msg','Success');   
        }     
    }
     public function viewRegister()
    {
       return view('REGISTER.LOGIN');
        
    }
    public function valueRegister(Request $req)
    {
      // dd($req['password'],'asd');
      User::create([
            'first_name' => $req['first_name'],
            'last_name' => $req['last_name'],
            'phoneno' => $req['phoneno'],
            'email' => $req['email'],
            'password' => $req['password'],
        ]);

     return redirect('/')->with('msg','Success');        
         }

    public function RegisterFormView()
    {

      $Data =User::orderBY('id','desc')->get();


      return view('REGISTER.profile',compact('Data'));

    }
  
public function updateUser(Request $request, $id)
{
  // dd($request->all());
    // Handle the update logic here
    $user = User::find($id);
    $user->update([
                                'first_name' => $request->fristname,
                                'last_name' =>$request->lastname,
                                // 'unit' => Auth::user()->unit,
                                'phoneno' => $request->phoneno,
                                'email' => $request->email,
                            ]);

    return response()->json(['success' => true]);
}

   }
  ?>