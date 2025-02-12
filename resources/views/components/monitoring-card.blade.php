@props(['icon', 'title', 'href', 'icon', 'content', 'value', 'percentage'])

<div class="card p-4 mb-5 rounded-3 shadow">
    <div class="d-flex justify-content-between align-items-center">
            <h6 class="text-gray fs-6 mb-2"> {{ $title }}</h6>
            <a href="{{ $href }}"><i class="fa-solid {{ $icon }} text-gray me-2"></i></a>
    </div>
    <div>
        <h4 class="fw-semibold display-6 text-black">{{ $value }}<small class="fs-6">{{ $content }}</small></h4>
        <p class="text-black fs-sm fw-normal mb-0">
            <span class="text-plus fw-semibold">
                <i class="fa-solid fa-angles-up"></i> {{ $percentage ?? '0%' }}
            </span> vs last month
        </p>
    </div>
</div>
