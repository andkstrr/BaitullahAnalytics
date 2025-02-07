@props(['title', 'tabs', 'object', 'percentages'])

<div class="card shadow p-4 mb-6 rounded-3" x-data="{
        activeTab: '{{ array_key_first($tabs) }}',
        percentages: @json($percentages)
}">
    <div class="card-title px-1">
        <h6 class="text-gray">Total All {{ $title }}</h6>
        <ul class="nav nav-pills mb-3">
            @foreach ($tabs as $key => $tab)
                <li class="nav-item">
                    <button class="nav-link text-black px-2 py-1 {{ $loop->first ? 'active' : '' }}"
                        data-bs-toggle="tab"
                        data-bs-target="#{{ $key }}"
                        @click="activeTab = '{{ $key }}'">
                        {{ $tab['label'] }}
                    </button>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="card-content p-2">
        <div class="tab-content text-black">
            @foreach ($tabs as $key => $tab)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }} text-center" id="{{ $key }}">
                    <h1 class="fw-semibold display-2 text-black">
                        {{ $tab['value'] }}<span class="fs-5 text-gray"> {{ $object }}</span>
                    </h1>
                </div>
            @endforeach
        </div>
    </div>

    <div class="card-end">
        <p class="text-black fw-normal mt-5 mb-0">
            <span class="text-plus fw-semisemibold fs-5">
                <i class="fa-solid fa-arrow-trend-up"></i>
                <span x-text="percentages[activeTab] ?? '0%'"></span>
            </span> than last week
        </p>
    </div>
</div>
