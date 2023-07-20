@extends('backend.layouts.main')

@section('name__section', 'Edit Shade')

@section('content')
<form action="{{ route('updateShade', ['shade' => $shade->id]) }}" method="POST" enctype="multipart/form-data">
  @csrf @method('PATCH')
    <div class="docs-demo columns bmc-center">
        <div class="column col-5 col-sm-11">

            @include('backend.forms.partials.shadeFields')
            
            <div class="col-9 col-sm-12 mrt-2">
                <button id="save-shade" type="submit" class="btn btn-primary btn-block">
                Save Shade
                </button>
            </div>

        </div>
    </div>
</form>

@endsection

@push('js')
<script src="{{ asset('js/colorPicker.js') }}"></script>
@endpush