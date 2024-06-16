<style>

.guest_header{
    background-color: transparent;
    border-bottom: 1px solid #ced4da;
}

.guest_header_content{
    padding: 15px 30px
}

.guest_header_content_logo img{
    width: 150px;
}

.guest_header_content_info{
    text-align: end
}
</style>

<div class="guest_header">
    <div class="row guest_header_content m-0">

        <div class="col guest_header_content_logo">
            <img src="{{asset('img/logo.png')}}" alt="">
        </div>

        <div class="col guest_header_content_info">
            
            @if (Route::currentRouteName() == 'register')
                Already have an account? <a href="{{route('login')}}">Login</a>
            @elseif(Route::currentRouteName() == 'login')
                Don't have an account yet? <a href="{{route('register')}}">Sign up</a>
            @endif                
        </div>

    </div>
</div>