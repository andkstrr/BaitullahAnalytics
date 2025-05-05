@props(['bg', 'icon', 'href'])

<div class="avatar avatar-rounded {{ $bg }}">
    <a href="{{ $href }}">
        <i class="fa-solid {{ $icon }} text-white"></i>
    </a>
</div>
