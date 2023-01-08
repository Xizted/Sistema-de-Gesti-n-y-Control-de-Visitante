<div class="form-group">
    <label for="role" class="col-form-label font-weight-bold border-secondary">{{ $labelText }}</label>
    <select class="form-control bg-transparent rounded-1 text-white" name="{{ $name }}" id="{{ $name }}">
        <option selected disabled>Seleccione...</option>
        @foreach ($options as $option)
        <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
        @endforeach
    </select>
    @error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
