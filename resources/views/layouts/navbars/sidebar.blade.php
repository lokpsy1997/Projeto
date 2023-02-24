<style>
    footer {
        /* background: #ffab62; */
        /* margin-top:-10%; */
        width: 100%;
        height: 6%;
        position: absolute;
        bottom: 0;
        left: 0;
        padding-bottom: 30px;
    }

</style>
<div class="sidebar" data-color="azure" data-background-color="black"
    data-image="{{ asset('material') }}/img/sidebar-7.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
    <link rel="icon" type="image/png" href="">
  -->




    <div class="logo row ">
        <div class="row user" style="height:40px">
            <div class="photo" style="margin-left:40px; position:fixed; ">
                <img width="40" height="40" src="{{ asset('material') }}/img/logo.png">
            </div>
            <div class="user-info" style="margin-left:29%;margin-top:2px">
                <a class="logo-normal">
                    {{-- <img width="120" height="40" src="{{ asset('material') }}/img/Nomeemp.png"> --}}
                    <a class="simple-text logo-normal" style="color: rgb(255, 255, 255);">
                        Projeto
                    </a>
                </a>
            </div>
        </div>
    </div>

    <div class="logo row ">
        <div class="row user" style="height:25px">
            <div class="photo" style="margin-left:45px; position:fixed; ">
                <img src="/storage/../material/img/faces/user2.jpg" class="rounded-circle" width="30px" height='30px'>
            </div>
            <div class="user-info" style="margin-left:29%;margin-top:2px">
                <a data-toggle="collapse" href="#collapseExample" class="logo-normal">
                    {{substr(Auth::user()->name, 0, 16)}}
                    <b class="caret"></b>
                </a>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.edit') }}">

                        <span class="material-icons  " style="font-size:20px;"> account_circle </span>
                        <span class="sidebar-normal"> Conta </span>

                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <span style="font-size:15px;margin-left:3px" class="fa fa-power-off"></span>
                        {{-- <span class="material-icons" style="font-size:20px;">logout </span> --}}
                        <span class="sidebar-normal"> {{ __('Sair') }} </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <div class="sidebar-wrapper">
        <ul class="nav">

            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="material-icons">menu</i>
                <p>{{ __('Inicio') }}</p>
            </a>
            </li>



 




            <!-- @include('layouts.navbars.sidebar.user') -->






        </ul>


        <footer id="rodape">
            {{-- <button type="button" class="btn btn-primary">Primary</button> --}}
            {{-- <a style="float: right;margin-right:6%;"class="text-primary" href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                class="fa fa-sign-out "></i>{{ __('') }}</a> --}}
            {{-- <a style="float: right;margin-right:6%;" class="text-secondary" href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                class="fa fa-power-off"></i>{{ __('') }}</a> --}}

        </footer>

    </div>
</div>

<script>
    function minimizarsidbar() {
      // var $btn = $(this);
      if (md.misc.sidebar_mini_active == true) {
        $('body').removeClass('sidebar-mini');
        md.misc.sidebar_mini_active = false;
      } else {
        $('body').addClass('sidebar-mini');
        md.misc.sidebar_mini_active = true;
      }
      // we simulate the window Resize so the charts will get updated in realtime.
      var simulateWindowResize = setInterval(function() {
        window.dispatchEvent(new Event('resize'));
      }, 180);
      // we stop the simulation of Window Resize after the animations are completed
      setTimeout(function() {
        clearInterval(simulateWindowResize);
      }, 1000);
    }
  </script>
