@extends('app')

@section('title')
    Booking - Golf
@endsection
@section('content')
    <div class="px-10 text-center form py-7">
        <h4 class="h4">Please Fill The Form Below</h4>
        <p class="pb-5">Fill the field with real information for book the package</p>

        <div class="px-10 text-left">
            <form action="/booking/car" method="post">
                {{ csrf_field() }}
                <div class="form-row my-2">
                  <div class="col">
                    @guest
                        <input type="text" class="form-control" placeholder="Full Name" name="fullname" required value="">
                    @else
                        <input type="text" class="form-control" readonly placeholder="Full Name" name="fullname" required value="{{auth()->user()->name}}">
                    @endguest
                  </div>
                  <div class="col">
                    @guest
                        <input type="tel" class="form-control" placeholder="Phone Number" name="phone" required>
                    @else
                        <input type="tel" class="form-control" placeholder="Phone Number" name="phone" required value="{{auth()->user()->phone}}" readonly>
                    @endguest
                  </div>
                </div>
                <div class="form-group my-2">
                    @guest
                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                    @else
                        <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{auth()->user()->email}}" required readonly>
                    @endguest
                </div>
                <div class="form-row my-2">
                    <div class="col">
                        <div class="form-group">
                            <label class="h6 font-weight-bold" for="package-list">Choose Package</label>
                            <select id="package-list" name="car_rent_id" required class="form-control">
                                @foreach ($cars as $g)
                                    <option value="{{$g->id}}">{{$g->Car->name}} - {{$g->destination}} - {{$g->Car->capacity}} - IDR {{number_format($g->price, 2)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label class="h6 font-weight-bold" for="start_date">Start Date</label>
                        <input type="date" id="start_date" name="start_date" class="form-control" required">
                    </div>
                    {{-- <div class="form-group col">
                        <label class="h6 font-weight-bold" for="end_date">To</label>
                        <input type="date" id="end_date" name="end_date" class="form-control" required">
                    </div> --}}
                </div>
                <div class="form-group my-2">
                    <textarea name="notes" cols="30" rows="4" class="form-control" placeholder="notes"></textarea>
                </div>


                <div class="my-5 text-center">
                    <img class="img-fluid" src="{{captcha_src()}}" alt="captcha">
                    <div class="form-group my-3">
                        <input type="text" class="mx-auto" name="captcha" id="captcha" required>
                    </div>
                </div>

                <div class="custom-control custom-checkbox w-75 mx-auto my-3">
                    <input type="checkbox" class="custom-control-input" name="check" id="customCheck1" required>
                    <label class="custom-control-label" for="customCheck1">I Would like to Book and receive email for booking confirmation from PRASINDO GOLF & TRAVEL SERVICE. <a href="#">SEE PRIVACY AND POLICY</a></label>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="py-5 text-center">
                    <button type="submit" class="btn btn-primary px-5 rounded-0 text-uppercase font-weight-bold">
                        book
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
{{-- @section('javascript')
    <script>    
        $(document).ready(function(){
            today = new Date()
            let dd = today.getDate();
            let mm = today.getMonth()+2; //January is 0!
            let yyyy = today.getFullYear();

            if(mm === 13){
                mm = 1;
                yyyy = yyyy+1;
            }
            if(dd<10){
                    dd='0'+dd;
                } 
            if(mm<10){
                mm='0'+mm;
            }
            start = yyyy+'-'+mm+'-'+dd;
            ss = new Date(start)
            
            let endDate = ss.getDate()+7;
            let endMonth = ss.getMonth()+1;
            let endFullYear = ss.getFullYear();
            if (endDate > 30 ) {
                endDate = 01;
                endMonth = endMonth+1;
            }
            if(endMonth === 13){
                endMonth = 1;
                endFullYear = endFullYear+1;
            }
            if(endDate<10){
                    endDate='0'+endDate;
                } 
            if(endMonth<10){
                endMonth='0'+endMonth;
            }
            end = endFullYear+'-'+endMonth+'-'+endDate;
            console.log(start)
            console.log(end)

            $("#start_date").attr("min", start);
            $("#end_date").attr("min", end);
        })
    </script>
@endsection --}}