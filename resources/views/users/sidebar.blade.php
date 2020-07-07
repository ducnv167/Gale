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
             style="display: none; position: absolute; background: #072685; padding: 30px; border-radius: 5px">
            <a class="nav-link">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
            <hr>
            <a class="nav-link">Detail</a>
            <hr>
            <a class="nav-link" href="{{route('users.logout')}}">Logout</a>
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



