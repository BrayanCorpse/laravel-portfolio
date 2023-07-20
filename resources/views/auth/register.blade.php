@extends('backend.layouts.main')

@section('name__section', 'User Registration')

@section('content')
<div class="column col-9 col-sm-11">
    <form class="form-horizontal" action="{{ route('register.store') }}" method="POST">
      @csrf @method('POST')
      <div class="form-group">
        <div class="col-3 col-sm-12">
          <label class="form-label text-bold" for="name">Name</label>
        </div>
        <div class="col-9 col-sm-12">
            <input class="form-input" id="name" type="text" placeholder="Name"
                    name="name" value="{{ old('name') }}" 
                    required
                    autocomplete="name" 
                    autofocus>
          @error('name') <span class="text-error">{{ $message }}</span> @enderror
        </div>
      </div>
      <div class="form-group">
        <div class="col-3 col-sm-12">
          <label class="form-label text-bold" for="email">E-mail Address</label>
        </div>
        <div class="col-9 col-sm-12">
            <input class="form-input" id="email" type="email" placeholder="mail@example.dev"
                    name="email" value="{{ old('email') }}" 
                    required 
                    autocomplete="username" 
                    autofocus>
          @error('email') <span class="text-error">{{ $message }}</span> @enderror
        </div>
      </div>
      <div class="form-group">
        <div class="col-3 col-sm-12">
            <label class="form-label text-bold" for="password">Password</label>
        </div>
        <div class="col-9 col-sm-12">
            <input class="form-input" id="password" type="password" placeholder="password"
                    name="password" value="{{ old('password') }}"
                    required 
                    autocomplete="new-password">
            @error('password') <span class="text-error">{{ $message }}</span> @enderror
        </div>
      </div>
      <div class="form-group">
        <div class="col-3 col-sm-12">
            <label class="form-label text-bold" for="passwordInput">
                Confirm Password
            </label>
        </div>
        <div class="col-9 col-sm-12">
          <div class="has-icon-right">
            <input class="form-input" id="passwordInput" type="password"
                    placeholder="password"
                    name="password_confirmation" 
                    required 
                    autocomplete="new-password">
            <i id="lockIcon" class="form-icon bx bx-lock-alt"
                    onclick="togglePasswordVisibility()"
                    style="cursor: pointer">
            </i>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-3 col-sm-12">
            <label class="form-label text-bold" for="save-register">
                Save Register
            </label>
        </div>
        <div class="col-9 col-sm-12">
            <button id="save-register" type="submit" class="btn btn-primary btn-block">
              Register
            </button>
        </div>
      </div>
    </form>
  </div>
@endsection

@push('js')
    <script src="{{ asset('js/unlockPassword.js') }}"></script>
@endpush