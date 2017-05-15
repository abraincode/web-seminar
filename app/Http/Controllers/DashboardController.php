<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

    public function indexParticipant()
    {
        return view('dashboard.participant.index');
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
    public function storeParticipant(Request $request)
    {
        // validasi data
        $this->validate($request, array(
                'fname'      => 'required',
                'lname'      => 'required|max:255',
                'email'      => 'required',
                'cell'       => 'required|numeric',
                'address'    => 'required',
                'zip'        => 'required|numeric',
                'city'       => 'required',
                'session'    => 'required',
            ));

        $participant = new Participant;
        $participant->first_name = $request->fname;
        $participant->last_name = $request->lname;
        $participant->email = $request->email;
        $participant->phone = $request->cell;
        $participant->address = $request->address;
        $participant->zip_code = $request->zip;
        $participant->city = $request->city;
        $participant->session = $request->session;
        $participant->save();

        // flash messages
        $request->session()->flash('status', 'Registration Success!');
        // redirect ke halaman
        return redirect()->route('dashboard.home.index');
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
