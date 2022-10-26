<?php

namespace App\Http\Controllers;

use App\Models\Bazar;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('bazar');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:bazars,email'
        ]);


        //Klaviyo new user list
        $key = env('KLAVIYO_API_KEY',NULL);
        $newList = env('KLAVIYO_API_LIST',NULL);
        $client = new Client();
        $clientWinner = 22;
        
        $response = $client->request('POST', 'https://a.klaviyo.com/api/v2/list/'.$newList.'/members?api_key='.$key, [
            'body' => '{"profiles":[{"email":"'.$request->email.'","first_name":"'.$request->name.'","last_name":"'.$request->lastname.'"}]}',
            'headers' => [
              'accept' => 'application/json',
              'content-type' => 'application/json',
            ],
          ]);
          
          echo $response->getBody();
    
        //Bazar counter data.  
        $bazar = new Bazar();
        $bazar->name = $request->name;
        $bazar->lastname = $request->lastname;
        $bazar->email = $request->email;
        $bazar->counter = 1;
        
        $bazar->save();

        if(($bazar->id % $clientWinner) == 0){
            return  redirect()->route('index')->with('success','Muestra esta pantalla a nuestra vendedora CHERISH y te entregará tu regalo. Tu registro fue el: '.$bazar->id);
        }

        return  redirect()->route('index')->with('message','Gracias por participar. Tu registro fue el: '.$bazar->id);
    }
}
