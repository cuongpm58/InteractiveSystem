<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\HomeRequest;
use App\Requirement;
class HomeController extends Controller
{
    public function getSuCo()
    {
        return view('home.khac-phuc-su-co');
    }
    public function postSuCo(HomeRequest $request)
    {
        $requirement = new Requirement;
        $requirement->user = $request->username;
        $requirement->atm_id = $request->atmid;
        $requirement->serial_number = $request->serialnumber;
        $requirement->address = $request->address;
        $requirement->branch_manager = $request->donviquanly;
        $requirement->type_atm = $request->loaimay;
        $requirement->incident_time = $request->time;
        $requirement->status = $request->status;
        $requirement->name_contact = $request->namecontact;
        $requirement->phone_contact = $request->phonecontact;
        $requirement->email_contact = $request->emailcontact;
        $requirement->save();
        return redirect('home');
    }
    public function baotri()
    {
    	return view('home.bao-tri');
    }
    public function trasoat()
    {
    	return view('home.tra-soat');
    }
    public function khac()
    {
    	return view('home.yeu-cau-khac');
    } 
}
