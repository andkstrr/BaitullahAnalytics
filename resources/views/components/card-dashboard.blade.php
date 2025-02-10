@props(['title', 'value', 'percentage'])

<div class="card p-4 mb-4 rounded-3 shadow">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <p class="text-gray fs-xs mb-0">This Month</p>
            <h6 class="text-black fs-6 mb-2">{{ $title }}</h6>
        </div>
        <i class="fa-solid fa-users text-black"></i>
    </div>
    <div>
        <h4 class="fw-semisemibold fs-2 text-black">{{ $value }}</h4>
        <p class="text-black fs-sm fw-normal mb-0">
            <span class="text-plus fw-semisemibold">
                <i class="fa-solid fa-angles-up"></i> {{ $percentage ?? '0%' }}
            </span> vs last month
        </p>
    </div>
</div>
