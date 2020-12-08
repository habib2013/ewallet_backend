<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Haswallet;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function checkWallet(Request $request){
        $user = Auth::user();

        $name =  $user->name;
        return response()->json([
            'username' =>  $name,
               'This is the user.'
          ], 201);

    }
}
