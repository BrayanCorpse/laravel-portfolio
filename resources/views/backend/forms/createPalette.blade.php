@extends('backend.layouts.main')

@section('name__section', 'New Palette')

@section('content')
<form action="{{ route('storePalette') }}" method="POST" enctype="multipart/form-data">
  @csrf @method('POST')
  <div class="docs-demo columns bmc-center">
    <div class="column col-9 col-sm-11">

      @include('backend.forms.partials.paletteFields')
      
      <div class="form-group mrt-2">
        <div class="col-9 col-sm-12">
            <button id="save-cover" type="submit" class="btn btn-primary btn-block">
              Save
            </button>
        </div>
      </div>

    </div>
  </div>
</form>

@endsection