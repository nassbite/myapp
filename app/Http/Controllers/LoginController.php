<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use App\Models\marushwa;
use Illuminate\Support\Facades\Crypt;
use PhpParser\Node\Expr\New_;

class LoginController extends Controller
{

    function index() {
        return view('logn');
    }

    function list(){
        $data =  Driver::all();
        return view('list', ["data"=>$data]);
    }
    function add(Request $request){ 
        $nass = new Driver();
        $nass->name = $request->input('name');
        $nass->email = $request->input('email');  
        $nass->start=$request->input('start_route');
        $nass->destination=$request->input('end_route');
        $nass->phone = $request->input('phone_number');
        $nass->date=$request->input('date'); 
        // $nass->password=Crypt::decrypt($request->input('password')); 
        $nass->password=$request->input('password'); 
        $nass->save();
        // $request->session()->flash('status', 'Added successfully!!');
        return redirect('list');

    }

    function delete($id){
        return Driver::find($id);
    }

    function edit($id){
       $data = Driver::find($id);
       return view('edit',['data'=>$data]);
    }

    function register(Request $request){
        return $request->input();
    }

     function login(Request $request){
          $driver = Driver::where('email',$request->input('email'))->get();
          
          return Crypt::encrypt($driver[0]->password);
         
        //    if(Crypt::decrypt($driver[0]->password)==$request->input('password'))
        //    {
        //     $request->session()->put('driver',$driver[0]->name);
        //     return redirect('/home');
        //    }
     }

   

    // function Update(Request $request){
    //     $nass = Driver::find($request->id);
    //     $nass->name = $request->input('name');
    //     $nass->email = $request->input('email');  
    //     $nass->start=$request->input('start_route');
    //     $nass->destination=$request->input('end_route');
    //     $nass->phone = $request->input('phone_number');
    //     $nass->date=$request->input('date'); 
    //     $nass->save();
    //     $request->session()->flush('status', 'Added successfully!!');
    //     return redirect('list');
    // }


    


    //
    // public function Login(request $request)
    // {
    //     $request->validate([
    //         'username' => 'required | max:5',
    //         'password' => 'required | min:5'

    //     ]);
    //     $data = $request->input();
    //     $request->session()->put('login', $data['username'] . " " . $data['password']);
    //     return redirect('bite');
    // }

    
}

