<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DiscProfile;

class DiscProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DiscProfile::updateOrCreate(

            [
                'code' => 'D',
            ],

            [

                'name' => 'Dominance',

                'title' => 'Dominance (D)',

                'summary' =>
                'Tipe Dominance adalah individu yang berorientasi pada hasil, cepat mengambil keputusan, menyukai tantangan, percaya diri, dan memiliki dorongan kuat untuk mencapai target. Mereka cenderung fokus pada penyelesaian masalah secara langsung serta lebih mengutamakan efektivitas dibanding proses yang panjang.',

                'strength' => [

                    'Berani mengambil keputusan.',
                    'Memiliki jiwa kepemimpinan.',
                    'Berorientasi pada target.',
                    'Cepat bertindak.',
                    'Percaya diri.',
                    'Mampu bekerja di bawah tekanan.',
                    'Tidak mudah menyerah terhadap tantangan.',
                    'Fokus pada hasil yang ingin dicapai.',

                ],

                'weakness' => [

                    'Kurang sabar terhadap proses yang lambat.',
                    'Terkadang terlalu dominan dalam diskusi.',
                    'Kurang memperhatikan detail.',
                    'Cenderung keras kepala.',
                    'Sulit menerima pendapat yang dianggap menghambat tujuan.',
                    'Bisa terlihat terlalu tegas bagi orang lain.',

                ],

                'communication' => [

                    'Lebih menyukai komunikasi yang singkat, langsung, jelas, dan berorientasi pada solusi.',
                    'Tidak menyukai pembicaraan yang bertele-tele.',
                    'Lebih menghargai fakta dibanding opini.',

                ],

                'leadership' => [

                    'Memimpin dengan cara memberikan arah yang jelas.',
                    'Menetapkan target tinggi.',
                    'Mengambil keputusan cepat.',
                    'Mendorong tim mencapai hasil terbaik.',
                    'Nyaman berada di posisi pengambil keputusan.',

                ],

                'motivation' => [

                    'Tantangan baru.',
                    'Target yang tinggi.',
                    'Kebebasan mengambil keputusan.',
                    'Kesempatan memimpin.',
                    'Persaingan sehat.',
                    'Pencapaian yang dapat diukur.',

                ],

                'stress' => [

                    'Kehilangan kendali.',
                    'Bekerja dengan orang yang lambat mengambil keputusan.',
                    'Menghadapi aturan yang terlalu banyak.',
                    'Target tidak tercapai.',

                ],

                'development' => [

                    'Meningkatkan kemampuan mendengarkan.',
                    'Mengembangkan empati.',
                    'Lebih menghargai proses kerja tim.',
                    'Meningkatkan kesabaran.',
                    'Memberikan kesempatan kepada orang lain untuk berpendapat sebelum mengambil keputusan.',

                ],

                'job_match' => [

                    'CEO',
                    'Direktur',
                    'General Manager',
                    'Project Manager',
                    'Sales Manager',
                    'Business Development',
                    'Entrepreneur',
                    'Supervisor',
                    'Operations Manager',
                    'Team Leader',

                ],

            ]

        );

        DiscProfile::updateOrCreate(

    [
        'code' => 'I',
    ],

    [

        'name' => 'Influence',

        'title' => 'Influence (I)',

        'summary' =>
        'Tipe Influence adalah individu yang energik, komunikatif, mudah membangun hubungan dengan orang lain, optimis, serta mampu memengaruhi lingkungan di sekitarnya melalui antusiasme dan kemampuan berkomunikasi. Mereka menikmati interaksi sosial, menyukai suasana yang dinamis, dan cenderung menjadi sumber semangat dalam sebuah tim.',

        'strength' => [

            'Mudah bergaul dengan berbagai kalangan.',
            'Memiliki kemampuan komunikasi yang baik.',
            'Optimis dalam menghadapi tantangan.',
            'Mampu memotivasi orang lain.',
            'Kreatif dalam menyampaikan ide.',
            'Antusias terhadap hal-hal baru.',
            'Pandai membangun relasi.',
            'Menciptakan suasana kerja yang positif.',

        ],

        'weakness' => [

            'Mudah terdistraksi.',
            'Kurang memperhatikan detail.',
            'Kadang terlalu banyak berbicara.',
            'Sulit mengatakan tidak kepada orang lain.',
            'Kurang konsisten menyelesaikan pekerjaan rutin.',
            'Cenderung menghindari konflik secara langsung.',

        ],

        'communication' => [

            'Menyukai komunikasi yang hangat dan santai.',
            'Senang berdiskusi dan bertukar ide.',
            'Lebih mudah memahami informasi melalui percakapan.',
            'Suka memberikan apresiasi kepada orang lain.',

        ],

        'leadership' => [

            'Memimpin dengan memberi inspirasi.',
            'Membangun semangat tim.',
            'Mendorong kolaborasi.',
            'Mudah membangun hubungan dengan anggota tim.',
            'Lebih mengutamakan motivasi dibanding tekanan.',

        ],

        'motivation' => [

            'Pengakuan dari orang lain.',
            'Kesempatan bertemu banyak orang.',
            'Lingkungan kerja yang menyenangkan.',
            'Kesempatan berkreasi.',
            'Kebebasan menyampaikan ide.',
            'Aktivitas yang bervariasi.',

        ],

        'stress' => [

            'Bekerja sendirian dalam waktu lama.',
            'Kurangnya interaksi sosial.',
            'Lingkungan kerja yang terlalu kaku.',
            'Kritik yang disampaikan secara kasar.',

        ],

        'development' => [

            'Meningkatkan kemampuan manajemen waktu.',
            'Belajar lebih disiplin terhadap target.',
            'Lebih memperhatikan detail pekerjaan.',
            'Meningkatkan konsistensi dalam menyelesaikan tugas.',
            'Belajar menerima kritik secara objektif.',

        ],

        'job_match' => [

            'Sales Executive',
            'Marketing',
            'Public Relations',
            'Customer Success',
            'Business Development',
            'Recruiter',
            'Trainer',
            'MC / Presenter',
            'Content Creator',
            'Brand Ambassador',

        ],

    ]

);

DiscProfile::updateOrCreate(

    [
        'code' => 'S',
    ],

    [

        'name' => 'Steadiness',

        'title' => 'Steadiness (S)',

        'summary' =>
        'Tipe Steadiness adalah individu yang tenang, sabar, konsisten, dapat diandalkan, dan memiliki kepedulian tinggi terhadap orang lain. Mereka menyukai stabilitas, hubungan yang harmonis, serta lingkungan kerja yang teratur. Dalam tim, mereka sering menjadi penengah yang mampu menjaga kerja sama dan menciptakan suasana yang nyaman.',

        'strength' => [

            'Sabar dalam menghadapi berbagai situasi.',
            'Setia dan dapat dipercaya.',
            'Konsisten dalam bekerja.',
            'Mudah bekerja sama dengan tim.',
            'Pendengar yang baik.',
            'Peduli terhadap kebutuhan orang lain.',
            'Mampu menjaga hubungan jangka panjang.',
            'Tetap tenang di bawah tekanan.',

        ],

        'weakness' => [

            'Sulit menghadapi perubahan yang mendadak.',
            'Cenderung menghindari konflik.',
            'Kurang tegas dalam mengambil keputusan.',
            'Sering mendahulukan kepentingan orang lain.',
            'Kurang nyaman mengambil risiko besar.',
            'Membutuhkan waktu lebih lama untuk beradaptasi.',

        ],

        'communication' => [

            'Berkomunikasi dengan tenang dan sopan.',
            'Lebih banyak mendengarkan daripada berbicara.',
            'Menghargai hubungan yang harmonis.',
            'Menyukai komunikasi yang jelas dan tidak terburu-buru.',

        ],

        'leadership' => [

            'Memimpin dengan memberikan dukungan kepada tim.',
            'Mengutamakan kerja sama.',
            'Membangun lingkungan kerja yang nyaman.',
            'Mendengarkan masukan sebelum mengambil keputusan.',
            'Menjaga stabilitas dalam tim.',

        ],

        'motivation' => [

            'Lingkungan kerja yang stabil.',
            'Hubungan kerja yang harmonis.',
            'Kejelasan peran dan tanggung jawab.',
            'Penghargaan atas loyalitas.',
            'Kesempatan membantu orang lain.',
            'Kerja sama tim yang baik.',

        ],

        'stress' => [

            'Perubahan yang terlalu cepat.',
            'Konflik yang berkepanjangan.',
            'Tekanan untuk mengambil keputusan secara mendadak.',
            'Lingkungan kerja yang tidak stabil.',

        ],

        'development' => [

            'Meningkatkan keberanian mengambil keputusan.',
            'Belajar menghadapi perubahan dengan lebih fleksibel.',
            'Mengembangkan kemampuan menyampaikan pendapat.',
            'Lebih percaya diri dalam menghadapi konflik.',
            'Berani mengambil peluang baru.',

        ],

        'job_match' => [

            'Human Resource',
            'Customer Service',
            'Administrator',
            'Teacher',
            'Counselor',
            'Nurse',
            'Secretary',
            'Staff Administrasi',
            'Account Officer',
            'Customer Relationship Officer',

        ],

    ]

);

DiscProfile::updateOrCreate(

    [
        'code' => 'C',
    ],

    [

        'name' => 'Conscientiousness',

        'title' => 'Conscientiousness (C)',

        'summary' =>
        'Tipe Conscientiousness adalah individu yang teliti, sistematis, analitis, dan berorientasi pada kualitas. Mereka cenderung mengambil keputusan berdasarkan data, fakta, dan logika daripada emosi. Mereka menyukai ketelitian, standar kerja yang tinggi, serta memastikan setiap pekerjaan dilakukan dengan benar dan minim kesalahan.',

        'strength' => [

            'Sangat teliti dalam bekerja.',
            'Mampu menganalisis masalah secara logis.',
            'Berorientasi pada kualitas.',
            'Disiplin terhadap prosedur.',
            'Perencanaan kerja yang baik.',
            'Objektif dalam mengambil keputusan.',
            'Mampu menemukan kesalahan yang sering terlewat.',
            'Memiliki standar kerja yang tinggi.',

        ],

        'weakness' => [

            'Terlalu perfeksionis.',
            'Sering overthinking sebelum mengambil keputusan.',
            'Kurang nyaman dengan perubahan mendadak.',
            'Cenderung terlalu kritis.',
            'Membutuhkan waktu lebih lama sebelum bertindak.',
            'Sulit mendelegasikan pekerjaan karena ingin hasil sempurna.',

        ],

        'communication' => [

            'Menyukai komunikasi yang jelas, terstruktur, dan berdasarkan fakta.',
            'Tidak mudah menerima informasi tanpa bukti.',
            'Lebih fokus pada isi pembicaraan daripada basa-basi.',
            'Menghargai diskusi yang logis dan objektif.',

        ],

        'leadership' => [

            'Memimpin dengan perencanaan yang matang.',
            'Menetapkan standar kualitas yang tinggi.',
            'Mengutamakan akurasi dalam setiap keputusan.',
            'Mendorong tim bekerja secara sistematis.',
            'Mengurangi risiko melalui analisis yang mendalam.',

        ],

        'motivation' => [

            'Standar kerja yang jelas.',
            'Kesempatan mengembangkan keahlian.',
            'Lingkungan kerja yang teratur.',
            'Data yang akurat.',
            'Proses kerja yang sistematis.',
            'Hasil kerja yang berkualitas.',

        ],

        'stress' => [

            'Lingkungan kerja yang tidak teratur.',
            'Kurangnya informasi yang jelas.',
            'Keputusan yang diambil tanpa data.',
            'Kesalahan yang sebenarnya dapat dicegah.',

        ],

        'development' => [

            'Belajar mengambil keputusan lebih cepat.',
            'Meningkatkan fleksibilitas terhadap perubahan.',
            'Mengurangi kecenderungan perfeksionis.',
            'Lebih terbuka terhadap ide baru.',
            'Meningkatkan kemampuan berkomunikasi secara lebih santai.',

        ],

        'job_match' => [

            'Programmer',
            'Software Engineer',
            'Data Analyst',
            'System Analyst',
            'Auditor',
            'Quality Assurance',
            'Quality Control',
            'Accountant',
            'Financial Analyst',
            'Researcher',

        ],

    ]

);

DiscProfile::updateOrCreate(

    [
        'code' => 'DI',
    ],

    [

        'name' => 'Dominance Influence',

        'title' => 'Dominance + Influence (DI)',

        'summary' =>
        'Tipe DI merupakan kombinasi antara Dominance dan Influence. Individu dengan tipe ini memiliki orientasi hasil yang tinggi sekaligus kemampuan komunikasi yang kuat. Mereka cepat mengambil keputusan, percaya diri, mudah memengaruhi orang lain, serta memiliki semangat tinggi dalam mencapai target. Mereka cenderung menikmati tantangan, menyukai lingkungan yang dinamis, dan mampu menjadi penggerak utama dalam sebuah tim.',

        'strength' => [

            'Memiliki jiwa kepemimpinan yang kuat.',
            'Mudah memengaruhi dan menginspirasi orang lain.',
            'Percaya diri dalam mengambil keputusan.',
            'Berani menghadapi tantangan.',
            'Komunikatif dan mudah membangun relasi.',
            'Cepat melihat peluang baru.',
            'Berorientasi pada hasil sekaligus hubungan.',
            'Memiliki energi dan antusiasme yang tinggi.',

        ],

        'weakness' => [

            'Cenderung kurang sabar terhadap proses yang lambat.',
            'Kadang mengambil keputusan terlalu cepat.',
            'Kurang memperhatikan detail teknis.',
            'Mudah merasa bosan terhadap pekerjaan yang monoton.',
            'Dapat terlihat terlalu dominan dalam diskusi.',
            'Kadang terlalu optimis terhadap suatu rencana.',

        ],

        'communication' => [

            'Berkomunikasi secara terbuka dan penuh percaya diri.',
            'Menyukai diskusi yang aktif dan dinamis.',
            'Mudah memengaruhi pendapat orang lain.',
            'Lebih menyukai komunikasi yang langsung menuju solusi.',
            'Mampu membangun suasana yang positif dalam tim.',

        ],

        'leadership' => [

            'Memimpin dengan visi yang jelas.',
            'Mampu membangkitkan semangat anggota tim.',
            'Cepat mengambil keputusan ketika diperlukan.',
            'Mendorong tim untuk mencapai target yang tinggi.',
            'Berani mengambil risiko yang telah diperhitungkan.',

        ],

        'motivation' => [

            'Target yang menantang.',
            'Kesempatan memimpin proyek.',
            'Pengakuan atas prestasi.',
            'Lingkungan kerja yang dinamis.',
            'Kesempatan bertemu banyak orang.',
            'Kebebasan mengambil keputusan.',

        ],

        'stress' => [

            'Lingkungan kerja yang lambat.',
            'Birokrasi yang terlalu panjang.',
            'Kurangnya tantangan.',
            'Tidak memiliki wewenang mengambil keputusan.',
            'Rutinitas yang monoton.',

        ],

        'development' => [

            'Lebih memperhatikan detail pekerjaan.',
            'Belajar mendengarkan pendapat orang lain sebelum mengambil keputusan.',
            'Mengembangkan kesabaran dalam proses kerja.',
            'Meningkatkan kemampuan analisis sebelum bertindak.',
            'Memberikan ruang lebih besar bagi anggota tim untuk berkembang.',

        ],

        'job_match' => [

            'CEO',
            'Business Development Manager',
            'Sales Director',
            'Marketing Director',
            'Project Manager',
            'Startup Founder',
            'Entrepreneur',
            'General Manager',
            'Commercial Manager',
            'Business Consultant',

        ],

    ]

);

DiscProfile::updateOrCreate(

    [
        'code' => 'DS',
    ],

    [

        'name' => 'Dominance Steadiness',

        'title' => 'Dominance + Steadiness (DS)',

        'summary' =>
        'Tipe DS merupakan kombinasi antara Dominance dan Steadiness. Individu dengan tipe ini memiliki orientasi hasil yang kuat namun tetap tenang, sabar, dan konsisten dalam menjalankan pekerjaan. Mereka senang memimpin dengan memberi arah yang jelas, menjaga kestabilan tim, serta memastikan target dapat tercapai tanpa mengabaikan hubungan kerja yang baik. Mereka cenderung menjadi pemimpin yang tegas tetapi tetap peduli terhadap anggota tim.',

        'strength' => [

            'Mampu memimpin dengan tenang dan percaya diri.',
            'Konsisten dalam mengejar target.',
            'Memiliki tanggung jawab yang tinggi.',
            'Tidak mudah panik ketika menghadapi tekanan.',
            'Mampu menjaga kestabilan tim.',
            'Berani mengambil keputusan setelah mempertimbangkan kondisi.',
            'Loyal terhadap tujuan organisasi.',
            'Mampu menyelesaikan pekerjaan hingga tuntas.',

        ],

        'weakness' => [

            'Kurang menyukai perubahan yang terlalu cepat.',
            'Kadang terlihat keras kepala terhadap keputusan yang telah dibuat.',
            'Sulit menerima ide baru yang dianggap mengganggu stabilitas.',
            'Cenderung memendam tekanan sendiri.',
            'Kurang spontan dalam menghadapi situasi yang berubah drastis.',
            'Kadang terlalu fokus pada tanggung jawab sehingga mengabaikan kebutuhan pribadi.',

        ],

        'communication' => [

            'Berkomunikasi dengan jelas dan tenang.',
            'Lebih suka pembicaraan yang langsung pada tujuan.',
            'Menghargai hubungan kerja yang saling menghormati.',
            'Menjadi pendengar yang baik sebelum mengambil keputusan.',
            'Tidak menyukai konflik yang tidak perlu.',

        ],

        'leadership' => [

            'Memimpin dengan memberikan arahan yang jelas.',
            'Menjaga kestabilan dan kekompakan tim.',
            'Mengambil keputusan secara tegas namun tetap mempertimbangkan anggota tim.',
            'Memberikan contoh melalui tindakan.',
            'Membangun kepercayaan jangka panjang dalam organisasi.',

        ],

        'motivation' => [

            'Target yang jelas.',
            'Lingkungan kerja yang stabil.',
            'Kepercayaan untuk memimpin.',
            'Tanggung jawab yang besar.',
            'Hubungan kerja yang harmonis.',
            'Kesempatan membangun tim yang solid.',

        ],

        'stress' => [

            'Perubahan mendadak yang tidak terencana.',
            'Konflik berkepanjangan dalam tim.',
            'Ketidakjelasan tujuan kerja.',
            'Lingkungan kerja yang tidak stabil.',
            'Kurangnya komitmen dari anggota tim.',

        ],

        'development' => [

            'Lebih terbuka terhadap perubahan.',
            'Belajar menerima pendekatan baru.',
            'Meningkatkan fleksibilitas dalam mengambil keputusan.',
            'Mengurangi kecenderungan mempertahankan cara lama.',
            'Lebih sering memberikan kesempatan kepada anggota tim untuk berinisiatif.',

        ],

        'job_match' => [

            'Operations Manager',
            'Project Manager',
            'Production Manager',
            'Plant Manager',
            'General Supervisor',
            'Construction Manager',
            'Operations Supervisor',
            'Branch Manager',
            'Logistics Manager',
            'Head of Operations',

        ],

    ]

);

DiscProfile::updateOrCreate(

    [
        'code' => 'DC',
    ],

    [

        'name' => 'Dominance Conscientiousness',

        'title' => 'Dominance + Conscientiousness (DC)',

        'summary' =>
        'Tipe DC merupakan kombinasi antara Dominance dan Conscientiousness. Individu dengan tipe ini memiliki orientasi tinggi terhadap hasil sekaligus standar kualitas yang sangat tinggi. Mereka menyukai tantangan, mampu mengambil keputusan secara tegas, namun tetap mempertimbangkan data, fakta, dan analisis sebelum bertindak. Mereka cenderung menjadi pemimpin yang sistematis, logis, dan sangat fokus terhadap efektivitas serta akurasi.',

        'strength' => [

            'Mampu mengambil keputusan berdasarkan analisis.',
            'Berorientasi pada hasil dan kualitas.',
            'Memiliki kemampuan berpikir strategis.',
            'Sangat teliti terhadap detail penting.',
            'Disiplin dalam bekerja.',
            'Mampu menyelesaikan masalah yang kompleks.',
            'Berani mengambil tanggung jawab besar.',
            'Memiliki standar kerja yang tinggi.',

        ],

        'weakness' => [

            'Cenderung perfeksionis.',
            'Sulit menerima pekerjaan yang tidak sesuai standar.',
            'Kadang terlalu kritis terhadap diri sendiri maupun orang lain.',
            'Kurang sabar terhadap orang yang tidak disiplin.',
            'Dapat terlihat kaku dalam mengambil keputusan.',
            'Sering menghabiskan waktu terlalu lama untuk menganalisis suatu masalah.',

        ],

        'communication' => [

            'Menyampaikan informasi secara jelas dan berdasarkan fakta.',
            'Lebih menyukai diskusi yang logis daripada emosional.',
            'Menghargai data dan bukti dalam setiap pembahasan.',
            'Berbicara langsung pada inti permasalahan.',
            'Menghindari komunikasi yang tidak memiliki tujuan yang jelas.',

        ],

        'leadership' => [

            'Memimpin dengan standar kerja yang tinggi.',
            'Menetapkan target yang realistis namun menantang.',
            'Mengambil keputusan berdasarkan analisis.',
            'Menjaga kualitas pekerjaan tim.',
            'Mendorong anggota tim untuk bekerja secara disiplin dan profesional.',

        ],

        'motivation' => [

            'Target yang jelas.',
            'Kesempatan menyelesaikan masalah yang kompleks.',
            'Lingkungan kerja yang profesional.',
            'Standar kualitas yang tinggi.',
            'Kebebasan mengambil keputusan.',
            'Pencapaian yang dapat diukur.',

        ],

        'stress' => [

            'Kesalahan yang berulang.',
            'Proses kerja yang tidak terstruktur.',
            'Keputusan tanpa dasar yang jelas.',
            'Lingkungan kerja yang tidak disiplin.',
            'Target yang berubah tanpa alasan yang kuat.',

        ],

        'development' => [

            'Lebih fleksibel terhadap pendekatan baru.',
            'Belajar menerima bahwa tidak semua pekerjaan harus sempurna.',
            'Meningkatkan kemampuan memberikan apresiasi kepada orang lain.',
            'Mengembangkan empati dalam memimpin tim.',
            'Mengurangi kecenderungan terlalu mengontrol pekerjaan bawahan.',

        ],

        'job_match' => [

            'Engineering Manager',
            'IT Manager',
            'Software Architect',
            'Quality Assurance Manager',
            'Project Director',
            'Business Analyst',
            'Technical Consultant',
            'Operations Director',
            'System Analyst',
            'Chief Technology Officer (CTO)',

        ],

    ]

);

DiscProfile::updateOrCreate(

    [
        'code' => 'ID',
    ],

    [

        'name' => 'Influence Dominance',

        'title' => 'Influence + Dominance (ID)',

        'summary' =>
        'Tipe ID merupakan kombinasi antara Influence dan Dominance. Individu dengan tipe ini dikenal sebagai pribadi yang komunikatif, penuh semangat, percaya diri, serta mampu memengaruhi orang lain untuk mencapai tujuan bersama. Mereka senang menjadi pusat perhatian, memiliki kemampuan membangun hubungan dengan cepat, dan tidak ragu mengambil keputusan ketika dibutuhkan. Mereka mampu menggerakkan tim melalui antusiasme sekaligus keberanian bertindak.',

        'strength' => [

            'Mudah membangun hubungan dengan banyak orang.',
            'Memiliki kemampuan komunikasi yang sangat baik.',
            'Percaya diri dalam menyampaikan ide.',
            'Mampu memotivasi dan menginspirasi orang lain.',
            'Berani mengambil peluang baru.',
            'Memiliki energi kerja yang tinggi.',
            'Cepat beradaptasi dengan lingkungan baru.',
            'Optimis dalam menghadapi tantangan.',

        ],

        'weakness' => [

            'Kadang terlalu percaya diri.',
            'Kurang memperhatikan detail pekerjaan.',
            'Mudah bosan terhadap rutinitas.',
            'Cenderung bertindak sebelum melakukan analisis yang mendalam.',
            'Kadang sulit fokus pada satu pekerjaan dalam waktu lama.',
            'Berpotensi terlalu banyak mengambil komitmen.',

        ],

        'communication' => [

            'Komunikatif dan mudah mencairkan suasana.',
            'Menyukai diskusi yang interaktif.',
            'Pandai mempresentasikan ide kepada orang lain.',
            'Lebih nyaman berkomunikasi secara langsung.',
            'Senang memberikan semangat kepada tim.',

        ],

        'leadership' => [

            'Memimpin melalui inspirasi dan semangat.',
            'Membangun hubungan yang positif dengan anggota tim.',
            'Berani mengambil keputusan ketika diperlukan.',
            'Mendorong tim untuk berani mencoba hal baru.',
            'Menciptakan lingkungan kerja yang penuh motivasi.',

        ],

        'motivation' => [

            'Pengakuan atas prestasi.',
            'Kesempatan bertemu banyak orang.',
            'Lingkungan kerja yang dinamis.',
            'Kebebasan menyampaikan ide.',
            'Tantangan baru.',
            'Kesempatan memimpin suatu kegiatan.',

        ],

        'stress' => [

            'Rutinitas yang monoton.',
            'Kurangnya interaksi sosial.',
            'Lingkungan kerja yang terlalu kaku.',
            'Tidak diberikan kesempatan menyampaikan pendapat.',
            'Pekerjaan yang terlalu administratif.',

        ],

        'development' => [

            'Meningkatkan kemampuan perencanaan.',
            'Belajar lebih teliti terhadap detail.',
            'Mengembangkan disiplin dalam menyelesaikan pekerjaan.',
            'Belajar mendengarkan masukan sebelum mengambil keputusan.',
            'Mengurangi kecenderungan bertindak terlalu cepat.',

        ],

        'job_match' => [

            'Sales Manager',
            'Marketing Manager',
            'Public Relations',
            'Business Development',
            'Entrepreneur',
            'Brand Manager',
            'Event Manager',
            'Recruitment Consultant',
            'Account Manager',
            'Corporate Communications',

        ],

    ]

);

DiscProfile::updateOrCreate(

    [
        'code' => 'IS',
    ],

    [

        'name' => 'Influence Steadiness',

        'title' => 'Influence + Steadiness (IS)',

        'summary' =>
        'Tipe IS merupakan kombinasi antara Influence dan Steadiness. Individu dengan tipe ini dikenal sebagai pribadi yang hangat, ramah, mudah bergaul, serta mampu membangun hubungan yang baik dengan banyak orang. Mereka senang membantu, mampu bekerja sama dalam tim, dan menciptakan suasana kerja yang nyaman. Selain memiliki kemampuan komunikasi yang baik, mereka juga dikenal sabar dan dapat dipercaya dalam menjalankan tanggung jawab.',

        'strength' => [

            'Mudah menjalin hubungan dengan orang lain.',
            'Komunikatif dan bersahabat.',
            'Sabar dalam menghadapi berbagai situasi.',
            'Mampu bekerja sama dengan baik.',
            'Peduli terhadap kebutuhan orang lain.',
            'Mudah dipercaya oleh rekan kerja.',
            'Mampu menciptakan suasana kerja yang harmonis.',
            'Setia terhadap tim dan organisasi.',

        ],

        'weakness' => [

            'Sulit mengatakan tidak kepada orang lain.',
            'Menghindari konflik secara berlebihan.',
            'Kadang terlalu memikirkan perasaan orang lain.',
            'Kurang tegas ketika harus mengambil keputusan sulit.',
            'Tidak nyaman menghadapi tekanan yang tinggi.',
            'Cenderung menunda keputusan agar semua pihak merasa nyaman.',

        ],

        'communication' => [

            'Berkomunikasi dengan ramah dan penuh empati.',
            'Mudah mendengarkan pendapat orang lain.',
            'Menyukai percakapan yang hangat dan terbuka.',
            'Mampu menjaga hubungan baik dengan berbagai karakter.',
            'Menghindari komunikasi yang bernada konfrontatif.',

        ],

        'leadership' => [

            'Memimpin dengan pendekatan yang suportif.',
            'Membangun kerja sama yang baik di dalam tim.',
            'Mendorong anggota tim melalui motivasi positif.',
            'Menjadi pendengar yang baik bagi anggota tim.',
            'Menciptakan lingkungan kerja yang nyaman dan harmonis.',

        ],

        'motivation' => [

            'Hubungan kerja yang baik.',
            'Lingkungan kerja yang harmonis.',
            'Kesempatan membantu orang lain.',
            'Penghargaan atas kontribusi.',
            'Kerja sama tim yang solid.',
            'Stabilitas dalam pekerjaan.',

        ],

        'stress' => [

            'Konflik berkepanjangan.',
            'Lingkungan kerja yang penuh tekanan.',
            'Persaingan yang tidak sehat.',
            'Kurangnya kerja sama dalam tim.',
            'Perubahan yang terlalu mendadak.',

        ],

        'development' => [

            'Belajar lebih tegas dalam mengambil keputusan.',
            'Meningkatkan keberanian menghadapi konflik yang sehat.',
            'Tidak selalu berusaha menyenangkan semua orang.',
            'Mengembangkan kemampuan menetapkan prioritas.',
            'Lebih percaya diri dalam menyampaikan pendapat.',

        ],

        'job_match' => [

            'Human Resource',
            'Customer Service Manager',
            'Public Relations',
            'Teacher',
            'Trainer',
            'Counselor',
            'Recruiter',
            'Account Executive',
            'Community Manager',
            'Client Relationship Manager',

        ],

    ]

);

DiscProfile::updateOrCreate(

    [
        'code' => 'IC',
    ],

    [

        'name' => 'Influence Conscientiousness',

        'title' => 'Influence + Conscientiousness (IC)',

        'summary' =>
        'Tipe IC merupakan kombinasi antara Influence dan Conscientiousness. Individu dengan tipe ini mampu membangun hubungan yang baik dengan orang lain sekaligus memiliki pola pikir yang sistematis dan analitis. Mereka menikmati komunikasi, senang berbagi ide, namun tetap mengutamakan fakta, kualitas, dan ketelitian sebelum mengambil keputusan. Mereka sering menjadi penghubung yang mampu menjelaskan hal-hal teknis dengan cara yang mudah dipahami.',

        'strength' => [

            'Komunikatif dan mudah bekerja sama.',
            'Mampu menjelaskan ide secara jelas.',
            'Teliti terhadap detail pekerjaan.',
            'Berpikir logis sebelum mengambil keputusan.',
            'Mampu menjaga kualitas hasil kerja.',
            'Cepat mempelajari hal baru.',
            'Mudah mendapatkan kepercayaan dari orang lain.',
            'Mampu menyeimbangkan hubungan dan kualitas pekerjaan.',

        ],

        'weakness' => [

            'Kadang terlalu banyak menganalisis sebelum bertindak.',
            'Perfeksionis terhadap hasil kerja.',
            'Mudah kecewa jika standar kualitas tidak terpenuhi.',
            'Kurang nyaman menghadapi keputusan yang harus diambil secara tergesa-gesa.',
            'Kadang terlalu berhati-hati dalam mengambil risiko.',
            'Sulit menerima pekerjaan yang dilakukan secara asal-asalan.',

        ],

        'communication' => [

            'Komunikatif namun tetap terstruktur.',
            'Menyampaikan informasi berdasarkan data dan fakta.',
            'Mudah menjelaskan konsep yang rumit menjadi sederhana.',
            'Menyukai diskusi yang produktif.',
            'Menghargai pendapat orang lain sebelum memberikan kesimpulan.',

        ],

        'leadership' => [

            'Memimpin melalui komunikasi yang jelas.',
            'Mengutamakan kualitas dalam setiap pekerjaan.',
            'Memberikan arahan yang sistematis.',
            'Mendorong anggota tim untuk berkembang.',
            'Membangun budaya kerja yang profesional dan terbuka.',

        ],

        'motivation' => [

            'Kesempatan mengembangkan kemampuan.',
            'Lingkungan kerja yang profesional.',
            'Hubungan kerja yang positif.',
            'Pekerjaan yang memiliki tantangan intelektual.',
            'Apresiasi terhadap kualitas kerja.',
            'Kesempatan berbagi pengetahuan.',

        ],

        'stress' => [

            'Lingkungan kerja yang tidak teratur.',
            'Kesalahan yang terus berulang.',
            'Kurangnya komunikasi dalam tim.',
            'Target yang tidak jelas.',
            'Pekerjaan yang dilakukan tanpa standar kualitas.',

        ],

        'development' => [

            'Belajar mengambil keputusan lebih cepat.',
            'Mengurangi kecenderungan perfeksionis.',
            'Lebih percaya diri menghadapi perubahan.',
            'Belajar menerima bahwa tidak semua kondisi dapat dikendalikan.',
            'Meningkatkan keberanian mengambil risiko yang terukur.',

        ],

        'job_match' => [

            'Business Analyst',
            'System Analyst',
            'Marketing Analyst',
            'Product Manager',
            'Technical Consultant',
            'Corporate Trainer',
            'UX Researcher',
            'Quality Assurance',
            'Customer Success Manager',
            'Management Consultant',

        ],

    ]

);

DiscProfile::updateOrCreate(

    [
        'code' => 'SD',
    ],

    [

        'name' => 'Steadiness Dominance',

        'title' => 'Steadiness + Dominance (SD)',

        'summary' =>
        'Tipe SD merupakan kombinasi antara Steadiness dan Dominance. Individu dengan tipe ini dikenal sebagai pribadi yang tenang, konsisten, bertanggung jawab, namun tetap memiliki orientasi terhadap hasil. Mereka tidak terburu-buru dalam mengambil keputusan, tetapi ketika tujuan sudah jelas, mereka akan bekerja secara disiplin hingga target tercapai. Mereka lebih memilih memimpin dengan keteladanan dibandingkan dengan tekanan.',

        'strength' => [

            'Sabar dan konsisten dalam bekerja.',
            'Memiliki rasa tanggung jawab yang tinggi.',
            'Mampu menjaga kestabilan tim.',
            'Berorientasi pada hasil jangka panjang.',
            'Disiplin dalam menyelesaikan pekerjaan.',
            'Dapat dipercaya oleh rekan kerja.',
            'Tetap tenang dalam menghadapi tekanan.',
            'Mampu mengambil keputusan secara bijaksana.',

        ],

        'weakness' => [

            'Cenderung lambat mengambil keputusan dalam situasi mendesak.',
            'Kurang nyaman menghadapi perubahan yang terlalu cepat.',
            'Kadang terlalu berhati-hati sebelum bertindak.',
            'Sulit mengatakan tidak kepada orang lain.',
            'Dapat memendam masalah terlalu lama.',
            'Kurang agresif dalam memanfaatkan peluang baru.',

        ],

        'communication' => [

            'Berkomunikasi dengan tenang dan sopan.',
            'Lebih banyak mendengarkan sebelum berbicara.',
            'Menghindari konflik yang tidak perlu.',
            'Menyampaikan pendapat secara jelas namun tidak memaksa.',
            'Membangun hubungan kerja yang saling menghargai.',

        ],

        'leadership' => [

            'Memimpin dengan keteladanan.',
            'Memberikan rasa aman kepada anggota tim.',
            'Menjaga stabilitas dan kekompakan tim.',
            'Mengambil keputusan secara hati-hati.',
            'Fokus pada pencapaian target secara berkelanjutan.',

        ],

        'motivation' => [

            'Lingkungan kerja yang stabil.',
            'Hubungan kerja yang harmonis.',
            'Target yang jelas.',
            'Kepercayaan dari atasan.',
            'Kesempatan berkembang secara bertahap.',
            'Pekerjaan yang memiliki dampak nyata.',

        ],

        'stress' => [

            'Perubahan yang terlalu cepat.',
            'Konflik berkepanjangan.',
            'Tekanan yang berlebihan.',
            'Target yang berubah-ubah.',
            'Lingkungan kerja yang tidak stabil.',

        ],

        'development' => [

            'Meningkatkan keberanian mengambil keputusan lebih cepat.',
            'Belajar lebih fleksibel terhadap perubahan.',
            'Meningkatkan kemampuan menghadapi konflik.',
            'Lebih berani menyampaikan pendapat.',
            'Mengembangkan kepercayaan diri dalam mengambil peluang baru.',

        ],

        'job_match' => [

            'Project Coordinator',
            'Operations Supervisor',
            'Production Supervisor',
            'HR Supervisor',
            'Administrative Manager',
            'Branch Manager',
            'Logistics Manager',
            'Quality Control Supervisor',
            'Team Leader',
            'Operations Manager',

        ],

    ]

);

DiscProfile::updateOrCreate(

    [
        'code' => 'SI',
    ],

    [

        'name' => 'Steadiness Influence',

        'title' => 'Steadiness + Influence (SI)',

        'summary' =>
        'Tipe SI merupakan kombinasi antara Steadiness dan Influence. Individu dengan tipe ini dikenal sebagai pribadi yang hangat, sabar, ramah, serta mudah membangun hubungan baik dengan orang lain. Mereka menikmati kerja sama tim, mampu menjadi pendengar yang baik, dan berusaha menciptakan lingkungan kerja yang harmonis. Mereka lebih mengutamakan hubungan interpersonal dibandingkan persaingan.',

        'strength' => [

            'Ramah dan mudah bergaul.',
            'Pendengar yang baik.',
            'Mudah membangun kepercayaan.',
            'Sabar menghadapi orang lain.',
            'Mampu menjaga hubungan jangka panjang.',
            'Suka membantu rekan kerja.',
            'Menciptakan suasana kerja yang nyaman.',
            'Loyal terhadap tim dan organisasi.',

        ],

        'weakness' => [

            'Sulit mengatakan tidak.',
            'Kurang nyaman menghadapi konflik.',
            'Sering mendahulukan kebutuhan orang lain.',
            'Kurang tegas dalam mengambil keputusan.',
            'Cenderung menghindari konfrontasi.',
            'Kadang terlalu bergantung pada persetujuan orang lain.',

        ],

        'communication' => [

            'Berbicara dengan ramah dan sopan.',
            'Mudah membangun hubungan yang akrab.',
            'Lebih suka diskusi dibanding perdebatan.',
            'Pendengar yang baik.',
            'Berusaha menjaga komunikasi tetap positif.',

        ],

        'leadership' => [

            'Memimpin dengan pendekatan yang suportif.',
            'Menjadi pendengar bagi anggota tim.',
            'Membangun kerja sama yang solid.',
            'Menjaga suasana kerja tetap harmonis.',
            'Memberikan dukungan kepada anggota tim.',

        ],

        'motivation' => [

            'Lingkungan kerja yang harmonis.',
            'Hubungan yang baik dengan rekan kerja.',
            'Apresiasi atas kontribusi.',
            'Kesempatan membantu orang lain.',
            'Stabilitas dalam pekerjaan.',
            'Budaya kerja yang saling menghargai.',

        ],

        'stress' => [

            'Konflik dalam tim.',
            'Lingkungan kerja yang penuh tekanan.',
            'Persaingan yang tidak sehat.',
            'Kurangnya komunikasi.',
            'Penolakan dari orang lain.',

        ],

        'development' => [

            'Belajar lebih tegas dalam mengambil keputusan.',
            'Berani menyampaikan pendapat yang berbeda.',
            'Mengembangkan kemampuan menghadapi konflik.',
            'Tidak selalu mengutamakan kepentingan orang lain.',
            'Meningkatkan rasa percaya diri dalam memimpin.',

        ],

        'job_match' => [

            'Human Resource',
            'Customer Success',
            'Customer Service Manager',
            'Relationship Manager',
            'Trainer',
            'Teacher',
            'Counselor',
            'Account Manager',
            'Community Manager',
            'Employee Relations',

        ],

    ]

);

DiscProfile::updateOrCreate(

    [
        'code' => 'SC',
    ],

    [

        'name' => 'Steadiness Conscientiousness',

        'title' => 'Steadiness + Conscientiousness (SC)',

        'summary' =>
        'Tipe SC merupakan kombinasi antara Steadiness dan Conscientiousness. Individu dengan tipe ini dikenal sebagai pribadi yang tenang, sabar, teliti, disiplin, dan sangat bertanggung jawab. Mereka menyukai lingkungan kerja yang stabil, prosedur yang jelas, serta selalu berusaha menghasilkan pekerjaan dengan kualitas terbaik. Mereka tidak terburu-buru dalam mengambil keputusan dan lebih memilih memastikan setiap detail telah diperiksa dengan baik.',

        'strength' => [

            'Teliti dalam setiap pekerjaan.',
            'Sabar menghadapi berbagai situasi.',
            'Disiplin dan konsisten.',
            'Mampu bekerja dengan standar kualitas tinggi.',
            'Bertanggung jawab terhadap tugas.',
            'Terorganisir dan sistematis.',
            'Dapat dipercaya dalam pekerjaan penting.',
            'Memiliki komitmen tinggi terhadap hasil kerja.',

        ],

        'weakness' => [

            'Sulit beradaptasi dengan perubahan yang mendadak.',
            'Cenderung terlalu berhati-hati.',
            'Perfeksionis dalam beberapa situasi.',
            'Lambat mengambil keputusan jika informasi belum lengkap.',
            'Kurang nyaman menghadapi tekanan yang berubah-ubah.',
            'Sering terlalu fokus pada detail kecil.',

        ],

        'communication' => [

            'Berkomunikasi dengan sopan dan terstruktur.',
            'Lebih suka menyampaikan informasi berdasarkan fakta.',
            'Tidak banyak berbicara jika tidak diperlukan.',
            'Menyukai komunikasi yang jelas dan sistematis.',
            'Menghindari konflik yang tidak perlu.',

        ],

        'leadership' => [

            'Memimpin melalui keteladanan.',
            'Menetapkan standar kerja yang jelas.',
            'Menjaga konsistensi dan kualitas tim.',
            'Memberikan arahan secara sistematis.',
            'Mengutamakan stabilitas dalam pengambilan keputusan.',

        ],

        'motivation' => [

            'Lingkungan kerja yang stabil.',
            'Prosedur kerja yang jelas.',
            'Kualitas pekerjaan yang tinggi.',
            'Kepercayaan dari organisasi.',
            'Tanggung jawab yang jelas.',
            'Pekerjaan yang membutuhkan ketelitian.',

        ],

        'stress' => [

            'Perubahan yang terlalu cepat.',
            'Lingkungan kerja yang tidak teratur.',
            'Target tanpa perencanaan.',
            'Kesalahan yang sebenarnya dapat dicegah.',
            'Kurangnya kepastian dalam pekerjaan.',

        ],

        'development' => [

            'Belajar lebih fleksibel terhadap perubahan.',
            'Meningkatkan kecepatan dalam mengambil keputusan.',
            'Tidak terlalu terpaku pada kesempurnaan.',
            'Berani mengambil risiko yang terukur.',
            'Meningkatkan kemampuan beradaptasi dalam situasi dinamis.',

        ],

        'job_match' => [

            'Quality Assurance',
            'Quality Control',
            'Auditor',
            'Accountant',
            'Data Analyst',
            'Business Analyst',
            'System Analyst',
            'Laboratory Analyst',
            'Documentation Specialist',
            'Compliance Officer',

        ],

    ]

);

DiscProfile::updateOrCreate(

    [
        'code' => 'CD',
    ],

    [

        'name' => 'Conscientiousness Dominance',

        'title' => 'Conscientiousness + Dominance (CD)',

        'summary' =>
        'Tipe CD merupakan kombinasi antara Conscientiousness dan Dominance. Individu dengan tipe ini sangat analitis, logis, tegas, dan berorientasi pada hasil yang berkualitas. Mereka mengambil keputusan berdasarkan data dan fakta, bukan emosi. Ketika telah memiliki informasi yang cukup, mereka mampu bertindak cepat dan yakin terhadap keputusan yang diambil.',

        'strength' => [

            'Berpikir logis dan objektif.',
            'Teliti terhadap detail.',
            'Berani mengambil keputusan berdasarkan data.',
            'Memiliki standar kualitas yang tinggi.',
            'Mampu menyelesaikan masalah yang kompleks.',
            'Disiplin dan bertanggung jawab.',
            'Fokus pada efisiensi dan hasil.',
            'Mampu bekerja di bawah tekanan.',

        ],

        'weakness' => [

            'Cenderung perfeksionis.',
            'Kurang sabar terhadap kesalahan orang lain.',
            'Terkadang terlihat kaku dalam berkomunikasi.',
            'Sulit menerima ide yang tidak didukung data.',
            'Dapat terlalu kritis terhadap pekerjaan.',
            'Kurang mengekspresikan empati.',

        ],

        'communication' => [

            'Berkomunikasi secara langsung dan berdasarkan fakta.',
            'Menghindari pembicaraan yang tidak relevan.',
            'Lebih menyukai diskusi yang logis.',
            'Mengutamakan kejelasan informasi.',
            'Menghargai komunikasi yang efisien.',

        ],

        'leadership' => [

            'Memimpin berdasarkan analisis dan data.',
            'Menetapkan standar kerja yang tinggi.',
            'Mengambil keputusan secara objektif.',
            'Fokus pada kualitas dan pencapaian target.',
            'Mendorong tim bekerja secara profesional.',

        ],

        'motivation' => [

            'Target yang jelas.',
            'Pekerjaan yang menantang.',
            'Kesempatan memecahkan masalah.',
            'Standar kualitas yang tinggi.',
            'Kepercayaan dalam mengambil keputusan.',
            'Lingkungan kerja profesional.',

        ],

        'stress' => [

            'Keputusan tanpa dasar data.',
            'Proses kerja yang tidak terstruktur.',
            'Kesalahan yang berulang.',
            'Standar kerja yang rendah.',
            'Kurangnya tanggung jawab dalam tim.',

        ],

        'development' => [

            'Meningkatkan empati terhadap orang lain.',
            'Lebih terbuka terhadap sudut pandang berbeda.',
            'Belajar menerima bahwa tidak semua situasi harus sempurna.',
            'Mengembangkan kemampuan komunikasi interpersonal.',
            'Lebih menghargai proses selain hasil akhir.',

        ],

        'job_match' => [

            'System Analyst',
            'Software Architect',
            'Project Manager',
            'Engineering Manager',
            'Quality Assurance Manager',
            'Business Analyst',
            'IT Manager',
            'Operations Manager',
            'Risk Manager',
            'Chief Technology Officer',

        ],

    ]

);

DiscProfile::updateOrCreate(

    [
        'code' => 'CI',
    ],

    [

        'name' => 'Conscientiousness Influence',

        'title' => 'Conscientiousness + Influence (CI)',

        'summary' =>
        'Tipe CI merupakan kombinasi antara Conscientiousness dan Influence. Individu dengan tipe ini dikenal teliti, analitis, komunikatif, dan mampu menyampaikan ide secara sistematis. Mereka menyukai kualitas kerja yang tinggi sekaligus mampu membangun hubungan baik dengan orang lain. Dibandingkan tipe C murni, mereka lebih terbuka dalam berdiskusi dan lebih nyaman bekerja secara kolaboratif.',

        'strength' => [

            'Analitis dan logis.',
            'Komunikatif dalam menyampaikan ide.',
            'Mampu menjelaskan hal yang kompleks secara sederhana.',
            'Teliti terhadap detail.',
            'Mudah membangun hubungan profesional.',
            'Terorganisir dalam bekerja.',
            'Berorientasi pada kualitas.',
            'Mampu bekerja sama dalam tim.',

        ],

        'weakness' => [

            'Cenderung overthinking sebelum mengambil keputusan.',
            'Perfeksionis terhadap hasil kerja.',
            'Kadang terlalu banyak menganalisis.',
            'Kurang nyaman menghadapi konflik langsung.',
            'Mudah kecewa jika kualitas kerja tim rendah.',
            'Sulit mengambil keputusan ketika informasi belum lengkap.',

        ],

        'communication' => [

            'Berkomunikasi secara jelas dan terstruktur.',
            'Menyukai diskusi yang didukung data.',
            'Mampu menjelaskan informasi teknis dengan bahasa yang mudah dipahami.',
            'Mendengarkan pendapat orang lain sebelum memberikan kesimpulan.',
            'Mengutamakan komunikasi yang sopan dan profesional.',

        ],

        'leadership' => [

            'Memimpin melalui pengetahuan dan kompetensi.',
            'Memberikan arahan berdasarkan data.',
            'Mendorong kolaborasi dalam tim.',
            'Menetapkan standar kualitas yang tinggi.',
            'Membangun lingkungan kerja yang profesional.',

        ],

        'motivation' => [

            'Kesempatan belajar hal baru.',
            'Pekerjaan yang membutuhkan analisis.',
            'Lingkungan kerja profesional.',
            'Kolaborasi yang sehat.',
            'Kualitas hasil kerja.',
            'Pengembangan kompetensi.',

        ],

        'stress' => [

            'Informasi yang tidak jelas.',
            'Lingkungan kerja yang berantakan.',
            'Target tanpa perencanaan.',
            'Komunikasi yang buruk.',
            'Kesalahan yang berulang.',

        ],

        'development' => [

            'Lebih percaya diri dalam mengambil keputusan.',
            'Mengurangi kecenderungan overthinking.',
            'Belajar lebih fleksibel terhadap perubahan.',
            'Meningkatkan kemampuan menghadapi konflik secara langsung.',
            'Berani mengambil risiko yang terukur.',

        ],

        'job_match' => [

            'Business Analyst',
            'System Analyst',
            'Software Engineer',
            'UI/UX Researcher',
            'Quality Assurance',
            'Technical Consultant',
            'IT Consultant',
            'Data Analyst',
            'Product Owner',
            'Project Coordinator',

        ],

    ]

);

DiscProfile::updateOrCreate(

    [
        'code' => 'CS',
    ],

    [

        'name' => 'Conscientiousness Steadiness',

        'title' => 'Conscientiousness + Steadiness (CS)',

        'summary' =>
        'Tipe CS merupakan kombinasi antara Conscientiousness dan Steadiness. Individu dengan tipe ini dikenal sangat teliti, sabar, disiplin, konsisten, serta memiliki rasa tanggung jawab yang tinggi. Mereka lebih menyukai lingkungan kerja yang teratur, stabil, dan memiliki prosedur yang jelas. Dalam bekerja mereka berusaha menjaga kualitas sekaligus menciptakan hubungan kerja yang harmonis.',

        'strength' => [

            'Sangat teliti terhadap detail.',
            'Sabar dalam menghadapi pekerjaan.',
            'Disiplin dan konsisten.',
            'Memiliki komitmen tinggi.',
            'Bertanggung jawab terhadap tugas.',
            'Mampu menjaga kualitas pekerjaan.',
            'Dapat dipercaya oleh tim.',
            'Bekerja secara sistematis.',

        ],

        'weakness' => [

            'Sulit menerima perubahan yang mendadak.',
            'Perfeksionis dalam pekerjaan.',
            'Terlalu berhati-hati mengambil keputusan.',
            'Kurang nyaman menghadapi konflik.',
            'Cenderung lambat ketika situasi menuntut keputusan cepat.',
            'Kadang terlalu fokus pada detail kecil.',

        ],

        'communication' => [

            'Berkomunikasi dengan sopan dan tenang.',
            'Menyampaikan informasi secara runtut.',
            'Lebih suka diskusi yang terstruktur.',
            'Mendengarkan sebelum memberikan pendapat.',
            'Menghindari konflik yang tidak perlu.',

        ],

        'leadership' => [

            'Memimpin dengan memberi contoh.',
            'Menjaga kestabilan tim.',
            'Mengutamakan kualitas kerja.',
            'Menyusun prosedur yang jelas.',
            'Memberikan arahan secara sistematis.',

        ],

        'motivation' => [

            'Lingkungan kerja yang stabil.',
            'Prosedur kerja yang jelas.',
            'Kepercayaan dari organisasi.',
            'Pekerjaan yang membutuhkan ketelitian.',
            'Hubungan kerja yang harmonis.',
            'Kesempatan meningkatkan kualitas pekerjaan.',

        ],

        'stress' => [

            'Perubahan yang mendadak.',
            'Target tanpa perencanaan.',
            'Lingkungan kerja yang tidak teratur.',
            'Konflik berkepanjangan.',
            'Kesalahan yang sebenarnya bisa dihindari.',

        ],

        'development' => [

            'Lebih fleksibel terhadap perubahan.',
            'Berani mengambil keputusan lebih cepat.',
            'Mengurangi kecenderungan perfeksionis.',
            'Meningkatkan kemampuan menghadapi konflik.',
            'Belajar lebih nyaman menghadapi ketidakpastian.',

        ],

        'job_match' => [

            'Quality Assurance',
            'Quality Control',
            'Auditor',
            'Accountant',
            'Compliance Officer',
            'Document Controller',
            'Data Analyst',
            'Laboratory Analyst',
            'Administrative Manager',
            'System Administrator',

        ],

    ]

);
        
    }
}