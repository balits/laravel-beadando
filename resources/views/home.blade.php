<x-guest-layout>
    <x-slot name="title">
        Főoldal
    </x-slot >
    <h1 class="text-5xl font-bold">Főoldal</h1>
    <p>Itt minden izgalmas dolgot megtalálsz, ami ezzel a beadandóval kapcsolódik!</p>
    <form action="{{ route('search') }}" method="GET">
        @csrf
        <label for="license_plate">Adj meg egy rendszámot</label>
        <input type="text" name="license_plate" id="license_plate">
        <button type="submit">Keresés</button>
    </form>
    <a href={{ route()}}>Keresési előzmények</a>

    @if (isset($vehicle))
        <div>
            <p>Id : {{ $vehicle->id }}</p>
            <p>License plate: {{ $vehicle->license_plate }}</p>
            <p>Type : {{ $vehicle->type }}</p>
            <p>Brand : {{ $vehicle->brand }}</p>
            @foreach ($vehicle->crashes as $crash)
                <a href={{ route("crashes.show", ["crash" => $crash->id])}}>
                    <p>{{ $crash->description }}</p>
                </a>
            @endforeach

        </div>
    @endif

    @if (isset($err)) 
        <p> {{ $err }}</p>
    @endif
</body>

</x-guest-layout>
