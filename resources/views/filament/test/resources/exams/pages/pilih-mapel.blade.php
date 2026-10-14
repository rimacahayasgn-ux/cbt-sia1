<x-filament-panels::page>
    <div style="display:flex; flex-direction:column; gap:0.75rem;">
        @foreach ($subjects as $mapel)
            <div style="border:1px solid rgba(128,128,128,0.3); border-radius:0.5rem; padding:1rem; display:flex; align-items:center; justify-content:space-between; gap:1rem; flex-wrap:wrap;">
                <div>
                    <p style="font-weight:600; margin:0;">{{ $mapel['name'] }}</p>
                    @if ($mapel['status'] === 'finished')
                        <p style="font-size:0.875rem; color:#9ca3af; margin:0.25rem 0 0;">Selesai — Skor: {{ $mapel['score'] }}</p>
                    @elseif ($mapel['status'] === 'in_progress')
                        <p style="font-size:0.875rem; color:#9ca3af; margin:0.25rem 0 0;">Sedang berjalan</p>
                    @else
                        <p style="font-size:0.875rem; color:#9ca3af; margin:0.25rem 0 0;">Belum dikerjakan</p>
                    @endif
                </div>

                @if ($mapel['status'] === 'finished')
                    <x-filament::button tag="a" color="gray"
                        :href="\App\Filament\Test\Resources\ExamAttempts\ExamAttemptResource::getUrl('detail', ['record' => $mapel['attempt_id']], panel: 'test')">
                        Lihat Hasil
                    </x-filament::button>
                @else
                    <x-filament::button tag="a"
                        :href="\App\Filament\Test\Resources\Exams\ExamResource::getUrl('mulai', ['exam' => $exam, 'subject' => $mapel['id']], panel: 'test')">
                        {{ $mapel['status'] === 'in_progress' ? 'Lanjutkan Ujian' : 'Mulai Ujian' }}
                    </x-filament::button>
                @endif
            </div>
        @endforeach
    </div>
</x-filament-panels::page>