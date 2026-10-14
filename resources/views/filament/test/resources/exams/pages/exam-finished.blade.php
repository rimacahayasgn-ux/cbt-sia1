<x-filament-panels::page>
    <div style="display:flex; flex-direction:column; align-items:center; text-align:center; gap:1rem; padding:3rem 1rem;">
        <x-filament::icon icon="heroicon-o-check-circle" style="width:4rem; height:4rem; color:#16a34a;" />
        <h2 style="font-size:1.5rem; font-weight:700; margin:0;">Terima kasih, ujian kamu sudah selesai!</h2>
        <p style="color:#9ca3af; margin:0;">Jawabanmu untuk {{ $attempt->subject?->name ?? 'ujian' }} sudah tersimpan.</p>

        <x-filament::button tag="a"
            :href="\App\Filament\Test\Resources\ExamAttempts\ExamAttemptResource::getUrl('detail', ['record' => $attempt], panel: 'test')">
            Lihat Hasil Ujian
        </x-filament::button>
    </div>
</x-filament-panels::page>