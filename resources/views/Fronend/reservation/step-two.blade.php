@extends('Fronend.app')
<title>@yield('title','Make | Reservation')</title>
@section('section-app')


<section class=" section_padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section_tittle">
                    <p> Reservation</p>
                    <h2>Make Reservation</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="regervation_part_iner">
                    <form method="POST" action="{{ route('reservations.store.step.two') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">select</label>
                                <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                    @foreach ($tables as $table)
                                    <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                                        {{ $table->name }}
                                        ({{ $table->guest_number }} Guests)
                                    </option>
                                    @endforeach
                                </select>
                              </div>
                        </div>
                        <div class="regerv_btn">
                            <a href="{{ route('reservations.step.one') }}" class="btn btn-info btn_4">Previous</a>
                            <button type="submit" class="btn btn-secondary btn_4">Make
                                Reservation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
