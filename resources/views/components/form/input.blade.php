{{-- @props(['name', 'label' => null, 'type' => 'text', 'placeholder' => null, 'req' => false]) --}}
<div class="my-1">

    @isset($label)
        <label for="{{ $name }}">{{ $label }}</label>
            @if(@isset($req) && $req)
                <sup class="text-danger">*</sup>
            @endif
    @endisset
    <input type="{{ $type ?? 'text' }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}"
        name="{{ $name }}" placeholder="{{ $placeholder ?? '' }}" {{ $attributes }}
        value="{{ old($name, 'nabil') }}">
    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
