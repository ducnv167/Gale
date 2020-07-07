@if(\Illuminate\Support\Facades\Auth::user())
    <li class="nav-item">
        <div class="nav-link sidebar1">
            <div>
                <img style="width:50px; border-radius: 100%"
                     src="{{asset('storage/'.\Illuminate\Support\Facades\Auth::user()->image)}}"
                     alt="My Avatar">
            </div>
        </div>
        <div class="sidebar"
             style="display: none; position: absolute; background: #f7f7f7; padding: 30px; border-radius: 5px">
            <a style="color: #34ce57; text-align: center" class="nav-link"> <img style="width:30px; border-radius: 100%; margin: auto; display: block"
                                                             src="{{asset('storage/'.\Illuminate\Support\Facades\Auth::user()->image)}}"
                                                             ><div>{{\Illuminate\Support\Facades\Auth::user()->name}}</div></a>
            <hr>
            <a style="color: #34ce57" class="nav-link"><i style="margin-right: 15px" class="fas fa-user-alt"></i>Detail</a>
            <hr>
            <a style="color: #34ce57" class="nav-link" href="{{route('users.logout')}}"><i style="margin-right: 15px" class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </li>
@else
    <li class="nav-item">
        <div class="nav-link btn" data-toggle="modal" data-target="#myModal">
            Login
        </div>
    </li>
    <li class="nav-item">
        <div data-toggle="modal" data-target="#myModalRegister" class="nav-link btn">Register</div>
    </li>
@endif
<script>
    $(document).ready(function () {
        $(".sidebar1").hover(function () {
            $(".sidebar").fadeIn();
            $('*').on('click', function () {
                $(".sidebar").fadeOut();
            });
        });
    });
</script>



