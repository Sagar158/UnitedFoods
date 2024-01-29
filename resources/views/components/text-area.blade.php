<div class="form-group">
    <label {{ $attributes->merge(['class' => 'block font-medium font-weight-bold text-sm text-gray-700 dark:text-gray-300']) }}>
        {{ $placeholder}}
    </label>
    <textarea class="form-control mb-3 tinymceExample" name="{{ $name }}" id="tinymceExample" rows="10">{!! $value !!}</textarea>
</div>
