@props(['name'])

<x-form.input-wrapper>
    <x-form.label :name="$name" />
    <textarea value="{{old($name)}}" name="{{$name}}" id="{{$name}}" cols="10" rows="10"
        class="form-control"></textarea>
    <x-error name="{{$name}}" />
</x-form.input-wrapper>
