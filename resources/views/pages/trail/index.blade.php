@if (isset($trails))
    <ul>
        @foreach ($trails as $trail)
            <li>
                {{ $trail->title }}
                <button><a href="{{ route('choose.trail', $trail->id) }}">Adicionar</a></button>
            </li>
        @endforeach
    </ul>
@endif

@if (isset($message))
    <p>{{ $message }}</p>
@endif
