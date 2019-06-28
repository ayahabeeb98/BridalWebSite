<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
use  Validator;
use App\Calender;

class CalenderController extends Controller
{
    public function index(){
        $events=Calender::get();
        $event_list=[];
        foreach (@$events as $key =>$event){
            $event_list[]=Calender::event(
                $event->event_name,true,
                new \DataTime($event->start_date),
                new \DataTime($event->end_date, '+1 day')

            );
        }
        $calender_details=Calender::addEvents($event_list);
        return view('events',compact('calender_details'));
    }
    public function addEvent(Request $request){
        $validator=Validator::make($request->all(),[
            'event_name'=>'required',
                'start_date'=>'required',
                'end_date'=>'required',

            ] );
        if ($validator->fails()){
           \Session::flash('warning',"please enter a valid");
            return Redirect::to('/events')->withInput()->withError($validator);
        }

        $event=new Calender;
        $event->event_name=$request['event_name'];
        $event->start_date=$request['start_date'];
        $event->end_date=$request['end_date'];
        $event->save();
        \Session::flash('success',"event added");
        return Redirect::to('/events');














    }
}
