<div class="form-group">
    <label for="{{ $name }}" class="col-form-label font-weight-bold">{{ $labelText }}</label>
    <input id="{{ $name }}" type="{{ $inputType }}" placeholder="{{ $placeholder }}" class="form-control bg-transparent rounded-1 text-white @error($name) is-invalid @enderror" name="{{ $name }}" value="{{ old($name) }}" required autocomplete="{{ $name }}" autofocus>
    @error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
