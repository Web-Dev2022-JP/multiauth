@section('modal')
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h1 class="modal-title fs-5 d-flex justify-content-center" id="exampleModalLabel">
                        <i class='bx bxs-user h1' ></i>
                    </h1>
                    <b><span class="h3 ml-2">Log in</span></b>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    <div class="modal-body">
                        <!-- Add your login form here -->
                        
                            @csrf
                        
                            <div class="form-group">
                                <label for="user-email">{{ __('Email') }}</label>
                                <input id="user-email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="form-group mb-2">
                                <label for="user-password">{{ __('Password') }}</label>
                                <input id="user-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="form-group text-center">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        
                        
                    </div>
                    <div class="modal-footer text-center">
                        <button type="submit" class="btn btn-info form-control text-white">Login</button>
                        <p class="text-secondary form-control border-0">Don't have an account? <span class="text-info"><a href="#" data-bs-toggle="modal" data-bs-target="#signup-modal">Register here</a></span></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript code to trigger the modal -->

@endsection
