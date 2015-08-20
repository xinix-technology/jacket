<select name="{{ $self['name'] }}" data-value="{{ @$value }}">
    <option value="">&mdash; Select one {{ $self['label'] }} &mdash;</option>
    @foreach ($self->optionData() as $key => $entry)
        <option value="{{{ $self->optionValue($key, $entry) }}}"
            {{{ $self->optionValue($key, $entry) === $value ? 'selected' : '' }}}>
            {{ $self->optionLabel($key, $entry) }}
        </option>
    @endforeach
</select>