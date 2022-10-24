<?php

namespace App\Http\Controllers\Source;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\BillingType;
use Auth;
use App\Models\Matter;
use Illuminate\Support\Facades\Hash;

class MatterController extends Controller
{
    public function index()
    {
        $matter = Matter::with('client')->where('parent_id',Auth::user()->id)->get();
        // dd($matter);
        return view('matter.index',compact('matter'));
    }
    public function create()
    {
        $client = Client::where('active',1)->get();
        $billing = BillingType::where('active',1)->get();
        return view('matter.create',compact('client','billing'));
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'client_id' => 'required|numeric|max:25',
            'description' => 'required|max:255',
            'responsible_solicitor' => 'required|numeric|max:25',
            'originating_solicitor' => 'required|numeric|max:25',
            'location' => 'required|max:25',
            'status' => 'required|max:25',
            'opendate' => 'required|date|max:25',
            'closedate' => 'required|date|max:25',
            'pendingdate' => 'required|date|max:255',
            'statutedate' => 'required|date|max:50',
            'billingType' => 'required|numeric',
            'rates' => 'required|numeric',
        ]);
        
        $matter = new Matter();
        $matter->cleint_id = $request->client_id;
        $matter->responsiable_soliciator  = $request->responsible_solicitor;
        $matter->originating_soliciator = $request->originating_solicitor;
        $matter->location  = $request->location;
        $matter->description  = $request->description;
        $matter->billing_type_id  = $request->billingType;
        $matter->status  = $request->status;
        $matter->open_date  = $request->opendate;
        $matter->close_date = $request->closedate;
        $matter->pending_date = $request->pendingdate;
        $matter->limit_date  = $request->statutedate;
        $matter->rates  = $request->rates;
        $matter->parent_id  = Auth::user()->id;

        $matter->save();

        return redirect()->route('all_matter');

    }

}