@extends('user.main')

@section('main-content')
<style>
 #formPageContainer{
    min-height: 100vh;
    background-color:#03256d;
}

.loginContainer{
    margin: 200px auto;
    max-width: 800px;
}

</style>
<div id="formPageContainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card loginContainer">
                <div class="card-header" st>{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="login" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail or username') }}</label>

                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control @error('credentials') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('credentials') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('credentials')
                                <small class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </small>
                            @enderror
                            </div>
                        
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
          
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
