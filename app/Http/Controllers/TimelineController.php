<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Profile;
class TimelineController extends Controller
{

    public function index()
    {
    	return response()->json([
    		'data' => 'Timeline Index desde el inicio del mundo'
    	], 200);
    }
    public function perfil()
    {
    	
        $user = Auth::user();
        if($user->profile()->count() === 0){
            //$sale = $user->profile()->get();
            //$sale = $user->profile()->count();
            $sale = 'NO';
        }else{
            //$sale = 'NO';
            $sale = $user->profile()->get();
        }
        

        return response()->json([
            'data' => $sale
        ], 200);
        
    }
}

/*
        if ($user)
        {
            $profile = new Profile;
            $profile->descripcion = 'Demo details';
            $profile->user()->associate($user);
            $profile->save();

*/

            /*Auth::user()->profile()->create([
                'descripcion' => 'describe'
            ]);*/
/*            return response()->json([
            'data' => Auth::user()->profile()->get()
            ], 200);    
        }

*/        