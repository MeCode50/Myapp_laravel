<!-- resources/views/components/nav-link.blade.php -->
@props(['active' => false])

<a href="{{ $href }}">
    {{ $slot }}
</a>
