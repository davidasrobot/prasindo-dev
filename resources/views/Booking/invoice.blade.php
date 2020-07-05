<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name=”robots” content=”noindex,nofollow”>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <script src="{{asset('/js/app.js')}}"></script>
    <title>Invoice {{$bookings->fullname}} - {{$bookings->uuid}}</title>
</head>
<body>
    <div class="container py-7">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-between">
                    <img src="{{asset('images/logo.png')}}" width="170" alt="logo Prasindo">
                    
                </div>
                <p class="py-3" style="white-space: pre">Jalan Nama Jalan 1, Jakarta Pusat,
                Jakarta. Indonesia 123456</p>
            </div>
            <div class="col">
                <h4 class="h4 text-right">INVOICE</h4>
                <p class="text-right" style="white-space: pre">Invoice Number: <b>{{$bookings->uuid}}</b>
                    Invoice Date: <b>{{$bookings->created_at}}</b>
                    Due Date: <b>{{$bookings->due_date}}</b>
                </p>
                <p class="text-right" style="white-space: pre">
                    <b>To:</b>
                    {{$bookings->email}}
                    {{$bookings->phone}}
                </p>
            </div>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Description</th>
                <th scope="col">Duration</th>
                <th scope="col">Cost</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        @if ($bookings->golf !== null)
                            {{$bookings->golf->package->name}}
                        @else
                            {{$bookings->car->package->name}}
                        @endif    
                    </th>
                    <td>
                        @if ($bookings->golf !== null)
                            {{$bookings->golf->days}} Days
                        @else
                            {{$bookings->car->days}} Days
                        @endif    
                    </td>
                    <td>Rp. {{number_format($bookings->total, 2)}}</td>
                </tr>
            </tbody>
        </table>
        <div class="col-6 float-right">
            <table class="table">
                <tr class="">
                    <td colspan=""></td>
                    <th class="pt-5">COST</th>
                    <td class="pt-5 text-right"><b>Rp. {{number_format($bookings->total, 2)}}</b></td>
                </tr>
                <tr class="">
                    <td colspan=""></td>
                    <th class="">DP 20%</th>
                    <td class="text-right"><b>Rp. {{number_format($bookings->dp, 2)}}</b></td>
                </tr>
                <tr class="">
                  <td colspan=""></td>
                  <th class="">TAX 5%</th>
                  <td class="text-right"><b>Rp. {{number_format($tax = $bookings->total * 0.05, 2)}}</b></td>
                </tr>
                <tr class="">
                    <td colspan=""></td>
                    <th class="h5 text-primary">TOTAL</th>
                    <td class="h5 text-primary text-right"><b>Rp. {{number_format($bookings->total + $tax, 2)}}</b></td>
                </tr>
            </table>
        </div>
        <div class="py-5">
            <a href="#" class="h6"><b>Terms And Condition</b></a>
            <p>Payment is due within 15 Days from the time you ordered</p>
            <button class="btn btn-secondary rounded-0 px-5 font-weight-bold text-uppercase" id="print" onclick="window.print()"><i class="fa fa-print"></i> print</button>
        </div>
    </div>
    <div class="px-10 text-center form py-7">
        Copyright &copy; 2020 PRASINDO GOLF & TRAVEL SERVICES Allright Reserved
    </div>
</body>
</html>