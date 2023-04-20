@extends('layouts.main')

@section('content')

<section class="bg-light p-centered color-palette">
  
    <h1>C <sub>olor Palette</sub></h1>
    <h2 class="text-center">inspiration</h2>
    <h3 class="text-center">
      <span style="color: #9A8793">M</span>
      <span style="color: #53937F">O</span>
      <span style="color: #DEA25A">N</span>
      <span style="color: #D2DEE6">T</span>
      <span style="color: #6969A7">H</span>
      <span style="color: #C3ACA8">S</span>
      <div class="overlap">
        <span style="color: #9A8793">M</span>
        <span style="color: #53937F">O</span>
        <span style="color: #DEA25A">N</span>
        <span style="color: #D2DEE6">T</span>
        <span style="color: #6969A7">H</span>
        <span style="color: #C3ACA8">S</span>
      </div>
    </h3>


    @foreach ($palettes as $palette)
      <div class="plt-name" style="padding-top: 2rem;">
        <h4> {{ $palette->name[0] }}
          <sub class="sub">{{ Str::after($palette->name, $palette->name[0]) }}</sub>
        </h4>
      </div>
      <ul>
        <li class="top-list" style="background-color: {{ $palette->color1 }}"></li>
        <li class="top-list" style="background-color: {{ $palette->color2 }}"></li>
        <li class="top-list" style="background-color: {{ $palette->color3 }}"></li>
        <li class="top-list" style="background-color: {{ $palette->color4 }}"></li>

        <li class="center-list"><a href="#"> {{ $palette->color1 }} </a></li>
        <li class="center-list"><a href="#"> {{ $palette->color2 }} </a></li>
        <li class="center-list"><a href="#"> {{ $palette->color3 }} </a></li>
        <li class="center-list"><a href="#"> {{ $palette->color4 }} </a></li>

        <li class="under-list" style="background-color: {{ $palette->color1 }}"></li>
        <li class="under-list" style="background-color: {{ $palette->color2 }}"></li>
        <li class="under-list" style="background-color: {{ $palette->color3 }}"></li>
        <li class="under-list" style="background-color: {{ $palette->color4 }}"></li>
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

        hexCode[i].appendChild(copyMsg);

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



