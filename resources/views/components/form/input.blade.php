@props(['name','type'=>'text','value'=>''])

<x-form.input-wrapper>
    <x-form.label :name="$name" />
    <input value="{{old($name,$value)}}" type="{{$type}}" name="{{$name}}" id="{{$name}}" class="form-control">
    <x-error name="{{$name}}" />
</x-form.input-wrapper>
