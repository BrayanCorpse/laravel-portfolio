@extends('layouts.main')

@section('content')

<section class="bg-light p-centered color-palette">
  
    <h1>C <sub>olor Palette</sub></h1>
    <h2 class="text-center">inspiration</h2>
    <h3 class="text-center" style="position: relative;">
      <div>
        @foreach ($paletteName as $key=> $pa)
          <span style="text-transform: uppercase; color:{{ $colors[$key] }}">{{ $pa }}</span>
        @endforeach
      </div>

      <div class="overlap">
        @foreach ($paletteName as $key=> $pa)
          <span style="text-transform: uppercase; color:{{ $colors[$key] }}">{{ $pa }}</span>
        @endforeach
      </div>
    </h3>


    @foreach ($shades as $shade)
      <div class="plt-name" style="padding-top: 2rem;">
          <h4> {{ $shade->title[0] }}
            <sub class="sub">{{ Str::after($shade->title, $shade->title[0]) }}</sub>
          </h4>
      </div>
      <ul>
        <li class="top-list" style="background-color: {{ $shade->color1 }}"></li>
        <li class="top-list" style="background-color: {{ $shade->color2 }}"></li>
        <li class="top-list" style="background-color: {{ $shade->color3 }}"></li>
        <li class="top-list" style="background-color: {{ $shade->color4 }}"></li>

        <li class="center-list"><a href="#"> {{ $shade->color1 }} </a></li>
        <li class="center-list"><a href="#"> {{ $shade->color2 }} </a></li>
        <li class="center-list"><a href="#"> {{ $shade->color3 }} </a></li>
        <li class="center-list"><a href="#"> {{ $shade->color4 }} </a></li>

        <li class="under-list" style="background-color: {{ $shade->color1 }}"></li>
        <li class="under-list" style="background-color: {{ $shade->color2 }}"></li>
        <li class="under-list" style="background-color: {{ $shade->color3 }}"></li>
        <li class="under-list" style="background-color: {{ $shade->color4 }}"></li>
      </ul>
    @endforeach

</section>

@endsection

@push('js')

<script>
  const hexCode = document.querySelectorAll('.center-list');

  for (let i = 0; i < hexCode.length; i++){
   
    hexCode[i].addEventListener('click', (e) => {

      e.preventDefault();

      const textArea = document.createElement('textarea'); 
        textArea.value = hexCode[i].innerText;

      const copyMsg = document.createElement('strong');
            copyMsg.innerText = 'Copied';

        hexCode[i].prepend(copyMsg);

        document.body.appendChild(textArea);
        textArea.select();

        document.execCommand('copy');
        document.body.removeChild(textArea);

      setTimeout(() => {
          hexCode[i].removeChild(copyMsg);
        }, 1000);
    });
  }
   

</script>
    
@endpush



