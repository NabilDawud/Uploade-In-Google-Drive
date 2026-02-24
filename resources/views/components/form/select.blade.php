<div>
    @isset($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endisset

    <select name="{{ $name }}" id="{{ $name }}" class="form-select">
        {{ $slot }}
    </select>
    
</div>
