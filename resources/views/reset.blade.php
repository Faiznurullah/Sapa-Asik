@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12"> 
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Reset Password</h6>
        </div>
        <div class="card-body" style="height: 200px;">

            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="row">
                    <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" placeholder="{{ Auth::user()->email }}" aria-label="Disabled input example" readonly required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row ml-5 mt-3">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success btn-sm ml-5">
                            {{ __('Send Password Reset Link') }}
                        </button>
                        <a href="/home" type="submit" class="btn btn-success btn-sm ml-2">
                            {{ __('Kembali') }}
                        </a>
                    </div>
                </div>

            </form>
           
      
  </div>
</div>
</div>
</div>

</div>


@endsection