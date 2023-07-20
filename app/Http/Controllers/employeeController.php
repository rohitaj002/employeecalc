<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\EarningDeduction;

class employeeController extends Controller
{

        public function index(Request $request){
            $earningsDeductions  = EarningDeduction::all();

            return view('employee.employee', compact('earningsDeductions'));
        }

        public function add(Request $request)
        {
            $earningDeduction = new EarningDeduction();
            $earningDeduction->name = $request->name;
            $earningDeduction->amount = $request->amount;
            $earningDeduction->type = $request->type;
            $earningDeduction->save();
            
            return redirect()->back();
        }
    
        public function remove($id)
        {
            EarningDeduction::findOrFail($id)->delete();
            
            return redirect()->back();
        }
    
        public function calculateTotal()
        {
            $earnings = EarningDeduction::where('type', 'earning')->sum('amount');
            $deductions = EarningDeduction::where('type', 'deduction')->sum('amount');
            $total = $earnings - $deductions;
            
            return view('employee.total', compact('total'));
        }
    

        public function DifferenceOfDates(Request $request){

            $carbonDate1 = Carbon::parse($request->date1);
            $carbonDate2 = Carbon::parse($request->date2);

            $difference['finDay'] = $carbonDate1->diffInDays($carbonDate2,false);
            $difference['finMonth'] = $carbonDate1->diffinMonths($carbonDate2,false);
            $difference['finYear'] = $carbonDate1->diffinYears($carbonDate2,false);

            // die(print_r($difference));
            return view('date_result', compact('difference'));

        }
}
