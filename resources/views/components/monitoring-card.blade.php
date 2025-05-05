@props(['icon', 'title', 'href', 'icon', 'content', 'value', 'percentage'])

<div class="card p-4 mb-5 rounded-4">
    <div class="d-flex justify-content-between align-items-center">
        <h6 class="text-gray fs-6 mb-2"> {{ $title }}</h6>
        <a href="{{ $href }}"><i class="fa-solid {{ $icon }} text-gray me-2"></i></a>
    </div>
    <div class="mt-3">
        <h4 class="fw-semibold display-6 mb-5 text-black">{{ $value }}<small class="fs-6">{{ $content }}</small></h4>
        <div class="percentage d-inline align-items-center gap-2 px-3 py-1 bg-green rounded-5">
            <i class="fas fa-caret-up fa-lg mt-2"></i>
            <span class="fw-semibold fs-sm text-green">{{ $percentage ?? '0%' }}</span>
            <span class="fs-6">vs last month</span>
        </div>
    </div>
</div>
