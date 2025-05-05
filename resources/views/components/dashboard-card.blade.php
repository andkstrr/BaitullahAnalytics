@props(['title', 'value', 'percentage'])

<div class="card p-4 mb-5 rounded-4">
    <div class="card-head d-flex align-items-center gap-4 mb-5  ">
        <div class="p-4 bg-light-gray rounded-4">
            <i class="fa-solid fa-users text-black"></i>
        </div>
        <div>
            <h5 class="text-black fw-medium mb-0">{{ $title }}</h5>
            <p class="text-gray fs-sm mb-0">This Month</p>
        </div>
    </div>

    <div class="card-content d-flex justify-content-between align-items-center">
        <div class="value">
            <h2 class="fw-semibold fs-1 text-black">{{ $value }}</h2>
        </div>
        <div class="percentage d-flex align-items-center gap-2 px-3 py-1 bg-green rounded-5">
            <i class="fas fa-caret-up fa-lg mt-1"></i>
            <span class="fw-semibold text-green">{{ $percentage ?? '0%' }}</span>
        </div>
    </div>
    <hr>

    <div class="card-foot">
        <p class="text-gray fs-sm mb-0">Updated on July 3, 2025</p>
    </div>
</div>
