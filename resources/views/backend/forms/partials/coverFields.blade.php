<div class="form-group">
    <div class="col-3 col-sm-12">
      <label class="form-label text-bold" for="title">Cover title</label>
    </div>
    <div class="col-9 col-sm-12">
      <input class="form-input" id="title" type="text" 
              placeholder="Cover title"
     
              autofocus
              autocomplete="title"
              name="title"
              value="{{ old('title', $cover->title) }}">
      @error('title') <span class="text-error">{{ $message }}</span> @enderror
    </div>
  </div>
  <div class="form-group">
    <div class="col-3 col-sm-12">
      <label class="form-label text-bold" for="cover">Cover Image</label>
    </div>
    <div class="col-9 col-sm-12">
      @if ($cover->url == null)

        <input class="form-input" id="cover" type="file" name="url"
        accept="image/png, image/jpeg, image/svg">
        @error('url') <span class="text-error">{{ $message }}</span> @enderror

        @else

        <div class="image-container">
          <img src="{{ Storage::disk('s3')->url($cover->url) }}" width="150" height="120">
        </div>

        <input class="form-input" id="cover" type="file" name="url"
        accept="image/png, image/jpeg, image/svg">
        @error('url') <span class="text-error">{{ $message }}</span> @enderror

      @endif
    </div>
  </div>
  