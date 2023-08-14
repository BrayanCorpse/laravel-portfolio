
<div id="share-sheet">
  <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}&title={{ $title }}" 
      rel="noopener noreferrer nofollow"
      target="_blank" 
      class="share-link facebook" 
      title="Facebook">
    <i class='bx bxl-facebook'></i>
  </a>
  <a href="https://twitter.com/intent/tweet?url={{ Request::url() }}&amp;text={{ $title }}&amp;via=BrayanDevcode&amp;hashtags={{  Str::replace(' ', ',', $title) }}" 
      rel="noopener noreferrer nofollow" 
      target="_blank" 
      class="share-link twitter" 
      title="Twitter">
    <i class='bx bxl-twitter'></i>
  </a>
  <a href="https://api.whatsapp.com/send?text={{ $title }},{{ Request::url() }}" 
      rel="noopener noreferrer nofollow"
      target="_blank" 
      class="share-link email" 
      title="whatsapp">
    <i class='bx bxl-whatsapp'></i>
  </a>
  <a  href="//pinterest.com/pin/create/link/?url={{ Request::url() }}&media={{ $url }}&description={{ $title }}" 
      rel="noopener noreferrer nofollow"
      target="_blank" 
      class="share-link google" 
      title="Pinterest">
    <i class='bx bxl-pinterest-alt'></i>
  </a>
</div>

