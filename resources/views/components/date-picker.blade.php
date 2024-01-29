<div>
    <label {{ $attributes->merge(['class' => 'block font-medium font-weight-bold text-sm text-gray-700 dark:text-gray-300']) }}>
        {{ $placeholder}}
    </label>
    <div class="input-group date datepicker datePickerExample">
        <input type="text" class="form-control" name="{{ $name }}" value="{{ $value }}"><span class="input-group-addon"><i data-feather="calendar"></i></span>
    </div>
</div>
