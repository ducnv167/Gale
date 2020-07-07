@if(\Illuminate\Support\Facades\Auth::user())
    <div class="nav-link sidebar1">
        <div style="margin-top: -10px">
            <img style="width:25px; border-radius: 50%; margin-left: 5px"
                 src="{{asset('storage/'.\Illuminate\Support\Facades\Auth::user()->image)}}"
                 alt="My Avatar">
            <p style="text-align: center; font-size: 12px">{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
        </div>
    </div>
@else
    <p style="margin-top: -5px" class="nav-link" data-toggle="modal" data-target="#myModal">
        Login
    </p>
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



