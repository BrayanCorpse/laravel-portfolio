<!DOCTYPE html>
<html class="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{asset('apple-touch-icon.png')}}" property="og:image">
    <title>BMC | PANEL</title>
    <link rel="shortcut icon" href="{{asset('favicons/favicon.ico')}}" type="favicon.ico">
    <link rel="stylesheet" href="{{asset('css/spectre.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/spectre-exp.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/spectre-icons.min.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<style>
  body {
    background-color: #ebebfa;
    opacity: 0.8;
    background-image: radial-gradient(#6361DB 0.5px, #ebebfa 0.5px);
    background-size: 10px 10px;
  }
  .form-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Ajusta la altura según tus necesidades */
  }
  .roundend {
    border-radius: 0.5rem;
  }
  .mrt-2 {
    margin-top: 1rem;
  }
</style>

<body>

  @if (session('status'))
  <div class="container grid-xs mrt-2">
    <div class="columns">
      <div class="toast text-center">
        <button class="btn btn-clear float-right" onclick="closeToast(this)"></button>
          {{ Session::get('status') }}
      </div>
    </div>
  </div>
  @endif

  <section class="form-container">
    <div class="column col-4 col-sm-12">
      <a href="{{ url('/') }}">
        <img src="{{ asset('images/BMC.png') }}" 
            alt="Brayan Manzano Developer" 
            width="180" 
            height="50"
            class=" p-centered">
      </a>
      <form action="{{ route('login') }}" method="POST">
        @method('POST') @csrf
        <div class="card roundend mrt-2">
          <div class="card-body">
            <div class="form-group">
              <label class="form-label" for="email">Email</label>
              <input class="form-input" name="email" id="email" 
                    type="email" placeholder="email" value="{{ old('email') }}"
                    required autofocus>
              @error('email') <span class="text-error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group ">
              <label class="form-label" for="password">Password</label>
              <div class="has-icon-right">
                <input class="form-input" name="password" id="passwordInput" 
                      type="password" placeholder="password" value="{{ old('password') }}"
                      required>
                <i id="lockIcon" class="form-icon bx bx-lock-alt"
                    onclick="togglePasswordVisibility()"
                    style="cursor: pointer">
                </i>
              </div>
              @error('password') <span class="text-error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
              <label class="form-checkbox">
                <input type="checkbox" name="remember" id="remember" value="true">
                <i class="form-icon"></i> Remember me
              </label>
              @error('remember_token') 
                <span class="text-error">{{ $message }}</span> 
              @enderror
            </div>
          </div>
          <div class="card-footer">
            
            <div class="form-group float-right">
              <a class="btn btn-link " href="#">Forgot your password?</a>
              <button type="submit" class="btn btn-primary s-rounded">Log In</button>
            </div>

          </div>
        </div>
      </form>
    </div>
  </section>

  <script>
    function closeToast(toast) {
      toast.parentNode.remove();
    }
  </script>  
  <script src="{{ asset('js/unlockPassword.js') }}"></script>

</body>

</html>
