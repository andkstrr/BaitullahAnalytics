@props(['title', 'widthBar', 'bgColor', 'value'])

<div class="d-flex align-items-center gap-10 mb-4">
    <span class="fw-semibold text-black ms-2">{{ $title }}</span>
    <div class="progress" style="width: 900px; height: 10px;">
        <div class="progress-bar" role="progressbar" style="width: {{ $widthBar }}; background-color: #{{ $bgColor }};"></div>
    </div>
    <span class="fw-semibold text-black me-2">{{ $value }}</span>
</div>
