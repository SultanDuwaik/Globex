@extends('guest.layout')

@section('title', 'Register')



@section('content')

<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .login-area {
        width: 400px;
    }
    
    .headings {
        font-weight: bold;
        font-size: 1.8rem;
        margin-bottom: 20px
    }
    
    .guest-btn-submit {
        border: none;
        width: 100%;
        padding: 14px 30px;
        background-color: black;
        color: white;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 4px;
        font-weight: 700;
    }
    

    
    .error-message{
        color: rgb(201, 84, 84);
        font-size: 12px;
    }

</style>
    


<div class="container mt-5">
    <div class="login-area">

        <div class="headings">Hello, Create Your Account!!</div>

        <form action="{{route('register')}}" method="POST">
            @csrf
            @method('post')

            <div class="row my-3">
                <div class="col pr-0">
                    <x-text-field-component label="First Name" type="text" name="firstname"></x-text-field-component>

                    @error('firstname')
                    <span class="error-message"><i class="fa-solid fa-circle-exclamation"></i>  {{ $message }}</span>
                    @enderror
        
                    
                </div>

                <div style="width:1rem"></div>


                <div class="col pl-0">
                    <x-text-field-component label="Last Name" type="text" name="lastname"></x-text-field-component>

                    @error('lastname')
                    <span class="error-message"><i class="fa-solid fa-circle-exclamation"></i>  {{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="my-3">
                <x-text-field-component label="Email Address" type="email" name="email"></x-text-field-component>
                @error('email')
                <span class="error-message"><i class="fa-solid fa-circle-exclamation"></i>  {{ $message }}</span>
                @enderror
            </div>

            <div class="my-3">
                <x-text-field-component label="Password" type="password" name="password"></x-text-field-component>
                @error('password')
                <span class="error-message"><i class="fa-solid fa-circle-exclamation"></i>  {{ $message }}</span>
                @enderror
            </div>

            <div class="my-3">    
                <x-text-field-component label="Confirm Password" type="password" name="password_confirmation"></x-text-field-component>
            </div>
            

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id=""/>
                <label class="form-check-label" for="">I accept the general <a href="#">terms & conditions</a> of use</label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id=""/>
                <label class="form-check-label" for="">I accept the <a href="#">privacy policy</a></label>
            </div>
            
            <button type="submit" class="guest-btn-submit">Register
                <span class="arrow_right"></span>
            </button> 
        </form>

    </div>
</div>

@endsection