@extends('backend.layouts.main')

@section('name__section', 'Show Shades')

@section('content')
<div class="docs-demo columns bmc-center">
  <div class="column col-8 col-sm-11">
    <table class="table table-scroll table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Color1</th>
          <th>Color2</th>
          <th>Color3</th>
          <th>Color4</th>
          <th>Palette</th>
          <th>Actions</th>
        </tr>
      </thead>
      @foreach ($shades as $shade)
      <tbody>
        <tr>
          <td class="text-bold">{{ $shade->id }}</td>
          <td>{{ $shade->title }}</td>
          <td>
            <div class="circle-color" style="background: {{ $shade->color1 }}"></div>
          </td>
          <td>
            <div class="circle-color" style="background: {{ $shade->color2 }}"></div>
          </td>
          <td>
            <div class="circle-color" style="background: {{ $shade->color3 }}"></div>
          </td>
          <td>
            <div class="circle-color" style="background: {{ $shade->color4 }}"></div>
          </td>
          <td>{{ $shade->name }}</td>
          <td>
            @if ($shade->deleted_at === null)
              <a href="{{ route('editShade', ['shade' => $shade->id]) }}" class="btn btn-primary">
                <i class='bx bxs-pencil'></i> Edit
              </a>
              <a href="{{ route('softdeleteShade', ['shade' => $shade->id]) }}" 
                  class="btn btn-error">
                <i class='bx bxs-trash-alt'></i> Delete
              </a>
            @else
              <a href="{{ route('restoreShade', ['shade' => $shade->id]) }}" 
                  class="btn btn-primary">
                <i class='bx bxs-pencil'></i> Restore
              </a>
              <a href="{{ route('destroyShade', ['shade' => $shade->id]) }}" 
                  class="btn btn-error">
                  <i class='bx bxs-hot'></i> Destroy
              </a>
            @endif
          </td>
        </tr>
      </tbody>
      @endforeach
    </table>
    {{ $shades->onEachSide(2)->links('vendor.pagination.default') }}
  </div>
</div>
@endsection
