@extends('layouts.main')

@section('content')

  <header class="header-bmc">
    <div class="logo-bmc">
      <img src="{{asset('images/BMC.png')}}" alt="Brayan Manzano" width="100" height="100">
    </div>
  </header>

  @if (Session::has('success'))
    <div class="container grid-xs">
      <div class="columns">
        <div class="toast toast-primary text-center">
          <button class="btn btn-clear float-right" onclick="closeToast(this)"></button>
          {{ Session::get('success') }}
        </div>
      </div>
    </div>
  @endif

  @error('email')
  <div class="container grid-xs">
    <div class="columns">
      <div class="toast toast-error text-center">
        <button class="btn btn-clear float-right" onclick="closeToast(this)"></button>
        {{ $message }}
      </div>
    </div>
  </div>
  @enderror

  <section class="section intro">
      <h1 class="section-heading gft-font">
          Brayan Mc
      </h1>
      <br>
      <p class="text-center text-large">💻 First of all thanks for visiting my personal website.</p>
      <div class="bar bar-sm">
        <div class="bar-item" role="progressbar" style="width:100%;" aria-valuemax="100"></div>
      </div>
      <br>
      <h2 class="text-center">📌Hey there, I'm Brayan Manzano ICT Engineer and Web Developer.</h2>
      <br>
      <p class="text-center text-large">
        🤝 I enjoy sharing my knowledge and helping others when possible.
      </p>
      <br>
      <div class="">
        <a href="{{asset('assets/CV-Manzano-Cortes-Brayan.pdf')}}" class="fill br-btn" download="CV"> 
          Resume 
        </a>
        <a href="https://github.com/BrayanCorpse" target="_blank" rel="noopener noreferrer" class="slide br-btn">
            <div>Github</div>
            <i class="icon icon-arrow-right"></i>
        </a>
      </div> 
  </section>

    @include('components.cardProjects')

    @include('components.timeline')

    @include('components.skills')

    @include('components.footer')
    

@endsection

@push('js')

<script>
  function closeToast(toast) {
    toast.parentNode.remove();
  }
</script>
    
@endpush