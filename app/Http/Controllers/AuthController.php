<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\View;
use Session;
use Illuminate\Pagination\LengthAwarePaginator;

class AuthController extends Controller
{
    protected $api_host;
    
    public function __construct()
    {
        $this->api_host = ENV('API_URL');
    }

    public function index(Request $request)
    {
        return view('login.index');
    }

    public function register(Request $request)
    {
        return view('login.register');
    }

    public function saveRegister(Request $request)
    {
       try{   
            $response = Http::post($this->api_host.'/api/register', [
                'name'              => $request->input('name'),
                'email'             => $request->input('email'),
                'password'          => $request->input('password')
            ]);     

            return redirect()->route('get-auth');
        }
        catch (\Exception $e) {
            return redirect()->route('error-404'); 
        }
    }

    public function auth(Request $request){

        try {
            $response = Http::post($this->api_host.'/api/login', [
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ]);
            
            if($response->ok()){
                $login = $response->json();

                Session([
                            'token' => $login['access_token']
                        ]);

                $alert_toast = 
                [
                    'title' => 'Successfully sign in',
                    'text'  => 'Welcome to dashboard admin',
                    'type'  => 'success',
                ];
                Session::flash('alert_toast', $alert_toast);
                return redirect()->route('post');
            }
            else{
                return redirect()->route('get-auth'); 
            }
            
            return back()->with('error', $login->json()['message'])->withInput($request->all());
        }
        catch (\Exception $e) {
            return response()->json(['success' => false, 'http_code' => $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function logout(){
        Http::withToken(Session::get('token'))->get($this->api_host.'/api/logout')->json();
        
        Session::flush();

        return redirect()->route('get-auth'); 
    }

    public function error404(){

        return view('error.error-404'); 
    }

    public function profile(){
        if(Session::get('token')){  
            try{           
                $profile = Http::withToken(Session::get('token'))->get($this->api_host.'/api/profile-user')->json();
                return view('profile.index',compact('profile'));
            }
            catch (\Exception $e) {
                return redirect()->route('error-404'); 
            }
        }
        else{
            return redirect()->route('get-auth'); 
        }

    }


}
