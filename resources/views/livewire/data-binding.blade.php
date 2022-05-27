<div>
    <select wire:model="greetings">
        <option value="hello">Hello</option>
        <option value="goodby">Goodby</option>
        <option value="welcome">Welcome</option>
    </select>
    <input type="text" wire:model.debounce.500ms="name">
    <input type="checkbox" wire:model="symbol"> Check
    <hr>
    {{ $greetings }} - {{ $name }} @if ($symbol)
        !!!
    @endif
</div>
