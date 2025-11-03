<?php

namespace App\Http\Controllers;

use App\Models\challenge6\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\challenge6\Service;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::all();
        return view('challenge6.indexBooking')->with('bookings',$bookings);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $status = 'create';
        $service = Service::all();
        return view('challenge6.create',compact('service'))->with('status',$status);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request )
    {
        $booking = new Booking();
        $booking->date = $request->input('date');
        $booking->time = $request->input('time');
        $booking->status = $request->input('status');
        $booking->service_id = $request->input('service_id');
        $booking->save();
        return redirect('bookings');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        // $booking = Booking::find($id);
        $status = 'update';
        return view('challenge6.create',compact('booking'))->with('status',$status);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
