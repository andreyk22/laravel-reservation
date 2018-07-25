<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Events;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index()
    {
        $status = 'pending';
        $events = Events::where('status', $status)->get();
        return view('admin')->with('events', $events);
    }
    public function denied()
    {
        $status = 'denied';
        $events = Events::where('status', $status)->get();
        return view('admin_denied')->with('events', $events);
    }
    public function finished()
    {
        $status = 'approved';
        $today = date('Y-m-d H:i:s');
        $events = Events::where('end_date','<', $today)->where('status', $status)->get();
        return view('admin_finished')->with('events', $events);
    }

    public function approve($id)
    {
        $events = Events::find($id);
        $status = 'approved';
        $events->status = $status;
        $events->save();
        \Session::flash('success', 'Event approved successfully.');
        return Redirect::to('/admin');
    }
    public function deny($id)
    {
        $events = Events::find($id);
        $status = 'denied';
        $events->status = $status;
        $events->save();
        \Session::flash('success', 'Event reservation denied successfully.');
        return Redirect::to('/admin');
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
