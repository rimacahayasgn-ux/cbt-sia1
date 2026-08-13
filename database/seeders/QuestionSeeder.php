<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Data soal per mata pelajaran.
     * Struktur tiap soal: payload, correct_answer (A/B/C/D), options (A/B/C/D => teks jawaban)
     */
    protected array $data = [
        'Biologi' => [
            [
                'payload' => 'Tumbuhan berbiji terbuka contohnya adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Paku dan lumut',
                    'B' => 'Padi dan jagung',
                    'C' => 'Pinus dan melinjo',
                    'D' => 'Mangga dan jambu',
                ],
            ],
            [
                'payload' => 'Hyena termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Herbivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Bebek termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Omnivora',
                    'C' => 'Karnivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Contoh simbiosis mutualisme adalah hubungan antara?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Lebah dan bunga',
                    'B' => 'Tali putri dan inangnya',
                    'C' => 'Benalu dan pohon inang',
                    'D' => 'Kutu dan manusia',
                ],
            ],
            [
                'payload' => 'Hewan yang berkembang biak dengan cara melahirkan disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Vivipar',
                    'B' => 'Ovovivipar',
                    'C' => 'Ovipar',
                    'D' => 'Tunas',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk menghasilkan hormon insulin adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Pankreas',
                    'B' => 'Hati',
                    'C' => 'Kerongkongan',
                    'D' => 'Kulit',
                ],
            ],
            [
                'payload' => 'Hewan yang berkembang biak dengan cara bertelur disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Fragmentasi',
                    'B' => 'Ovipar',
                    'C' => 'Ovovivipar',
                    'D' => 'Vivipar',
                ],
            ],
            [
                'payload' => 'Contoh simbiosis parasitisme adalah hubungan antara?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Ikan badut dan anemon laut',
                    'B' => 'Benalu dan pohon inangnya',
                    'C' => 'Lebah dan bunga',
                    'D' => 'Burung jalak dan kerbau',
                ],
            ],
            [
                'payload' => 'Alat pernapasan ikan adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Kulit',
                    'B' => 'Paru-paru',
                    'C' => 'Trakea',
                    'D' => 'Insang',
                ],
            ],
            [
                'payload' => 'Buaya termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Insektivora',
                    'C' => 'Omnivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Bagian tumbuhan yang berfungsi untuk melindungi biji adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Buah',
                    'B' => 'Bunga',
                    'C' => 'Batang',
                    'D' => 'Daun',
                ],
            ],
            [
                'payload' => 'Gagak termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Insektivora',
                    'C' => 'Omnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Organel sel tempat sintesis protein adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Mitokondria',
                    'B' => 'Badan Golgi',
                    'C' => 'Lisosom',
                    'D' => 'Ribosom',
                ],
            ],
            [
                'payload' => 'Tahap penyaringan kembali zat yang masih berguna dalam pembentukan urine disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Augmentasi',
                    'B' => 'Ekskresi',
                    'C' => 'Reabsorpsi',
                    'D' => 'Filtrasi',
                ],
            ],
            [
                'payload' => 'Kulit, ginjal, paru-paru, dan hati termasuk dalam sistem?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Sirkulasi',
                    'B' => 'Ekskresi',
                    'C' => 'Pencernaan',
                    'D' => 'Respirasi',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk menyaring darah dan membentuk urine adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Kerongkongan',
                    'B' => 'Ginjal',
                    'C' => 'Usus halus',
                    'D' => 'Paru-paru',
                ],
            ],
            [
                'payload' => 'Faktor lingkungan berupa makhluk hidup dalam ekosistem disebut faktor?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Ekologis',
                    'B' => 'Abiotik',
                    'C' => 'Fisiologis',
                    'D' => 'Biotik',
                ],
            ],
            [
                'payload' => 'Kambing termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Herbivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Singa laut termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Herbivora',
                    'C' => 'Karnivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Bagian otak yang mengatur kecerdasan dan gerakan sadar adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Otak kecil',
                    'B' => 'Sumsum lanjutan',
                    'C' => 'Otak besar (cerebrum)',
                    'D' => 'Sumsum tulang belakang',
                ],
            ],
            [
                'payload' => 'Burung hantu termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Insektivora',
                    'C' => 'Karnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Antelop termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Insektivora',
                    'C' => 'Omnivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Hiu termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Herbivora',
                    'C' => 'Omnivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Elang termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Karnivora',
                    'C' => 'Omnivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Proses masuknya udara ke dalam paru-paru disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Difusi',
                    'B' => 'Inspirasi',
                    'C' => 'Respirasi anaerob',
                    'D' => 'Ekspirasi',
                ],
            ],
            [
                'payload' => 'Hewan yang hidup di dua alam (darat dan air) disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Reptil',
                    'B' => 'Amfibi',
                    'C' => 'Pisces',
                    'D' => 'Mamalia',
                ],
            ],
            [
                'payload' => 'Organel sel yang berfungsi sebagai penghasil energi adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Mitokondria',
                    'B' => 'Ribosom',
                    'C' => 'Nukleus',
                    'D' => 'Lisosom',
                ],
            ],
            [
                'payload' => 'Landak termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Insektivora',
                    'C' => 'Karnivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Bagian tumbuhan yang berfungsi untuk tempat berlangsungnya fotosintesis adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Akar',
                    'B' => 'Bunga',
                    'C' => 'Biji',
                    'D' => 'Daun',
                ],
            ],
            [
                'payload' => 'Zat hijau daun yang berperan dalam fotosintesis disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Karoten',
                    'B' => 'Klorofil',
                    'C' => 'Antosianin',
                    'D' => 'Xantofil',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk mengatur metabolisme tubuh adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Kulit',
                    'B' => 'Ginjal',
                    'C' => 'Otak',
                    'D' => 'Kelenjar tiroid',
                ],
            ],
            [
                'payload' => 'Koala termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Herbivora',
                    'C' => 'Karnivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Kekurangan zat besi dapat menyebabkan penyakit?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Diabetes',
                    'B' => 'Rakitis',
                    'C' => 'Anemia',
                    'D' => 'Skorbut',
                ],
            ],
            [
                'payload' => 'Jumlah ruang pada jantung manusia adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '3',
                    'B' => '4',
                    'C' => '2',
                    'D' => '5',
                ],
            ],
            [
                'payload' => 'Cabang biologi yang mempelajari tumbuhan disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Zoologi',
                    'B' => 'Anatomi',
                    'C' => 'Botani',
                    'D' => 'Ekologi',
                ],
            ],
            [
                'payload' => 'Banteng termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Karnivora',
                    'C' => 'Omnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Hormon yang mengatur kadar gula darah adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Adrenalin',
                    'B' => 'Insulin',
                    'C' => 'Estrogen',
                    'D' => 'Tiroksin',
                ],
            ],
            [
                'payload' => 'Proses tumbuhan membuat makanan sendiri menggunakan cahaya matahari disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Fermentasi',
                    'B' => 'Respirasi',
                    'C' => 'Fotosintesis',
                    'D' => 'Transpirasi',
                ],
            ],
            [
                'payload' => 'Unta termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Karnivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Zebra termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Herbivora',
                    'C' => 'Omnivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Sel darah yang berperan dalam proses pembekuan darah adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Plasma darah',
                    'B' => 'Sel darah merah',
                    'C' => 'Sel darah putih',
                    'D' => 'Keping darah (trombosit)',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk mendengar adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Telinga',
                    'B' => 'Usus halus',
                    'C' => 'Mata',
                    'D' => 'Kelenjar tiroid',
                ],
            ],
            [
                'payload' => 'Unta yang menyimpan lemak di punuknya termasuk adaptasi?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Morfologi',
                    'B' => 'Fisiologi',
                    'C' => 'Genetik',
                    'D' => 'Tingkah laku',
                ],
            ],
            [
                'payload' => 'Perkembangbiakan tumbuhan tanpa biji melalui batang yang ditanam disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Stek',
                    'B' => 'Cangkok',
                    'C' => 'Okulasi',
                    'D' => 'Merunduk',
                ],
            ],
            [
                'payload' => 'Sel darah yang berfungsi mengangkut oksigen adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Keping darah (trombosit)',
                    'B' => 'Sel darah merah (eritrosit)',
                    'C' => 'Sel darah putih (leukosit)',
                    'D' => 'Plasma darah',
                ],
            ],
            [
                'payload' => 'Perpindahan air melalui membran semipermeabel disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Difusi',
                    'B' => 'Osmosis',
                    'C' => 'Transpor aktif',
                    'D' => 'Eksositosis',
                ],
            ],
            [
                'payload' => 'Kelompok hewan yang menyusui anaknya disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Aves',
                    'B' => 'Reptil',
                    'C' => 'Mamalia',
                    'D' => 'Amfibi',
                ],
            ],
            [
                'payload' => 'Jamur termasuk dalam kingdom?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Plantae',
                    'B' => 'Monera',
                    'C' => 'Fungi',
                    'D' => 'Protista',
                ],
            ],
            [
                'payload' => 'Kemampuan makhluk hidup menyesuaikan diri dengan lingkungan disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Evolusi',
                    'B' => 'Metabolisme',
                    'C' => 'Regenerasi',
                    'D' => 'Adaptasi',
                ],
            ],
            [
                'payload' => 'Tempat pembentukan sel darah merah pada tubuh manusia adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Hati',
                    'B' => 'Limpa',
                    'C' => 'Ginjal',
                    'D' => 'Sumsum tulang',
                ],
            ],
            [
                'payload' => 'Orangutan termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Herbivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Proses perubahan bentuk tubuh pada serangga disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Adaptasi',
                    'B' => 'Regenerasi',
                    'C' => 'Metamorfosis',
                    'D' => 'Evolusi',
                ],
            ],
            [
                'payload' => 'Kalkun termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Herbivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Perkembangbiakan hewan dengan cara memutuskan bagian tubuhnya disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Fragmentasi',
                    'B' => 'Tunas',
                    'C' => 'Ovipar',
                    'D' => 'Membelah diri',
                ],
            ],
            [
                'payload' => 'Faktor lingkungan berupa benda tak hidup dalam ekosistem disebut faktor?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Abiotik',
                    'B' => 'Fisiologis',
                    'C' => 'Ekologis',
                    'D' => 'Biotik',
                ],
            ],
            [
                'payload' => 'Pembuluh darah yang membawa darah kembali ke jantung disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Kapiler',
                    'B' => 'Vena',
                    'C' => 'Arteri',
                    'D' => 'Nadi',
                ],
            ],
            [
                'payload' => 'Organel sel yang mengatur seluruh kegiatan sel adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Mitokondria',
                    'B' => 'Vakuola',
                    'C' => 'Ribosom',
                    'D' => 'Nukleus',
                ],
            ],
            [
                'payload' => 'Beruang termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Herbivora',
                    'C' => 'Insektivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk memberi bentuk dan menopang tubuh adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Pankreas',
                    'B' => 'Tulang',
                    'C' => 'Jantung',
                    'D' => 'Otot',
                ],
            ],
            [
                'payload' => 'Golongan darah yang disebut resipien universal adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'O',
                    'B' => 'A',
                    'C' => 'B',
                    'D' => 'AB',
                ],
            ],
            [
                'payload' => 'Rantai makanan dimulai dari organisme yang disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Produsen',
                    'B' => 'Dekomposer',
                    'C' => 'Konsumen II',
                    'D' => 'Konsumen I',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk menyerap sari-sari makanan adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Usus halus',
                    'B' => 'Usus besar',
                    'C' => 'Diafragma',
                    'D' => 'Paru-paru',
                ],
            ],
            [
                'payload' => 'Vitamin yang dapat diperoleh dari sinar matahari adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Vitamin C',
                    'B' => 'Vitamin K',
                    'C' => 'Vitamin D',
                    'D' => 'Vitamin A',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk melihat adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Otak',
                    'B' => 'Trakea',
                    'C' => 'Usus halus',
                    'D' => 'Mata',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk pertukaran oksigen dan karbon dioksida adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Lidah',
                    'B' => 'Kulit',
                    'C' => 'Paru-paru',
                    'D' => 'Trakea',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk menyerap air dan membentuk feses adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Trakea',
                    'B' => 'Usus besar',
                    'C' => 'Hidung',
                    'D' => 'Diafragma',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk indra peraba adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Kulit',
                    'B' => 'Ginjal',
                    'C' => 'Jantung',
                    'D' => 'Hidung',
                ],
            ],
            [
                'payload' => 'Babi termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Insektivora',
                    'C' => 'Omnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk mencerna makanan secara kimiawi adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Otak',
                    'B' => 'Ginjal',
                    'C' => 'Lambung',
                    'D' => 'Usus halus',
                ],
            ],
            [
                'payload' => 'Zat yang membawa oksigen dalam sel darah merah adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Melanin',
                    'B' => 'Klorofil',
                    'C' => 'Hemoglobin',
                    'D' => 'Insulin',
                ],
            ],
            [
                'payload' => 'Warna yang dipantulkan daun sehingga terlihat hijau disebabkan oleh?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Klorofil',
                    'B' => 'Karoten',
                    'C' => 'Hemoglobin',
                    'D' => 'Melanin',
                ],
            ],
            [
                'payload' => 'Tikus termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Karnivora',
                    'C' => 'Omnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk menyalurkan udara menuju paru-paru adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Tulang',
                    'B' => 'Lidah',
                    'C' => 'Trakea',
                    'D' => 'Usus halus',
                ],
            ],
            [
                'payload' => 'Itik termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Herbivora',
                    'C' => 'Karnivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Bunglon yang mengubah warna kulitnya termasuk contoh adaptasi?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Tingkah laku',
                    'B' => 'Fisiologi',
                    'C' => 'Genetik',
                    'D' => 'Morfologi',
                ],
            ],
            [
                'payload' => 'Bagian tumbuhan yang berfungsi untuk menyalurkan air serta menopang tumbuhan adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Akar',
                    'B' => 'Buah',
                    'C' => 'Batang',
                    'D' => 'Bunga',
                ],
            ],
            [
                'payload' => 'Macan tutul termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Herbivora',
                    'C' => 'Karnivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Simpanse termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Karnivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Bagian otak yang mengatur keseimbangan tubuh adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Otak kecil (cerebellum)',
                    'B' => 'Otak besar (cerebrum)',
                    'C' => 'Sumsum lanjutan',
                    'D' => 'Sumsum tulang belakang',
                ],
            ],
            [
                'payload' => 'Rusa termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Insektivora',
                    'C' => 'Omnivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Kuda nil termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Karnivora',
                    'C' => 'Omnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Bapak genetika dunia adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Charles Darwin',
                    'B' => 'Gregor Mendel',
                    'C' => 'Antonie van Leeuwenhoek',
                    'D' => 'Louis Pasteur',
                ],
            ],
            [
                'payload' => 'Panca indra manusia berjumlah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '6',
                    'B' => '4',
                    'C' => '5',
                    'D' => '7',
                ],
            ],
            [
                'payload' => 'Kelinci termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Omnivora',
                    'C' => 'Insektivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Jumlah gigi susu pada anak-anak adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '32',
                    'B' => '28',
                    'C' => '20',
                    'D' => '24',
                ],
            ],
            [
                'payload' => 'Hubungan antara dua makhluk hidup yang satu untung yang lain tidak dirugikan disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Simbiosis parasitisme',
                    'B' => 'Predasi',
                    'C' => 'Simbiosis komensalisme',
                    'D' => 'Simbiosis mutualisme',
                ],
            ],
            [
                'payload' => 'Kuda termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Insektivora',
                    'C' => 'Karnivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Kanguru termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Herbivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Bagian tumbuhan yang berfungsi untuk calon tumbuhan baru adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Biji',
                    'B' => 'Bunga',
                    'C' => 'Buah',
                    'D' => 'Akar',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk menyalurkan makanan dari mulut ke lambung adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Lambung',
                    'B' => 'Hati',
                    'C' => 'Kerongkongan',
                    'D' => 'Jantung',
                ],
            ],
            [
                'payload' => 'Panda termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Karnivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Tumbuhan yang berkembang biak dengan spora contohnya adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Kacang dan kedelai',
                    'B' => 'Paku dan lumut',
                    'C' => 'Padi dan jagung',
                    'D' => 'Mangga dan jambu',
                ],
            ],
            [
                'payload' => 'Kumpulan beberapa ekosistem disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Komunitas',
                    'B' => 'Habitat',
                    'C' => 'Populasi',
                    'D' => 'Bioma',
                ],
            ],
            [
                'payload' => 'Rakun termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Insektivora',
                    'C' => 'Karnivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Monyet termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Omnivora',
                    'C' => 'Karnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Perkembangbiakan tumbuhan dengan mengelupas kulit batang lalu dibungkus tanah disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Merunduk',
                    'B' => 'Okulasi',
                    'C' => 'Stek',
                    'D' => 'Cangkok',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk mencium bau adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Diafragma',
                    'B' => 'Pankreas',
                    'C' => 'Jantung',
                    'D' => 'Hidung',
                ],
            ],
            [
                'payload' => 'Proses penyerbukan yang dibantu oleh serangga disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Hidrogami',
                    'B' => 'Anemogami',
                    'C' => 'Entomogami',
                    'D' => 'Ornitogami',
                ],
            ],
            [
                'payload' => 'Proses pembentukan urine di ginjal diawali dengan tahap?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Augmentasi',
                    'B' => 'Reabsorpsi',
                    'C' => 'Filtrasi',
                    'D' => 'Sekresi',
                ],
            ],
            [
                'payload' => 'Kerbau termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Insektivora',
                    'C' => 'Herbivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Musang termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Herbivora',
                    'C' => 'Insektivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk memompa darah ke seluruh tubuh adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Diafragma',
                    'B' => 'Jantung',
                    'C' => 'Paru-paru',
                    'D' => 'Kulit',
                ],
            ],
            [
                'payload' => 'Proses keluarnya udara dari paru-paru disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Respirasi anaerob',
                    'B' => 'Inspirasi',
                    'C' => 'Osmosis',
                    'D' => 'Ekspirasi',
                ],
            ],
            [
                'payload' => 'Kekurangan vitamin C dapat menyebabkan penyakit?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Skorbut',
                    'B' => 'Beri-beri',
                    'C' => 'Anemia',
                    'D' => 'Rakitis',
                ],
            ],
            [
                'payload' => 'Harimau termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Insektivora',
                    'C' => 'Karnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Sapi termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Omnivora',
                    'C' => 'Karnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Badak termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Karnivora',
                    'C' => 'Omnivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Kekurangan vitamin A dapat menyebabkan?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Rabun senja',
                    'B' => 'Skorbut',
                    'C' => 'Beri-beri',
                    'D' => 'Anemia',
                ],
            ],
            [
                'payload' => 'Ilmuwan yang mengemukakan teori evolusi adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Charles Darwin',
                    'B' => 'Louis Pasteur',
                    'C' => 'Gregor Mendel',
                    'D' => 'Isaac Newton',
                ],
            ],
            [
                'payload' => 'Paus pembunuh termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Omnivora',
                    'C' => 'Herbivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Organisme yang menguraikan sisa makhluk hidup disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Dekomposer',
                    'B' => 'Produsen',
                    'C' => 'Konsumen',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Golongan darah yang disebut donor universal adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'O',
                    'B' => 'A',
                    'C' => 'B',
                    'D' => 'AB',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk pusat sistem saraf adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Usus besar',
                    'B' => 'Otak',
                    'C' => 'Kelenjar tiroid',
                    'D' => 'Diafragma',
                ],
            ],
            [
                'payload' => 'Hubungan antara dua makhluk hidup yang satu untung satu dirugikan disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Predasi',
                    'B' => 'Simbiosis komensalisme',
                    'C' => 'Simbiosis mutualisme',
                    'D' => 'Simbiosis parasitisme',
                ],
            ],
            [
                'payload' => 'Burung elang termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Karnivora',
                    'C' => 'Herbivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Kingdom yang beranggotakan makhluk hidup bersel satu tanpa membran inti disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Fungi',
                    'B' => 'Plantae',
                    'C' => 'Monera',
                    'D' => 'Protista',
                ],
            ],
            [
                'payload' => 'Musang air termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Omnivora',
                    'C' => 'Herbivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Singa termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Insektivora',
                    'C' => 'Omnivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Jerapah termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Karnivora',
                    'C' => 'Omnivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Tapir termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Herbivora',
                    'C' => 'Karnivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Bison termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Herbivora',
                    'C' => 'Omnivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Materi genetik yang membawa sifat keturunan disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Enzim',
                    'B' => 'Protein',
                    'C' => 'RNA',
                    'D' => 'DNA',
                ],
            ],
            [
                'payload' => 'Hewan yang berkembang biak dengan cara bertelur dan melahirkan disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Ovipar',
                    'B' => 'Fragmentasi',
                    'C' => 'Vivipar',
                    'D' => 'Ovovivipar',
                ],
            ],
            [
                'payload' => 'Rubah termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Karnivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Sel darah yang berfungsi melawan infeksi/kuman adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Sel darah merah (eritrosit)',
                    'B' => 'Plasma darah',
                    'C' => 'Sel darah putih (leukosit)',
                    'D' => 'Keping darah (trombosit)',
                ],
            ],
            [
                'payload' => 'Domba termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Omnivora',
                    'C' => 'Insektivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Jumlah tulang pada tubuh manusia dewasa adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '206',
                    'B' => '201',
                    'C' => '215',
                    'D' => '210',
                ],
            ],
            [
                'payload' => 'Unit terkecil penyusun makhluk hidup disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Organ',
                    'B' => 'Jaringan',
                    'C' => 'Sistem organ',
                    'D' => 'Sel',
                ],
            ],
            [
                'payload' => 'Kucing liar termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Herbivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Jumlah gigi tetap pada orang dewasa adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '30',
                    'B' => '32',
                    'C' => '28',
                    'D' => '36',
                ],
            ],
            [
                'payload' => 'Denyut jantung normal orang dewasa saat istirahat berkisar antara?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '150-200 kali per menit',
                    'B' => '10-30 kali per menit',
                    'C' => '60-100 kali per menit',
                    'D' => '200-250 kali per menit',
                ],
            ],
            [
                'payload' => 'Anjing liar termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Herbivora',
                    'C' => 'Karnivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Tumbuhan berbiji tertutup disebut kelompok?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Bryophyta',
                    'B' => 'Angiospermae',
                    'C' => 'Gymnospermae',
                    'D' => 'Pteridophyta',
                ],
            ],
            [
                'payload' => 'Gajah termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Insektivora',
                    'C' => 'Herbivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Proses penyerbukan yang serbuk sarinya dibantu oleh angin disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Hidrogami',
                    'B' => 'Entomogami',
                    'C' => 'Anemogami',
                    'D' => 'Ornitogami',
                ],
            ],
            [
                'payload' => 'Cheetah termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Herbivora',
                    'C' => 'Karnivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk mengecap rasa adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Kelenjar tiroid',
                    'B' => 'Lidah',
                    'C' => 'Otot',
                    'D' => 'Trakea',
                ],
            ],
            [
                'payload' => 'Kera termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Insektivora',
                    'C' => 'Herbivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Hewan yang mengalami metamorfosis sempurna contohnya adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Kupu-kupu',
                    'B' => 'Capung',
                    'C' => 'Kecoa',
                    'D' => 'Belalang',
                ],
            ],
            [
                'payload' => 'Ular piton termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Herbivora',
                    'C' => 'Omnivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Hubungan antara dua makhluk hidup yang saling menguntungkan disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Simbiosis komensalisme',
                    'B' => 'Simbiosis parasitisme',
                    'C' => 'Kompetisi',
                    'D' => 'Simbiosis mutualisme',
                ],
            ],
            [
                'payload' => 'Komodo termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Herbivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Contoh hewan yang berkembang biak dengan tunas adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Ayam',
                    'B' => 'Kucing',
                    'C' => 'Cacing pipih',
                    'D' => 'Hydra',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk membantu proses pernapasan adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Diafragma',
                    'B' => 'Lidah',
                    'C' => 'Telinga',
                    'D' => 'Usus besar',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk menetralkan racun dalam tubuh adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Jantung',
                    'B' => 'Ginjal',
                    'C' => 'Telinga',
                    'D' => 'Hati',
                ],
            ],
            [
                'payload' => 'Cabang biologi yang mempelajari hewan disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Genetika',
                    'B' => 'Zoologi',
                    'C' => 'Botani',
                    'D' => 'Mikrobiologi',
                ],
            ],
            [
                'payload' => 'Ayam termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Insektivora',
                    'C' => 'Omnivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk menggerakkan tubuh adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Otak',
                    'B' => 'Pankreas',
                    'C' => 'Usus besar',
                    'D' => 'Otot',
                ],
            ],
            [
                'payload' => 'Serigala termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Karnivora',
                    'C' => 'Herbivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Proses pertukaran zat dari konsentrasi tinggi ke rendah tanpa energi disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Osmosis',
                    'B' => 'Transpor aktif',
                    'C' => 'Endositosis',
                    'D' => 'Difusi',
                ],
            ],
        ],
        'Matematika' => [
            [
                'payload' => 'Berapakah hasil dari 212 + 210?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '431',
                    'B' => '411',
                    'C' => '422',
                    'D' => '435',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 428 - 155?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '265',
                    'B' => '273',
                    'C' => '262',
                    'D' => '283',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 342 + 72?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '418',
                    'B' => '411',
                    'C' => '402',
                    'D' => '414',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 31 cm dan lebar 21 cm. Berapakah luasnya?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '651',
                    'B' => '571',
                    'C' => '711',
                    'D' => '701',
                ],
            ],
            [
                'payload' => 'Berapakah 10% dari 300?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '30',
                    'B' => '24',
                    'C' => '28',
                    'D' => '22',
                ],
            ],
            [
                'payload' => 'Jika x + 44 = 140, maka nilai x adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '96',
                    'B' => '94',
                    'C' => '87',
                    'D' => '90',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 32 cm dan lebar 21 cm. Berapakah kelilingnya?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '115',
                    'B' => '106',
                    'C' => '109',
                    'D' => '96',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 490 : 14?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '41',
                    'B' => '40',
                    'C' => '35',
                    'D' => '36',
                ],
            ],
            [
                'payload' => 'Berapakah 25% dari 100?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '25',
                    'B' => '18',
                    'C' => '32',
                    'D' => '31',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 17 cm dan lebar 11 cm. Berapakah luasnya?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '187',
                    'B' => '182',
                    'C' => '165',
                    'D' => '194',
                ],
            ],
            [
                'payload' => 'Jika x + 73 = 92, maka nilai x adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '19',
                    'B' => '10',
                    'C' => '21',
                    'D' => '18',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 23 x 19?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '441',
                    'B' => '403',
                    'C' => '437',
                    'D' => '362',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 80 : 8?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '4',
                    'B' => '9',
                    'C' => '7',
                    'D' => '10',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 6 cm dan lebar 26 cm. Berapakah luasnya?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '171',
                    'B' => '159',
                    'C' => '136',
                    'D' => '156',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 546 : 14?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '39',
                    'B' => '38',
                    'C' => '44',
                    'D' => '40',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 24 x 8?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '165',
                    'B' => '219',
                    'C' => '214',
                    'D' => '192',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 272 : 8?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '39',
                    'B' => '30',
                    'C' => '40',
                    'D' => '34',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 48 : 6?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '8',
                    'B' => '3',
                    'C' => '4',
                    'D' => '6',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 564 - 480?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '82',
                    'B' => '70',
                    'C' => '83',
                    'D' => '84',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 22 x 4?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '83',
                    'B' => '87',
                    'C' => '88',
                    'D' => '81',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 16 x 10?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '142',
                    'B' => '176',
                    'C' => '189',
                    'D' => '160',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 377 + 338?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '700',
                    'B' => '711',
                    'C' => '715',
                    'D' => '701',
                ],
            ],
            [
                'payload' => 'Jika x + 85 = 163, maka nilai x adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '73',
                    'B' => '79',
                    'C' => '78',
                    'D' => '84',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 445 + 342?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '778',
                    'B' => '784',
                    'C' => '800',
                    'D' => '787',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 795 - 183?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '620',
                    'B' => '615',
                    'C' => '612',
                    'D' => '608',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 463 - 71?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '407',
                    'B' => '385',
                    'C' => '392',
                    'D' => '382',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 784 - 185?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '588',
                    'B' => '608',
                    'C' => '604',
                    'D' => '599',
                ],
            ],
            [
                'payload' => 'Jika x + 96 = 109, maka nilai x adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '13',
                    'B' => '3',
                    'C' => '16',
                    'D' => '15',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 13 x 17?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '239',
                    'B' => '221',
                    'C' => '249',
                    'D' => '244',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 36 : 3?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '17',
                    'B' => '12',
                    'C' => '16',
                    'D' => '18',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 686 - 298?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '386',
                    'B' => '391',
                    'C' => '388',
                    'D' => '379',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 23 cm dan lebar 33 cm. Berapakah kelilingnya?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '104',
                    'B' => '112',
                    'C' => '114',
                    'D' => '111',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 187 - 145?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '27',
                    'B' => '42',
                    'C' => '30',
                    'D' => '37',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 28 cm dan lebar 11 cm. Berapakah luasnya?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '350',
                    'B' => '308',
                    'C' => '361',
                    'D' => '288',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 317 + 231?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '544',
                    'B' => '547',
                    'C' => '539',
                    'D' => '548',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 24 : 4?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '1',
                    'B' => '10',
                    'C' => '5',
                    'D' => '6',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 20 x 8?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '177',
                    'B' => '149',
                    'C' => '160',
                    'D' => '171',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 150 + 285?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '435',
                    'B' => '439',
                    'C' => '423',
                    'D' => '442',
                ],
            ],
            [
                'payload' => 'Berapakah 15% dari 40?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '6',
                    'B' => '8',
                    'C' => '4',
                    'D' => '9',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 353 - 121?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '222',
                    'B' => '233',
                    'C' => '220',
                    'D' => '232',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 5 x 8?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '40',
                    'B' => '32',
                    'C' => '36',
                    'D' => '42',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 899 - 151?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '737',
                    'B' => '761',
                    'C' => '748',
                    'D' => '747',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 20 x 3?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '71',
                    'B' => '69',
                    'C' => '60',
                    'D' => '62',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 14 x 20?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '280',
                    'B' => '311',
                    'C' => '225',
                    'D' => '257',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 11 x 20?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '213',
                    'B' => '220',
                    'C' => '215',
                    'D' => '246',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 5 x 15?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '76',
                    'B' => '60',
                    'C' => '72',
                    'D' => '75',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 7 cm dan lebar 14 cm. Berapakah luasnya?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '109',
                    'B' => '98',
                    'C' => '117',
                    'D' => '113',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 279 : 9?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '34',
                    'B' => '26',
                    'C' => '36',
                    'D' => '31',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 294 - 145?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '164',
                    'B' => '152',
                    'C' => '157',
                    'D' => '149',
                ],
            ],
            [
                'payload' => 'Berapakah 30% dari 60?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '22',
                    'B' => '18',
                    'C' => '19',
                    'D' => '15',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 143 : 13?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '11',
                    'B' => '6',
                    'C' => '12',
                    'D' => '15',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 531 - 123?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '414',
                    'B' => '422',
                    'C' => '408',
                    'D' => '394',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 17 x 5?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '85',
                    'B' => '97',
                    'C' => '91',
                    'D' => '90',
                ],
            ],
            [
                'payload' => 'Jika x + 37 = 52, maka nilai x adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '24',
                    'B' => '16',
                    'C' => '8',
                    'D' => '15',
                ],
            ],
            [
                'payload' => 'Jika x + 28 = 67, maka nilai x adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '39',
                    'B' => '34',
                    'C' => '45',
                    'D' => '38',
                ],
            ],
            [
                'payload' => 'Jika x + 80 = 116, maka nilai x adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '43',
                    'B' => '38',
                    'C' => '44',
                    'D' => '36',
                ],
            ],
            [
                'payload' => 'Berapakah 60% dari 20?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '8',
                    'B' => '14',
                    'C' => '10',
                    'D' => '12',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 34 cm dan lebar 37 cm. Berapakah kelilingnya?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '149',
                    'B' => '139',
                    'C' => '133',
                    'D' => '142',
                ],
            ],
            [
                'payload' => 'Berapakah 10% dari 150?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '14',
                    'B' => '15',
                    'C' => '13',
                    'D' => '17',
                ],
            ],
            [
                'payload' => 'Jika x + 58 = 114, maka nilai x adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '63',
                    'B' => '49',
                    'C' => '64',
                    'D' => '56',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 324 + 150?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '462',
                    'B' => '483',
                    'C' => '474',
                    'D' => '459',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 488 + 342?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '844',
                    'B' => '819',
                    'C' => '826',
                    'D' => '830',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 381 + 347?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '732',
                    'B' => '738',
                    'C' => '741',
                    'D' => '728',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 72 : 9?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '9',
                    'B' => '4',
                    'C' => '13',
                    'D' => '8',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 76 + 141?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '215',
                    'B' => '207',
                    'C' => '217',
                    'D' => '218',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 189 + 157?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '342',
                    'B' => '348',
                    'C' => '339',
                    'D' => '346',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 547 - 119?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '416',
                    'B' => '441',
                    'C' => '428',
                    'D' => '432',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 21 x 10?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '176',
                    'B' => '210',
                    'C' => '204',
                    'D' => '183',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 30 cm dan lebar 8 cm. Berapakah kelilingnya?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '77',
                    'B' => '85',
                    'C' => '76',
                    'D' => '68',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 33 cm dan lebar 11 cm. Berapakah kelilingnya?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '83',
                    'B' => '86',
                    'C' => '88',
                    'D' => '96',
                ],
            ],
            [
                'payload' => 'Jika x + 42 = 45, maka nilai x adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '13',
                    'B' => '12',
                    'C' => '9',
                    'D' => '3',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 358 + 151?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '509',
                    'B' => '499',
                    'C' => '506',
                    'D' => '500',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 428 - 308?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '126',
                    'B' => '119',
                    'C' => '113',
                    'D' => '120',
                ],
            ],
            [
                'payload' => 'Berapakah 60% dari 120?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '80',
                    'B' => '72',
                    'C' => '66',
                    'D' => '69',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 8 cm dan lebar 26 cm. Berapakah luasnya?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '206',
                    'B' => '215',
                    'C' => '208',
                    'D' => '218',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 439 + 336?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '763',
                    'B' => '775',
                    'C' => '774',
                    'D' => '785',
                ],
            ],
            [
                'payload' => 'Jika x + 17 = 40, maka nilai x adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '32',
                    'B' => '23',
                    'C' => '25',
                    'D' => '14',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 10 cm dan lebar 21 cm. Berapakah luasnya?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '206',
                    'B' => '190',
                    'C' => '210',
                    'D' => '183',
                ],
            ],
            [
                'payload' => 'Berapakah 10% dari 200?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '22',
                    'B' => '15',
                    'C' => '18',
                    'D' => '20',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 491 - 191?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '314',
                    'B' => '289',
                    'C' => '307',
                    'D' => '300',
                ],
            ],
            [
                'payload' => 'Jika x + 3 = 59, maka nilai x adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '63',
                    'B' => '58',
                    'C' => '56',
                    'D' => '66',
                ],
            ],
            [
                'payload' => 'Berapakah 20% dari 120?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '29',
                    'B' => '24',
                    'C' => '25',
                    'D' => '30',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 14 x 10?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '124',
                    'B' => '149',
                    'C' => '116',
                    'D' => '140',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 725 - 108?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '617',
                    'B' => '623',
                    'C' => '631',
                    'D' => '604',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 5 cm dan lebar 27 cm. Berapakah kelilingnya?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '58',
                    'B' => '62',
                    'C' => '64',
                    'D' => '69',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 216 : 12?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '13',
                    'B' => '15',
                    'C' => '18',
                    'D' => '19',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 145 : 5?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '26',
                    'B' => '29',
                    'C' => '35',
                    'D' => '33',
                ],
            ],
            [
                'payload' => 'Berapakah 25% dari 50?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '13',
                    'B' => '12',
                    'C' => '14',
                    'D' => '11',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 237 + 95?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '333',
                    'B' => '323',
                    'C' => '341',
                    'D' => '332',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 21 x 15?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '290',
                    'B' => '315',
                    'C' => '343',
                    'D' => '362',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 472 - 22?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '463',
                    'B' => '450',
                    'C' => '438',
                    'D' => '445',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 11 x 9?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '90',
                    'B' => '105',
                    'C' => '100',
                    'D' => '99',
                ],
            ],
            [
                'payload' => 'Berapakah 40% dari 150?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '44',
                    'B' => '60',
                    'C' => '74',
                    'D' => '46',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 429 : 11?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '39',
                    'B' => '43',
                    'C' => '35',
                    'D' => '45',
                ],
            ],
            [
                'payload' => 'Jika x + 65 = 123, maka nilai x adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '49',
                    'B' => '48',
                    'C' => '66',
                    'D' => '58',
                ],
            ],
            [
                'payload' => 'Berapakah 75% dari 300?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '225',
                    'B' => '279',
                    'C' => '275',
                    'D' => '186',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 19 x 19?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '326',
                    'B' => '298',
                    'C' => '424',
                    'D' => '361',
                ],
            ],
            [
                'payload' => 'Berapakah 50% dari 50?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '26',
                    'B' => '28',
                    'C' => '25',
                    'D' => '22',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 26 cm dan lebar 26 cm. Berapakah luasnya?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '763',
                    'B' => '590',
                    'C' => '776',
                    'D' => '676',
                ],
            ],
            [
                'payload' => 'Jika x + 86 = 127, maka nilai x adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '39',
                    'B' => '33',
                    'C' => '47',
                    'D' => '41',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 24 x 17?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '466',
                    'B' => '408',
                    'C' => '396',
                    'D' => '437',
                ],
            ],
            [
                'payload' => 'Jika x + 55 = 107, maka nilai x adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '54',
                    'B' => '44',
                    'C' => '52',
                    'D' => '46',
                ],
            ],
            [
                'payload' => 'Berapakah 40% dari 40?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '17',
                    'B' => '13',
                    'C' => '15',
                    'D' => '16',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 330 : 10?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '33',
                    'B' => '37',
                    'C' => '36',
                    'D' => '35',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 16 x 15?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '240',
                    'B' => '269',
                    'C' => '261',
                    'D' => '234',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 877 - 451?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '426',
                    'B' => '425',
                    'C' => '424',
                    'D' => '423',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 23 x 5?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '115',
                    'B' => '137',
                    'C' => '132',
                    'D' => '126',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 16 x 18?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '337',
                    'B' => '328',
                    'C' => '288',
                    'D' => '342',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 6 x 16?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '96',
                    'B' => '94',
                    'C' => '109',
                    'D' => '103',
                ],
            ],
            [
                'payload' => 'Berapakah 20% dari 150?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '38',
                    'B' => '31',
                    'C' => '30',
                    'D' => '35',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 38 cm dan lebar 27 cm. Berapakah kelilingnya?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '130',
                    'B' => '124',
                    'C' => '135',
                    'D' => '120',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 23 x 14?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '262',
                    'B' => '318',
                    'C' => '326',
                    'D' => '322',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 2 x 3?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '11',
                    'B' => '2',
                    'C' => '6',
                    'D' => '10',
                ],
            ],
            [
                'payload' => 'Berapakah 10% dari 120?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '12',
                    'B' => '8',
                    'C' => '9',
                    'D' => '15',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 265 + 24?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '304',
                    'B' => '274',
                    'C' => '293',
                    'D' => '289',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 33 cm dan lebar 26 cm. Berapakah luasnya?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '725',
                    'B' => '858',
                    'C' => '816',
                    'D' => '785',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 24 x 15?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '360',
                    'B' => '313',
                    'C' => '369',
                    'D' => '293',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 374 : 11?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '40',
                    'B' => '35',
                    'C' => '34',
                    'D' => '31',
                ],
            ],
            [
                'payload' => 'Jika x + 83 = 177, maka nilai x adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '98',
                    'B' => '94',
                    'C' => '91',
                    'D' => '90',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 452 + 134?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '589',
                    'B' => '586',
                    'C' => '594',
                    'D' => '579',
                ],
            ],
            [
                'payload' => 'Berapakah 20% dari 300?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '50',
                    'B' => '56',
                    'C' => '60',
                    'D' => '51',
                ],
            ],
            [
                'payload' => 'Jika x + 95 = 112, maka nilai x adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '25',
                    'B' => '17',
                    'C' => '15',
                    'D' => '26',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 11 x 11?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '136',
                    'B' => '121',
                    'C' => '107',
                    'D' => '104',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 748 - 137?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '605',
                    'B' => '596',
                    'C' => '611',
                    'D' => '621',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 110 - 94?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '17',
                    'B' => '28',
                    'C' => '16',
                    'D' => '21',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 70 : 7?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '14',
                    'B' => '4',
                    'C' => '15',
                    'D' => '10',
                ],
            ],
            [
                'payload' => 'Berapakah 30% dari 250?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '90',
                    'B' => '75',
                    'C' => '89',
                    'D' => '82',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 18 cm dan lebar 39 cm. Berapakah luasnya?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '567',
                    'B' => '750',
                    'C' => '720',
                    'D' => '702',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 12 x 2?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '24',
                    'B' => '21',
                    'C' => '27',
                    'D' => '20',
                ],
            ],
            [
                'payload' => 'Jika x + 44 = 103, maka nilai x adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '53',
                    'B' => '58',
                    'C' => '59',
                    'D' => '65',
                ],
            ],
            [
                'payload' => 'Berapakah 15% dari 80?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '12',
                    'B' => '10',
                    'C' => '13',
                    'D' => '15',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 33 cm dan lebar 31 cm. Berapakah kelilingnya?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '123',
                    'B' => '128',
                    'C' => '122',
                    'D' => '133',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 280 : 14?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '20',
                    'B' => '23',
                    'C' => '18',
                    'D' => '25',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 408 : 12?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '37',
                    'B' => '38',
                    'C' => '30',
                    'D' => '34',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 86 + 141?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '242',
                    'B' => '239',
                    'C' => '227',
                    'D' => '233',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 30 cm dan lebar 35 cm. Berapakah kelilingnya?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '135',
                    'B' => '130',
                    'C' => '131',
                    'D' => '126',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 61 + 401?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '448',
                    'B' => '462',
                    'C' => '449',
                    'D' => '459',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 9 x 10?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '82',
                    'B' => '90',
                    'C' => '85',
                    'D' => '101',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 30 : 6?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '11',
                    'B' => '5',
                    'C' => '6',
                    'D' => '2',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 152 + 48?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '204',
                    'B' => '185',
                    'C' => '200',
                    'D' => '207',
                ],
            ],
            [
                'payload' => 'Jika x + 7 = 100, maka nilai x adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '99',
                    'B' => '103',
                    'C' => '93',
                    'D' => '83',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 58 + 389?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '434',
                    'B' => '447',
                    'C' => '444',
                    'D' => '461',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 614 - 371?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '228',
                    'B' => '243',
                    'C' => '252',
                    'D' => '241',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 23 x 4?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '95',
                    'B' => '109',
                    'C' => '92',
                    'D' => '82',
                ],
            ],
            [
                'payload' => 'Jika x + 11 = 98, maka nilai x adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '95',
                    'B' => '94',
                    'C' => '91',
                    'D' => '87',
                ],
            ],
            [
                'payload' => 'Jika x + 14 = 43, maka nilai x adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '38',
                    'B' => '29',
                    'C' => '31',
                    'D' => '39',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 19 x 6?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '94',
                    'B' => '114',
                    'C' => '136',
                    'D' => '100',
                ],
            ],
            [
                'payload' => 'Berapakah hasil dari 342 : 9?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '38',
                    'B' => '37',
                    'C' => '33',
                    'D' => '34',
                ],
            ],
            [
                'payload' => 'Sebuah persegi panjang memiliki panjang 12 cm dan lebar 13 cm. Berapakah kelilingnya?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '40',
                    'B' => '50',
                    'C' => '43',
                    'D' => '42',
                ],
            ],
            [
                'payload' => 'Berapakah 15% dari 200?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '23',
                    'B' => '31',
                    'C' => '30',
                    'D' => '32',
                ],
            ],
        ],
        'Bahasa Indonesia' => [
            [
                'payload' => 'Antonim (lawan kata) dari kata \'atas\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'sedih',
                    'B' => 'bawah',
                    'C' => 'ekspor',
                    'D' => 'kotor',
                ],
            ],
            [
                'payload' => 'Teks yang menceritakan suatu peristiwa secara kronologis disebut teks?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Argumentasi',
                    'B' => 'Deskripsi',
                    'C' => 'Narasi',
                    'D' => 'Eksposisi',
                ],
            ],
            [
                'payload' => 'Penulis \'Tenggelamnya Kapal Van Der Wijck\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Andrea Hirata',
                    'B' => 'Buya Hamka',
                    'C' => 'Pramoedya Ananta Toer',
                    'D' => 'Marah Rusli',
                ],
            ],
            [
                'payload' => 'Kata yang belum mendapat imbuhan apapun disebut kata?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Ulang',
                    'B' => 'Majemuk',
                    'C' => 'Dasar',
                    'D' => 'Berimbuhan',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'terang\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'gelap',
                    'B' => 'belakang',
                    'C' => 'rendah',
                    'D' => 'muda',
                ],
            ],
            [
                'payload' => 'Kalimat yang mengandung makna kiasan disebut kalimat?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Konotasi',
                    'B' => 'Literal',
                    'C' => 'Harfiah',
                    'D' => 'Denotasi',
                ],
            ],
            [
                'payload' => 'Kalimat yang mengandung satu subjek dan satu predikat disebut kalimat?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Tunggal',
                    'B' => 'Interogatif',
                    'C' => 'Kompleks',
                    'D' => 'Majemuk',
                ],
            ],
            [
                'payload' => 'Kata tanya untuk menanyakan orang adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Apa',
                    'B' => 'Kapan',
                    'C' => 'Di mana',
                    'D' => 'Siapa',
                ],
            ],
            [
                'payload' => 'Gabungan dua huruf vokal yang diucapkan sebagai satu suku kata disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Morfem',
                    'B' => 'Konsonan rangkap',
                    'C' => 'Diftong',
                    'D' => 'Fonem',
                ],
            ],
            [
                'payload' => 'Kata yang mengalami proses pengulangan disebut kata?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Ulang',
                    'B' => 'Dasar',
                    'C' => 'Turunan',
                    'D' => 'Majemuk',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'masuk\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'mundur',
                    'B' => 'turun',
                    'C' => 'keluar',
                    'D' => 'sempit',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'resiko\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Risiko',
                    'B' => 'Risko',
                    'C' => 'Resiko',
                    'D' => 'Rizeko',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'bodoh\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'musnah',
                    'B' => 'mulia',
                    'C' => 'dungu',
                    'D' => 'makmur',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'maju\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'pasif',
                    'B' => 'mundur',
                    'C' => 'buruk',
                    'D' => 'sedih',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'kaya\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'miskin',
                    'B' => 'muda',
                    'C' => 'turun',
                    'D' => 'rugi',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'berani\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'kalah',
                    'B' => 'takut',
                    'C' => 'tertutup',
                    'D' => 'dingin',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'gembira\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'cerdas',
                    'B' => 'menatap',
                    'C' => 'mulia',
                    'D' => 'riang',
                ],
            ],
            [
                'payload' => 'Imbuhan yang disisipkan di tengah kata disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Konfiks',
                    'B' => 'Sisipan (infiks)',
                    'C' => 'Akhiran',
                    'D' => 'Awalan',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'menang\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'lambat',
                    'B' => 'mati',
                    'C' => 'malam',
                    'D' => 'kalah',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'statis\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'miskin',
                    'B' => 'kecil',
                    'C' => 'dinamis',
                    'D' => 'muda',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'buruk\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'jelek',
                    'B' => 'raksasa',
                    'C' => 'cermat',
                    'D' => 'senang',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'cepat\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'kecil',
                    'B' => 'lambat',
                    'C' => 'pendek',
                    'D' => 'bawah',
                ],
            ],
            [
                'payload' => 'Paragraf yang kalimat utamanya berada di akhir disebut paragraf?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Deskriptif',
                    'B' => 'Induktif',
                    'C' => 'Campuran',
                    'D' => 'Deduktif',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'depan\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'turun',
                    'B' => 'belakang',
                    'C' => 'gelap',
                    'D' => 'keluar',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'sekedar\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Skedar',
                    'B' => 'Sekadarr',
                    'C' => 'Sekedar',
                    'D' => 'Sekadar',
                ],
            ],
            [
                'payload' => 'Puisi lama yang bersajak a-a-a-a dan berisi cerita disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Syair',
                    'B' => 'Pantun',
                    'C' => 'Gurindam',
                    'D' => 'Talibun',
                ],
            ],
            [
                'payload' => 'Amanat dalam sebuah cerita adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Latar tempat cerita',
                    'B' => 'Pesan moral yang ingin disampaikan pengarang',
                    'C' => 'Nama tokoh utama',
                    'D' => 'Judul cerita',
                ],
            ],
            [
                'payload' => 'Kata tanya untuk menanyakan cara adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Siapa',
                    'B' => 'Bagaimana',
                    'C' => 'Kapan',
                    'D' => 'Mengapa',
                ],
            ],
            [
                'payload' => 'Daftar sumber referensi yang digunakan dalam sebuah karya tulis disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Daftar isi',
                    'B' => 'Lampiran',
                    'C' => 'Kata pengantar',
                    'D' => 'Daftar pustaka',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'import\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'bohong',
                    'B' => 'kurus',
                    'C' => 'buruk',
                    'D' => 'ekspor',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'untung\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'bohong',
                    'B' => 'rugi',
                    'C' => 'baru',
                    'D' => 'kalah',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'gemuk\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'baru',
                    'B' => 'kalah',
                    'C' => 'kurus',
                    'D' => 'keluar',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'panas\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'sempit',
                    'B' => 'belakang',
                    'C' => 'dingin',
                    'D' => 'rugi',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'tua\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'muda',
                    'B' => 'tertutup',
                    'C' => 'turun',
                    'D' => 'baru',
                ],
            ],
            [
                'payload' => 'Teks yang bertujuan meyakinkan pembaca dengan argumen disebut teks?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Eksposisi',
                    'B' => 'Narasi',
                    'C' => 'Argumentasi',
                    'D' => 'Deskripsi',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'cepat\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'meratap',
                    'B' => 'laju',
                    'C' => 'elok',
                    'D' => 'menatap',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'rajin\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'malas',
                    'B' => 'sempit',
                    'C' => 'sulit',
                    'D' => 'kalah',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'jujur\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'turun',
                    'B' => 'lembut',
                    'C' => 'bohong',
                    'D' => 'mati',
                ],
            ],
            [
                'payload' => 'Puisi lama yang bersajak a-b-a-b dan bermakna nasihat disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Mantra',
                    'B' => 'Gurindam',
                    'C' => 'Pantun',
                    'D' => 'Syair',
                ],
            ],
            [
                'payload' => 'Cerita fiksi panjang yang menggambarkan kehidupan tokoh disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Novel',
                    'B' => 'Drama',
                    'C' => 'Puisi',
                    'D' => 'Cerpen',
                ],
            ],
            [
                'payload' => 'Kata tanya untuk menanyakan sebab adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Kapan',
                    'B' => 'Apa',
                    'C' => 'Di mana',
                    'D' => 'Mengapa',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'bersih\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'lembut',
                    'B' => 'kotor',
                    'C' => 'rugi',
                    'D' => 'ekspor',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'jaman\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Zeman',
                    'B' => 'Jaman',
                    'C' => 'Djaman',
                    'D' => 'Zaman',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'naik\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'bohong',
                    'B' => 'turun',
                    'C' => 'pasif',
                    'D' => 'sulit',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'rajin\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'tekun',
                    'B' => 'gampang',
                    'C' => 'murka',
                    'D' => 'perkasa',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'pandai\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'musnah',
                    'B' => 'meratap',
                    'C' => 'anyar',
                    'D' => 'pintar',
                ],
            ],
            [
                'payload' => 'Teks yang memaparkan informasi secara jelas dan padat disebut teks?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Eksposisi',
                    'B' => 'Argumentasi',
                    'C' => 'Narasi',
                    'D' => 'Deskripsi',
                ],
            ],
            [
                'payload' => 'Bentuk karya sastra yang dipentaskan dengan dialog dan gerak disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Puisi',
                    'B' => 'Pantun',
                    'C' => 'Prosa',
                    'D' => 'Drama',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'marah\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'murka',
                    'B' => 'mustahal',
                    'C' => 'laju',
                    'D' => 'enggan',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'berat\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'ringan',
                    'B' => 'keluar',
                    'C' => 'bawah',
                    'D' => 'lemah',
                ],
            ],
            [
                'payload' => 'Paragraf yang kalimat utamanya berada di awal disebut paragraf?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Naratif',
                    'B' => 'Induktif',
                    'C' => 'Campuran',
                    'D' => 'Deduktif',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'nasehat\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Nasehat',
                    'B' => 'Nasihatt',
                    'C' => 'Nasehad',
                    'D' => 'Nasihat',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'awal\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'turun',
                    'B' => 'keluar',
                    'C' => 'akhir',
                    'D' => 'kering',
                ],
            ],
            [
                'payload' => 'Cerita rakyat \'Sangkuriang\' berasal dari daerah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Sumatera Utara',
                    'B' => 'Sumatera Barat',
                    'C' => 'Jawa Barat',
                    'D' => 'Bali',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'mudah\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'sulit',
                    'B' => 'sedikit',
                    'C' => 'takut',
                    'D' => 'dinamis',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'melihat\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'mustahal',
                    'B' => 'menatap',
                    'C' => 'cerdas',
                    'D' => 'licik',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'mustahil\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'anyar',
                    'B' => 'kekal',
                    'C' => 'papa',
                    'D' => 'mustahal',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'panjang\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'gelap',
                    'B' => 'bohong',
                    'C' => 'pendek',
                    'D' => 'kecil',
                ],
            ],
            [
                'payload' => 'Kata yang menyatakan nama benda, orang, atau tempat disebut kata?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Verba',
                    'B' => 'Adjektiva',
                    'C' => 'Nomina (kata benda)',
                    'D' => 'Adverbia',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'sedih\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'perkasa',
                    'B' => 'senang',
                    'C' => 'laju',
                    'D' => 'duka',
                ],
            ],
            [
                'payload' => 'Kalimat yang berisi perintah disebut kalimat?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Deklaratif',
                    'B' => 'Interogatif',
                    'C' => 'Imperatif',
                    'D' => 'Naratif',
                ],
            ],
            [
                'payload' => 'Ringkasan singkat isi buku sebelum bab pertama disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Indeks',
                    'B' => 'Daftar isi',
                    'C' => 'Daftar pustaka',
                    'D' => 'Kata pengantar',
                ],
            ],
            [
                'payload' => 'Puisi lama yang terdiri dari dua baris berisi nasihat disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Gurindam',
                    'B' => 'Syair',
                    'C' => 'Pantun',
                    'D' => 'Mantra',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'kuat\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'lemah',
                    'B' => 'ekspor',
                    'C' => 'akhir',
                    'D' => 'takut',
                ],
            ],
            [
                'payload' => 'Jumlah baris dalam satu bait pantun adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '6 baris',
                    'B' => '8 baris',
                    'C' => '4 baris',
                    'D' => '2 baris',
                ],
            ],
            [
                'payload' => 'Bagian akhir cerita yang berisi penyelesaian masalah disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Komplikasi',
                    'B' => 'Koda',
                    'C' => 'Orientasi',
                    'D' => 'Resolusi',
                ],
            ],
            [
                'payload' => 'Kalimat yang berisi pertanyaan disebut kalimat?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Imperatif',
                    'B' => 'Eksklamatif',
                    'C' => 'Deklaratif',
                    'D' => 'Interogatif',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'hancur\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'jelita',
                    'B' => 'musnah',
                    'C' => 'licik',
                    'D' => 'menatap',
                ],
            ],
            [
                'payload' => 'Cerita fiksi pendek yang selesai dibaca dalam sekali duduk disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Novel',
                    'B' => 'Cerpen',
                    'C' => 'Roman',
                    'D' => 'Drama',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'baru\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'anyar',
                    'B' => 'murka',
                    'C' => 'licik',
                    'D' => 'gagah',
                ],
            ],
            [
                'payload' => 'Pengarang puisi \'Aku\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Sapardi Djoko Damono',
                    'B' => 'W.S. Rendra',
                    'C' => 'Taufiq Ismail',
                    'D' => 'Chairil Anwar',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'terkenal\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'perkasa',
                    'B' => 'jelita',
                    'C' => 'menatap',
                    'D' => 'masyhur',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'mudah\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'jelita',
                    'B' => 'tekun',
                    'C' => 'gampang',
                    'D' => 'gagah',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'cantik\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'jelita',
                    'B' => 'papa',
                    'C' => 'kekal',
                    'D' => 'karib',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'kecil\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'musnah',
                    'B' => 'raksasa',
                    'C' => 'masyhur',
                    'D' => 'mungil',
                ],
            ],
            [
                'payload' => 'Kata tanya untuk menanyakan waktu adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Siapa',
                    'B' => 'Di mana',
                    'C' => 'Kapan',
                    'D' => 'Mengapa',
                ],
            ],
            [
                'payload' => 'Cerita rakyat \'Malin Kundang\' berasal dari daerah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Jawa Barat',
                    'B' => 'Kalimantan Timur',
                    'C' => 'Sulawesi Selatan',
                    'D' => 'Sumatera Barat',
                ],
            ],
            [
                'payload' => 'Kata yang menyatakan suatu tindakan atau perbuatan disebut kata?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Numeralia',
                    'B' => 'Nomina',
                    'C' => 'Adjektiva',
                    'D' => 'Verba (kata kerja)',
                ],
            ],
            [
                'payload' => 'Satuan bahasa terkecil yang memiliki makna disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Frasa',
                    'B' => 'Morfem',
                    'C' => 'Kata',
                    'D' => 'Fonem',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'agung\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'mustahal',
                    'B' => 'mungil',
                    'C' => 'sukar',
                    'D' => 'mulia',
                ],
            ],
            [
                'payload' => 'Kalimat yang mengandung makna sebenarnya disebut kalimat?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Denotasi',
                    'B' => 'Konotasi',
                    'C' => 'Kiasan',
                    'D' => 'Majas',
                ],
            ],
            [
                'payload' => 'Bagian surat yang berisi identitas instansi pengirim disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Salam pembuka',
                    'B' => 'Perihal',
                    'C' => 'Salam penutup',
                    'D' => 'Kop surat',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'baik\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'buruk',
                    'B' => 'sulit',
                    'C' => 'murah',
                    'D' => 'ekspor',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'hidup\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'mati',
                    'B' => 'baru',
                    'C' => 'ekspor',
                    'D' => 'mundur',
                ],
            ],
            [
                'payload' => 'Kata yang menerangkan kata kerja, sifat, atau kata lain disebut kata?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Adverbia (kata keterangan)',
                    'B' => 'Nomina',
                    'C' => 'Verba',
                    'D' => 'Numeralia',
                ],
            ],
            [
                'payload' => 'Surat resmi biasanya diakhiri dengan bagian yang disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Lampiran',
                    'B' => 'Salam pembuka',
                    'C' => 'Salam penutup',
                    'D' => 'Kop surat',
                ],
            ],
            [
                'payload' => 'Pengarang novel \'Laskar Pelangi\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Andrea Hirata',
                    'B' => 'Chairil Anwar',
                    'C' => 'Ahmad Tohari',
                    'D' => 'Pramoedya Ananta Toer',
                ],
            ],
            [
                'payload' => 'Kata tanya untuk menanyakan tempat adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Bagaimana',
                    'B' => 'Kapan',
                    'C' => 'Mengapa',
                    'D' => 'Di mana',
                ],
            ],
            [
                'payload' => 'Karangan yang menggambarkan suatu objek secara rinci disebut karangan?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Eksposisi',
                    'B' => 'Deskripsi',
                    'C' => 'Narasi',
                    'D' => 'Argumentasi',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'bagus\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'tulus',
                    'B' => 'karib',
                    'C' => 'elok',
                    'D' => 'papa',
                ],
            ],
            [
                'payload' => 'Gabungan dua kata atau lebih yang membentuk makna baru disebut kata?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Berimbuhan',
                    'B' => 'Dasar',
                    'C' => 'Majemuk',
                    'D' => 'Ulang',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'besar\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'raksasa',
                    'B' => 'gentar',
                    'C' => 'laju',
                    'D' => 'riang',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'miskin\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'kekal',
                    'B' => 'papa',
                    'C' => 'senang',
                    'D' => 'mungil',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'analisa\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Analisis',
                    'B' => 'Analisa',
                    'C' => 'Analize',
                    'D' => 'Analisys',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'apotik\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Apotik',
                    'B' => 'Apotek',
                    'C' => 'Apotekk',
                    'D' => 'Apoteker',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'cerdik\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'licik',
                    'B' => 'anyar',
                    'C' => 'riang',
                    'D' => 'mungil',
                ],
            ],
            [
                'payload' => 'Bagian awal cerita yang memperkenalkan tokoh dan latar disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Orientasi',
                    'B' => 'Komplikasi',
                    'C' => 'Koda',
                    'D' => 'Resolusi',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'abadi\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'murka',
                    'B' => 'kekal',
                    'C' => 'enggan',
                    'D' => 'raksasa',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'bicara\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'tulus',
                    'B' => 'tutur',
                    'C' => 'senang',
                    'D' => 'sukar',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'rapi\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'dingin',
                    'B' => 'pendek',
                    'C' => 'berantakan',
                    'D' => 'tertutup',
                ],
            ],
            [
                'payload' => 'Majas yang melebih-lebihkan sesuatu disebut majas?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Personifikasi',
                    'B' => 'Metafora',
                    'C' => 'Hiperbola',
                    'D' => 'Litotes',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'tinggi\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'rendah',
                    'B' => 'sedikit',
                    'C' => 'kering',
                    'D' => 'kurus',
                ],
            ],
            [
                'payload' => 'Huruf pertama nama hari, bulan, dan hari besar ditulis dengan huruf?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Kapital',
                    'B' => 'Tebal',
                    'C' => 'Kecil',
                    'D' => 'Miring',
                ],
            ],
            [
                'payload' => 'Imbuhan yang diletakkan di akhir kata disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Akhiran (sufiks)',
                    'B' => 'Sisipan',
                    'C' => 'Konfiks',
                    'D' => 'Awalan',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'karir\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Karir',
                    'B' => 'Karier',
                    'C' => 'Karrier',
                    'D' => 'Kariir',
                ],
            ],
            [
                'payload' => 'Penulis novel \'Bumi Manusia\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Andrea Hirata',
                    'B' => 'Buya Hamka',
                    'C' => 'Chairil Anwar',
                    'D' => 'Pramoedya Ananta Toer',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'besar\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'turun',
                    'B' => 'malas',
                    'C' => 'dingin',
                    'D' => 'kecil',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'dekat\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'karib',
                    'B' => 'gagah',
                    'C' => 'jelek',
                    'D' => 'elok',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'menangis\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'meratap',
                    'B' => 'gentar',
                    'C' => 'gampang',
                    'D' => 'permai',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'bebas\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'merdeka',
                    'B' => 'masyhur',
                    'C' => 'dungu',
                    'D' => 'laju',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'jujur\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'licik',
                    'B' => 'elok',
                    'C' => 'mulia',
                    'D' => 'tulus',
                ],
            ],
            [
                'payload' => 'Kalimat yang menyatakan berita disebut kalimat?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Interogatif',
                    'B' => 'Imperatif',
                    'C' => 'Deklaratif',
                    'D' => 'Eksklamatif',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'luas\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'sempit',
                    'B' => 'akhir',
                    'C' => 'bawah',
                    'D' => 'lemah',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'indah\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'licik',
                    'B' => 'gampang',
                    'C' => 'permai',
                    'D' => 'gentar',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'lama\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'baru',
                    'B' => 'benci',
                    'C' => 'muda',
                    'D' => 'keluar',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'mahal\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'sulit',
                    'B' => 'murah',
                    'C' => 'rendah',
                    'D' => 'lembut',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'takut\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'duka',
                    'B' => 'gentar',
                    'C' => 'elok',
                    'D' => 'anyar',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'keras\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'sedih',
                    'B' => 'lembut',
                    'C' => 'sulit',
                    'D' => 'kurus',
                ],
            ],
            [
                'payload' => 'Gaya bahasa yang membandingkan dua hal secara langsung disebut majas?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Metafora',
                    'B' => 'Personifikasi',
                    'C' => 'Hiperbola',
                    'D' => 'Ironi',
                ],
            ],
            [
                'payload' => 'Kalimat yang terdiri dari dua klausa atau lebih disebut kalimat?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Simpleks',
                    'B' => 'Tunggal',
                    'C' => 'Deklaratif',
                    'D' => 'Majemuk',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'bohong\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'menolong',
                    'B' => 'dusta',
                    'C' => 'gampang',
                    'D' => 'licik',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'siang\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'ekspor',
                    'B' => 'malam',
                    'C' => 'murah',
                    'D' => 'malas',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'kaya\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'gentar',
                    'B' => 'elok',
                    'C' => 'makmur',
                    'D' => 'licik',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'banyak\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'dingin',
                    'B' => 'takut',
                    'C' => 'gelap',
                    'D' => 'sedikit',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'berani\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'menolong',
                    'B' => 'cerdas',
                    'C' => 'gagah',
                    'D' => 'licik',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'hakekat\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Hakekat',
                    'B' => 'Hakikat',
                    'C' => 'Hakikad',
                    'D' => 'Hakekad',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'praktek\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Praktikk',
                    'B' => 'Praktik',
                    'C' => 'Prakték',
                    'D' => 'Praktek',
                ],
            ],
            [
                'payload' => 'Bagian cerita yang berisi puncak masalah disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Koda',
                    'B' => 'Resolusi',
                    'C' => 'Komplikasi',
                    'D' => 'Orientasi',
                ],
            ],
            [
                'payload' => 'Tanda baca yang digunakan untuk mengakhiri kalimat berita adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Tanya (?)',
                    'B' => 'Seru (!)',
                    'C' => 'Titik (.)',
                    'D' => 'Koma (,)',
                ],
            ],
            [
                'payload' => 'Majas yang memberikan sifat manusia kepada benda mati disebut majas?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Metafora',
                    'B' => 'Personifikasi',
                    'C' => 'Simile',
                    'D' => 'Hiperbola',
                ],
            ],
            [
                'payload' => 'Pantun bersajak?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'a-a-a-a',
                    'B' => 'a-b-b-a',
                    'C' => 'a-b-a-b',
                    'D' => 'a-a-b-b',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'kuat\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'raksasa',
                    'B' => 'gampang',
                    'C' => 'tulus',
                    'D' => 'perkasa',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'pintar\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'cerdas',
                    'B' => 'kekal',
                    'C' => 'mustahal',
                    'D' => 'elok',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'suka\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'malas',
                    'B' => 'buruk',
                    'C' => 'kalah',
                    'D' => 'benci',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'membantu\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'merdeka',
                    'B' => 'duka',
                    'C' => 'jelek',
                    'D' => 'menolong',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'malas\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'sukar',
                    'B' => 'enggan',
                    'C' => 'gampang',
                    'D' => 'duka',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'ijin\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Ijin',
                    'B' => 'Izin',
                    'C' => 'Izinn',
                    'D' => 'Idzin',
                ],
            ],
            [
                'payload' => 'Majas yang merendahkan diri untuk merendah disebut majas?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Personifikasi',
                    'B' => 'Hiperbola',
                    'C' => 'Metafora',
                    'D' => 'Litotes',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'gembira\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'kalah',
                    'B' => 'murah',
                    'C' => 'sedih',
                    'D' => 'muda',
                ],
            ],
            [
                'payload' => 'Kata yang menunjukkan jumlah atau bilangan disebut kata?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Adjektiva',
                    'B' => 'Verba',
                    'C' => 'Nomina',
                    'D' => 'Numeralia',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'basah\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'baru',
                    'B' => 'kering',
                    'C' => 'ringan',
                    'D' => 'mati',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'teliti\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'dusta',
                    'B' => 'cerdas',
                    'C' => 'licik',
                    'D' => 'cermat',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'aktif\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'bawah',
                    'B' => 'pasif',
                    'C' => 'tertutup',
                    'D' => 'gelap',
                ],
            ],
            [
                'payload' => 'Tanda baca yang digunakan untuk mengakhiri kalimat tanya adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Koma (,)',
                    'B' => 'Titik (.)',
                    'C' => 'Titik dua (:)',
                    'D' => 'Tanda tanya (?)',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'bahagia\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'senang',
                    'B' => 'sukar',
                    'C' => 'cermat',
                    'D' => 'licik',
                ],
            ],
            [
                'payload' => 'Gabungan huruf konsonan seperti \'ng\', \'ny\', \'kh\' disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Fonem',
                    'B' => 'Diftong vokal',
                    'C' => 'Vokal rangkap',
                    'D' => 'Diftong konsonan',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'cantik\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'cerdas',
                    'B' => 'jelita',
                    'C' => 'permai',
                    'D' => 'elok',
                ],
            ],
            [
                'payload' => 'Imbuhan yang diletakkan di awal kata disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Akhiran',
                    'B' => 'Konfiks',
                    'C' => 'Sisipan',
                    'D' => 'Awalan (prefiks)',
                ],
            ],
            [
                'payload' => 'Kata yang menyatakan sifat atau keadaan disebut kata?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Verba',
                    'B' => 'Adjektiva (kata sifat)',
                    'C' => 'Numeralia',
                    'D' => 'Nomina',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'terbuka\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'ekspor',
                    'B' => 'tertutup',
                    'C' => 'berantakan',
                    'D' => 'sulit',
                ],
            ],
        ],
    ];

    /**
     * Jalankan seeder.
     */
    public function run(): void
    {
        foreach ($this->data as $subjectName => $questions) {
            $subject = Subject::firstOrCreate(
                ['name' => $subjectName],
                ['is_active' => true]
            );

            $this->command->info("Seeding {$subjectName}: " . count($questions) . ' soal...');

            foreach ($questions as $item) {
                $question = Question::create([
                    'subject_id' => $subject->id,
                    'payload' => $item['payload'],
                    'correct_answer' => $item['correct_answer'],
                    'score' => 1,
                    'is_active' => true,
                ]);

                foreach ($item['options'] as $letter => $text) {
                    Answer::create([
                        'question_id' => $question->id,
                        'letter' => $letter,
                        'text' => $text,
                        'is_correct' => $letter === $item['correct_answer'],
                        'is_active' => true,
                    ]);
                }
            }
        }

        $this->command->info('Selesai! Total soal: ' . Question::count());
    }
}