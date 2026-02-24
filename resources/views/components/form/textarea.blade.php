<div>
    @isset($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endisset

    <textarea class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}"
        placeholder="{{ $placeholder ?? '' }}" rows="{{ $rows ?? 3 }}" value="{{ old($name) }}"></textarea>
    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
