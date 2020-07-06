@if(\Illuminate\Support\Facades\Auth::check())
    <li class="nav-item">
        <div class="nav-link sidebar1">
            <div style="margin-top: -10px">
                <img style="width:25px; border-radius: 50%; margin-left: 5px"
                     src="{{asset('storage/'.\Illuminate\Support\Facades\Auth::user()->image)}}"
                     alt="My Avatar">
                <p style="text-align: center; font-size: 12px">{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
            </div>
        </div>
        <div class="sidebar"
             style="display: none; position: absolute; background: #f7f7f7; margin-top: -20px; padding: 30px; border-radius: 5px; right: 150px">
            <a class="nav-link" style="color: #34ce57"><i class="fas fa-user" style="padding-right: 20px"></i>Detail</a>
            <hr>
            <a class="nav-link" style="color: #34ce57" href="{{route('users.logout')}}"><i
                    class="fas fa-sign-out-alt" style="padding-right: 20px"></i>Logout</a>
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
            $(".sidebar").fadeIn(1000);
            $('*').on('click', function () {
                $(".sidebar").fadeOut();
            });
        });
    });
</script>



