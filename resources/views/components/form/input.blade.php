@props(['name','type'=>'text'])

<x-form.input-wrapper>
    <x-form.label :name="$name" />
    <input value="{{old($name)}}" type="{{$type}}" name="{{$name}}" id="{{$name}}" class="form-control">
    <x-error name="{{$name}}" />
</x-form.input-wrapper>
