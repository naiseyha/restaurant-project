@extends('Fronend.app')
<title>@yield('title','Make | Reservation')</title>
@section('section-app')


<section class=" section_padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section_tittle">
                    <p>Reservation</p>
                    <h2>Book A Table</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="regervation_part_iner">
                    <form method="POST" action="{{ route('reservations.store.step.one') }}">
                        @csrf
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="first_name *" name="first_name"  value="{{ $reservation->first_name ?? '' }}">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="last_name" placeholder="Last_name *" name="last_name"   value="{{ $reservation->last_name ?? '' }}">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="email" placeholder="email *" name="email"  value="{{ $reservation->email ?? '' }}">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="tel_number" placeholder="tel_number *" name="tel_number"  value="{{ $reservation->tel_number ?? '' }}">
                            </div>




                            <div class="form-group col-md-6">
                                <input type="datetime-local" id="res_date" name="res_date"
                                min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                                max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                                value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : '' }}"  />
                            </div>

                            <span class="text-warning">Please choose the time between 17:00-23:00.</span>

                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" id="guest_number" name="guest_number" value="{{ $reservation->guest_number ?? '' }}" placeholder="guest_number *">
                            </div>




                        </div>


                        <div class="regerv_btn">
                            <button type="submit" class="btn  btn_4">Next</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
