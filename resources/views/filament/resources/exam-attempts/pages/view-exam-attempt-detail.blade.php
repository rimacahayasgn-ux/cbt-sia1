<x-filament-panels::page>
    <div style="display:flex; flex-direction:column; gap:1.5rem;">
        <x-filament::section>
            <div style="display:flex; flex-wrap:wrap; align-items:center; justify-content:space-between; gap:1rem;">
                <div>
                    <h2 style="font-size:1.25rem; font-weight:700; margin:0;">
                        {{ $attempt->user?->student?->name ?? $attempt->user?->name ?? 'Siswa' }} — {{ $attempt->exam?->title ?? 'Ujian' }} — {{ $attempt->subject?->name ?? 'Mata Pelajaran' }}
                    </h2>
                    <p style="font-size:0.875rem; color:#9ca3af; margin:0.25rem 0 0;">
                        Dikerjakan pada {{ $attempt->finished_at?->translatedFormat('d F Y, H:i') }} WIB
                    </p>
                </div>
                <div style="text-align:right;">
                    <p style="font-size:0.875rem; color:#9ca3af; margin:0;">Skor Akhir</p>
                    <p @style(['font-size:2.25rem', 'font-weight:700', 'margin:0', 'color:#16a34a' => $isPassed, 'color:#dc2626' => !$isPassed])>
                        {{ $attempt->score }}
                    </p>
                    <x-filament::badge :color="$isPassed ? 'success' : 'danger'">
                        {{ $isPassed ? 'Lulus' : 'Tidak Lulus' }}
                    </x-filament::badge>
                </div>
            </div>
        </x-filament::section>

        <div style="display:grid; grid-template-columns: repeat(3, 1fr); gap:1rem;">
            <div style="border:1px solid rgba(128,128,128,0.3); border-radius:0.75rem; padding:1rem; text-align:center;">
                <p style="font-size:0.875rem; color:#9ca3af; margin:0 0 0.25rem;">Total Soal</p>
                <p style="font-size:1.5rem; font-weight:700; margin:0;">{{ $totalQuestions }}</p>
            </div>
            <div style="border:1px solid rgba(128,128,128,0.3); border-radius:0.75rem; padding:1rem; text-align:center;">
                <p style="font-size:0.875rem; color:#9ca3af; margin:0 0 0.25rem;">Jawaban Benar</p>
                <p style="font-size:1.5rem; font-weight:700; margin:0; color:#16a34a;">{{ $totalCorrect }}</p>
            </div>
            <div style="border:1px solid rgba(128,128,128,0.3); border-radius:0.75rem; padding:1rem; text-align:center;">
                <p style="font-size:0.875rem; color:#9ca3af; margin:0 0 0.25rem;">Jawaban Salah</p>
                <p style="font-size:1.5rem; font-weight:700; margin:0; color:#dc2626;">{{ $totalWrong }}</p>
            </div>
        </div>

        <x-filament::section heading="Detail Jawaban">
            <div style="display:flex; flex-direction:column; gap:1rem;">
                @foreach ($details as $i => $item)
                    <div @style(['border:1px solid rgba(34,197,94,0.4)' => $item['is_correct'], 'border:1px solid rgba(239,68,68,0.4)' => !$item['is_correct'], 'border-radius:0.5rem', 'padding:1rem'])>
                        <p style="font-weight:600; margin:0 0 0.5rem;">{{ $i + 1 }}. {!! $item['question'] !!}</p>
                        <div style="display:flex; flex-wrap:wrap; align-items:center; gap:0.5rem; font-size:0.875rem;">
                            <span>Jawaban:</span>
                            <span style="font-weight:600;">{{ $item['chosen_text'] }}</span>
                            @if ($item['is_correct'])
                                <x-filament::badge color="success" icon="heroicon-m-check">Benar</x-filament::badge>
                            @else
                                <x-filament::badge color="danger" icon="heroicon-m-x-mark">Salah</x-filament::badge>
                                <span style="color:#9ca3af;">
                                    Jawaban benar: <span style="font-weight:600; color:#16a34a;">{{ $item['correct_text'] }}</span>
                                </span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </x-filament::section>
    </div>
</x-filament-panels::page>