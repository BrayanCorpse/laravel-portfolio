<style>

    /* Body & Image List Styles
    -------------------------------------------------------------- */
    .img-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .img-list li {
      border: 5px solid transparent;
      box-sizing: border-box;
      width: 33.33%;
      float: left;
      position: relative;
      cursor: pointer;
    }
    .img-list img {
      max-width: 100%;
      vertical-align: middle;
      border: solid 1px #ccc ;
    }
    /* The hover effect
    -------------------------------------------------------------- */
    .img-list li:before {
      transition: all 0.5s ease;
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: #333;
      transform: scale(0);
    }
    .img-list li:hover:before {
      opacity: 0.5;
      transform: scale(1);
    }
    .img-list li:after {
      transition: all 0.6s ease 0.2s;
      content: "";
      position: absolute;
      top: 8px;
      left: 8px;
      right: 8px;
      bottom: 8px;
      border: 1px solid #aaa;
      background: #000;
      opacity: 0;
      transform: scale(0);
    }
    .img-list li:hover:after {
      opacity: 0.35;
      transform: scale(1);
    }
    
    
    </style>
    
<main class="section">
  <div class="section-container">
      <ul class="img-list">
        @foreach ($palettes as $palette)
          <a href="{{route('showPalettes', ['paname' => $palette->name ])}}">
              <li><img src="{{asset('images/palettes/'.$palette->name.'.jpg')}}"></li>
          </a> 
        @endforeach 
          {{-- <li><img src="{{asset('images/palettes/medios.jpg')}}"></li> --}}
      </ul>  
  </div>     
</main>