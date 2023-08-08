<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->start_date && $request->end_date) {
            $start_date = Carbon::parse($request->start_date)->format('Y-m-d');
            $end_date = Carbon::parse($request->end_date)->format('Y-m-d');

            $start_of_month_for_picker = Carbon::parse($request->start_date)->format('m/d/Y');
            $end_of_month_for_picker = Carbon::parse($request->end_date)->format('m/d/Y');
            
        }else{

            $start_date = $request->start_date;
            $end_date = $request->end_date;
        
            $year_arr = date('Y');
            $fn_month = date('m');

            $start_of_month_for_picker = Carbon::now()->startOfMonth()->format('m/d/Y');
            $end_of_month_for_picker = Carbon::now()->endOfMonth()->format('m/d/Y');
            
            $date_range_arr = [date("Y-m-d", strtotime($year_arr . "-" . $fn_month . "-01")),
            date("Y-m-d", strtotime($year_arr + 1 . "-" . $fn_month . "-01 - 1 day"))];

        }

        $productCategory = DB::table('product_category')->get()->pluck('name')->toArray();
        return view('backEnd/dashboard',compact('productCategory','start_of_month_for_picker','end_of_month_for_picker'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
