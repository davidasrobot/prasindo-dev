<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Prasindo - @yield('title')</title>
        <link rel="icon" type="image/png" href="{{asset('/images/logo.png')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/slick/slick/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/slick/slick/slick-theme.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    </head>
    <body>
        <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-light bg-light px-0 ">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img class="brand" src="{{asset('/images/logo.png')}}" alt="logo prasindo">
                </a>
                <button id="open-nav" class="btn btn-light font-size-md mr-3" style="font-size: 20px"><i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item mx-3 active">
                      <a class="nav-link" href="/golf">Golf</a>
                    </li>
                    <li class="nav-item mx-3">
                      <a class="nav-link" href="/city-travel">City Travel</a>
                    </li>
                    <li class="nav-item mx-3">
                      <a class="nav-link" href="/car-rent">Car Rent</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/hotel">Hotels</a>
                    </li>
                    @guest
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                    @endguest
                    @auth
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endauth
                  </ul>
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a href="/booking/" class="nav-link btn btn-primary rounded-0 text-white px-5 ">
                            Book
                          </a>
                      </li>
                  </ul>
                </div>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" id="close-nav" class="closebtn"><i class="fa fa-times"></i></a>
                    <a href="/" class="py-5 text-center"><img width="150" src="{{asset('images/logo.png')}}" alt=""></a>
                    <a href="/golf">Golf</a>
                    <a href="/city-travel">Holidays</a>
                    <a href="/car-rent">Transport Services</a>
                    <a href="#">Contact Us</a>
                    @guest
                        <a href="/login">Login</a>
                    @endguest
                    @auth
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endauth
                    <a href="/booking/" class="btn btn-primary px-3 rounded-0 text-white">Book</a>
                  </div>
            </div>
        </nav>

        <div class="position-fixed whatsapp-fixed">
            <button class="btn rounded-circle btn-lg btn-success" type="button" id="whatsapp-float"
                data-container="body" 
                data-toggle="popover" 
                data-placement="left" 
                data-content="Whatsapp Number: <br/> <a href='tel:12345567890'>12345567890</a><br/> <a href='tel:12345567890'>12345567890</a>"
            ><i class="fab fa-whatsapp"></i></button>
        </div>


        @yield('header')

        <div class="container mb-5">
            @yield('content')
        </div>

        @yield('content-no-container')

        <div id="footer" class="bg-dark">
            <div class="container">
                
                <div class="row py-4 border-bottom border-white">
                    <div class="pre-line col-12 col-md-5 text-uppercase text-white py-1">
                        <b class="text-uppercase mb-3">address</b>
                        Jl. Nama Jalan 1 Jakarta Pusat, 
                        Jakarta, Indonesia 12950 
                    </div>
                    <div class="pre-line col-12 col-md-5 text-uppercase text-white py-1">
                        <b class="text-uppercase mb-3">telephone</b>
                        +62-8777-0777-7777
                    </div>
                    <div class="pre-line col text-uppercase text-white py-1">
                        <b class="text-uppercase">find us</b>
                        <div class="d-flex mt-3">
                            <a class="text-white" href="#"><i class="fab fa-facebook fa-2x"></i></a>
                            <a class="text-white" href="#"><i class="fab fa-linkedin fa-2x mx-2"></i></a>
                            <a class="text-white" href="#"><i class="fab fa-twitter-square fa-2x mx-2"></i></a>
                            <a class="text-white" href="#"><i class="fab fa-youtube fa-2x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="py-4 text-center text-white">
                    Copyright &copy; 2020 PRASINDO GOLF & TRAVEL SERVICES Allright Reserved
                </div>
            </div>
        </div>
        @auth
            @if (auth()->user()->email_verified_at == null)
            <div class="modal fade" id="warningModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="warningModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="warningModalLabel">Email Not Verified</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <h1>
                            <i class="fa fa-envelope fa-3x"></i>
                        </h1>
                        <h4 class="text-danger">Please Verify Your Email Address to continue</h4>
                    </div>
                    </div>
                </div>
            </div>
            @endif 
        @endauth
        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/vendor/slick/slick/slick.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        @yield('javascript')
        <script>
            $(document).ready(function () {
                $("#open-nav").click(function () {
                    $("#mySidenav").addClass("sidenav-open");
                });
                $("#close-nav").click(function () {
                    $("#mySidenav").removeClass("sidenav-open");
                });

                $("#warningModal").modal({show:true})
            });
            $('#whatsapp-float').popover({
                html: true
            })
        </script>
        <script>    
            $(document).ready(function(){
                var isMobile = false; //initiate as false
                // device detection
                if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
                    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
                    isMobile = true;
                }

                if(isMobile === true){
                    $(".navbar").addClass("sticky-top");
                }
                if(isMobile === false){
                    $(".navbar").addClass("fixed-top");
                }

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
                
                let endDate = ss.getDate()+1;
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
    
                $("#start_date").attr("min", start);
                $("#end_date").attr("min", end);
            })
        </script>
    </body>
</html>