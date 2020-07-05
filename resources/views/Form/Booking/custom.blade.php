@extends('app')

@section('title')
    Booking - Custom
@endsection
@section('content')
    <div class="px-10 form py-7">
        <h4 class="h4 text-center">Please Fill The Form Below</h4>
        <p class="pb-5 text-center">Fill the field with real information for book the package</p>

        <div class="px-10">
            <form action="/booking/custom" method="post">
                {{ csrf_field() }}
                <div class="form-row my-2">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Full Name" name="fullname" required>
                  </div>
                  <div class="col">
                    <input type="tel" class="form-control" placeholder="Phone Number" name="phone" required>
                  </div>
                </div>
                <div class="form-group my-2">
                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                </div>
                <div class="form-row my-2">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="h6 font-weight-bold" for="adults">Adults</label>
                            <select class="form-control" name="adults" id="adults">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="h6 font-weight-bold" for="children">children < 5 Y.O </label>
                            <select class="form-control" name="children" id="children">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="h6 font-weight-bold" for="start_date">Date of Arrival</label>
                            <input type="date" id="start_date"  name="start_date" class="form-control" required">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="h6 font-weight-bold" for="end_date">Date Of Depature</label>
                            <input type="date" id="end_date" name="end_date" class="form-control" required">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label class="h6 font-weight-bold" for="arrival">Airport of Arrival</label>
                        <select class="airport form-control" id="arrival" name="arrival">
                            <option value="">Select Airport</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label class="h6 font-weight-bold" for="depature">Airport Of Depature</label>
                        <select class="airport form-control" id="depature" name="depature">
                            <option value="">Select Airport</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="h6 font-weight-bold" for="hostel">Hostel</label>
                            <select class="form-control" name="hostel" id="hostel">
                                <option value="private">Private</option>
                                <option value="dorm">Dorm</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="h6 font-weight-bold" for="hotel">Hotel</label>
                            <select class="form-control" name="hotel" id="hotel">
                                <option value="2">2 star Hotel</option>
                                <option value="3">3 star Hotel</option>
                                <option value="4">4 star Hotel</option>
                                <option value="5">5 star Hotel</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="h6 font-weight-bold" for="apartement">Apartement</label>
                            <select class="form-control" name="apartement" id="apartement">
                                <option value="full-service">Full Service</option>
                                <option value="self-catering">Self Catering</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="h6 font-weight-bold" for="arrangement">Sleeping Arrangement</label>
                            <select class="form-control" name="arrangement" id="arrangement">
                                <option value="single">Single</option>
                                <option value="double">Double</option>
                                <option value="quad">Quad</option>
                                <option value="family">Family</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="h6 font-weight-bold" for="city">Please Select City Your Want To Visit</label>
                            <select class="form-control city" name="city[]" multiple="multiple" id="city">
                                <option value="">Select City</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="h6 font-weight-bold" for="type">Type Of Visit</label>
                            <select name="type" class="form-control" id="type">
                                <option value="sightseeing">Sightseeing</option>
                                <option value="shopping">Shopping</option>
                                <option value="adventure">Adventure</option>
                                <option value="education">Education</option>
                                <option value="corporate">Corporate</option>
                                <option value="incentive">Incentive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group my-2">
                    <textarea name="notes" cols="30" rows="4" class="form-control" placeholder="OTHER SPECIFIC REQUIREMENTS, PLEASE LIST:
                    If you have specific budget, please indicate. Package will be tailored to fit your budget."></textarea>
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

@section('javascript')
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

            
            // $(".airport").keyup(function(){
            //     name = $(this).val();
            //     /*For PHP called is for Cross-Origin Request Blocked*/
            //     $.ajax({
            //     type:"GET",
            //     dataType: "json",
            //     data:{name: name},
            //     url:"test.php",
            //     success:function(data)
            //     {
            //         alert('Get Success');
            //         console.log(data);
            //     }
            //     });
            // });
        });
        $(document).ready(function () {
            $('.airport').select2({
                ajax: {
                url: 'http://localhost:8000/api/getAirport',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results:  $.map(data, function (item) {
                            return {
                                id: item.id,
                                text: item.name,
                            }
                        })
                    };
                },
                cache: true
                }
            });

            $('.city').select2({
                ajax: {
                url: 'http://localhost:8000/api/getCity',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results:  $.map(data, function (item) {
                            return {
                                id: item.id,
                                text: item.city,
                            }
                        })
                    };
                },
                cache: true
                }
            });
        })
    </script>
@endsection