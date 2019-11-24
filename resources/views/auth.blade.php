<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('general.auth')}}</title>
    <link href="{{ URL::asset('assets/css/auth-page/style.css') }}" rel="stylesheet" />
</head>
<body>

    <div class="center-pane" id="center-pane">
        
        <div class="register-pane hide" id="register-pane">
            <h1 class="form-title">{{__('auth-page.register-title')}}</h1>
                <form action="" method="POST" class="form-container">
                    <input type="text" name="names" class="form-txt" placeholder="{{__('auth-page.register-txt-name')}}" required>
                    <input type="text" name="phone" class="form-txt" placeholder="{{__('auth-page.register-txt-email')}}" required>
                    <input type="password" name="password" class="form-txt" placeholder="{{__('auth-page.register-txt-pass')}}" required>
                    <input type="password" name="c-password" class="form-txt" placeholder="{{__('auth-page.register-txt-cpass')}}" required>

                    <div class="submit-container">
                        <input type="submit" value="{{__('auth-page.register-btn-submit')}}" class="btn-submit">
                    </div>
                </form>

                <div class="form-social register-pane-social">
                    <hr>
                    <p class="social-label">{{__('auth-page.singin-options')}}</p>
                    <div class="social-container">
                        <button class="image-btn"><img src="{{ URL::asset('assets/img/auth-page/face-btn.png') }}" alt="{{__('auth-page.face-alt')}}"></button>
                        <button class="image-btn"><img src="{{ URL::asset('assets/img/auth-page/google-btn.png') }}" alt="{{__('auth-page.google-alt')}}"></button>
                        <button class="image-btn"><img src="{{ URL::asset('assets/img/auth-page/twitter-btn.png') }}" alt="{{__('auth-page.twitter-alt')}}"></button>
                    </div>
                </div>
        </div>


        <div class="change-pane" id="change-pane">
            <h1 class="" id="change-title">{!! __('auth-page.title-change-register') !!}</h1>
            <button id="btnchange">{!! __('auth-page.btnchange-register') !!}</button>
        </div>

        
        <div class="login-pane" id="login-pane">
            <h1 class="form-title">{{__('auth-page.login-title')}}</h1>
            <form action="" method="POST" class="form-container">
                <input type="text" name="email" class="form-txt" placeholder="{{__('auth-page.login-txt-email')}}" required>
                <input type="password" name="password" class="form-txt" placeholder="{{__('auth-page.login-txt-pass')}}" required>

                <div class="submit-container">
                    <input type="submit" value="{{__('auth-page.login-btn-start')}}" class="btn-submit">
                </div>
            </form>

            <div class="form-social">
                <a href="#" class="forgot-pass">{{__('auth-page.login-forgot')}}</a>
                <hr>
                <p class="social-label">{{__('auth-page.singin-options')}}</p>
                <div class="social-container">
                    <button class="image-btn"><img src="{{ URL::asset('assets/img/auth-page/face-btn.png') }}" alt="{{__('auth-page.face-alt')}}"></button>
                    <button class="image-btn"><img src="{{ URL::asset('assets/img/auth-page/google-btn.png') }}" alt="{{__('auth-page.google-alt')}}"></button>
                    <button class="image-btn"><img src="{{ URL::asset('assets/img/auth-page/twitter-btn.png') }}" alt="{{__('auth-page.twitter-alt')}}"></button>
                </div>
            </div>
        </div>
    </div>
    
</body>

<script>
    const btnChange = document.getElementById('btnchange');
    var register = true;

    function toggleText(){
        const title = document.getElementById("change-title");
        if(register){
            btnChange.innerHTML = "{!! __('auth-page.btnchange-login') !!}";
            title.innerHTML = "{!! __('auth-page.title-change-login') !!}";
            register = false;
        }else{
            btnChange.innerHTML = "{!! __('auth-page.btnchange-register') !!}";
            title.innerHTML = "{!! __('auth-page.title-change-register') !!}";
            register = true;
        }
    }

</script>
<script src="{{ URL::asset('assets/js/auth-page/app.js') }}"></script>
</html>