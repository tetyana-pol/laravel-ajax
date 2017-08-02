<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use DB;
class IndexController extends Controller
{
	public function index(){

		$leads=DB::table('leads')->join('customers','customers.id','=','leads.customer_id')
		       ->join('open_leads','leads.id','=','open_leads.lead_id')
		       ->select('leads.id','leads.date','leads.name','customers.phone','leads.email','open_leads.agent_id')
			   ->where('open_leads.agent_id','=','14')->get();
		
	return view('test')->with('leads',$leads);	
	}

   public function show($id){
	 $lead=DB::table('leads')->join('customers','customers.id','=','leads.customer_id')
		       ->join('open_leads','leads.id','=','open_leads.lead_id')
		       ->select('leads.id','leads.date','leads.name','customers.phone','leads.email','open_leads.agent_id')
			   ->where('open_leads.agent_id','=','14')->where('leads.id','=',$id)->first(); 
			   $table["date"]=$lead->date;
		$table["name"]=$lead->name;
		$table["phone"]=$lead->phone;
		$table["email"]=$lead->email;
	return \Response::json($table);  
   }	
	
}