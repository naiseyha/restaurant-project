<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Enums\TableStatus;
use App\Models\Table;
use Carbon\Carbon;
use App\Http\Requests\ReservationStoreRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = Reservation::all();
        $tables = Table::where('status', TableStatus::Avalaiable)->get();
        return view('backend.admin.reservations.index',compact('reservation','tables'));
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
    public function store(ReservationStoreRequest $request)
     {
        $table = Table::findOrFail($request->table_id);
        if ($request->guest_number > $table->guest_number) {
            // return back()->with('warning', 'Please choose the table base on guests.');
            session()->flash('error', 'Please choose the table base on guests.');
            return back();
        }

        $request_date = Carbon::parse($request->res_date);
        foreach ($table->reservations as $res) {
            if ($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
                // return back()->with('warning', 'This table is reserved for this date.');
                session()->flash('error', 'Please choose the table base on guests.');
               return back();
            }
        }


                Reservation::create($request->validated());
                session()->flash('success', 'Reservation created successfully.');
                return back();
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
    public function update(ReservationStoreRequest $request, Reservation $reservation)
    {
        $table = Table::findOrFail($request->table_id);
        if ($request->guest_number > $table->guest_number) {
            // return back()->with('warning', 'Please choose the table base on guests.');
            session()->flash('error', 'Please choose the table base on guests.');
            return back();
        }

        $request_date = Carbon::parse($request->res_date);
        $reservations = $table->reservations()->where('id', '!=', $reservation->id)->get();
        foreach ($reservations as $res) {
            if ($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
                // return back()->with('warning', 'This table is reserved for this date.');
                session()->flash('error', 'This table is reserved for this date.');
                return back();
            }
        }

            $reservation->update($request->validated());
            session()->flash('success', 'Reservation updated successfully.');
            return back();

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        session()->flash('success', 'Reservation deleted successfully.');
        return back();
    }
}