<x-filament-panels::page>
    <div
        x-data="{
            secondsLeft: {{ $secondsRemaining }},
            showConfirm: false,
            get formatted() {
                let s = Math.max(0, this.secondsLeft);
                let m = Math.floor(s / 60);
                let sec = s % 60;
                return String(m).padStart(2, '0') + ':' + String(sec).padStart(2, '0');
            },
            init() {
                if (this.secondsLeft <= 0) { $wire.finish(); return; }
                this.timer = setInterval(() => {
                    this.secondsLeft--;
                    if (this.secondsLeft <= 0) {
                        clearInterval(this.timer);
                        $wire.finish();
                    }
                }, 1000);
            }
        }"
        x-init="init()"
        style="display:flex; flex-direction:column; gap:1.5rem;"
    >
        <div style="display:flex; align-items:center; justify-content:space-between;">
            <span style="font-size:0.875rem; color:#9ca3af;">
                Soal {{ $currentIndex + 1 }} dari {{ count($questions) }}
            </span>
            <span style="font-size:1rem; font-weight:600; font-variant-numeric: tabular-nums;" x-text="formatted"></span>
        </div>

        <div style="width:100%; height:4px; background:rgba(128,128,128,0.2); border-radius:9999px;">
            <div @style(['height:100%', 'border-radius:9999px', 'background:#6b7280', 'width:' . (count($questions) > 0 ? (($currentIndex + 1) / count($questions)) * 100 : 0) . '%'])></div>
        </div>

        @php $soal = $questions[$currentIndex] ?? null; @endphp

        @if ($soal)
            <div style="font-size:1.125rem; line-height:1.6;">
                {!! $soal['payload'] !!}
            </div>

            <div style="display:flex; flex-direction:column; gap:0.75rem;">
                @foreach ($soal['answers'] as $jawaban)
                    <button type="button"
                        wire:click="selectAnswer({{ $soal['id'] }}, {{ $jawaban['id'] }})"
                        style="text-align:left; padding:0.75rem 1rem; border-radius:0.5rem; border:1px solid {{ ($answers[$soal['id']] ?? null) == $jawaban['id'] ? '#6b7280' : 'rgba(128,128,128,0.3)' }}; background: {{ ($answers[$soal['id']] ?? null) == $jawaban['id'] ? 'rgba(107,114,128,0.15)' : 'transparent' }}; cursor:pointer;">
                        {{ $jawaban['text'] }}
                    </button>
                @endforeach
            </div>
        @endif

        <div style="display:flex; align-items:center; justify-content:space-between; margin-top:1rem;">
            <x-filament::button color="gray" wire:click="previous" :disabled="$currentIndex === 0">
                Sebelumnya
            </x-filament::button>

            @if ($currentIndex < count($questions) - 1)
                <x-filament::button wire:click="next">Selanjutnya</x-filament::button>
            @else
                <x-filament::button color="danger" x-on:click="showConfirm = true">Selesai Ujian</x-filament::button>
            @endif
        </div>

        <div style="display:flex; flex-wrap:wrap; gap:0.5rem;">
            @foreach ($questions as $i => $q)
                <button type="button" wire:click="goTo({{ $i }})"
                    style="width:2rem; height:2rem; border-radius:0.375rem; font-size:0.75rem; border:1px solid rgba(128,128,128,0.3); background: {{ $i === $currentIndex ? 'rgba(107,114,128,0.25)' : (isset($answers[$q['id']]) ? 'rgba(107,114,128,0.1)' : 'transparent') }};">
                    {{ $i + 1 }}
                </button>
            @endforeach
        </div>

        <div x-show="showConfirm" x-cloak
             style="position:fixed; inset:0; background:rgba(0,0,0,0.6); display:flex; align-items:center; justify-content:center; z-index:50; padding:1rem;">
            <div style="max-width:24rem; width:100%;" @click.outside="showConfirm = false">
                <x-filament::section>
                    <h3 style="font-weight:700; font-size:1.125rem; margin:0 0 0.5rem;">Yakin ingin menyelesaikan ujian?</h3>
                    <p style="color:#9ca3af; margin:0 0 1rem;">
                        Sisa waktu: <span x-text="formatted" style="font-weight:600;"></span>. Jawaban tidak bisa diubah lagi setelah ini.
                    </p>
                    <div style="display:flex; justify-content:flex-end; gap:0.5rem;">
                        <x-filament::button color="gray" x-on:click="showConfirm = false">Batal</x-filament::button>
                        <x-filament::button color="danger" wire:click="finish">Ya, Selesaikan</x-filament::button>
                    </div>
                </x-filament::section>
            </div>
        </div>
    </div>
</x-filament-panels::page>