<style>
.toast-container {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
}

.page-header h1 {
  margin-bottom: 24px;
  text-align: center;
  color: #282c36;
}

.mess {
  display: flex;
  margin-top: 3rem;
  padding: 0.55rem;
  width: 50%;
  background-color: #fafafa;
  border-radius: 0.3125rem;
}
.mess.success {
  box-shadow: 0px 0px 0.625rem 0.0625rem #38ddbc;
}
.mess.error {
  box-shadow: 0px 0px 0.625rem 0.0625rem #ea8075;
}
.mess-status {
  position: relative;
  padding-left: 1.25rem;
  padding-top: 0.875rem;
  font-size: 2rem;
}
.mess-status::before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 0.3125rem;
  height: 100%;
  border-radius: 0.375rem;
}
.success .mess-status {
  color: #16A085;
}
.success .mess-status::before {
  background-color: #16A085;
}
.error .mess-status {
  color: #f55c4b;
}
.error .mess-status::before {
  background-color: #f55c4b;
}
.mess-content {
  flex: 1;
  padding: 0.5rem 1rem;
}
.mess-content-title {
  font-family: "Encode Sans", sans-serif;
  font-size: 1.25rem;
  line-height: 1.5;
  color: #282c36;
}
.mess-content-subtitle {
  font-size: 1rem;
  line-height: 1.5;
  letter-spacing: 0.03125rem;
  color: #a9abaf;
}
.mess-close {
  margin-top: 1rem;
  font-size: 1.75rem;
  color: #a9abaf;
  cursor: pointer;
  transition: 0.3s;
}
.mess-close:hover {
  color: #282c36;
}
@media only screen and (max-width: 600px) {
  .mess {
    width: 75%;
  }
}
</style>

<div class="toast-container">
    @if (Session::has('success'))
    <div class="mess success">
        <div class="mess-status">
          <i class="bi bi-check-circle-fill"></i>
        </div>
    
        <seection class="mess-content">
          <h3 class="mess-content-title">
            Success
          </h3>
    
          <p class="mess-content-subtitle">
            {{ Session::get('success') }}
          </p>
        </seection>
    
        <div class="mess-close" onclick="toast()">
          <i class='bx bx-x'></i>
        </div>
      </div>
    @endif

    @error('email')
    <div class="mess error">
      <div class="mess-status">
        <i class="bi bi-x-circle-fill"></i>
      </div>
  
      <seection class="mess-content">
        <h3 class="mess-content-title">
          Error
        </h3>
  
        <p class="mess-content-subtitle">
          {{ $message }}
        </p>
      </seection>
  
      <div class="mess-close" onclick="toast()">
        <i class='bx bx-x'></i>
      </div>
    </div>
    @enderror
</div>
  
<script>
    function toast(){
    // Obtener el elemento del "toast"
    let toast = document.querySelector('.mess');
     // Aplicar la animación de desvanecimiento (fadeOut)
        toast.style.transition = 'opacity 0.5s';
        toast.style.opacity = '0';
    // Esperar un corto período de tiempo antes de eliminar el "toast"
      setTimeout(function() {
        toast.remove();
      }, 500); // Aquí puedes ajustar el tiempo de espera (500ms en este caso)
  }
</script>
  