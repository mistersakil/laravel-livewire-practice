<div>
    <h1>Livewire events example </h1>
    <hr>
    @foreach ($persons as $key => $person)
        <livewire:events-child :person="$person" :key="$key" />
    @endforeach
    <hr>

    <h2>
        Parent component = {{ now() }}
        <button wire:click="$emit('refreshChildEvent')">Refresh</button>
    </h2>
</div>
