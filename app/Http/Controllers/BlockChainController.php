<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\UserPlan;
use Illuminate\Http\Request;

class BlockChainController extends Controller
{
    public function index()
    {
        $plan = UserPlan::where('user_id', auth()->user()->id)->firstOrFail();
        // checking if this transaction alredy added
        $transaction = Transaction::where('user_id', auth()->user()->id)
            ->where('amount', $plan->plan->profit)
            ->where('type', 'profit')
            ->where('sum', 'in')
            ->whereDate('created_at', now()->toDateString())
            ->first();
        if ($transaction == '') {
            // adding a profit transaction
            $transaction = new Transaction();
            $transaction->user_id = auth()->user()->id;
            $transaction->amount = $plan->plan->profit;
            $transaction->type = 'profit';
            $transaction->status = 'approved';
            $transaction->sum = 'in';
            $transaction->save();
            return redirect()->back()->with('message', 'Profit Added Successfully');
        } else {
            return redirect()->back()->withErrors('Profit Already Added');
        }
        
    }
}
