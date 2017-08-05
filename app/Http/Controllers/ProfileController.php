<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileFormRequest;

class ProfileController extends Controller
{
    public function perfil()
    {
    	
        $user = Auth::user();
        if($user->profile()->count() === 0){
            $sale = null;
            $status = 0;
        }else{
            $sale = $user->profile()->get(['user_id', 'descripcion']);
            $status = 1;
        }
        return response()->json([
            'data' => $sale[0],
            'status' => $status
        ], 200);
        
    }
    public function actualizaPerfil(ProfileFormRequest $request)

    {
        $user = Auth::user();

        if($user->profile()->count() === 0){
            $user->profile()->create([
                'descripcion' => $request->descripcion,
                'colequipo_id' => 19
            ]);    
        }else{
            $user->profile()->update([
                'descripcion' => $request->descripcion
            ]);
        }
        
        return response()->json([
            'data' => $request->descripcion
        ], 200);
    }

    public function miperfil()
    {
        $user = Auth::user();
        $perfil = $user->profile()->get();
        return response()->json([
            'data' => $perfil[0]
        ], 200);          
        
    }
}
