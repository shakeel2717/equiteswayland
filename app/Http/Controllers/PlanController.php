<?php

namespace App\Http\Controllers;

use App\Models\Method;
use App\Models\Plan;
use App\Models\Tid;
use Illuminate\Http\Request;

class PlanController extends Controller
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
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        $methods = Method::where('status',1)->get();
        return view('user.dashboard.plan.show',compact('plan','methods'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        $validatedData = $request->validate([
            'tid' => 'nullable|min:1|max:255|unique:tids',
            'proof' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if (isset($validatedData['proof'])) {
            // get picture
            $profile = $request->file('proof');
            $profile_name = auth()->user()->username . time() . '.' . $profile->getClientOriginalExtension();
            $profile->move(public_path('assets/proof'), $profile_name);

            // checking if tid is null
            if($validatedData['tid'] == null){
                $tidInput = "No Tid Provided". rand(000000,999999);
            } else {
                $tidInput = $validatedData['tid'];
            }
        } else {
            if ($validatedData['tid'] == null){
                return redirect()->back()->withErrors(['TID or Payment Proof required, Please try again.']);
            } else {
                $profile_name = null;
                $tidInput = $validatedData['tid'];
            }
        }


        // inserting this user tid into the database
        $tid = new Tid();
        $tid->user_id = auth()->user()->id;
        $tid->plan_id = $plan->id;
        $tid->amount = $plan->price;
        $tid->tid = $tidInput;
        $tid->proof = $profile_name;
        $tid->status = 0;
        $tid->save();
        return redirect()->route('user.dashboard')->with('message','Tid has been added successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        //
    }
}
