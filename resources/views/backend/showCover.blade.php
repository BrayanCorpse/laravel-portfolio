@extends('backend.layouts.main')

@section('name__section', 'Show Covers')

@section('content')
<div class="docs-demo columns bmc-center">
  <div class="column col-8 col-sm-11">
    <table class="table table-scroll table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Slug</th>
          <th>Cover Image</th>
          <th>Actions</th>
        </tr>
      </thead>
      @foreach ($covers as $cover)
      <tbody>
        <tr>
          <td class="text-bold">{{ $cover->id }}</td>
          <td>{{ $cover->name }}</td>
          <td>{{ $cover->slug }}</td>
          <td>
            <img src="{{ Storage::disk('s3')->url($cover->url) }}" width="100" height="90" style=" object-fit: contain;">
          </td>
          <td>{{ $cover->type }}</td>
          <td>
            {{-- @if ($cover->deleted_at === null)
              <a href="{{ route('editCover', ['cover' => $cover->id]) }}" class="btn btn-primary">
                <i class='bx bxs-pencil'></i> Edit
              </a>
              <a href="{{ route('softdeleteCover', ['cover' => $cover->id]) }}" 
                  class="btn btn-error">
                <i class='bx bxs-trash-alt'></i> Delete
              </a>
            @else
              <a href="{{ route('restoreCover', ['cover' => $cover->id]) }}" 
                  class="btn btn-primary">
                <i class='bx bxs-pencil'></i> Restore
              </a>
              <a href="{{ route('destroyCover', ['cover' => $cover->id]) }}" 
                  class="btn btn-error">
                  <i class='bx bxs-hot'></i> Destroy
              </a>
            @endif --}}
          </td>
        </tr>
      </tbody>
      @endforeach
    </table>
    {{ $covers->onEachSide(2)->links('vendor.pagination.default') }}
  </div>
</div>
@endsection
