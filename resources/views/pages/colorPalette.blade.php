@extends('layouts.main')

@section('content')

<section class="bg-light p-centered color-palette">
  
    <h1>C <sub>olor Palette</sub></h1>
    <h2 class="text-center">inspiration</h2>
    <h3 class="text-center">
      @foreach ($colors as $key=> $co)
        <span style="color: {{$co}}; text-transform: uppercase;">{{ $paletteName[$key] }}</span>
      @endforeach

      <div class="overlap">
        @foreach ($colors as $key=> $co)
          <span style="color: {{$co}}; text-transform: uppercase;">{{ $paletteName[$key] }}</span>
        @endforeach
      </div>
    </h3>


    @foreach ($codeColors as $codeColor)
      <div class="plt-name" style="padding-top: 2rem;">
          <h4> {{ $codeColor->title[0] }}
            <sub class="sub">{{ Str::after($codeColor->title, $codeColor->title[0]) }}</sub>
          </h4>
      </div>
      <ul>
        <li class="top-list" style="background-color: {{ $codeColor->color1 }}"></li>
        <li class="top-list" style="background-color: {{ $codeColor->color2 }}"></li>
        <li class="top-list" style="background-color: {{ $codeColor->color3 }}"></li>
        <li class="top-list" style="background-color: {{ $codeColor->color4 }}"></li>

        <li class="center-list"><a href="#"> {{ $codeColor->color1 }} </a></li>
        <li class="center-list"><a href="#"> {{ $codeColor->color2 }} </a></li>
        <li class="center-list"><a href="#"> {{ $codeColor->color3 }} </a></li>
        <li class="center-list"><a href="#"> {{ $codeColor->color4 }} </a></li>

        <li class="under-list" style="background-color: {{ $codeColor->color1 }}"></li>
        <li class="under-list" style="background-color: {{ $codeColor->color2 }}"></li>
        <li class="under-list" style="background-color: {{ $codeColor->color3 }}"></li>
        <li class="under-list" style="background-color: {{ $codeColor->color4 }}"></li>
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



