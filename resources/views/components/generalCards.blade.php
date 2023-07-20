<div class="container pb-5">
  <ul class="imglist">
    @foreach ($palettes as $palette)
      <li>
        <a href="{{route('showPalettes', ['paname' => $palette->slug ])}}">
          <img src="{{ Storage::disk('s3')->url($palette->url) }}">
        </a>
      </li>
    @endforeach 
  </ul>
</div>
