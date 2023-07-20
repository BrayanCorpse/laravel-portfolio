<div class="container group-inline">
    <div class="columns">
        <div class="col-3 col-sm-12">
            <label class="form-label text-bold" for="color1">Color 1</label>
        </div>
        <div class="col-5 col-sm-12">
            <input class="form-input text-color" type="text"name="color1"
                    id="text1" 
                    value="{{ old('color1', $shade->color1) }}"
                    onchange="updateColor(1)">
        @error('color1') <span class="text-error">{{ $message }}</span> @enderror
        </div>
        <div class="col-1 col-sm-12">
            <input class="form-input" type="color" id="color1" 
                    value="{{ old('color1', $shade->color1 ? : '#807FE2') }}"
                    oninput="updateText(1)">
        </div>
    </div>
</div>
<div class="container group-inline">
    <div class="columns">
        <div class="col-3 col-sm-12">
            <label class="form-label text-bold" for="color2">Color 2</label>
        </div>
        <div class="col-5 col-sm-12">
            <input class="form-input text-color" type="text" name="color2" 
                    id="text2" 
                    value="{{ old('color2', $shade->color2) }}"
                    onchange="updateColor(2)">
        @error('color2') <span class="text-error">{{ $message }}</span> @enderror
        </div>
        <div class="col-1 col-sm-12">
            <input class="form-input" type="color" id="color2" 
                    value="{{ old('color2', $shade->color2 ? : '#76D6A9') }}"
                    oninput="updateText(2)">
        </div>
    </div>
</div>
<div class="container group-inline">
    <div class="columns">
        <div class="col-3 col-sm-12">
            <label class="form-label text-bold" for="color3">Color 3</label>
        </div>
        <div class="col-5 col-sm-12">
            <input class="form-input text-color" type="text" name="color3"
                     id="text3" 
                     value="{{ old('color3', $shade->color3) }}"
                     onchange="updateColor(3)">
        @error('color3') <span class="text-error">{{ $message }}</span> @enderror
        </div>
        <div class="col-1 col-sm-12">
            <input class="form-input" type="color" id="color3" 
                    value="{{ old('color3', $shade->color3 ? : '#DDB1D9') }}"
                    oninput="updateText(3)">
        </div>
    </div>
</div>
<div class="container group-inline">
    <div class="columns">
        <div class="col-3 col-sm-12">
            <label class="form-label text-bold" for="color4">Color 4</label>
        </div>
        <div class="col-5 col-sm-12">
            <input class="form-input text-color" type="text" name="color4" 
                     id="text4" 
                     value="{{ old('color4', $shade->color4) }}"
                     onchange="updateColor(4)">
        @error('color4') <span class="text-error">{{ $message }}</span> @enderror
        </div>
        <div class="col-1 col-sm-12">
            <input class="form-input" type="color" id="color4" 
                    value="{{ old('color4', $shade->color4 ? : '#55C9D8') }}"
                    oninput="updateText(4)">
        </div>
    </div>
</div>

</div>
<div class="column col-5 col-sm-11">
<div class="form-group">
    <div class="col-3 col-sm-12">
        <label class="form-label text-bold" for="shade">Shade Title</label>
        </div>
        <div class="col-9 col-sm-12">
        <input class="form-input" id="shade" type="text" 
                placeholder="Shade Title"
                required
                autofocus
                autocomplete="title"
                name="title"
                value="{{ old('title', $shade->title) }}">
        @error('title') <span class="text-error">{{ $message }}</span> @enderror
    </div>
</div>
<div class="form-group">
    <div class="col-3 col-sm-12">
      <label class="form-label text-bold" for="palette">Palette</label>
    </div>
    <div class="col-9 col-sm-12">
      <select class="form-select" id="palette" required name="palette_id">
        @if ($shade->palette_id == null)
            @foreach ($palettes as $palette)
                <option value="{{ $palette->id }}" 
                    {{ old('palette_id') == $palette->id ? 'selected' : '' }}>
                    {{ $palette->name }}
                </option>
            @endforeach
        @else
            <option value="{{ $shade->palette_id }}" selected>{{ $shade->palette->name }}</option>
            @foreach ($palettes as $palette)
                @unless($shade->palette->id == $palette->id)
                    <option value="{{ $palette->id }}" 
                            {{ old('palette_id') == $palette->id ? 'selected' : '' }}>
                        {{ $palette->name }}
                    </option>
                @endunless
            @endforeach
        @endif
      </select>
    @error('palette_id') <span class="text-error">{{ $message }}</span> @enderror
    </div>
</div>