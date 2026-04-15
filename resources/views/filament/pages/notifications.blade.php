<x-filament-panels::page>
    <div class="space-y-6">
        <div class="filament-card">
            <div class="filament-card-header">
                <h2 class="filament-card-heading">
                    {{ $this->getTitle() }}
                </h2>
            </div>
            <div class="filament-card-body">
                {{ $this->table }}
            </div>
        </div>
    </div>
</x-filament-panels::page>
