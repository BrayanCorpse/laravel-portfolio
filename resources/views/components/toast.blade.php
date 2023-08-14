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
  