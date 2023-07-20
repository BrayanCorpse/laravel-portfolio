<div class="form-group">
    <div class="col-3 col-sm-12">
      <label class="form-label text-bold" for="name">Palette Name</label>
    </div>
    <div class="col-9 col-sm-12">
      <input class="form-input" id="name" type="text" 
              placeholder="Palette Name"
              required
              autofocus
              autocomplete="name"
              name="name"
              value="{{ old('name', $palette->name) }}">
      @error('name') <span class="text-error">{{ $message }}</span> @enderror
    </div>
  </div>
  <div class="form-group">
    <div class="col-3 col-sm-12">
      <label class="form-label text-bold" for="cover">Cover Image</label>
    </div>
    <div class="col-9 col-sm-12">
      @if ($palette->url == null)

        <input class="form-input" id="cover" type="file" name="url"
        accept="image/png, image/jpeg, image/svg">
        @error('url') <span class="text-error">{{ $message }}</span> @enderror

        @else

        <div class="image-container">
          <img src="{{ Storage::disk('s3')->url($palette->url) }}" width="150" height="120">
        </div>

        <input class="form-input" id="cover" type="file" name="url"
        accept="image/png, image/jpeg, image/svg">
        @error('url') <span class="text-error">{{ $message }}</span> @enderror

      @endif
    </div>
  </div>
  <div class="form-group">
      <div class="col-3 col-sm-12">
        <label class="form-label text-bold" for="type">Type</label>
      </div>
      <div class="col-9 col-sm-12">
        <select class="form-select" id="type" name="type" required>
          @if ($palette->type == null)
            @foreach ($types as $type)
              <option value="{{ $type }}" {{ old('type') == $type ? 'selected' : '' }}>
                {{ $type }}
              </option>
            @endforeach
          @else
              <option value="{{ $palette->type }}" selected>{{ $palette->type }}</option>
              @foreach ($types as $type)
                @unless($type == $palette->type)
                    <option value="{{ $type }}" 
                            {{ old('type') == $type ? 'selected' : '' }}>
                      {{ $type }}
                    </option>
                @endunless
              @endforeach
          @endif
        </select>
        @error('type') <span class="text-error">{{ $message }}</span> @enderror
      </div>
  </div>