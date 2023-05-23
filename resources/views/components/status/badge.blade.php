@php
    $statusColors = [
        'pending' => 'bg-yellow-500',
        'settlement' => 'bg-green-500',
        'cancel' => 'bg-red-500',
        'expire' => 'bg-gray-500',
    ];

    $statusLabels = [
        'pending' => 'Pending',
        'settlement' => 'Lunas',
        'cancel' => 'Cancelled',
        'expire' => 'Expired',
    ];
@endphp

<span class="inline-flex items-center px-2 py-1 text-xs font-bold leading-none {{ $statusColors[$status] }} text-white rounded">{{ $statusLabels[$status] }}</span>
