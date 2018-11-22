<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function balance($user){
        return User::find($user)->balance;
    }

    public function deposit($user, Request $request){
        $account = User::findOrFail($user);

        if($request->input('amount') > 0 && $request->input('amount') < 100000){
            $account->balance += $request->input('amount');
            $account->save();
            return $account->balance;
        }

        return 'Bad Deposit';
    }

    public function withdraw($user, Request $request){
        $account = User::findOrFail($user);

        if($request->input('amount') > 0 && $request->input('amount') < 100000 && $request->input('amount') < $account->balance){
            $account->balance -= $request->input('amount');
            $account->save();
            return $account->balance;
        }

        return 'Bad Withdraw';
    }
}
