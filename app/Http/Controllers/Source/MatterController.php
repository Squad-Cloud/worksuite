<?php

namespace App\Http\Controllers\Source;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\BillingType;
use Auth;
use App\Models\Matter;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;
use App\Models\Activity_category;
use App\Models\Time_Entry;
use App\Models\Expense_Category;
use App\Models\Expense_Entry;


class MatterController extends Controller
{
    public function index()
    {
        $matter = Matter::with('client')->where('parent_id',Auth::user()->id)->get();
        return view('matter.index',compact('matter'));
    }
    public function matterDshboard($id)
    {
        $matter = Matter::find($id);
        $client = Client::where('active',1)->get();
        $billing = BillingType::where('active',1)->get();
        $employee = Employee::where('parent_id',1)->get();
        $act_category = Activity_category::where('active',1)->get();
        $exp_cate = Expense_Category::where('active',1)->get();
       
        $entry_time = Time_Entry::get()->toArray();
        $expense_time = Expense_Entry::get()->toArray();
        $activity = array_merge($entry_time,$expense_time);

        return view('matter.dashboard',compact('matter','client','billing','employee','act_category','exp_cate','activity'));
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
        $matter = Matter::with('client')->where('parent_id',Auth::user()->id)->get();
        return view('matter.index',compact('matter'));

    }
    public function edit($id)
    {
       $matterEdit = Matter::find($id);
       $client = Client::where('active',1)->get();
       $billing = BillingType::where('active',1)->get();
       return view('matter.edit',compact('matterEdit','billing','client'));
    }

    public function update(Request $request, $id)
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
       $matter = Matter::find($id);
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
       $matter->updated_at  = date('Y-m-d H:i:s');
       $matter->save();
       
       $matter = Matter::with('client')->where('parent_id',Auth::user()->id)->get();
        return view('matter.index',compact('matter'));
        
    }
    public function delete(Request $request,$id)
    {
        $deleteData = Matter::find($request->id);
        $deleteData->delete();

        return 'done';
    }

    public function time_entry(Request $request)
    {
       $time_entry = new Time_Entry();
       $time_entry->duration = $request->duration;
       $time_entry->matter_id = $request->matter_id;
       $time_entry->activity_cat_id = $request->act_cate_id;
       $time_entry->user_id = $request->firm;
       $time_entry->date = $request->date;
       $time_entry->address  = $request->address;
       $time_entry->rate  = $request->rate;
       $time_entry->billable  = 1;

       $time_entry->save();
       return redirect()->back();
    }
    public function exp_entry(Request $request)
    {
       $exp_entry = new Expense_Entry();
       $exp_entry->expense_type = $request->exp_type;
       $exp_entry->expense_id = $request->exp_cate;
       $exp_entry->matter_id = $request->matter_id;
       $exp_entry->user_id = $request->firm;
       $exp_entry->date = $request->date;
       $exp_entry->address  = $request->address;
       $exp_entry->amount  = $request->amount;
       $exp_entry->reference  = $request->ref;

       $exp_entry->save();
       return redirect()->back();
    }
    public function activity()
    {
      


    }


}