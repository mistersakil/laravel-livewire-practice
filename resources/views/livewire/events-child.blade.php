<h2>
    {{ $person }} : {{ now() }}
    <button wire:click="$emit('refreshChildEvent')">refreshAll</button>
    <button wire:click="refreshChildAndParent">refresh itself and parent</button>

</h2>
