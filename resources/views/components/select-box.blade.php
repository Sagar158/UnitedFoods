<div class="form-group">
    <label class="font-weight-bold">{{ $placeholder }}</label>
    <select class="js-example-basic-single w-100" data-width="100%" name="{{ $name }}">
        @if(!empty($values))
            @foreach($values as $key => $data)
                <option value="{{ $key }}" {{ ($key == $value) ? 'selected' : '' }}>{{ $data }}</option>
            @endforeach
        @endif
    </select>
</div>
