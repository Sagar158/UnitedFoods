<div class="form-group">
    <label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 dark:text-gray-300']) }}>
        {{ $placeholder}}
    </label>
    <textarea class="form-control" name="{{ $name }}" id="tinymceExample" class="mb-3" rows="10">{{ $value }}</textarea>

    {{-- <textarea {{ $disabled ? 'disabled' : '' }} name="{{ $name }}" {!! $attributes->merge(['class' => 'form-control']) !!} id="{{ $name }}" placeholder="{{ $placeholder }}" rows="4">{{ $value }}</textarea> --}}
</div>


