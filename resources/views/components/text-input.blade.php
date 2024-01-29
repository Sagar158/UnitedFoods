<div class="form-group">
    <label {{ $attributes->merge(['class' => 'block font-medium font-weight-bold text-sm text-gray-700 dark:text-gray-300']) }}>
        {{ $placeholder}}
    </label>
    <input {{ $disabled ? 'disabled' : '' }} type="{{ $type }}" name="{{ $name }}" {!! $attributes->merge(['class' => 'form-control']) !!} id="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}" autocomplete="off">
</div>


