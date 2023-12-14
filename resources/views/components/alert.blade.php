@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $clases = 'alert alert-info';
            break;

        case 'danger':
            $clases = 'alert alert-danger';
            break;

        default:
            $clases = 'alert alert-light';
            break;
    }
@endphp

<article class="{{ $clases }}" role="alert">
    <h3><strong>{{$title}}</strong></h3>
    <p> {{$slot}} </p>
</article>
