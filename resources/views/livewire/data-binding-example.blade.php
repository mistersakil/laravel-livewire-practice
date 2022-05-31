<div>
    <h1>Data binding example</h1>
    <hr>
    <select wire:model.debounce.500ms="greetings" id="">
        <option value="Hi">Hi</option>
        <option value="Hello">hello</option>
        <option value="Howdy">howdy</option>
    </select>
    <br>
    I'm <input type="text" wire:model='name' />
    and i'm
    <input type="radio" wire:model='gender' value="male"> Male
    <input type="radio" wire:model='gender' value="female">Female
    <br>
    Please check all given informations are correct <input type="checkbox" wire:model='isTrue' />
    <br>
    I like to
    <select wire:model="hobies" multiple>
        <option value="travelling">travelling</option>
        <option value="reading books">reading books</option>
        <option value="playing games">playing games</option>
    </select>

    <br>
    <hr>

    {{ $greetings }} :)

    I'm {{ $name }} and i'm {{ $gender }}.

    Please check all given informations are
    @if ($isTrue)
        Correct
    @else
        Incorrect
    @endif
    <br>
    My hobbies are: {{ implode(', ', $hobies) }}





</div>
