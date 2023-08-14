@extends('layouts.main')

@section('title', 'Palette Inspiration | '.Str::upper($shades[0]->name))
@section('canonical', request()->url())
@section('description','Discover this amazing color palette '.Str::upper($shades[0]->name).'. Find inspiration for your design, illustration, or decoration projects with this beautiful combination of tones.')

@section('ogtitle','Palette Inspiration | '.Str::upper($shades[0]->name))
@section('ogdescription','Discover this amazing color palette '.Str::upper($shades[0]->name).'. Find inspiration for your design, illustration, or decoration projects with this beautiful combination of tones.')
@section('ogurl', request()->url() )
@section('ogimage', Storage::disk('s3')->url($cover[0]->url) )

@section('twtitle','Palette Inspiration | '.Str::upper($shades[0]->name))
@section('twdescription','Discover this amazing color palette '.Str::upper($shades[0]->name).'. Find inspiration for your design, illustration, or decoration projects with this beautiful combination of tones.')
@section('twurl', request()->url())
@section('twimage', Storage::disk('s3')->url($cover[0]->url) )

@section('shared-button')
  @include('components.shareButton', ['title' => 'Palette Inspiration,'.Str::upper($shades[0]->name), 'url' => Storage::disk('s3')->url($cover[0]->url)])
@endsection

@section('content')

<section class="bg-light p-centered color-palette pb-5">
  
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

        @if ($shade->type == 'horizontal')
          <li class="top-list" style="background-color: {{ $shade->color1 }}"></li>
          <li class="top-list" style="background-color: {{ $shade->color2 }}"></li>
          <li class="top-list" style="background-color: {{ $shade->color3 }}"></li>
          <li class="top-list" style="background-color: {{ $shade->color4 }}"></li>

          <li class="center-list copy-color"><a href="#"> {{ $shade->color1 }} </a></li>
          <li class="center-list copy-color"><a href="#"> {{ $shade->color2 }} </a></li>
          <li class="center-list copy-color"><a href="#"> {{ $shade->color3 }} </a></li>
          <li class="center-list copy-color"><a href="#"> {{ $shade->color4 }} </a></li>

          <li class="under-list" style="background-color: {{ $shade->color1 }}"></li>
          <li class="under-list" style="background-color: {{ $shade->color2 }}"></li>
          <li class="under-list" style="background-color: {{ $shade->color3 }}"></li>
          <li class="under-list" style="background-color: {{ $shade->color4 }}"></li>

          @elseif ($shade->type == 'circular')

            <li class="circle-list" style="background-color: {{ $shade->color1 }}"></li>
            <li class="circle-list" style="background-color: {{ $shade->color2 }}"></li>
            <li class="circle-list" style="background-color: {{ $shade->color3 }}"></li>
            <li class="circle-list" style="background-color: {{ $shade->color4 }}"></li>

            <li class="center-list copy-color"><a href="#"> {{ $shade->color1 }} </a></li>
            <li class="center-list copy-color"><a href="#"> {{ $shade->color2 }} </a></li>
            <li class="center-list copy-color"><a href="#"> {{ $shade->color3 }} </a></li>
            <li class="center-list copy-color"><a href="#"> {{ $shade->color4 }} </a></li>

          @else

          <div class="vertical-container">

            <li class="vertical-list" style="background-color: {{ $shade->color1 }}">
              <span class="color-value copy-color">{{ $shade->color1 }}</span>
            </li>
            <li class="vertical-list" style="background-color: {{ $shade->color2 }}">
              <span class="color-value copy-color">{{ $shade->color2 }}</span>
            </li>
            <li class="vertical-list" style="background-color: {{ $shade->color3 }}">
              <span class="color-value copy-color">{{ $shade->color3 }}</span>
            </li>
            <li class="vertical-list" style="background-color: {{ $shade->color4 }}">
              <span class="color-value copy-color">{{ $shade->color4 }}</span>
            </li>
            
          </div>

        @endif
      
      </ul>
    @endforeach

</section>

@endsection

@push('js')

<script>
  const hexCode = document.querySelectorAll('.copy-color');

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



