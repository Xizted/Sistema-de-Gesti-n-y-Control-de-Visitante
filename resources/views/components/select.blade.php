<select class="form-control" name="{{ $name }}" id="{{ $name }}">
    @foreach ($options as $option)
    <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
    @endforeach
</select>
