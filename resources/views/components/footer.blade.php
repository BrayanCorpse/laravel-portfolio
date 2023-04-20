<div class="bg-light" style="padding-top: 1rem;">
    @include('layouts.partials.header', ['sectionName' => 'MY Social', 'placeContent' => 'center', 'size' => 'clamp(1rem, 1rem + 7vw, 4rem);'])
</div>
  
<section class="social-section bg-gray" id="foo">
  <div class="social-container">
      <div class="tip">Links</div>
      <div class="share-window">
          <div class="share-bar">
              <div class="trigger">
                <a href="https://www.instagram.com/bryan.devcode/" target="_blank" rel="noopener noreferrer">
                  <i class='bx bxl-instagram'></i>
                </a>
              </div>
              <div class="trigger">
                <a href="https://github.com/BrayanCorpse" target="_blank" rel="noopener noreferrer">
                  <i class='bx bxl-github'></i>
                </a>
              </div>
              <div class="trigger">
                <a href="https://codepen.io/bryandevcode" target="_blank" rel="noopener noreferrer">
                  <i class='bx bxl-codepen'></i>
                </a>
              </div>
              <div class="trigger">
                <a href="https://www.facebook.com/bryan.manzanocortes" target="_blank" rel="noopener noreferrer">
                  <i class='bx bxl-facebook'></i>
                </a>
              </div>
              <div class="trigger">
                <a href="https://twitter.com/BrayanDevcode" target="_blank" rel="noopener noreferrer">
                  <i class='bx bxl-twitter'></i>
                </a>
              </div>
              <div class="trigger">
                <a href=" https://wa.me/527224932750" target="_blank" rel="noopener noreferrer">
                  <i class='bx bxl-whatsapp'></i>
                </a>
              </div>
          </div>
      </div>
      <div class="like">
          <div class="trigger like-btn">
            <a href="#">
              <i class='bx bxs-heart-circle'></i>
              Like <span id="counter">{{ App\Models\LikeCount::getCount() }}</span>
            </a>
          </div>
      </div>
  </div>
  <div class="footer-note">
      @include('layouts.partials.mailField')
      <p class="copyleft">Developed with 
        <i class='bx bx-heart-circle'></i> 
        <small class="gft-font">Brayan Manzano</small> 
         © 2023 - All rights reserved
      </p> 
  </div>
  @include('layouts.partials.floatMail')
</section>


@push('js')
<script>

  const likeButton = document.querySelector('.like');
  const likeCount = document.getElementById('counter');
  const heartIcon = document.querySelector('.bxs-heart-circle');

  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  likeButton.addEventListener('click', (e) => {

    e.preventDefault();

    heartIcon.classList.add('like-heart');

    fetch('{{route('like')}}', { 
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': csrfToken
      }
    })
      .then(response => response.json())
      .then(data => likeCount.textContent = data.count);

    setTimeout(() => {
      heartIcon.classList.remove('like-heart');
    }, 500)

  });

</script>
@endpush
