<div>
    <h1>Livewire nesting example </h1>
    <hr>
    @foreach ($persons as $key => $person)
        <h2>
            Hello -
            <livewire:nesting-child :person="$person" :key="$key" />
        </h2>
    @endforeach
    <hr>

    <h2>
        Parent component = {{ now() }}
        <button wire:click="$refresh">Refresh</button>
    </h2>
</div>


{{-- <div>
    <h1>Livewire Nesting example</h1>
    <hr>

    @foreach ($persons as $person)
        <h2>
            {{ $person }} =

            {{ now() }}
            <button wire:click="$refresh">Refresh</button>
        </h2>
    @endforeach

    <h2>
        Parent component = {{ now() }}
        <button wire:click="$refresh">Refresh</button>
    </h2>

</div> --}}
