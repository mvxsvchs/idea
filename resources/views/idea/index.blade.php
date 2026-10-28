<x-layout>
    <div>
        <header class="py-8 md:py12">
            <h1 class="text-3xl font-bold">Ideas</h1>
            <p class="text-muted-foreground-dark text-sm mt-2">Capture your thoughts. Make a plan.</p>
        </header>

        <div class="mt-10">
            <div class="grid md:grid-cols-2 gap-6">
                @forelse($ideas as $idea)
                    <div class="border border-border-dark rounded-lg bg-card p-4 md:text-sm block">
                        <h3>{{ $idea->title }}</h3>
                    </div>
                @empty
                    <p>No ideas at this time.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-layout>
