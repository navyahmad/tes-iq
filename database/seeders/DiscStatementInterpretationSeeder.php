<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DiscStatementInterpretation;

class DiscStatementInterpretationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
|--------------------------------------------------------------------------
| QUESTION 1
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 1,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Mudah sepakat, fleksibel',

        'most_description' =>
        'Anda cenderung mudah menyesuaikan diri dengan berbagai situasi maupun karakter orang di sekitar. Anda lebih mengutamakan kerja sama dan mencari titik temu daripada memperbesar perbedaan pendapat. Sikap ini membantu menciptakan hubungan kerja yang harmonis serta mempermudah kolaborasi dalam tim. Tetap pastikan Anda tidak terlalu sering mengalah sehingga pendapat dan prinsip yang penting tetap dapat disampaikan dengan baik.',

        'least_description' =>
        'Anda cenderung memiliki pendirian yang kuat dan tidak mudah mengubah keputusan hanya demi mencapai kesepakatan. Anda lebih memilih mempertahankan prinsip apabila meyakini hal tersebut benar. Sikap ini membuat Anda terlihat konsisten dan tegas dalam mengambil keputusan. Namun, tetap penting untuk terbuka terhadap masukan agar keputusan yang diambil semakin objektif.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 1,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Mudah mempercayai orang lain, terbuka',

        'most_description' =>
        'Anda cenderung mudah membangun kepercayaan dan bersikap terbuka kepada orang lain. Anda nyaman berbagi informasi serta menjalin hubungan yang positif dalam lingkungan kerja. Sikap ini mempermudah komunikasi, kolaborasi, dan terciptanya suasana kerja yang saling mendukung. Tetap lakukan pertimbangan yang matang sebelum memberikan kepercayaan penuh dalam situasi yang penting.',

        'least_description' =>
        'Anda cenderung lebih berhati-hati sebelum mempercayai orang lain dan membutuhkan waktu untuk mengenal seseorang lebih jauh. Anda lebih mengandalkan pengamatan serta bukti sebelum membangun kepercayaan. Sikap ini membantu mengurangi risiko kesalahan dalam mengambil keputusan maupun bekerja sama. Namun, cobalah lebih terbuka pada situasi yang tepat agar hubungan profesional dapat berkembang dengan lebih baik.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 1,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Suka tantangan, berani mengambil risiko',

        'most_description' =>
        'Anda cenderung menikmati tantangan baru dan tidak ragu mengambil keputusan ketika melihat peluang yang menjanjikan. Anda memiliki keberanian untuk keluar dari zona nyaman demi mencapai hasil yang lebih baik. Sikap ini membantu Anda berkembang lebih cepat dan mampu menghadapi perubahan dengan percaya diri. Tetap pertimbangkan risiko secara matang agar keputusan yang diambil tetap memberikan hasil yang optimal.',

        'least_description' =>
        'Anda cenderung lebih nyaman dengan situasi yang stabil dan memilih mempertimbangkan berbagai risiko sebelum mengambil keputusan penting. Anda tidak mudah terburu-buru dalam menghadapi perubahan maupun tantangan baru. Sikap ini membantu menjaga kualitas keputusan dan mengurangi kemungkinan terjadinya kesalahan. Namun, jangan ragu memanfaatkan peluang yang telah diperhitungkan dengan baik agar potensi diri dapat berkembang lebih maksimal.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 1,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Penuh toleransi, saling menghargai',

        'most_description' =>
        'Anda cenderung menghargai perbedaan pendapat dan berusaha menjaga hubungan yang baik dengan setiap orang. Anda percaya bahwa saling menghormati merupakan dasar dari kerja sama yang efektif. Sikap ini membantu menciptakan lingkungan kerja yang nyaman, harmonis, dan saling mendukung. Tetap berani menyampaikan pendapat ketika diperlukan agar keseimbangan antara hubungan dan pencapaian tujuan tetap terjaga.',

        'least_description' =>
        'Anda cenderung lebih berfokus pada pencapaian hasil dibanding menjaga keharmonisan hubungan dalam setiap situasi. Anda tidak ragu menyampaikan pendapat secara langsung apabila dianggap penting untuk mencapai tujuan. Sikap ini dapat mempercepat proses pengambilan keputusan dan penyelesaian masalah. Namun, memperhatikan sudut pandang orang lain juga akan membantu meningkatkan kualitas kerja sama dalam tim.',

    ]

);

        /*
|--------------------------------------------------------------------------
| QUESTION 2
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 2,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Bicara halus, cenderung tenang dan diam',

        'most_description' =>
        'Anda cenderung berbicara dengan tenang dan berhati-hati dalam memilih kata sebelum menyampaikan pendapat. Anda lebih nyaman mendengarkan terlebih dahulu agar dapat memahami situasi dengan baik. Sikap ini membantu menciptakan komunikasi yang sopan, terkendali, dan minim konflik dalam lingkungan kerja. Tetap berani menyampaikan ide atau pendapat agar kontribusi Anda dapat lebih terlihat.',

        'least_description' =>
        'Anda cenderung lebih ekspresif dan terbuka dalam menyampaikan pendapat kepada orang lain. Anda merasa nyaman berbicara secara langsung tanpa harus terlalu banyak menahan diri. Sikap ini membantu mempercepat komunikasi dan membuat ide lebih mudah dipahami oleh tim. Namun, tetap perhatikan cara penyampaian agar pesan dapat diterima dengan baik oleh setiap orang.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 2,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Berpandangan positif, berfokus pada masa depan',

        'most_description' =>
        'Anda cenderung memiliki pandangan yang optimis dan lebih fokus pada peluang dibanding hambatan. Anda percaya bahwa tantangan dapat menjadi kesempatan untuk belajar dan berkembang. Sikap ini membantu Anda menjaga semangat serta memberikan energi positif dalam lingkungan kerja. Tetap imbangi optimisme dengan analisis yang matang agar setiap keputusan tetap realistis.',

        'least_description' =>
        'Anda cenderung lebih mempertimbangkan kondisi saat ini serta berbagai kemungkinan risiko sebelum memikirkan rencana jangka panjang. Anda lebih nyaman mengambil keputusan berdasarkan fakta dan keadaan yang nyata. Sikap ini membantu mengurangi risiko serta meningkatkan ketelitian dalam bekerja. Namun, cobalah lebih terbuka terhadap peluang baru agar potensi perkembangan tidak terlewatkan.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 2,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Senang menjadi pusat perhatian, ramah dan supel',

        'most_description' =>
        'Anda cenderung menikmati interaksi sosial dan merasa nyaman ketika menjadi pusat perhatian dalam suatu kelompok. Anda mudah membangun hubungan baru serta mampu menciptakan suasana yang hangat dan menyenangkan. Sikap ini membantu memperkuat komunikasi, kerja sama, dan membangun jaringan profesional yang luas. Tetap berikan ruang bagi orang lain untuk berpartisipasi agar hubungan tetap seimbang.',

        'least_description' =>
        'Anda cenderung lebih nyaman bekerja tanpa menjadi pusat perhatian dan lebih memilih menunjukkan kemampuan melalui hasil kerja. Anda tidak merasa perlu selalu tampil menonjol dalam setiap situasi. Sikap ini membantu Anda tetap fokus pada kualitas pekerjaan dan tujuan yang ingin dicapai. Namun, jangan ragu menunjukkan potensi diri ketika kesempatan tersebut dapat memberikan manfaat bagi tim maupun organisasi.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 2,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Menjaga kedamaian, menciptakan keselarasan',

        'most_description' =>
        'Anda cenderung berusaha menjaga hubungan yang harmonis dan menghindari konflik yang tidak diperlukan. Anda percaya bahwa suasana kerja yang nyaman akan mendukung tercapainya tujuan bersama. Sikap ini membantu menciptakan kerja sama yang baik serta meningkatkan kekompakan dalam tim. Tetap berani menyampaikan pendapat apabila diperlukan agar setiap keputusan dapat menghasilkan solusi terbaik.',

        'least_description' =>
        'Anda cenderung tidak selalu mengutamakan keharmonisan apabila terdapat tujuan yang harus segera dicapai. Anda lebih memilih menyampaikan pendapat secara langsung meskipun dapat memunculkan perbedaan pandangan. Sikap ini membantu mempercepat penyelesaian masalah dan pengambilan keputusan yang penting. Namun, tetap menjaga cara berkomunikasi dengan baik akan membantu hubungan kerja tetap positif.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 3
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 3,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Memberi dorongan dan motivasi kepada orang lain',

        'most_description' =>
        'Anda cenderung senang memberikan semangat dan motivasi kepada orang lain agar dapat berkembang bersama. Anda menikmati ketika dapat membantu meningkatkan kepercayaan diri maupun antusiasme orang di sekitar. Sikap ini membantu menciptakan suasana kerja yang positif serta mendorong kolaborasi dalam tim. Tetap pastikan motivasi yang Anda berikan disesuaikan dengan kebutuhan dan karakter setiap individu.',

        'least_description' =>
        'Anda cenderung lebih fokus menyelesaikan tanggung jawab pribadi daripada memberikan dorongan kepada orang lain. Anda percaya bahwa setiap orang memiliki cara masing-masing untuk membangun motivasinya sendiri. Sikap ini membantu Anda menjaga fokus terhadap target dan pekerjaan yang sedang dijalankan. Namun, sesekali memberikan dukungan kepada rekan kerja dapat meningkatkan kekompakan dan kerja sama dalam tim.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 3,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Mengejar kesempurnaan, teliti',

        'most_description' =>
        'Anda cenderung mengutamakan ketelitian dan berusaha menghasilkan pekerjaan dengan kualitas terbaik. Anda memperhatikan detail serta tidak mudah merasa puas sebelum hasil sesuai dengan standar yang diharapkan. Sikap ini membantu mengurangi kesalahan dan meningkatkan kualitas pekerjaan yang dihasilkan. Tetap hindari terlalu fokus pada kesempurnaan agar pekerjaan dapat diselesaikan secara tepat waktu.',

        'least_description' =>
        'Anda cenderung lebih mengutamakan penyelesaian pekerjaan daripada mengejar hasil yang benar-benar sempurna. Anda memahami bahwa dalam kondisi tertentu kecepatan juga menjadi bagian penting dari pencapaian tujuan. Sikap ini membantu meningkatkan efisiensi dan mempercepat proses kerja. Namun, tetap luangkan waktu untuk memeriksa kembali hasil pekerjaan agar kualitas tetap terjaga.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 3,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Merasa nyaman menjadi bagian dari tim',

        'most_description' =>
        'Anda cenderung merasa nyaman bekerja bersama orang lain dan menikmati proses mencapai tujuan secara kolektif. Anda menghargai kerja sama serta percaya bahwa setiap anggota tim memiliki peran yang penting. Sikap ini membantu membangun hubungan kerja yang harmonis dan meningkatkan efektivitas kolaborasi. Tetap berani menyampaikan ide maupun pendapat agar kontribusi Anda semakin maksimal.',

        'least_description' =>
        'Anda cenderung lebih nyaman bekerja secara mandiri dan mengandalkan kemampuan diri sendiri dalam menyelesaikan tugas. Anda merasa dapat bekerja lebih efektif ketika memiliki ruang untuk mengambil keputusan sendiri. Sikap ini membantu meningkatkan fokus dan kemandirian dalam bekerja. Namun, tetap terbuka terhadap kolaborasi agar dapat memperoleh sudut pandang dan solusi yang lebih beragam.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 3,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Senang menetapkan target dan tujuan',

        'most_description' =>
        'Anda cenderung senang menetapkan target yang jelas sebagai arah dalam bekerja maupun mencapai tujuan. Anda termotivasi ketika memiliki sasaran yang menantang dan dapat diukur hasilnya. Sikap ini membantu meningkatkan fokus, disiplin, serta semangat untuk mencapai pencapaian yang lebih tinggi. Tetap pastikan target yang ditetapkan realistis dan disertai perencanaan yang matang.',

        'least_description' =>
        'Anda cenderung lebih nyaman bekerja mengikuti alur yang ada tanpa harus selalu menetapkan target secara khusus. Anda lebih memilih menyesuaikan langkah dengan kondisi yang sedang dihadapi daripada membuat sasaran yang terlalu rinci. Sikap ini membantu Anda lebih fleksibel dalam menghadapi perubahan situasi. Namun, memiliki tujuan yang jelas akan membantu meningkatkan arah, fokus, dan pencapaian kerja.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 4
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 4,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Mudah merasa frustrasi atau tertekan',

        'most_description' =>
        'Anda cenderung lebih peka terhadap tekanan maupun hambatan yang muncul dalam pekerjaan. Anda memiliki keinginan yang tinggi agar segala sesuatu berjalan sesuai harapan sehingga lebih mudah merasakan frustrasi ketika hasil tidak sesuai ekspektasi. Sikap ini menunjukkan bahwa Anda memiliki kepedulian terhadap kualitas dan hasil kerja. Namun, mengembangkan kemampuan mengelola emosi serta melihat tantangan sebagai proses belajar akan membantu Anda tetap produktif dalam berbagai situasi.',

        'least_description' =>
        'Anda cenderung mampu menjaga ketenangan ketika menghadapi tekanan atau situasi yang tidak sesuai harapan. Anda tidak mudah larut dalam rasa frustrasi dan lebih memilih mencari solusi atas permasalahan yang dihadapi. Sikap ini membantu Anda tetap fokus dan mampu mengambil keputusan secara lebih objektif. Tetap luangkan waktu untuk mengenali kondisi diri agar tekanan yang terus menerus tidak terabaikan.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 4,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Cenderung memendam perasaan pribadi',

        'most_description' =>
        'Anda cenderung menyimpan perasaan atau masalah pribadi daripada langsung menceritakannya kepada orang lain. Anda lebih memilih memproses berbagai hal secara mandiri sebelum membagikannya kepada orang di sekitar. Sikap ini membantu Anda tetap tenang dan tidak mudah bereaksi secara emosional dalam berbagai situasi. Namun, berbagi dengan orang yang tepat pada waktu yang tepat juga dapat membantu memperoleh dukungan dan sudut pandang yang bermanfaat.',

        'least_description' =>
        'Anda cenderung terbuka dalam menyampaikan perasaan maupun pemikiran kepada orang lain ketika diperlukan. Anda merasa komunikasi yang jujur dapat membantu menyelesaikan permasalahan dengan lebih cepat. Sikap ini mendukung terciptanya hubungan yang terbuka dan saling memahami dalam lingkungan kerja. Tetap pertimbangkan waktu dan cara penyampaian agar informasi yang diberikan tetap profesional dan tepat sasaran.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 4,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Senang mengungkapkan sudut pandang pribadi',

        'most_description' =>
        'Anda cenderung percaya diri dalam menyampaikan ide, pendapat, maupun sudut pandang kepada orang lain. Anda menikmati diskusi dan tidak ragu memberikan masukan apabila merasa memiliki pandangan yang bermanfaat. Sikap ini membantu menghasilkan berbagai ide baru serta memperkaya proses pengambilan keputusan dalam tim. Tetap berikan ruang bagi orang lain untuk menyampaikan pendapat agar diskusi berlangsung secara seimbang.',

        'least_description' =>
        'Anda cenderung lebih memilih mendengarkan terlebih dahulu daripada langsung menyampaikan pendapat pribadi. Anda akan berbicara ketika merasa informasi yang dimiliki sudah cukup atau memang diperlukan. Sikap ini membantu Anda memahami situasi secara lebih menyeluruh sebelum memberikan masukan. Namun, jangan ragu menyampaikan ide yang dimiliki karena pandangan Anda juga dapat memberikan nilai tambah bagi tim.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 4,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Berani berbeda pendapat dan menghadapi oposisi',

        'most_description' =>
        'Anda cenderung berani mempertahankan pendapat meskipun berbeda dengan pandangan orang lain. Anda tidak mudah terpengaruh oleh tekanan apabila yakin keputusan yang diambil sudah tepat. Sikap ini membantu menghadirkan sudut pandang yang objektif dan mempercepat penyelesaian masalah yang membutuhkan ketegasan. Tetap sampaikan perbedaan pendapat dengan cara yang menghargai orang lain agar kerja sama tetap terjaga.',

        'least_description' =>
        'Anda cenderung lebih memilih menghindari perbedaan pendapat yang dapat memicu konflik dalam suatu kelompok. Anda lebih nyaman mencari titik temu daripada mempertahankan pandangan secara langsung. Sikap ini membantu menjaga hubungan kerja yang harmonis dan menciptakan suasana yang kondusif. Namun, jangan ragu menyampaikan pendapat ketika hal tersebut penting untuk menghasilkan keputusan yang lebih baik.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 5
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 5,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Penuh semangat dan aktif berbicara',

        'most_description' =>
        'Anda cenderung menunjukkan antusiasme yang tinggi dan mudah membangun komunikasi dengan orang lain. Anda menikmati berbagi ide, berdiskusi, serta menciptakan suasana yang lebih hidup dalam lingkungan kerja. Sikap ini membantu membangun hubungan yang positif dan meningkatkan semangat kerja tim. Tetap berikan kesempatan kepada orang lain untuk menyampaikan pendapat agar komunikasi berlangsung secara seimbang.',

        'least_description' =>
        'Anda cenderung lebih tenang dalam berkomunikasi dan tidak selalu merasa perlu menjadi pihak yang paling banyak berbicara. Anda lebih memilih menyampaikan pendapat ketika memang dianggap penting atau diperlukan. Sikap ini membantu Anda menjadi pendengar yang baik dan lebih berhati-hati dalam berkomunikasi. Namun, jangan ragu menyampaikan ide yang dimiliki karena kontribusi Anda tetap bernilai bagi tim.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 5,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Cepat bertindak dan gigih/tekun',

        'most_description' =>
        'Anda cenderung segera mengambil tindakan ketika menghadapi tugas atau tantangan. Anda memiliki kegigihan untuk terus berusaha hingga tujuan yang ditetapkan berhasil dicapai. Sikap ini membuat Anda mampu bekerja secara efektif dan tidak mudah menyerah ketika menghadapi hambatan. Tetap pastikan setiap keputusan diambil dengan pertimbangan yang matang agar hasil yang dicapai semakin optimal.',

        'least_description' =>
        'Anda cenderung lebih berhati-hati sebelum mengambil tindakan dan membutuhkan waktu untuk mempertimbangkan berbagai kemungkinan. Anda lebih nyaman bekerja dengan perencanaan yang jelas daripada terburu-buru mengambil keputusan. Sikap ini membantu mengurangi risiko kesalahan dalam pekerjaan. Namun, jangan terlalu lama menunda tindakan ketika informasi yang diperlukan sudah cukup tersedia.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 5,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Berupaya menjaga keseimbangan dan keselarasan',

        'most_description' =>
        'Anda cenderung berusaha menciptakan hubungan yang harmonis serta menjaga keseimbangan dalam bekerja sama dengan orang lain. Anda lebih memilih mencari solusi yang dapat diterima bersama dibanding memperbesar konflik. Sikap ini membantu membangun lingkungan kerja yang nyaman dan saling mendukung. Tetap berani menyampaikan pendapat ketika diperlukan agar keputusan yang diambil tetap objektif.',

        'least_description' =>
        'Anda cenderung lebih mengutamakan penyelesaian tugas daripada menjaga keharmonisan dalam setiap situasi. Anda bersedia menghadapi perbedaan pendapat apabila hal tersebut diperlukan untuk mencapai hasil yang lebih baik. Sikap ini membantu mempercepat pengambilan keputusan dalam kondisi tertentu. Namun, tetap perhatikan hubungan kerja agar kolaborasi jangka panjang tetap terjaga.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 5,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Berusaha selalu patuh pada aturan dan prosedur',

        'most_description' =>
        'Anda cenderung menghargai aturan, prosedur, dan standar kerja yang telah ditetapkan. Anda percaya bahwa mengikuti proses yang benar akan menghasilkan pekerjaan yang lebih konsisten dan berkualitas. Sikap ini membantu mengurangi kesalahan serta meningkatkan kepercayaan terhadap hasil kerja Anda. Tetap bersikap fleksibel ketika situasi membutuhkan penyesuaian tanpa mengabaikan tujuan utama.',

        'least_description' =>
        'Anda cenderung lebih mengutamakan efektivitas dibanding selalu mengikuti prosedur yang ada. Anda bersedia mencari cara baru apabila dinilai lebih cepat atau lebih sesuai dengan kondisi yang dihadapi. Sikap ini mendukung munculnya inovasi dan penyelesaian masalah secara kreatif. Namun, tetap pastikan setiap langkah yang diambil tidak mengabaikan aturan penting maupun risiko yang mungkin timbul.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 6
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 6,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Mampu mengatur waktu dengan efektif',

        'most_description' =>
        'Anda cenderung mampu mengatur waktu dan menyusun prioritas pekerjaan dengan baik. Anda berusaha menyelesaikan setiap tugas sesuai jadwal yang telah direncanakan. Sikap ini membantu meningkatkan produktivitas serta menjaga kualitas hasil kerja dalam berbagai situasi. Tetap pertahankan fleksibilitas agar dapat menyesuaikan diri ketika menghadapi perubahan prioritas yang tidak terduga.',

        'least_description' =>
        'Anda cenderung lebih fleksibel dalam mengatur waktu dan tidak selalu mengikuti jadwal yang telah dibuat. Anda lebih nyaman menyesuaikan ritme kerja berdasarkan kondisi yang sedang dihadapi. Sikap ini membantu Anda beradaptasi terhadap perubahan yang terjadi di lingkungan kerja. Namun, meningkatkan kemampuan mengelola waktu akan membantu pekerjaan selesai lebih konsisten dan tepat waktu.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 6,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Sering tergesa-gesa dan merasa terbebani',

        'most_description' =>
        'Anda cenderung bekerja dengan tempo yang cepat sehingga terkadang merasa terburu-buru ketika menghadapi banyak tanggung jawab. Anda memiliki dorongan yang kuat untuk segera menyelesaikan pekerjaan yang menjadi prioritas. Sikap ini membuat Anda mampu bergerak cepat dalam menghadapi tuntutan pekerjaan. Namun, mengatur ritme kerja dengan lebih seimbang akan membantu mengurangi tekanan dan meningkatkan kualitas hasil kerja.',

        'least_description' =>
        'Anda cenderung mampu menjaga ketenangan dan tidak mudah merasa terbebani oleh tekanan pekerjaan. Anda lebih memilih menyelesaikan tugas secara bertahap daripada terburu-buru mengambil tindakan. Sikap ini membantu menjaga konsistensi serta mengurangi kemungkinan terjadinya kesalahan. Tetap pertahankan keseimbangan antara ketelitian dan kecepatan agar produktivitas tetap optimal.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 6,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Peduli pada hubungan dan isu-isu sosial',

        'most_description' =>
        'Anda cenderung memiliki kepedulian terhadap hubungan dengan orang lain serta lingkungan di sekitar. Anda menikmati membangun komunikasi yang baik dan memperhatikan kebutuhan maupun perasaan orang lain. Sikap ini membantu menciptakan suasana kerja yang positif dan memperkuat kerja sama dalam tim. Tetap menjaga keseimbangan antara kepedulian kepada orang lain dan penyelesaian tanggung jawab pribadi.',

        'least_description' =>
        'Anda cenderung lebih fokus pada penyelesaian pekerjaan dibanding terlalu memikirkan hubungan sosial di lingkungan kerja. Anda lebih mengutamakan pencapaian tujuan dan hasil yang ingin dicapai. Sikap ini membantu meningkatkan fokus dan efisiensi dalam bekerja. Namun, membangun hubungan yang baik dengan rekan kerja juga akan mendukung keberhasilan kerja sama dalam jangka panjang.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 6,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Terbiasa menuntaskan setiap tugas hingga selesai',

        'most_description' =>
        'Anda cenderung memiliki komitmen yang tinggi untuk menyelesaikan setiap tugas hingga benar-benar tuntas. Anda merasa bertanggung jawab terhadap pekerjaan yang telah dipercayakan kepada Anda. Sikap ini membantu membangun kepercayaan serta menghasilkan pekerjaan yang konsisten dan dapat diandalkan. Tetap pastikan Anda mampu menentukan prioritas agar tidak menghabiskan terlalu banyak waktu pada satu pekerjaan saja.',

        'least_description' =>
        'Anda cenderung lebih mudah beralih ke tugas lain ketika menghadapi perubahan prioritas atau muncul pekerjaan baru. Anda merasa lebih nyaman bekerja secara dinamis sesuai kebutuhan yang sedang berlangsung. Sikap ini membantu Anda beradaptasi dengan cepat terhadap perubahan situasi. Namun, menjaga konsistensi dalam menyelesaikan setiap pekerjaan akan meningkatkan kualitas hasil serta kepercayaan dari orang lain.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 7
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 7,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Kurang menyukai perubahan yang mendadak',

        'most_description' =>
        'Anda cenderung lebih nyaman bekerja dalam situasi yang stabil dan terencana. Anda membutuhkan waktu untuk menyesuaikan diri ketika menghadapi perubahan yang terjadi secara tiba-tiba. Sikap ini membantu Anda menjaga konsistensi serta mengurangi risiko kesalahan dalam bekerja. Tetap latih kemampuan beradaptasi agar lebih siap menghadapi perubahan yang tidak dapat dihindari.',

        'least_description' =>
        'Anda cenderung cukup terbuka terhadap perubahan dan mampu menyesuaikan diri dengan situasi baru. Anda melihat perubahan sebagai kesempatan untuk belajar maupun menemukan cara kerja yang lebih efektif. Sikap ini membantu Anda lebih fleksibel dalam menghadapi tantangan di lingkungan kerja. Tetap pastikan setiap perubahan yang dilakukan tetap mempertimbangkan dampaknya terhadap kualitas pekerjaan.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 7,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Cenderung berjanji secara berlebihan',

        'most_description' =>
        'Anda cenderung mudah memberikan komitmen karena ingin membantu atau memenuhi harapan orang lain. Antusiasme yang tinggi terkadang membuat Anda menjanjikan lebih banyak daripada kemampuan yang tersedia. Sikap ini menunjukkan niat baik serta kepedulian terhadap orang lain. Namun, memberikan komitmen yang realistis akan membantu menjaga kepercayaan dan kredibilitas Anda.',

        'least_description' =>
        'Anda cenderung berhati-hati sebelum memberikan komitmen kepada orang lain. Anda lebih memilih memastikan kemampuan dan sumber daya yang tersedia sebelum menyampaikan sebuah janji. Sikap ini membantu membangun kepercayaan karena komitmen yang diberikan lebih mudah dipenuhi. Tetap jaga keseimbangan agar kehati-hatian tersebut tidak menghambat peluang maupun kerja sama.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 7,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Mengundurkan diri saat berada di bawah tekanan',

        'most_description' =>
        'Anda cenderung menghindari situasi yang memberikan tekanan tinggi atau konflik berkepanjangan. Ketika tekanan meningkat, Anda lebih memilih mengambil langkah yang dirasa paling aman bagi diri sendiri. Sikap ini membantu mengurangi risiko kelelahan maupun keputusan yang terburu-buru. Namun, meningkatkan kemampuan menghadapi tekanan akan membantu Anda berkembang dalam berbagai situasi kerja.',

        'least_description' =>
        'Anda cenderung tetap bertahan dan berusaha mencari solusi ketika menghadapi tekanan. Anda melihat tantangan sebagai bagian dari proses yang perlu dihadapi hingga menemukan penyelesaian terbaik. Sikap ini membantu meningkatkan ketahanan serta kepercayaan diri dalam bekerja. Tetap perhatikan keseimbangan antara ketekunan dan kondisi diri agar tidak mengalami kelelahan berlebihan.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 7,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Tidak ragu berkonfrontasi atau bertempur',

        'most_description' =>
        'Anda cenderung berani menghadapi perbedaan pendapat maupun situasi yang menantang secara langsung. Anda tidak ragu menyampaikan pendapat apabila yakin hal tersebut diperlukan untuk mencapai tujuan yang lebih baik. Sikap ini membantu mempercepat penyelesaian masalah dan pengambilan keputusan. Tetap sampaikan pendapat dengan sikap yang menghargai orang lain agar hubungan kerja tetap terjaga.',

        'least_description' =>
        'Anda cenderung lebih memilih menyelesaikan perbedaan pendapat melalui pendekatan yang tenang dan menghindari konfrontasi yang tidak perlu. Anda percaya bahwa komunikasi yang baik dapat menghasilkan solusi tanpa harus memperbesar konflik. Sikap ini membantu menciptakan hubungan kerja yang lebih harmonis. Namun, jangan ragu bersikap tegas ketika situasi memang membutuhkan keputusan yang jelas.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 8
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 8,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Mampu memotivasi orang lain dengan baik',

        'most_description' =>
        'Anda cenderung mampu memberikan semangat dan dorongan positif kepada orang lain. Kehadiran Anda sering membantu meningkatkan kepercayaan diri serta antusiasme dalam bekerja. Sikap ini mendukung terciptanya lingkungan kerja yang lebih positif dan kolaboratif. Tetap pastikan motivasi yang diberikan disertai arahan yang jelas agar hasilnya lebih optimal.',

        'least_description' =>
        'Anda cenderung lebih fokus pada penyelesaian pekerjaan dibanding memberikan motivasi kepada orang lain. Anda percaya bahwa hasil kerja yang baik dapat menjadi contoh yang lebih efektif daripada banyak memberikan dorongan secara langsung. Sikap ini membantu menjaga fokus terhadap tanggung jawab pribadi. Namun, memberikan apresiasi dan semangat kepada rekan kerja juga dapat meningkatkan kerja sama tim.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 8,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Menjadi pendengar yang penuh perhatian',

        'most_description' =>
        'Anda cenderung mendengarkan orang lain dengan penuh perhatian sebelum memberikan tanggapan. Anda berusaha memahami sudut pandang serta kebutuhan orang lain secara menyeluruh. Sikap ini membantu membangun hubungan yang baik dan menciptakan komunikasi yang saling menghargai. Tetap seimbangkan kemampuan mendengar dengan keberanian menyampaikan pendapat ketika diperlukan.',

        'least_description' =>
        'Anda cenderung lebih cepat menyampaikan pendapat daripada mendengarkan penjelasan secara menyeluruh. Anda lebih nyaman memberikan solusi atau tanggapan secara langsung ketika menghadapi suatu situasi. Sikap ini membantu mempercepat proses pengambilan keputusan dalam kondisi tertentu. Namun, memberikan ruang bagi orang lain untuk menyampaikan pendapat akan menghasilkan keputusan yang lebih lengkap.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 8,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Memiliki kemampuan analisis yang kuat',

        'most_description' =>
        'Anda cenderung menganalisis informasi secara mendalam sebelum mengambil keputusan. Anda memperhatikan fakta, data, dan berbagai kemungkinan agar keputusan yang diambil lebih tepat. Sikap ini membantu menghasilkan solusi yang lebih akurat dan terukur. Tetap pastikan proses analisis tidak menghambat kecepatan dalam bertindak ketika situasi membutuhkan keputusan segera.',

        'least_description' =>
        'Anda cenderung lebih mengandalkan pengalaman, intuisi, atau tindakan cepat dibanding melakukan analisis yang panjang. Anda merasa lebih nyaman bergerak setelah memperoleh gambaran umum mengenai situasi yang dihadapi. Sikap ini membantu mempercepat respons terhadap berbagai tantangan. Namun, meningkatkan ketelitian dalam menganalisis informasi akan membantu mengurangi risiko kesalahan.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 8,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Mampu membagi dan mendelegasikan tugas dengan baik',

        'most_description' =>
        'Anda cenderung mampu membagi pekerjaan sesuai kemampuan anggota tim dan memberikan tanggung jawab secara jelas. Anda memahami bahwa pembagian tugas yang tepat dapat meningkatkan efektivitas kerja bersama. Sikap ini membantu tim bekerja lebih terorganisir dan produktif. Tetap lakukan pemantauan serta komunikasi yang baik agar setiap tugas dapat diselesaikan sesuai harapan.',

        'least_description' =>
        'Anda cenderung lebih nyaman menyelesaikan pekerjaan sendiri daripada membagikan tugas kepada orang lain. Anda ingin memastikan pekerjaan berjalan sesuai standar yang diharapkan. Sikap ini membantu menjaga kualitas hasil kerja yang menjadi tanggung jawab Anda. Namun, meningkatkan kemampuan mendelegasikan tugas akan membuat pekerjaan lebih efisien dan mengembangkan kemampuan tim.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 9
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 9,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Berorientasi pada pencapaian hasil akhir',

        'most_description' =>
        'Anda cenderung lebih fokus pada pencapaian target dan hasil yang ingin diraih. Anda terdorong untuk menyelesaikan pekerjaan secara efektif agar tujuan dapat tercapai sesuai harapan. Sikap ini membantu Anda tetap produktif dan berorientasi pada kinerja. Tetap perhatikan proses kerja serta keterlibatan tim agar hasil yang dicapai dapat berkelanjutan.',

        'least_description' =>
        'Anda cenderung lebih memperhatikan proses kerja daripada hanya mengejar hasil akhir. Anda percaya bahwa hasil yang baik akan diperoleh apabila setiap tahapan dikerjakan dengan benar. Sikap ini membantu menjaga kualitas pekerjaan dalam jangka panjang. Namun, tetap pastikan target yang telah ditetapkan dapat dicapai secara tepat waktu.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 9,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Mengutamakan kebenaran dan presisi/ketelitian',

        'most_description' =>
        'Anda cenderung mengutamakan ketelitian dan keakuratan dalam setiap pekerjaan. Anda berusaha memastikan setiap informasi maupun hasil kerja telah diperiksa dengan baik sebelum digunakan. Sikap ini membantu mengurangi kesalahan dan meningkatkan kualitas pekerjaan. Tetap jaga keseimbangan agar ketelitian tidak memperlambat proses pengambilan keputusan.',

        'least_description' =>
        'Anda cenderung lebih mengutamakan kecepatan dan penyelesaian pekerjaan dibanding melakukan pemeriksaan secara berulang. Anda merasa cukup yakin setelah memperoleh informasi yang dianggap memadai. Sikap ini membantu pekerjaan selesai lebih cepat dalam kondisi tertentu. Namun, meningkatkan perhatian terhadap detail akan membantu meminimalkan risiko kesalahan.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 9,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Menyukai suasana yang ceria dan menyenangkan',

        'most_description' =>
        'Anda cenderung menikmati lingkungan yang penuh semangat, positif, dan menyenangkan. Anda mudah membangun suasana yang hangat sehingga orang lain merasa nyaman ketika bekerja bersama Anda. Sikap ini membantu meningkatkan semangat serta kerja sama dalam tim. Tetap pastikan suasana yang menyenangkan tetap diimbangi dengan fokus terhadap tanggung jawab pekerjaan.',

        'least_description' =>
        'Anda cenderung lebih fokus pada pekerjaan daripada menciptakan suasana yang santai atau penuh hiburan. Anda merasa lingkungan kerja yang teratur lebih membantu mencapai hasil yang diharapkan. Sikap ini membantu menjaga konsentrasi dan produktivitas. Namun, membangun suasana kerja yang positif juga dapat meningkatkan kenyamanan tim.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 9,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Mengutamakan kerja sama dan pengerjaan bersama',

        'most_description' =>
        'Anda cenderung percaya bahwa kerja sama yang baik dapat menghasilkan pencapaian yang lebih optimal. Anda senang berbagi tanggung jawab, saling membantu, dan membangun hubungan yang harmonis dalam tim. Sikap ini membantu menciptakan lingkungan kerja yang saling mendukung. Tetap pastikan setiap anggota memiliki tanggung jawab yang jelas agar tujuan bersama dapat tercapai.',

        'least_description' =>
        'Anda cenderung lebih nyaman bekerja secara mandiri dan mengandalkan kemampuan sendiri dalam menyelesaikan tugas. Anda merasa pekerjaan dapat berjalan lebih efektif apabila dapat dikendalikan secara langsung. Sikap ini membantu meningkatkan kemandirian dan tanggung jawab pribadi. Namun, tetap membuka ruang untuk berkolaborasi akan memperkuat hasil kerja tim.',

    ]

);


/*
|--------------------------------------------------------------------------
| QUESTION 10
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 10,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Cenderung terus maju tanpa kendali diri',

        'most_description' =>
        'Anda cenderung memiliki dorongan yang kuat untuk terus bergerak maju dan mencapai tujuan. Semangat tersebut membuat Anda tidak mudah menyerah ketika menghadapi tantangan. Sikap ini membantu Anda tetap produktif dan berorientasi pada pencapaian hasil. Tetap jaga keseimbangan dengan mengendalikan diri agar setiap keputusan tetap dipertimbangkan secara matang.',

        'least_description' =>
        'Anda cenderung lebih berhati-hati dan mampu mengendalikan diri sebelum bertindak. Anda lebih memilih mempertimbangkan situasi terlebih dahulu dibanding terburu-buru mengejar tujuan. Sikap ini membantu mengurangi risiko kesalahan dalam mengambil keputusan. Namun, jangan sampai kehati-hatian membuat Anda kehilangan peluang yang baik.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 10,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Bertindak atau membeli berdasarkan impuls kata hati',

        'most_description' =>
        'Anda cenderung mengambil keputusan berdasarkan intuisi atau dorongan yang dirasakan saat itu. Anda percaya bahwa naluri sering membantu menentukan pilihan dengan cepat. Sikap ini membantu Anda merespons peluang tanpa terlalu lama menunggu. Tetap pastikan keputusan penting juga didukung oleh pertimbangan yang rasional dan informasi yang memadai.',

        'least_description' =>
        'Anda cenderung mempertimbangkan berbagai aspek sebelum mengambil keputusan atau melakukan tindakan. Anda merasa lebih nyaman ketika memiliki dasar yang jelas sebelum menentukan pilihan. Sikap ini membantu menghasilkan keputusan yang lebih terukur dan minim risiko. Namun, jangan sampai terlalu banyak mempertimbangkan sehingga kehilangan momentum yang tepat.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 10,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Lebih memilih menunggu tanpa paksaan',

        'most_description' =>
        'Anda cenderung sabar dalam menghadapi situasi dan tidak merasa perlu terburu-buru mengambil tindakan. Anda lebih nyaman menunggu waktu yang tepat sebelum bertindak. Sikap ini membantu menjaga kestabilan serta mengurangi keputusan yang tergesa-gesa. Tetap pastikan Anda mampu bertindak cepat ketika situasi memang menuntut tindakan segera.',

        'least_description' =>
        'Anda cenderung lebih memilih segera bertindak daripada menunggu terlalu lama. Anda merasa keputusan yang cepat sering kali lebih efektif dibanding terlalu banyak menunggu. Sikap ini membantu mempercepat penyelesaian pekerjaan dan pengambilan keputusan. Namun, tetap luangkan waktu untuk mempertimbangkan situasi agar tindakan yang diambil tetap tepat.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 10,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Rela mengalah dan mengabaikan keinginan pribadi',

        'most_description' =>
        'Anda cenderung bersedia mengesampingkan kepentingan pribadi demi menjaga hubungan baik atau mencapai tujuan bersama. Anda menghargai kerja sama dan berusaha menciptakan suasana yang harmonis. Sikap ini membantu membangun kepercayaan serta hubungan yang positif dengan orang lain. Tetap pastikan kebutuhan dan pendapat Anda juga disampaikan secara sehat ketika diperlukan.',

        'least_description' =>
        'Anda cenderung tetap mempertahankan pendapat atau kepentingan pribadi apabila dianggap penting dan benar. Anda percaya bahwa menyampaikan pandangan secara terbuka merupakan bagian dari tanggung jawab. Sikap ini membantu menjaga ketegasan dan konsistensi dalam mengambil keputusan. Namun, tetap terbuka terhadap kompromi agar hubungan kerja tetap berjalan dengan baik.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 11
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 11,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Ramah dan mudah berbaur dengan lingkungan baru',

        'most_description' =>
        'Anda cenderung mudah menjalin hubungan dengan orang baru dan cepat beradaptasi dalam lingkungan yang berbeda. Sikap ramah yang Anda tunjukkan membantu menciptakan komunikasi yang hangat dan hubungan kerja yang positif. Hal ini memudahkan Anda membangun kerja sama dengan berbagai karakter orang. Tetap pastikan hubungan yang terjalin juga dibangun dengan kepercayaan dan konsistensi.',

        'least_description' =>
        'Anda cenderung membutuhkan waktu untuk mengenal lingkungan dan orang baru sebelum merasa nyaman. Anda lebih memilih membangun hubungan secara bertahap daripada langsung terbuka. Sikap ini membantu Anda lebih selektif dalam membangun kepercayaan. Namun, tetap membuka diri akan mempermudah proses adaptasi di lingkungan baru.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 11,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Memiliki keunikan dan cepat jenuh dengan rutinitas',

        'most_description' =>
        'Anda cenderung menyukai hal-hal baru dan memiliki ide yang kreatif dalam menyelesaikan pekerjaan. Rutinitas yang sama dalam waktu lama dapat membuat motivasi Anda menurun. Sikap ini membantu Anda menemukan cara yang lebih inovatif dalam bekerja. Tetap pastikan setiap perubahan tetap dilakukan secara terarah dan tidak mengabaikan tanggung jawab utama.',

        'least_description' =>
        'Anda cenderung nyaman dengan rutinitas yang teratur dan konsisten. Anda percaya bahwa pekerjaan yang dilakukan secara disiplin akan menghasilkan kualitas yang baik. Sikap ini membantu menjaga stabilitas serta konsistensi dalam bekerja. Namun, tetap terbuka terhadap ide dan pendekatan baru agar kemampuan Anda terus berkembang.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 11,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Senang mengambil inisiatif untuk mengubah keadaan',

        'most_description' =>
        'Anda cenderung tidak menunggu keadaan berubah dengan sendirinya dan lebih memilih mengambil inisiatif untuk memperbaiki situasi. Anda berani memulai tindakan ketika melihat adanya peluang atau permasalahan yang perlu diselesaikan. Sikap ini membantu mempercepat tercapainya perubahan yang positif. Tetap libatkan orang lain agar perubahan yang dilakukan memperoleh dukungan bersama.',

        'least_description' =>
        'Anda cenderung lebih nyaman mengikuti proses yang telah berjalan sebelum melakukan perubahan. Anda ingin memastikan bahwa perubahan memang benar-benar diperlukan dan memberikan manfaat. Sikap ini membantu mengurangi risiko perubahan yang kurang tepat. Namun, jangan ragu mengambil inisiatif ketika situasi memang membutuhkan tindakan yang cepat.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 11,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Menyukai kejelasan dan hal-hal yang pasti',

        'most_description' =>
        'Anda cenderung merasa nyaman ketika tujuan, aturan, dan tanggung jawab dijelaskan dengan jelas. Anda lebih percaya diri bekerja apabila memiliki informasi yang lengkap dan terstruktur. Sikap ini membantu meningkatkan ketelitian serta mengurangi kesalahan dalam pekerjaan. Tetap belajar menghadapi situasi yang tidak selalu dapat diprediksi agar lebih fleksibel dalam bekerja.',

        'least_description' =>
        'Anda cenderung cukup nyaman menghadapi situasi yang belum sepenuhnya pasti. Anda mampu menyesuaikan diri sambil mencari solusi ketika informasi yang tersedia masih terbatas. Sikap ini membantu Anda lebih fleksibel dalam menghadapi perubahan. Namun, tetap pastikan keputusan yang diambil didukung informasi yang memadai agar hasilnya lebih optimal.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 12
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 12,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Menghindari konflik dan cenderung mengalah',

        'most_description' =>
        'Anda cenderung berusaha menjaga hubungan yang harmonis dengan menghindari konflik yang tidak diperlukan. Anda lebih memilih mencari jalan tengah daripada memperbesar perbedaan pendapat. Sikap ini membantu menciptakan suasana kerja yang nyaman dan kondusif. Tetap belajar menyampaikan pendapat secara tegas ketika situasi memang membutuhkannya.',

        'least_description' =>
        'Anda cenderung tidak menghindari konflik apabila terdapat hal penting yang perlu disampaikan. Anda lebih memilih menyelesaikan permasalahan secara terbuka agar memperoleh solusi yang jelas. Sikap ini membantu mempercepat penyelesaian masalah dalam tim. Namun, tetap jaga cara penyampaian agar hubungan kerja tetap berjalan dengan baik.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 12,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Berfokus pada rincian dan detail kecil',

        'most_description' =>
        'Anda cenderung teliti dalam memperhatikan detail serta berusaha meminimalkan kesalahan dalam pekerjaan. Anda percaya bahwa hasil yang berkualitas dimulai dari ketelitian terhadap hal-hal kecil. Sikap ini membantu menghasilkan pekerjaan yang lebih akurat dan dapat dipercaya. Tetap jaga keseimbangan agar perhatian pada detail tidak memperlambat penyelesaian pekerjaan.',

        'least_description' =>
        'Anda cenderung lebih berfokus pada gambaran besar dibanding rincian yang sangat detail. Anda merasa tujuan utama lebih penting daripada memperhatikan setiap bagian kecil. Sikap ini membantu Anda bergerak lebih cepat dalam menyelesaikan pekerjaan. Namun, tetap luangkan waktu untuk memeriksa detail penting agar kualitas hasil tetap terjaga.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 12,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Siap menghadapi perubahan di menit-menit terakhir',

        'most_description' =>
        'Anda cenderung mampu menyesuaikan diri dengan perubahan yang terjadi secara mendadak. Anda tetap dapat bekerja secara efektif meskipun situasi berubah tanpa banyak persiapan. Sikap ini membantu Anda tetap produktif dalam lingkungan kerja yang dinamis. Tetap pastikan setiap perubahan tetap dipertimbangkan agar keputusan yang diambil tetap tepat.',

        'least_description' =>
        'Anda cenderung lebih nyaman bekerja dengan rencana yang telah disusun sejak awal. Perubahan yang mendadak membuat Anda membutuhkan waktu untuk menyesuaikan diri. Sikap ini membantu menjaga kualitas pekerjaan melalui persiapan yang baik. Namun, teruslah melatih kemampuan beradaptasi agar lebih siap menghadapi perubahan yang tidak dapat dihindari.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 12,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Bersikap menuntut dan terkesan keras',

        'most_description' =>
        'Anda cenderung memiliki standar yang tinggi dan berani menyampaikan harapan secara tegas kepada orang lain. Anda ingin pekerjaan diselesaikan dengan hasil yang maksimal sesuai target yang ditetapkan. Sikap ini membantu meningkatkan kualitas dan pencapaian dalam tim. Tetap perhatikan cara berkomunikasi agar ketegasan tidak menimbulkan kesan yang terlalu keras.',

        'least_description' =>
        'Anda cenderung lebih mengutamakan pendekatan yang santai dan persuasif dibanding bersikap keras kepada orang lain. Anda percaya bahwa kerja sama yang baik lebih efektif daripada memberikan tekanan. Sikap ini membantu menciptakan hubungan kerja yang positif dan saling menghargai. Namun, jangan ragu bersikap tegas ketika situasi memang memerlukannya.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 13
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 13,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Selalu menghendaki kemajuan dan perkembangan',

        'most_description' =>
        'Anda cenderung memiliki dorongan kuat untuk terus berkembang dan mencapai hasil yang lebih baik. Anda tidak mudah merasa puas dengan pencapaian saat ini serta selalu mencari peluang untuk meningkatkan kemampuan maupun kinerja. Sikap ini membantu Anda terus bertumbuh dan menghadapi tantangan baru dengan percaya diri. Tetap pastikan setiap target yang ditetapkan tetap realistis dan seimbang.',

        'least_description' =>
        'Anda cenderung merasa nyaman mempertahankan kondisi yang sudah berjalan dengan baik. Anda lebih memilih melakukan perubahan apabila benar-benar diperlukan dan memberikan manfaat yang jelas. Sikap ini membantu menjaga stabilitas dalam bekerja. Namun, tetap terbuka terhadap peluang pengembangan agar kemampuan Anda terus meningkat.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 13,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Mudah merasa puas dengan kondisi yang ada',

        'most_description' =>
        'Anda cenderung mampu menikmati pencapaian yang telah diraih tanpa merasa harus terus mengejar hal baru. Anda menghargai kestabilan dan lebih memilih menjaga kualitas daripada melakukan perubahan yang tidak perlu. Sikap ini membantu menciptakan rasa syukur dan keseimbangan dalam bekerja. Tetap dorong diri untuk terus berkembang agar potensi Anda semakin optimal.',

        'least_description' =>
        'Anda cenderung memiliki keinginan kuat untuk terus memperbaiki diri dan tidak mudah merasa puas dengan hasil yang telah dicapai. Anda selalu mencari cara untuk meningkatkan kualitas pekerjaan maupun kemampuan pribadi. Sikap ini membantu mendorong pertumbuhan dan inovasi. Namun, tetap luangkan waktu untuk menghargai setiap pencapaian yang telah berhasil diraih.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 13,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Terbuka dalam memperlihatkan emosi/perasaan',

        'most_description' =>
        'Anda cenderung mampu mengekspresikan perasaan secara terbuka dan jujur kepada orang lain. Anda merasa komunikasi yang terbuka membantu membangun hubungan yang lebih dekat dan saling memahami. Sikap ini memudahkan orang lain memahami apa yang Anda rasakan maupun pikirkan. Tetap perhatikan waktu dan cara penyampaian agar tetap sesuai dengan situasi yang dihadapi.',

        'least_description' =>
        'Anda cenderung lebih menjaga dan mengendalikan perasaan sebelum menunjukkannya kepada orang lain. Anda memilih mengekspresikan emosi hanya ketika dianggap perlu dan tepat. Sikap ini membantu Anda tetap tenang dalam berbagai situasi. Namun, jangan ragu mengungkapkan perasaan secara sehat agar komunikasi tetap berjalan dengan baik.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 13,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Bersikap rendah hati dan bersahaja',

        'most_description' =>
        'Anda cenderung bersikap sederhana dan tidak merasa perlu menonjolkan diri di hadapan orang lain. Anda lebih memilih membiarkan hasil kerja berbicara daripada mencari pengakuan secara langsung. Sikap ini membantu membangun kepercayaan dan rasa hormat dari lingkungan sekitar. Tetap percaya diri untuk menunjukkan kemampuan ketika situasi memang membutuhkannya.',

        'least_description' =>
        'Anda cenderung merasa nyaman menunjukkan kemampuan dan pencapaian yang dimiliki kepada orang lain. Anda percaya bahwa mengkomunikasikan hasil kerja merupakan bagian dari membangun kepercayaan diri dan profesionalisme. Sikap ini membantu orang lain mengenali potensi yang Anda miliki. Namun, tetap jaga keseimbangan agar tetap menghargai kontribusi orang lain.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 14
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 14,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Bersikap tenang dan tidak banyak bicara',

        'most_description' =>
        'Anda cenderung bersikap tenang dan memilih berbicara ketika memang diperlukan. Anda lebih suka mengamati situasi terlebih dahulu sebelum menyampaikan pendapat. Sikap ini membantu Anda memberikan respons yang lebih terukur dan tidak tergesa-gesa. Tetap berani menyampaikan ide agar pemikiran yang Anda miliki dapat memberikan manfaat bagi orang lain.',

        'least_description' =>
        'Anda cenderung lebih ekspresif dan aktif dalam menyampaikan pendapat kepada orang lain. Anda merasa nyaman terlibat dalam percakapan dan berbagi ide secara terbuka. Sikap ini membantu membangun komunikasi yang lebih hidup dan terbuka. Namun, tetap luangkan waktu untuk mendengarkan agar komunikasi berlangsung lebih seimbang.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 14,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Memiliki pembawaan bahagia dan santai tanpa beban',

        'most_description' =>
        'Anda cenderung membawa suasana yang positif dan mampu menghadapi berbagai situasi dengan lebih santai. Kehadiran Anda sering membantu menciptakan lingkungan kerja yang lebih nyaman dan menyenangkan. Sikap ini membuat orang lain merasa lebih mudah berinteraksi dengan Anda. Tetap pastikan keseimbangan antara sikap santai dengan tanggung jawab terhadap pekerjaan.',

        'least_description' =>
        'Anda cenderung lebih serius dan fokus terhadap tanggung jawab yang sedang dijalankan. Anda merasa pekerjaan perlu diselesaikan dengan penuh perhatian sebelum menikmati suasana yang santai. Sikap ini membantu menjaga kualitas dan konsistensi hasil kerja. Namun, jangan lupa memberikan ruang untuk menikmati proses agar tetap menjaga semangat bekerja.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 14,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Ramah, menyenangkan, dan berhati baik',

        'most_description' =>
        'Anda cenderung memperlakukan orang lain dengan ramah serta berusaha menciptakan hubungan yang baik. Anda senang membantu dan membuat orang lain merasa dihargai dalam bekerja sama. Sikap ini membantu membangun kepercayaan dan kerja sama yang positif di lingkungan kerja. Tetap pastikan Anda juga mampu menetapkan batasan ketika diperlukan.',

        'least_description' =>
        'Anda cenderung lebih berfokus pada tugas dan hasil dibanding membangun hubungan yang akrab dengan semua orang. Anda tetap menghargai orang lain, namun tidak selalu menunjukkan sikap yang hangat secara langsung. Sikap ini membantu Anda tetap objektif dalam bekerja. Namun, meningkatkan kehangatan dalam komunikasi dapat memperkuat hubungan profesional.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 14,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Memiliki keberanian tinggi dan tidak gentar',

        'most_description' =>
        'Anda cenderung berani menghadapi tantangan serta tidak mudah merasa takut ketika harus mengambil keputusan penting. Anda percaya bahwa keberanian merupakan bagian dari proses mencapai tujuan yang lebih besar. Sikap ini membantu Anda bertindak cepat dalam menghadapi berbagai situasi. Tetap pertimbangkan risiko secara matang agar setiap keputusan memberikan hasil yang optimal.',

        'least_description' =>
        'Anda cenderung lebih berhati-hati sebelum menghadapi situasi yang penuh tantangan atau risiko. Anda memilih mempertimbangkan berbagai kemungkinan terlebih dahulu sebelum bertindak. Sikap ini membantu mengurangi kesalahan dalam mengambil keputusan. Namun, jangan ragu mengambil langkah ketika peluang yang baik sudah terlihat jelas.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 15
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 15,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Senang meluangkan waktu berkualitas bersama teman',

        'most_description' =>
        'Anda cenderung menikmati kebersamaan dan menghargai hubungan yang dekat dengan orang lain. Anda percaya bahwa waktu berkualitas bersama teman dapat memperkuat rasa saling percaya dan kerja sama. Sikap ini membantu Anda membangun hubungan yang harmonis baik dalam kehidupan pribadi maupun lingkungan kerja. Tetap jaga keseimbangan antara hubungan sosial dengan tanggung jawab yang dimiliki.',

        'least_description' =>
        'Anda cenderung lebih menikmati waktu untuk diri sendiri atau berfokus pada pekerjaan dibanding berkumpul bersama teman. Anda tetap menghargai hubungan sosial, namun tidak selalu merasa perlu terlibat dalam setiap aktivitas bersama. Sikap ini membantu Anda menjaga fokus terhadap prioritas yang dimiliki. Namun, tetap luangkan waktu membangun hubungan agar jaringan sosial tetap terpelihara.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 15,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Selalu merencanakan masa depan dan bersiap diri',

        'most_description' =>
        'Anda cenderung menyukai perencanaan yang matang sebelum mengambil langkah penting. Anda merasa lebih percaya diri ketika telah mempersiapkan berbagai kemungkinan yang dapat terjadi. Sikap ini membantu mengurangi risiko dan meningkatkan kualitas keputusan yang diambil. Tetap berikan ruang untuk beradaptasi ketika situasi berubah di luar rencana.',

        'least_description' =>
        'Anda cenderung lebih nyaman menghadapi situasi secara spontan tanpa terlalu banyak membuat perencanaan. Anda percaya bahwa tidak semua hal dapat diprediksi sehingga fleksibilitas menjadi hal yang penting. Sikap ini membantu Anda lebih cepat beradaptasi terhadap perubahan. Namun, membuat perencanaan dasar tetap dapat membantu mencapai hasil yang lebih terarah.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 15,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Menyukai perjalanan dan pengalaman petualangan baru',

        'most_description' =>
        'Anda cenderung antusias mencoba pengalaman baru dan menikmati tantangan yang berbeda dari rutinitas. Anda melihat setiap pengalaman sebagai kesempatan untuk belajar dan memperluas wawasan. Sikap ini membantu meningkatkan kreativitas dan kemampuan beradaptasi. Tetap pertimbangkan risiko serta persiapan yang diperlukan sebelum mengambil langkah baru.',

        'least_description' =>
        'Anda cenderung lebih nyaman dengan lingkungan dan aktivitas yang sudah dikenal. Anda memilih melakukan perubahan apabila manfaatnya benar-benar jelas dan sesuai kebutuhan. Sikap ini membantu menjaga stabilitas dalam menjalankan aktivitas sehari-hari. Namun, sesekali mencoba pengalaman baru dapat memperkaya wawasan dan kemampuan Anda.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 15,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Mengharapkan penghargaan atas target yang diraih',

        'most_description' =>
        'Anda cenderung termotivasi ketika usaha dan pencapaian yang dilakukan mendapatkan penghargaan atau pengakuan. Apresiasi membuat Anda merasa hasil kerja yang diberikan benar-benar bernilai bagi organisasi. Sikap ini dapat mendorong semangat untuk terus mencapai target yang lebih tinggi. Tetap bangun motivasi dari kepuasan pribadi agar semangat tetap terjaga meskipun tanpa penghargaan langsung.',

        'least_description' =>
        'Anda cenderung bekerja karena tanggung jawab dan kepuasan pribadi tanpa terlalu mengharapkan penghargaan dari orang lain. Anda merasa pencapaian terbaik adalah ketika pekerjaan dapat diselesaikan dengan baik. Sikap ini membantu menjaga konsistensi dalam bekerja. Namun, jangan ragu menghargai pencapaian diri sendiri sebagai bentuk apresiasi atas usaha yang telah dilakukan.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 16
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 16,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Cenderung kritis dan mempertanyakan aturan',

        'most_description' =>
        'Anda cenderung tidak langsung menerima aturan tanpa memahami alasan di balik penerapannya. Anda terbiasa berpikir kritis untuk memastikan setiap kebijakan benar-benar efektif dan memberikan manfaat. Sikap ini membantu menemukan peluang perbaikan dalam berbagai situasi. Tetap sampaikan pendapat secara konstruktif agar kritik dapat diterima dengan baik.',

        'least_description' =>
        'Anda cenderung lebih mudah menerima aturan yang telah ditetapkan tanpa banyak mempertanyakannya. Anda percaya bahwa aturan umumnya dibuat untuk mendukung keteraturan dan kelancaran bersama. Sikap ini membantu menjaga stabilitas dalam bekerja. Namun, tetap berani memberikan masukan apabila menemukan aturan yang memang perlu diperbaiki.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 16,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Menganggap aturan berguna menciptakan keadilan',

        'most_description' =>
        'Anda cenderung memandang aturan sebagai pedoman penting untuk menciptakan keadilan dan konsistensi. Anda percaya bahwa setiap orang sebaiknya diperlakukan berdasarkan standar yang sama. Sikap ini membantu menjaga objektivitas dalam mengambil keputusan. Tetap bersikap fleksibel ketika situasi membutuhkan penyesuaian yang tetap bertanggung jawab.',

        'least_description' =>
        'Anda cenderung tidak selalu melihat aturan sebagai satu-satunya cara menciptakan keadilan. Anda lebih mempertimbangkan kondisi dan kebutuhan setiap situasi sebelum mengambil keputusan. Sikap ini membantu Anda lebih adaptif terhadap berbagai keadaan. Namun, tetap menjaga konsistensi agar keputusan yang diambil tetap dapat dipertanggungjawabkan.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 16,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Memandang aturan sebagai hal yang membosankan',

        'most_description' =>
        'Anda cenderung lebih menikmati kebebasan dalam bekerja dibanding harus mengikuti aturan yang terlalu ketat. Anda merasa kreativitas dan inovasi lebih mudah berkembang ketika memiliki ruang untuk bereksplorasi. Sikap ini membantu menghasilkan ide-ide baru yang segar. Tetap pastikan kebebasan tersebut tetap berjalan sesuai tanggung jawab yang dimiliki.',

        'least_description' =>
        'Anda cenderung merasa nyaman bekerja dengan aturan yang jelas dan terarah. Anda melihat aturan sebagai pedoman yang membantu pekerjaan berjalan lebih rapi dan konsisten. Sikap ini membantu mengurangi kesalahan dalam pelaksanaan tugas. Namun, tetap terbuka terhadap perubahan apabila aturan perlu disesuaikan dengan kondisi baru.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 16,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Menilai aturan memberikan rasa aman dan tertib',

        'most_description' =>
        'Anda cenderung merasa lebih nyaman ketika bekerja dalam lingkungan yang memiliki aturan dan prosedur yang jelas. Anda percaya bahwa keteraturan membantu menciptakan rasa aman serta mengurangi kesalahan. Sikap ini mendukung terciptanya lingkungan kerja yang lebih stabil dan tertib. Tetap jaga keseimbangan antara kepatuhan terhadap aturan dengan kemampuan beradaptasi terhadap perubahan.',

        'least_description' =>
        'Anda cenderung tidak terlalu bergantung pada aturan untuk merasa nyaman dalam bekerja. Anda lebih percaya pada kemampuan diri dalam menyesuaikan tindakan sesuai situasi yang dihadapi. Sikap ini membantu Anda lebih fleksibel menghadapi perubahan. Namun, tetap menghargai aturan yang berlaku agar kerja sama dalam tim tetap berjalan dengan baik.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 17
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 17,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Menghargai pendidikan dan wawasan kebudayaan',

        'most_description' =>
        'Anda cenderung menghargai proses belajar, pengetahuan, dan pengalaman sebagai bekal untuk berkembang. Anda percaya bahwa wawasan yang luas membantu menghasilkan keputusan yang lebih baik. Sikap ini membuat Anda terus terdorong meningkatkan kompetensi diri. Tetap seimbangkan proses belajar dengan penerapan nyata dalam kehidupan maupun pekerjaan.',

        'least_description' =>
        'Anda cenderung lebih mengutamakan pengalaman langsung dibanding memperdalam teori atau wawasan akademis. Anda percaya bahwa kemampuan berkembang melalui praktik yang dilakukan secara nyata. Sikap ini membantu Anda bertindak lebih cepat dalam berbagai situasi. Namun, tetap luangkan waktu untuk memperkaya pengetahuan agar keputusan yang diambil semakin matang.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 17,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Terdorong oleh pencapaian dan ganjaran',

        'most_description' =>
        'Anda cenderung memiliki motivasi tinggi untuk mencapai target dan memperoleh hasil terbaik. Penghargaan maupun pencapaian menjadi dorongan yang meningkatkan semangat dalam bekerja. Sikap ini membantu Anda terus berusaha memberikan performa terbaik. Tetap bangun motivasi dari kepuasan pribadi agar semangat tetap terjaga dalam berbagai kondisi.',

        'least_description' =>
        'Anda cenderung bekerja karena tanggung jawab dan kepuasan pribadi tanpa terlalu bergantung pada penghargaan. Anda merasa hasil kerja yang baik sudah menjadi pencapaian tersendiri. Sikap ini membantu menjaga konsistensi dalam bekerja. Namun, jangan ragu mengapresiasi setiap keberhasilan sebagai bentuk penghargaan terhadap usaha yang telah dilakukan.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 17,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Memprioritaskan keselamatan dan rasa aman',

        'most_description' =>
        'Anda cenderung mempertimbangkan keamanan dan stabilitas sebelum mengambil keputusan. Anda lebih nyaman bekerja dalam lingkungan yang teratur serta memiliki risiko yang dapat dikendalikan. Sikap ini membantu mengurangi potensi kesalahan dan menjaga keberlangsungan pekerjaan. Tetap terbuka terhadap peluang baru yang telah diperhitungkan secara matang.',

        'least_description' =>
        'Anda cenderung tidak menjadikan rasa aman sebagai pertimbangan utama dalam bertindak. Anda lebih siap menghadapi perubahan dan menerima tantangan apabila melihat peluang yang menjanjikan. Sikap ini membantu Anda bergerak lebih cepat menghadapi situasi baru. Namun, tetap lakukan pertimbangan risiko agar keputusan yang diambil tetap bijaksana.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 17,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Senang bersosialisasi dan berorganisasi dalam kelompok',

        'most_description' =>
        'Anda cenderung menikmati interaksi dengan banyak orang dan merasa nyaman bekerja dalam kelompok. Anda mudah membangun hubungan serta aktif berpartisipasi dalam berbagai kegiatan bersama. Sikap ini membantu menciptakan kerja sama yang positif di lingkungan sekitar. Tetap berikan ruang untuk mendengarkan pendapat orang lain agar kolaborasi semakin efektif.',

        'least_description' =>
        'Anda cenderung lebih nyaman bekerja secara mandiri atau dalam kelompok kecil. Anda tetap mampu bekerja sama dengan orang lain, namun tidak selalu membutuhkan banyak interaksi sosial. Sikap ini membantu Anda menjaga fokus terhadap pekerjaan yang sedang dilakukan. Namun, tetap aktif membangun komunikasi agar hubungan kerja tetap berjalan dengan baik.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 18
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 18,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Suka memegang kendali dan bertindak secara langsung',

        'most_description' =>
        'Anda cenderung merasa nyaman mengambil kendali dalam berbagai situasi dan bertindak tanpa menunda-nunda. Anda percaya bahwa keputusan yang cepat dapat membantu mencapai hasil secara lebih efektif. Sikap ini membuat Anda mampu memimpin ketika menghadapi tantangan atau kondisi yang membutuhkan tindakan segera. Tetap libatkan masukan dari orang lain agar keputusan yang diambil semakin matang.',

        'least_description' =>
        'Anda cenderung lebih nyaman berbagi tanggung jawab dibanding selalu menjadi pengambil keputusan utama. Anda memilih mempertimbangkan berbagai masukan sebelum menentukan langkah yang akan diambil. Sikap ini membantu menciptakan keputusan yang lebih seimbang. Namun, jangan ragu mengambil kendali ketika situasi memang membutuhkan kepemimpinan yang tegas.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 18,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Bersemangat tinggi dan mudah bergaul',

        'most_description' =>
        'Anda cenderung membawa energi positif dalam setiap interaksi dan mudah menjalin hubungan dengan orang lain. Kehadiran Anda sering membuat suasana menjadi lebih hidup dan menyenangkan. Sikap ini membantu membangun komunikasi serta kerja sama yang baik dalam tim. Tetap jaga keseimbangan antara antusiasme dengan kemampuan mendengarkan orang lain.',

        'least_description' =>
        'Anda cenderung lebih tenang dalam berinteraksi dan tidak selalu menunjukkan antusiasme secara terbuka. Anda lebih nyaman membangun hubungan secara bertahap daripada langsung akrab dengan banyak orang. Sikap ini membantu Anda menjaga fokus dalam bekerja. Namun, tetap terbuka membangun komunikasi agar kolaborasi berjalan lebih efektif.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 18,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Bersikap konsisten dan dapat diprediksi',

        'most_description' =>
        'Anda cenderung menjalankan pekerjaan secara konsisten dan menjaga kestabilan dalam setiap tindakan. Orang lain dapat memperkirakan cara kerja Anda karena memiliki pola yang teratur dan dapat diandalkan. Sikap ini membantu menciptakan rasa percaya dalam kerja sama tim. Tetap terbuka terhadap perubahan agar mampu beradaptasi dengan kebutuhan yang terus berkembang.',

        'least_description' =>
        'Anda cenderung lebih fleksibel dan tidak selalu mengikuti pola yang sama dalam bekerja. Anda mudah menyesuaikan pendekatan sesuai situasi yang sedang dihadapi. Sikap ini membantu menghadapi perubahan dengan lebih cepat. Namun, menjaga konsistensi dalam hal-hal penting akan meningkatkan kepercayaan dari orang lain.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 18,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Bersikap penuh kehati-hatian dan selalu waspada',

        'most_description' =>
        'Anda cenderung mempertimbangkan setiap keputusan secara hati-hati sebelum bertindak. Anda berusaha mengenali potensi risiko agar kesalahan dapat diminimalkan sejak awal. Sikap ini membantu menghasilkan keputusan yang lebih matang dan terukur. Tetap hindari terlalu lama menimbang sehingga peluang yang baik tidak terlewatkan.',

        'least_description' =>
        'Anda cenderung lebih berani mengambil tindakan tanpa terlalu lama memikirkan berbagai kemungkinan risiko. Anda percaya bahwa pengalaman sering kali menjadi guru terbaik dalam menghadapi tantangan. Sikap ini membantu Anda bergerak lebih cepat ketika peluang muncul. Namun, tetap lakukan pertimbangan dasar agar keputusan yang diambil tetap aman dan bertanggung jawab.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 19
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 19,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Memiliki daya juang tinggi dan tidak mudah dikalahkan',

        'most_description' =>
        'Anda cenderung memiliki semangat juang yang tinggi dan tidak mudah menyerah ketika menghadapi tantangan. Hambatan sering Anda anggap sebagai kesempatan untuk membuktikan kemampuan dan mencapai hasil terbaik. Sikap ini membantu Anda tetap bertahan dalam situasi yang sulit dan penuh tekanan. Tetap jaga keseimbangan antara kegigihan dengan kemampuan mengenali waktu yang tepat untuk mengevaluasi strategi.',

        'least_description' =>
        'Anda cenderung lebih memilih mencari solusi yang aman dibanding terus bertahan dalam situasi yang tidak memberikan hasil. Anda mempertimbangkan efisiensi sebelum memutuskan untuk melanjutkan suatu usaha. Sikap ini membantu menghindari penggunaan waktu dan tenaga yang kurang efektif. Namun, tetap latih ketahanan diri agar tidak mudah menyerah ketika menghadapi tantangan yang masih dapat diatasi.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 19,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Patuh pada instruksi dan arahan pimpinan',

        'most_description' =>
        'Anda cenderung menghargai arahan yang diberikan oleh pimpinan dan berusaha melaksanakannya dengan penuh tanggung jawab. Anda percaya bahwa mengikuti prosedur membantu pekerjaan berjalan lebih terarah dan terkoordinasi. Sikap ini mendukung terciptanya kerja sama yang baik dalam organisasi. Tetap berani memberikan masukan yang membangun apabila melihat peluang untuk meningkatkan hasil kerja.',

        'least_description' =>
        'Anda cenderung lebih mandiri dalam menentukan cara menyelesaikan pekerjaan dan tidak selalu bergantung pada arahan yang diberikan. Anda lebih nyaman menggunakan penilaian pribadi ketika menghadapi suatu situasi. Sikap ini membantu Anda menjadi lebih adaptif dalam mengambil keputusan. Namun, tetap menghargai instruksi yang berlaku agar tujuan bersama dapat tercapai dengan baik.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 19,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Mudah tersulut emosi atau menjadi pemicu suasana',

        'most_description' =>
        'Anda cenderung menunjukkan emosi secara terbuka sehingga perasaan Anda mudah terlihat oleh orang lain. Antusiasme maupun reaksi yang Anda tampilkan sering memengaruhi suasana di sekitar. Sikap ini membantu menciptakan energi dalam interaksi sosial apabila dikelola dengan baik. Tetap latih pengendalian emosi agar komunikasi tetap berjalan secara positif dan profesional.',

        'least_description' =>
        'Anda cenderung mampu menjaga emosi tetap stabil dan tidak mudah terbawa suasana. Anda lebih memilih berpikir sebelum bereaksi terhadap suatu keadaan. Sikap ini membantu menciptakan komunikasi yang lebih tenang dan terkendali. Namun, tetap ungkapkan perasaan secara sehat agar orang lain memahami sudut pandang Anda.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 19,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Menyukai kerapian dan keteraturan yang terstruktur',

        'most_description' =>
        'Anda cenderung merasa nyaman bekerja dalam lingkungan yang rapi, teratur, dan memiliki alur yang jelas. Anda percaya bahwa keteraturan membantu meningkatkan kualitas serta mengurangi kemungkinan terjadinya kesalahan. Sikap ini membuat pekerjaan lebih mudah dikendalikan dan dipantau. Tetap bersikap fleksibel ketika menghadapi perubahan yang memerlukan penyesuaian cara kerja.',

        'least_description' =>
        'Anda cenderung tidak terlalu bergantung pada keteraturan yang ketat dalam menyelesaikan pekerjaan. Anda mampu menyesuaikan diri dengan kondisi yang lebih dinamis tanpa merasa terganggu. Sikap ini membantu Anda bergerak lebih luwes menghadapi berbagai situasi. Namun, tetap menjaga tingkat kerapian tertentu agar pekerjaan tetap mudah dipahami dan dikelola.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 20
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 20,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Saya yang akan memimpin mereka.',

        'most_description' =>
        'Anda cenderung merasa percaya diri untuk mengambil peran sebagai pemimpin ketika menghadapi suatu tugas atau tantangan. Anda nyaman mengarahkan orang lain agar tujuan dapat dicapai secara efektif. Sikap ini membantu tim bergerak lebih terarah dalam mencapai hasil yang diinginkan. Tetap berikan ruang bagi anggota tim untuk menyampaikan ide dan berkontribusi dalam pengambilan keputusan.',

        'least_description' =>
        'Anda cenderung tidak selalu ingin berada di posisi sebagai pemimpin. Anda lebih nyaman memberikan dukungan atau berkontribusi sesuai peran yang dimiliki dalam tim. Sikap ini membantu menciptakan kerja sama yang seimbang dengan anggota lainnya. Namun, tetap kembangkan keberanian untuk memimpin ketika situasi memang membutuhkan inisiatif dari Anda.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 20,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Saya siap mengeksekusi/melaksanakan tugas.',

        'most_description' =>
        'Anda cenderung fokus pada pelaksanaan tugas dan berusaha menyelesaikan pekerjaan dengan penuh tanggung jawab. Anda merasa nyaman bekerja berdasarkan tujuan serta arahan yang telah ditetapkan. Sikap ini membantu menjaga konsistensi dan kelancaran proses kerja dalam tim. Tetap berani memberikan masukan apabila menemukan cara yang lebih efektif untuk mencapai hasil.',

        'least_description' =>
        'Anda cenderung lebih tertarik merancang strategi atau memberikan ide dibanding hanya menjalankan tugas yang telah ditentukan. Anda senang terlibat dalam proses pengambilan keputusan sebelum pekerjaan dilaksanakan. Sikap ini membantu menghasilkan pendekatan yang lebih kreatif. Namun, tetap jaga komitmen dalam menyelesaikan setiap tanggung jawab yang diberikan.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 20,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Saya yang akan membujuk/meyakinkan mereka.',

        'most_description' =>
        'Anda cenderung mampu memengaruhi dan meyakinkan orang lain melalui komunikasi yang baik. Anda menikmati proses membangun hubungan serta menjelaskan gagasan hingga dapat diterima oleh banyak orang. Sikap ini membantu menciptakan kerja sama dan dukungan terhadap tujuan yang ingin dicapai. Tetap pastikan setiap penyampaian didukung oleh fakta dan pertimbangan yang objektif.',

        'least_description' =>
        'Anda cenderung tidak terlalu nyaman menggunakan pendekatan persuasif untuk memengaruhi orang lain. Anda lebih memilih membiarkan hasil kerja atau fakta berbicara daripada banyak melakukan pendekatan komunikasi. Sikap ini membantu menjaga objektivitas dalam bekerja. Namun, tetap latih kemampuan komunikasi agar ide yang dimiliki dapat dipahami dan diterima dengan lebih baik.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 20,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Saya yang akan mengumpulkan data dan faktanya.',

        'most_description' =>
        'Anda cenderung mengutamakan data dan fakta sebelum mengambil keputusan atau memberikan pendapat. Anda percaya bahwa informasi yang akurat akan menghasilkan keputusan yang lebih tepat dan dapat dipertanggungjawabkan. Sikap ini membantu meningkatkan kualitas pekerjaan dan mengurangi kemungkinan kesalahan. Tetap hindari terlalu lama mengumpulkan informasi sehingga keputusan dapat diambil pada waktu yang tepat.',

        'least_description' =>
        'Anda cenderung tidak selalu menunggu data yang lengkap sebelum mulai bertindak. Anda lebih nyaman mengambil keputusan berdasarkan pengalaman, intuisi, atau kondisi yang sedang dihadapi. Sikap ini membantu Anda bergerak lebih cepat ketika menghadapi situasi yang dinamis. Namun, tetap gunakan data sebagai dasar pertimbangan agar keputusan yang diambil semakin kuat.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 21
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 21,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Mengutamakan kepentingan orang lain terlebih dahulu',

        'most_description' =>
        'Anda cenderung memperhatikan kebutuhan dan kepentingan orang lain sebelum memikirkan kepentingan pribadi. Anda senang memberikan dukungan serta membantu menciptakan hubungan yang harmonis dalam lingkungan kerja maupun sosial. Sikap ini membuat Anda mudah dipercaya dan dihargai sebagai rekan yang peduli. Tetap pastikan kebutuhan dan tujuan pribadi juga tetap diperhatikan agar tercipta keseimbangan.',

        'least_description' =>
        'Anda cenderung lebih mengutamakan prioritas dan tanggung jawab pribadi sebelum membantu orang lain. Anda percaya bahwa menyelesaikan kewajiban sendiri merupakan langkah awal untuk memberikan kontribusi yang lebih baik. Sikap ini membantu menjaga fokus terhadap target yang ingin dicapai. Namun, tetap berikan perhatian terhadap kebutuhan orang lain agar hubungan kerja tetap berjalan dengan baik.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 21,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Bersifat kompetitif dan menyukai tantangan',

        'most_description' =>
        'Anda cenderung termotivasi oleh tantangan dan menikmati situasi yang menuntut pencapaian hasil terbaik. Persaingan sering Anda anggap sebagai kesempatan untuk berkembang dan menunjukkan kemampuan. Sikap ini membantu meningkatkan semangat dalam mencapai target yang telah ditetapkan. Tetap jaga keseimbangan antara semangat berkompetisi dengan kemampuan bekerja sama dalam tim.',

        'least_description' =>
        'Anda cenderung lebih nyaman bekerja dalam suasana yang kooperatif daripada kompetitif. Anda lebih menghargai proses kerja sama dibanding berfokus pada persaingan antarindividu. Sikap ini membantu menciptakan hubungan kerja yang lebih harmonis. Namun, tetap dorong diri untuk menerima tantangan sebagai peluang mengembangkan kemampuan.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 21,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Selalu berpikir positif dan optimistis',

        'most_description' =>
        'Anda cenderung melihat berbagai situasi dari sisi yang positif dan percaya bahwa setiap tantangan memiliki peluang untuk diselesaikan. Sikap optimis membantu Anda menjaga semangat serta memotivasi orang-orang di sekitar. Kehadiran Anda sering memberikan energi positif dalam lingkungan kerja maupun sosial. Tetap imbangi optimisme dengan perencanaan yang realistis agar keputusan yang diambil semakin tepat.',

        'least_description' =>
        'Anda cenderung lebih berhati-hati dan mempertimbangkan berbagai kemungkinan sebelum bersikap optimis. Anda lebih memilih menilai kondisi berdasarkan fakta yang tersedia daripada hanya mengandalkan harapan. Sikap ini membantu mengurangi risiko dalam mengambil keputusan. Namun, tetap bangun pola pikir yang positif agar lebih percaya diri menghadapi tantangan.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 21,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Berpikir rasional, logis, dan terstruktur',

        'most_description' =>
        'Anda cenderung menggunakan logika dan analisis yang sistematis sebelum mengambil keputusan. Anda menyukai proses berpikir yang terstruktur sehingga setiap langkah memiliki dasar yang jelas. Sikap ini membantu menghasilkan keputusan yang lebih objektif dan dapat dipertanggungjawabkan. Tetap beri ruang pada fleksibilitas agar mampu menyesuaikan diri dengan situasi yang berubah dengan cepat.',

        'least_description' =>
        'Anda cenderung tidak selalu mengandalkan analisis yang mendalam sebelum bertindak. Dalam beberapa situasi Anda lebih percaya pada pengalaman, intuisi, atau kondisi yang sedang berlangsung. Sikap ini membantu Anda mengambil keputusan dengan lebih cepat ketika diperlukan. Namun, tetap gunakan pertimbangan yang logis agar keputusan yang diambil semakin berkualitas.',

    ]

);

/*
|--------------------------------------------------------------------------
| QUESTION 22
|--------------------------------------------------------------------------
*/

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 22,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Suka menyenangkan orang lain dan gampang sepakat',

        'most_description' =>
        'Anda cenderung berusaha menjaga kenyamanan orang lain dan mudah menyesuaikan diri dalam berbagai situasi. Anda lebih memilih membangun hubungan yang harmonis daripada memperbesar perbedaan pendapat. Sikap ini membantu menciptakan kerja sama yang baik di dalam tim maupun lingkungan sosial. Tetap berani menyampaikan pendapat ketika hal tersebut diperlukan demi mencapai keputusan yang tepat.',

        'least_description' =>
        'Anda cenderung tidak mudah mengikuti keinginan orang lain hanya untuk mencapai kesepakatan. Anda lebih memilih mempertahankan pendapat yang diyakini benar meskipun berbeda dengan orang lain. Sikap ini menunjukkan kemandirian dalam mengambil keputusan. Namun, tetap jaga keseimbangan antara ketegasan dan kemampuan bekerja sama dengan orang lain.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 22,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Ceria, lepas, dan penuh keseruan',

        'most_description' =>
        'Anda cenderung membawa suasana yang positif, energik, dan menyenangkan dalam berbagai interaksi. Anda menikmati berkomunikasi dengan banyak orang serta mudah mencairkan suasana. Sikap ini membuat Anda mudah diterima dan membangun hubungan yang baik dengan lingkungan sekitar. Tetap pastikan antusiasme tersebut tetap disertai fokus terhadap tanggung jawab yang dimiliki.',

        'least_description' =>
        'Anda cenderung tidak selalu menunjukkan ekspresi yang ceria atau banyak berbicara dalam setiap situasi. Anda lebih nyaman menjaga sikap yang tenang dan seperlunya saat berinteraksi. Sikap ini membantu Anda tetap fokus terhadap pekerjaan yang sedang dijalankan. Namun, sesekali menunjukkan antusiasme dapat membantu membangun hubungan yang lebih hangat dengan orang lain.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 22,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Berani mengambil keputusan tanpa rasa ragu',

        'most_description' =>
        'Anda cenderung percaya diri dalam mengambil keputusan dan tidak mudah ragu ketika menghadapi tantangan. Anda mampu bertindak cepat ketika situasi membutuhkan kepastian. Sikap ini membantu mempercepat penyelesaian masalah dan pencapaian target. Tetap pertimbangkan masukan serta informasi yang tersedia agar keputusan yang diambil semakin matang.',

        'least_description' =>
        'Anda cenderung membutuhkan waktu untuk mempertimbangkan berbagai pilihan sebelum mengambil keputusan. Anda lebih nyaman memastikan informasi telah cukup lengkap agar risiko dapat diminimalkan. Sikap ini membantu menghasilkan keputusan yang lebih matang dan terukur. Namun, tetap latih keberanian mengambil keputusan ketika situasi menuntut tindakan yang cepat.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 22,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Cenderung tenang, pendiam, dan hemat bicara',

        'most_description' =>
        'Anda cenderung menjaga ketenangan dan berbicara seperlunya dalam berbagai situasi. Anda lebih suka mendengarkan serta memahami kondisi sebelum menyampaikan pendapat. Sikap ini membantu Anda terlihat bijaksana dan tidak mudah bereaksi secara emosional. Tetap berani menyampaikan ide agar kontribusi Anda dapat lebih terlihat oleh orang lain.',

        'least_description' =>
        'Anda cenderung lebih terbuka dalam menyampaikan pendapat dan nyaman terlibat dalam berbagai percakapan. Anda tidak keberatan menjadi bagian aktif dalam komunikasi kelompok. Sikap ini membantu mempercepat pertukaran ide dan membangun hubungan dengan orang lain. Namun, tetap berikan ruang untuk mendengarkan agar komunikasi berjalan lebih seimbang.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 23,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Menginginkan wewenang dan otoritas yang lebih besar',

        'most_description' =>
        'Anda cenderung menyukai tanggung jawab yang lebih besar serta memiliki keinginan untuk memimpin dan mengambil keputusan. Anda merasa tertantang ketika diberikan kewenangan dalam mencapai tujuan.',

        'least_description' =>
        'Anda cenderung tidak terlalu mengejar posisi yang memiliki kewenangan besar. Anda lebih nyaman berkontribusi sesuai peran tanpa harus menjadi pengambil keputusan utama.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 23,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Senang mencari peluang dan kesempatan baru',

        'most_description' =>
        'Anda cenderung antusias mencari peluang baru serta menikmati pengalaman yang dapat membuka kemungkinan untuk berkembang. Anda melihat perubahan sebagai kesempatan untuk memperoleh hasil yang lebih baik.',

        'least_description' =>
        'Anda cenderung lebih nyaman memanfaatkan peluang yang sudah tersedia daripada terus mencari hal baru. Anda lebih memilih kestabilan sebelum mengambil langkah berikutnya.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 23,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Selalu berusaha menjauhi perselisihan/konflik',

        'most_description' =>
        'Anda cenderung menjaga hubungan baik dengan orang lain dan berusaha menghindari konflik yang tidak diperlukan. Anda lebih memilih menyelesaikan perbedaan melalui komunikasi yang tenang.',

        'least_description' =>
        'Anda tidak keberatan menghadapi perbedaan pendapat apabila diperlukan untuk menyelesaikan masalah. Bagi Anda, konflik yang dikelola dengan baik dapat menghasilkan keputusan yang lebih tepat.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 23,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Membutuhkan panduan dan petunjuk yang jelas',

        'most_description' =>
        'Anda cenderung bekerja lebih percaya diri ketika tujuan, aturan, dan langkah kerja dijelaskan dengan jelas. Kejelasan membantu Anda menjaga kualitas dan meminimalkan kesalahan.',

        'least_description' =>
        'Anda tetap mampu bekerja meskipun petunjuk belum sepenuhnya tersedia. Anda lebih nyaman mencari cara sendiri dan menyesuaikan langkah sesuai kondisi yang dihadapi.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 24,
        'statement_number' => 1,
    ],

    [

        'statement' => 'Bisa diandalkan dan memegang kepercayaan',

        'most_description' =>
        'Anda cenderung dapat dipercaya dalam menjalankan tanggung jawab. Orang lain melihat Anda sebagai pribadi yang konsisten, bertanggung jawab, dan berusaha menepati komitmen yang telah diberikan.',

        'least_description' =>
        'Anda tidak selalu menempatkan konsistensi sebagai prioritas utama. Dalam beberapa situasi Anda lebih memilih menyesuaikan diri dengan perubahan daripada mempertahankan komitmen yang telah dibuat.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 24,
        'statement_number' => 2,
    ],

    [

        'statement' => 'Berpikiran kreatif dan memiliki keunikan',

        'most_description' =>
        'Anda cenderung menyukai ide-ide baru dan memiliki cara berpikir yang kreatif. Anda menikmati kesempatan untuk menemukan solusi yang berbeda dan memberikan sudut pandang yang unik.',

        'least_description' =>
        'Anda lebih nyaman menggunakan pendekatan yang sudah terbukti efektif daripada mencoba cara baru. Anda cenderung mengutamakan kestabilan dan konsistensi dalam bekerja.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 24,
        'statement_number' => 3,
    ],

    [

        'statement' => 'Berfokus pada inti masalah dan orientasi hasil',

        'most_description' =>
        'Anda cenderung langsung mengarahkan perhatian pada tujuan utama dan penyelesaian masalah. Anda lebih mengutamakan hasil yang nyata dibanding proses yang terlalu panjang.',

        'least_description' =>
        'Anda tidak selalu terburu-buru mengejar hasil akhir. Anda cenderung memberikan perhatian lebih pada proses, hubungan kerja, atau berbagai pertimbangan sebelum mengambil tindakan.',

    ]

);

DiscStatementInterpretation::updateOrCreate(

    [
        'question_id' => 24,
        'statement_number' => 4,
    ],

    [

        'statement' => 'Memegang standar tinggi serta mengutamakan akurasi',

        'most_description' =>
        'Anda cenderung bekerja dengan teliti dan menjaga kualitas hasil pekerjaan. Anda merasa lebih nyaman apabila setiap pekerjaan dilakukan secara akurat dan sesuai standar yang telah ditetapkan.',

        'least_description' =>
        'Anda tidak selalu menjadikan ketelitian sebagai fokus utama. Dalam kondisi tertentu Anda lebih mengutamakan kecepatan atau fleksibilitas dibanding memastikan setiap detail benar-benar sempurna.',

    ]

);


    }
}
