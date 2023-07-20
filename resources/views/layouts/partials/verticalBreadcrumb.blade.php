<div class="vertical-bread"> 
    <a href="{{ url('/') }}">Home</a>
    @php
        $segments = collect(Request::segments())->filter(function ($segment) {
                return !is_numeric($segment);
            });
    @endphp
    @foreach ($segments as $segment)
        @php
            $route = implode('/', $segments->take($loop->index + 1)->toArray());
            $name = ucwords(str_replace('-', ' ', $segment));
            $isActive = request()->is($route);
        @endphp
        <a style="color: {{  $isActive ? '#5755D9' : 'initial' }}" href="{{ url($route) }}">
            {{ $name }}
        </a>
    @endforeach
</div>