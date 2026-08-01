<?php

namespace Database\Seeders;

use App\Models\DiscQuestion;
use Illuminate\Database\Seeder;

class DiscQuestionSeeder extends Seeder
{
    public function run(): void
    {
        $questions = [
            [
                'question_number' => 1,

                'statement_1' => 'Mudah sepakat, fleksibel',
                'statement_2' => 'Mudah mempercayai orang lain, terbuka',
                'statement_3' => 'Suka tantangan, berani mengambil risiko',
                'statement_4' => 'Penuh toleransi, saling menghargai',

                'mapping_1' => 'S',
                'mapping_2' => 'I',
                'mapping_3' => 'D',
                'mapping_4' => 'C',

                'is_active' => true,
            ],

            [
                'question_number' => 2,

                'statement_1' => 'Bicara halus, cenderung tenang dan diam',
                'statement_2' => 'Berpandangan positif, berfokus pada masa depan',
                'statement_3' => 'Senang menjadi pusat perhatian, ramah dan supel',
                'statement_4' => 'Menjaga kedamaian, menciptakan keselarasan',

                'mapping_1' => 'C',
                'mapping_2' => 'D',
                'mapping_3' => 'I',
                'mapping_4' => 'S',

                'is_active' => true,
            ],

            [
                'question_number' => 3,

                'statement_1' => 'Memberi dorongan dan motivasi kepada orang lain',
                'statement_2' => 'Mengejar kesempurnaan, teliti',
                'statement_3' => 'Merasa nyaman menjadi bagian dari tim',
                'statement_4' => 'Senang menetapkan target dan tujuan',

                'mapping_1' => 'I',
                'mapping_2' => 'C',
                'mapping_3' => 'S',
                'mapping_4' => 'D',

                'is_active' => true,
            ],

            [
                'question_number' => 4,

                'statement_1' => 'Mudah merasa frustrasi atau tertekan',
                'statement_2' => 'Cenderung memendam perasaan pribadi',
                'statement_3' => 'Senang mengungkapkan sudut pandang pribadi',
                'statement_4' => 'Berani berbeda pendapat dan menghadapi oposisi',

                'mapping_1' => 'C',
                'mapping_2' => 'S',
                'mapping_3' => 'I',
                'mapping_4' => 'D',

                'is_active' => true,
            ],

            [
                'question_number' => 5,

                'statement_1' => 'Penuh semangat dan aktif berbicara',
                'statement_2' => 'Cepat bertindak dan gigih/tekun',
                'statement_3' => 'Berupaya menjaga keseimbangan dan keselarasan',
                'statement_4' => 'Berusaha selalu patuh pada aturan dan prosedur',

                'mapping_1' => 'I',
                'mapping_2' => 'D',
                'mapping_3' => 'S',
                'mapping_4' => 'C',

                'is_active' => true,
            ],

            [
                'question_number' => 6,

                'statement_1' => 'Mampu mengatur waktu dengan efektif',
                'statement_2' => 'Sering tergesa-gesa dan merasa terbebani',
                'statement_3' => 'Peduli pada hubungan dan isu-isu sosial',
                'statement_4' => 'Terbiasa menuntaskan setiap tugas hingga selesai',

                'mapping_1' => 'C',
                'mapping_2' => 'D',
                'mapping_3' => 'I',
                'mapping_4' => 'S',

                'is_active' => true,
            ],

            [
                'question_number' => 7,

                'statement_1' => 'Kurang menyukai perubahan yang mendadak',
                'statement_2' => 'Cenderung berjanji secara berlebihan',
                'statement_3' => 'Mengundurkan diri saat berada di bawah tekanan',
                'statement_4' => 'Tidak ragu berkonfrontasi atau bertempur',

                'mapping_1' => 'S',
                'mapping_2' => 'I',
                'mapping_3' => 'C',
                'mapping_4' => 'D',

                'is_active' => true,
            ],

            [
                'question_number' => 8,

                'statement_1' => 'Mampu memotivasi orang lain dengan baik',
                'statement_2' => 'Menjadi pendengar yang penuh perhatian',
                'statement_3' => 'Memiliki kemampuan analisis yang kuat',
                'statement_4' => 'Mampu membagi dan mendelegasikan tugas dengan baik',

                'mapping_1' => 'I',
                'mapping_2' => 'S',
                'mapping_3' => 'C',
                'mapping_4' => 'D',

                'is_active' => true,
            ],
                        [
                'question_number' => 9,

                'statement_1' => 'Berorientasi pada pencapaian hasil akhir',
                'statement_2' => 'Mengutamakan kebenaran dan presisi/ketelitian',
                'statement_3' => 'Menyukai suasana yang ceria dan menyenangkan',
                'statement_4' => 'Mengutamakan kerja sama dan pengerjaan bersama',

                'mapping_1' => 'D',
                'mapping_2' => 'C',
                'mapping_3' => 'I',
                'mapping_4' => 'S',

                'is_active' => true,
            ],

            [
                'question_number' => 10,

                'statement_1' => 'Cenderung terus maju tanpa kendali diri',
                'statement_2' => 'Bertindak atau membeli berdasarkan impuls kata hati',
                'statement_3' => 'Lebih memilih menunggu tanpa paksaan',
                'statement_4' => 'Rela mengalah dan mengabaikan keinginan pribadi',

                'mapping_1' => 'C',
                'mapping_2' => 'D',
                'mapping_3' => 'S',
                'mapping_4' => 'I',

                'is_active' => true,
            ],

            [
                'question_number' => 11,

                'statement_1' => 'Ramah dan mudah berbaur dengan lingkungan baru',
                'statement_2' => 'Memiliki keunikan dan cepat jenuh dengan rutinitas',
                'statement_3' => 'Senang mengambil inisiatif untuk mengubah keadaan',
                'statement_4' => 'Menyukai kejelasan dan hal-hal yang pasti',

                'mapping_1' => 'S',
                'mapping_2' => 'I',
                'mapping_3' => 'D',
                'mapping_4' => 'C',

                'is_active' => true,
            ],

            [
                'question_number' => 12,

                'statement_1' => 'Menghindari konflik dan cenderung mengalah',
                'statement_2' => 'Berfokus pada rincian dan detail kecil',
                'statement_3' => 'Siap menghadapi perubahan di menit-menit terakhir',
                'statement_4' => 'Bersikap menuntut dan terkesan keras',

                'mapping_1' => 'S',
                'mapping_2' => 'C',
                'mapping_3' => 'I',
                'mapping_4' => 'D',

                'is_active' => true,
            ],

            [
                'question_number' => 13,

                'statement_1' => 'Selalu menghendaki kemajuan dan perkembangan',
                'statement_2' => 'Mudah merasa puas dengan kondisi yang ada',
                'statement_3' => 'Terbuka dalam memperlihatkan emosi/perasaan',
                'statement_4' => 'Bersikap rendah hati dan bersahaja',

                'mapping_1' => 'D',
                'mapping_2' => 'S',
                'mapping_3' => 'I',
                'mapping_4' => 'C',

                'is_active' => true,
            ],

            [
                'question_number' => 14,

                'statement_1' => 'Bersikap tenang dan tidak banyak bicara',
                'statement_2' => 'Memiliki pembawaan bahagia dan santai tanpa beban',
                'statement_3' => 'Ramah, menyenangkan, dan berhati baik',
                'statement_4' => 'Memiliki keberanian tinggi dan tidak gentar',

                'mapping_1' => 'C',
                'mapping_2' => 'I',
                'mapping_3' => 'S',
                'mapping_4' => 'D',

                'is_active' => true,
            ],

            [
                'question_number' => 15,

                'statement_1' => 'Senang meluangkan waktu berkualitas bersama teman',
                'statement_2' => 'Selalu merencanakan masa depan dan bersiap diri',
                'statement_3' => 'Menyukai perjalanan dan pengalaman petualangan baru',
                'statement_4' => 'Mengharapkan penghargaan atas target yang diraih',

                'mapping_1' => 'S',
                'mapping_2' => 'C',
                'mapping_3' => 'I',
                'mapping_4' => 'D',

                'is_active' => true,
            ],

            [
                'question_number' => 16,

                'statement_1' => 'Cenderung kritis dan mempertanyakan aturan',
                'statement_2' => 'Menganggap aturan berguna menciptakan keadilan',
                'statement_3' => 'Memandang aturan sebagai hal yang membosankan',
                'statement_4' => 'Menilai aturan memberikan rasa aman dan tertib',

                'mapping_1' => 'D',
                'mapping_2' => 'C',
                'mapping_3' => 'I',
                'mapping_4' => 'S',

                'is_active' => true,
            ],
                        [
                'question_number' => 17,

                'statement_1' => 'Menghargai pendidikan dan wawasan kebudayaan',
                'statement_2' => 'Terdorong oleh pencapaian dan ganjaran',
                'statement_3' => 'Memprioritaskan keselamatan dan rasa aman',
                'statement_4' => 'Senang bersosialisasi dan berorganisasi dalam kelompok',

                'mapping_1' => 'C',
                'mapping_2' => 'D',
                'mapping_3' => 'S',
                'mapping_4' => 'I',

                'is_active' => true,
            ],

            [
                'question_number' => 18,

                'statement_1' => 'Suka memegang kendali dan bertindak secara langsung',
                'statement_2' => 'Bersemangat tinggi dan mudah bergaul',
                'statement_3' => 'Bersikap konsisten dan dapat diprediksi',
                'statement_4' => 'Bersikap penuh kehati-hatian dan selalu waspada',

                'mapping_1' => 'D',
                'mapping_2' => 'I',
                'mapping_3' => 'S',
                'mapping_4' => 'C',

                'is_active' => true,
            ],

            [
                'question_number' => 19,

                'statement_1' => 'Memiliki daya juang tinggi dan tidak mudah dikalahkan',
                'statement_2' => 'Patuh pada instruksi dan arahan pimpinan',
                'statement_3' => 'Mudah tersulut emosi atau menjadi pemicu suasana',
                'statement_4' => 'Menyukai kerapian dan keteraturan yang terstruktur',

                'mapping_1' => 'D',
                'mapping_2' => 'S',
                'mapping_3' => 'I',
                'mapping_4' => 'C',

                'is_active' => true,
            ],

            [
                'question_number' => 20,

                'statement_1' => 'Saya yang akan memimpin mereka.',
                'statement_2' => 'Saya siap mengeksekusi/melaksanakan tugas.',
                'statement_3' => 'Saya yang akan membujuk/meyakinkan mereka.',
                'statement_4' => 'Saya yang akan mengumpulkan data dan faktanya.',

                'mapping_1' => 'D',
                'mapping_2' => 'S',
                'mapping_3' => 'I',
                'mapping_4' => 'C',

                'is_active' => true,
            ],

            [
                'question_number' => 21,

                'statement_1' => 'Mengutamakan kepentingan orang lain terlebih dahulu',
                'statement_2' => 'Bersifat kompetitif dan menyukai tantangan',
                'statement_3' => 'Selalu berpikir positif dan optimistis',
                'statement_4' => 'Berpikir rasional, logis, dan terstruktur',

                'mapping_1' => 'S',
                'mapping_2' => 'D',
                'mapping_3' => 'I',
                'mapping_4' => 'C',

                'is_active' => true,
            ],

            [
                'question_number' => 22,

                'statement_1' => 'Suka menyenangkan orang lain dan gampang sepakat',
                'statement_2' => 'Ceria, lepas, dan penuh keseruan',
                'statement_3' => 'Berani mengambil keputusan tanpa rasa ragu',
                'statement_4' => 'Cenderung tenang, pendiam, dan hemat bicara',

                'mapping_1' => 'S',
                'mapping_2' => 'I',
                'mapping_3' => 'D',
                'mapping_4' => 'C',

                'is_active' => true,
            ],

            [
                'question_number' => 23,

                'statement_1' => 'Menginginkan wewenang dan otoritas yang lebih besar',
                'statement_2' => 'Senang mencari peluang dan kesempatan baru',
                'statement_3' => 'Selalu berusaha menjauhi perselisihan/konflik',
                'statement_4' => 'Membutuhkan panduan dan petunjuk yang jelas',

                'mapping_1' => 'D',
                'mapping_2' => 'I',
                'mapping_3' => 'S',
                'mapping_4' => 'C',

                'is_active' => true,
            ],

            [
                'question_number' => 24,

                'statement_1' => 'Bisa diandalkan dan memegang kepercayaan',
                'statement_2' => 'Berpikiran kreatif dan memiliki keunikan',
                'statement_3' => 'Berfokus pada inti masalah dan orientasi hasil',
                'statement_4' => 'Memegang standar tinggi serta mengutamakan akurasi',

                'mapping_1' => 'S',
                'mapping_2' => 'I',
                'mapping_3' => 'D',
                'mapping_4' => 'C',

                'is_active' => true,
            ],
                    ];

        foreach ($questions as $question) {
            DiscQuestion::create($question);
        }
    }
}