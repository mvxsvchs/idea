@props(['is' => 'a'])

<{{ $is }} {{ $attributes(["class"=>"border border-border-dark rounded-lg bg-card p-4 md:text-sm block"]) }}>
    {{ $slot }}
</{{ $is }}>
