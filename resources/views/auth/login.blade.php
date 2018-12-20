@extends('layouts.app')
@section('title', 'SMART-POS')
@section('login_content')
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
                
    {{-- start login_wrapper --}}
    <div class="login_wrapper">
            
        {{-- start animate form login_form --}}
        <div class="animate form login_form">
                        
            {{-- start login_content --}}
            <section class="login_content">
                {{Form::open(['route' => 'login'])}}
                <h1 style="color:text-transform: uppercase">Login Form</h1>
                <div>
                    <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus />
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert" style="position: relative; top: -15px; left: -40px; color: red;">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div>
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required />
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert" style="position: relative; top: -15px; left: -40px; color: red;">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div>
                    {{Form::submit('Log in', ['class' => 'btn btn-success btn-block submit', 'style' => 'margin: auto;'])}}
                </div><br><br>
                <span class="reset_pass" style="">Forget password? Click <a href="#">here</a></span>
                
                <div class="clearfix"></div>
            
                {{-- start separator --}}
                <div class="separator">
                    {{-- <p class="change_link">New to site?
                        <a href="#signup" class="to_register"> Create Account </a>
                    </p>
                        
                    <div class="clearfix"></div>
                    <br /> --}}
                        
                    <div>
                        <p>&copy; <?php echo date('Y') ?> SMART-POS | Developed by Ronley Vinberk</p>
                    </div>
                </div>
                {{-- end separator --}}
                {{Form::close()}}
            </section>
            {{-- end login_content --}}
                    
        </div>
        {{-- end animate form login_form --}}
                
    </div>
    {{-- end login_wrapper --}}
</div>
@endsection