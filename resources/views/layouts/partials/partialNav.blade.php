<style>

#menu {
background-image: linear-gradient(to right bottom, #807fe2, #8178db, #8271d4, #8369cd, #8462c6);
  height: 100%;
  left: 0;
  opacity: 0;
  overflow: hidden;
  position: fixed;
  text-align: center;
  font-family: kshandwrt, sans-serif;
  top: 0;
  transition: all 0.7s ease-in-out;
  visibility: hidden;
  width: 100%;
  z-index: 1100;
}
#menu.open {
  opacity: 1;
  visibility: visible;
}
#menu.open li:nth-child(1) {
  -webkit-animation-delay: 0.1s;
          animation-delay: 0.1s;
}
#menu.open li:nth-child(2) {
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s;
}
#menu.open li:nth-child(3) {
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s;
}
#menu.open li:nth-child(4) {
  -webkit-animation-delay: 0.4s;
          animation-delay: 0.4s;
}
#menu.open li:nth-child(5) {
  -webkit-animation-delay: 0.5s;
          animation-delay: 0.5s;
}
#menu.open li:nth-child(6) {
  -webkit-animation-delay: 0.6s;
          animation-delay: 0.6s;
}
#menu.open li:nth-child(7) {
  -webkit-animation-delay: 0.7s;
          animation-delay: 0.7s;
}
#menu.open li:nth-child(8) {
  -webkit-animation-delay: 0.8s;
          animation-delay: 0.8s;
}
#menu.open li:nth-child(9) {
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
}
#menu.open li:nth-child(10) {
  -webkit-animation-delay: 1s;
          animation-delay: 1s;
}
#menu.open li {
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation-name: fadeInUp;
          animation-name: fadeInUp;
}
#menu ul:hover a {
  opacity: 0.5;
}
#menu ul a {
  -webkit-transform: translateZ(0);
  transition: opacity 0.3s ease-in-out;
}
#menu ul a:hover {
  opacity: 1;
}
#menu .main-nav {
  position: relative;
  top: 50%;
  transform: translateY(-50%);
}
#menu .main-nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
#menu .main-nav a {
  color: #ffffff;
  display: initial;
  font-size: 2.5rem;
  font-weight: bold;
  letter-spacing: 5px;
  padding: 1rem 1rem;
  text-decoration: none;
  text-transform: uppercase;
}
#menu .main-nav a:first {
  padding-top: 0;
}
#menu .menu-footer {
  padding: 2rem;
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
}
#menu .menu-footer ul {
  display: inline-block;
  list-style: none;
  margin: 0;
  padding: 0;
}
#menu .menu-footer ul li {
  display: inline;
  margin: 0 1rem;
}
#menu .menu-footer a {
  color: #ffffff;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.toggle-menu {
  background-color: transparent;
  border: none;
  cursor: pointer;
  display: inline-block;
  right: 0;
  height: 50px;
  outline: none;
  padding: 0;
  pointer-events: initial;
  position: absolute;
  vertical-align: middle;
  width: 50px;
  z-index: 1110;
}
.toggle-menu span {
  background-color: #66758C;
  content: "";
  display: block;
  height: 2px;
  left: calc(50% - 13px);
  position: absolute;
  top: calc(50% - 1px);
  transform-origin: 50% 50%;
  transition: background-color 0.2s ease-in-out, top 0.2s 0.2s ease-out, transform 0.2s linear;
  width: 26px;
}
.toggle-menu span:before, .toggle-menu span:after {
  background-color: #66758C;
  content: "";
  display: block;
  height: 2px;
  position: absolute;
  transform-origin: 50% 50%;
  transition: background-color 0.2s ease-in-out, top 0.2s 0.2s ease-out, transform 0.2s linear;
  width: 26px;
}
.toggle-menu span:before {
  top: 7px;
}
.toggle-menu span:after {
  top: -7px;
}
.toggle-menu.active span {
  background-color: transparent;
  transition: background 0.2s ease-out;
}
.toggle-menu.active span:before, .toggle-menu.active span:after {
  transition: top 0.2s ease-out, transform 0.2s 0.2s ease-out;
}
.toggle-menu.active span:before {
  top: 0;
  transform: rotate3d(0, 0, 1, -45deg);
}
.toggle-menu.active span:after {
  top: 0;
  transform: rotate3d(0, 0, 1, 45deg);
}
</style>
<header id="header">
    <nav class="part.nav">
      <button class="toggle-menu">
        <span></span>
      </button>
    </nav>
  </header>
  
  <div id="menu" class="">
    <nav class="main-nav">
      <ul>
        <li>
          <a href="{{url('/')}}">
            Home
          </a>
        </li>
        <li>
          <a href="{{route('color-palette')}}">
            Resources
          </a>
        </li>
  
        <li>
          <a href="https://laravel-portfolio.test/assets/CV Brayan Manzano.pdf" download="CV Brayan Manzano">
            Resume
          </a>
        </li>
      </ul>
    </nav>
  
    <footer class="menu-footer">
      <nav class="footer-nav">
        <ul>
          <li>
            <a href="https://codepen.io/bryandevcode" target="_blank" rel="noopener noreferrer">
              Codepen
            </a>
          </li>
          <li>
            <a href="https://github.com/BrayanCorpse" target="_blank" rel="noopener noreferrer">
              Github
            </a>
          </li>
        </ul>
      </nav>
    </footer>
  </div>

