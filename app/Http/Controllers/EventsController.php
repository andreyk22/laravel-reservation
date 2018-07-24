<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Calendar;
use Validator;
use App\Events;

class EventsController extends Controller
{
    public function index()
    {
        $events = Events::get();
        $event_list = [];
        foreach ($events as $key => $event) {
            if ($event->status == 'approved') {
                $event_list[] = Calendar::event(
                    $event->event_name,
                    true,
                    new \DateTime($event->start_date),
                    new \DateTime($event->end_date. ' +1 day')
                );
            }
           
        }
        $calendar_details = Calendar::addEvents($event_list);
        return view('events', compact('calendar_details'));

    }

    public function addEvent(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'event_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',

        ]);
        if ($validator->fails()) {
            \Session::flash('warning','Please enter values');
            return Redirect::to('/')->withInput()->withErrors($validator);
        }

        $event = new Events;
        $event->event_name = $request['event_name'];
        $event->start_date = $request['start_date'];
        $event->end_date = $request['end_date'];
        $event->status = 'pending';
        $event->save();

        \Session::flash('success', 'Request is successfully sent.');
        return Redirect::to('/');
        
    }
}
