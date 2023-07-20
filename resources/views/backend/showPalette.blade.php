@extends('backend.layouts.main')

@section('name__section', 'Show Palettes')

@section('content')
<div class="docs-demo columns bmc-center">
  <div class="column col-8 col-sm-11">
    <table class="table table-scroll table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Slug</th>
          <th>Cover Image</th>
          <th>Position</th>
          <th>Actions</th>
        </tr>
      </thead>
      @foreach ($palettes as $palette)
      <tbody>
        <tr>
          <td class="text-bold">{{ $palette->id }}</td>
          <td>{{ $palette->name }}</td>
          <td>{{ $palette->slug }}</td>
          <td>
            <img src="{{ Storage::disk('s3')->url($palette->url) }}" width="100" height="90" style=" object-fit: contain;">
          </td>
          <td>{{ $palette->type }}</td>
          <td>
            @if ($palette->deleted_at === null)
              <a href="{{ route('editPalette', ['palette' => $palette->id]) }}" class="btn btn-primary">
                <i class='bx bxs-pencil'></i> Edit
              </a>
              <a href="{{ route('softdeletePalette', ['palette' => $palette->id]) }}" 
                  class="btn btn-error">
                <i class='bx bxs-trash-alt'></i> Delete
              </a>
            @else
              <a href="{{ route('restorePalette', ['palette' => $palette->id]) }}" 
                  class="btn btn-primary">
                <i class='bx bxs-pencil'></i> Restore
              </a>
              <a href="{{ route('destroyPalette', ['palette' => $palette->id]) }}" 
                  class="btn btn-error">
                  <i class='bx bxs-hot'></i> Destroy
              </a>
            @endif
          </td>
        </tr>
      </tbody>
      @endforeach
    </table>
    {{ $palettes->onEachSide(2)->links('vendor.pagination.default') }}
  </div>
</div>
@endsection
