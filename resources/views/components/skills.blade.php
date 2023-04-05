<section class="editor">
  <div class="code-editor">
    <div class="tabs">
      <div class="title -javascript"><i class="icon devicon-javascript-plain colored"></i>Skills</div>
    </div>
    <div class="content">
      <ul class="lines">
        <li class="line"><span class="linenumber">1</span>
          <span class="comment">// Technologies I Love 💙 To Use</span>
        </li>
        <li class="line"><span class="linenumber">2</span>
          <a href="javascript:void(0)">
            <span class="skill" id="0" style="color: #F89267;">Html</span>
          </a>
        </li>
        <li class="line"><span class="linenumber">3</span>
          <a href="javascript:void(0)">
          <span class="skill" id="1" style="color: #5f88e8;">Css</span>
          </a>
        </li>
        <li class="line"><span class="linenumber">4</span>
          <a href="javascript:void(0)">
          <span class="skill" id="2" style="color: #F3DF49">JavaScript</span>
          </a>
        </li>
        <li class="line"><span class="linenumber">5</span>
          <a href="javascript:void(0)">
          <span class="skill" id="3" style="color: #fa6f68;">Laravel</span>
          </a>
        </li>
        <li class="line"><span class="linenumber">6</span>
          <a href="javascript:void(0)">
          <span class="skill" id="4" style="color: #0d8ca9;">MySQL</span>
          </a>
        </li>
        <li class="line"><span class="linenumber">7</span>
          <a href="javascript:void(0)">
          <span class="skill" id="5" style="color: #8e7ef4;">PHP</span>
          </a>
        </li>
        <li class="line"><span class="linenumber">8</span>
          <a href="javascript:void(0)">
          <span class="skill" id="6" style="color: #b8bec8">Github</span>
          </a>
        </li>
        <li class="line"><span class="linenumber">9</span>
          <a href="javascript:void(0)">
          <span class="skill" id="7" style="color: #7E13F8;">Bootstrap</span>
          </a>
        </li>
        <li class="line"><span class="linenumber">10</span>
          <a href="javascript:void(0)">
          <span class="skill" id="8" style="color: #76a5e6;">jQuery</span>
          </a>
        </li>
        <li class="line"><span class="linenumber">11</span>
          <a href="javascript:void(0)">
          <span class="skill" id="9" style="color: #b1f0f9;">UIkit</span>
          </a>
        </li>
        <li class="line"><span class="linenumber">12</span>
          <a href="javascript:void(0)">
          <span class="skill" id="10" style="color: #00979C;">Arduino</span>
          </a>
        </li>
        <li class="line"><span class="linenumber">13</span>
          <span class="" id="11" style="color: #b8bec8;">...</span>
        </li>
      </ul>
    </div>
  </div>
  <div class="logo">
    <img class="imageLogo" src="https://laravel.com/img/logomark.min.svg" alt="Skills" width="50" height="50" hidden>
  </div>
</section>

@push('js')
<script>
  const logos = [
   {
     name: "Html",
     image: "{{asset('images/html-5.svg')}}"
   },
   {
     name: "Css",
     image: "{{asset('images/css-3.svg')}}"
   },
   {
     name: "JavaScript",
     image: "{{asset('images/javascript.svg')}}"
   },
   {
     name: "Laravel",
     image: "{{asset('images/laravel.svg')}}"
   },
   {
     name: "MySQL",
     image: "{{asset('images/mysql.svg')}}"
   },
   {
     name: "PHP",
     image: "{{asset('images/php.svg')}}"
   },
   {
     name: "Github",
     image: "{{asset('images/github.svg')}}"
   },
   {
     name: "Bootstrap",
     image: "{{asset('images/bootstrap.svg')}}"
   },
   {
     name: "jQuery",
     image: "{{asset('images/jquery.svg')}}"
   },
   {
     name: "UIkit",
     image: "{{asset('images/uikit.svg')}}"
   },
   {
     name: "Arduino",
     image: "{{asset('images/arduino.svg')}}"
   }
 ];
 
 const skills = document.getElementsByClassName("skill");
 
 const image = document.querySelector('.imageLogo');
 
 
  for (let i = 0; i < skills.length; i++){
   
   skills[i].addEventListener("mouseover", (event) => {
 
       event.preventDefault();
 
       let idSkill = skills[i].getAttribute("id");
 
       const logo = logos[idSkill];
 
       image.setAttribute("src", logo.image);
       image.alt = logo.name;
       image.hidden = false;
 
   });
 
   skills[i].addEventListener("mouseout", (event) => {
 
     image.setAttribute("src", '');
     image.alt = 'Skills';
     image.hidden = true;
 
   });
 
  }
 
 </script>  
@endpush
