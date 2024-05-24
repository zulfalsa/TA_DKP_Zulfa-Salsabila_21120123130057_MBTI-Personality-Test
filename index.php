<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MBTI Personality Test</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
        class MBTIPersonalityTest {
            private $questions = [
                "Kamu sangat individualistis dan melihat keunikanmu sebagai bagian dari harga diri.",
                "Kamu sangat memperhitungkan detail dan pengalaman masa lampau.",
                "Kamu hidup di 'tempat ini dan saat ini'.",
                "Kamu mempercayai fakta dan data lebih dari apapun.",
                "Kamu selalu berusaha untuk berkomunikasi secara bijaksana.",
                "Kamu menyukai pengalaman baru dan mengasyikkan.",
                "Kamu selalu menetapkan target pribadi.",
                "Mudah bagimu untuk memikirkan sesuatu yang abstrak dan acak untuk dikatakan.",
                "Kamu banyak menggunakan kiasan puitis untuk menyampaikan ide-ide baru.",
                "Kamu telah menjadi logis secara konsisten seumur hidupmu.",
                "Kamu cenderung baru mengekspresikan simpati setelah berempati terlebih dahulu.",
                "Mau tidak mau, kamu akan selalu fokus kepada detail-detail kecil.",
                "Kamu merasakan solidaritas tingkat tinggi ketika berkomunikasi dalam kelompok.",
                "Kamu melihat gambaran besar alih-alih lautan detail.",
                "Kamu menghubungkan pengalaman masa kini dengan pengalaman masa lalu.",
                "Kamu seringkali memiliki firasat tentang sesuatu di masa depan yang pada akhirnya terbukti benar.",
                "Kamu sangat objektif dan 'berkata apa adanya'.",
                "Kamu akan melakukan apapun demi memenangkan perdebatan.",
                "Dalam mengungkapkan ide-ide baru, kamu sering menggunakan analogi atau pengibaratan.",
                "Kamu sedih jika perhatianmu untuk orang lain tidak dihargai.",
                "Kamu menerima sebuah informasi dari dunia luar tanpa pikir panjang.",
                "Kamu tertarik dengan hal-hal yang baru, asing, dan orisinal.",
                "Kamu mengimajinasikan hal-hal yang tidak berhubungan langsung dengan dunia nyata.",
                "Kamu sadar akan hal-hal di sekitarmu dan tidak mungkin melewatkan sesuatu yang terjadi di depan matamu.",
                "Kamu setuju bahwa hasil akhir adalah yang terpenting.",
                "Kamu mengikuti sebuah rutinitas yang konsisten.",
                "Kamu mungkin dideskripsikan sebagai orang yang 'berkepala kosong'.",
                "Biasanya, kamu adalah yang pertama bereaksi terhadap suatu pertanyaan.",
                "Kamu mungkin terlihat egois.",
                "Kamu berkarisma dan biasanya dilihat sebagai orang yang menawan.",
                "Kamu tidak menyukai perubahan.",
                "Kamu mungkin terlihat cengeng atau penuh depresi.",
                "Kamu hanya mengandalkan pengalaman yang lampau untuk memandumu melewati masa kini.",
                "Kamu memiliki standar moral pribadi yang tidak akan terpengaruhi oleh faktor-faktor eksternal.",
                "Kamu biasanya menyelesaikan masalah bersama orang lain dan melibatkan mereka dalam pengambilan keputusan.",
                "Kamu sangat menghargai tradisi dan kewajiban.",
                "Kamu percaya bahwa keberadaanmu dalam sebuah ruangan pasti disadari orang lain.",
                "Kamu mengeksplor hal-hal secara mendalam hanya karena kamu ingin tahu lebih dalam.",
                "Kamu dideskripsikan sebagai 'tidak bisa berpindah tujuan'.",
                "Kamu mungkin terlihat 'palsu' atau 'manipulatif' bagi orang lain.",
                "Kamu tertarik pada filosofi dan hal-hal mistis.",
                "Kamu menyukai diskusi, kamu menawarkan banyak ide dalam situasi yang ada.",
                "Kamu tidak bertele-tele dalam berkomunikasi.",
                "Kamu tidak tertarik dengan ketidakpastian atau hal-hal yang belum diketahui.",
                "Kamu sulit beradaptasi dengan data-data baru karena tidak sesuai dengan pemahaman pribadimu atas sebuah ide.",
                "Kamu mengekspresikan dirimu dengan jujur dan otentik.",
                "Untuk mendeskripsikan dunia di sekelilingmu, kamu membuat kerangka kerja, teori dan sistem yang logis secara internal.",
                "Kamu mengandalkan sumber-sumber eksternal untuk mendukung argumenmu.",
                "Kamu adalah seorang pengambil resiko.",
                "Kamu memodifikasi sistem logika internalmu untuk memasukkan data baru, dan akan mengevaluasi ulang sistem itu jika datanya tidak cocok.",
                "Kamu mempertanyakan segala hal.",
                "Kamu mudah bersimpati kepada kesulitan yang dihadapi orang lain.",
                "Kamu punya indera navigasi yang bagus dan mudah tahu arah walaupun di tempat baru.",
                "Kamu menghargai kesetaraan hak dan berusaha keras untuk membuat semua orang terlibat dalam sebuah kelompok.",
                "Kamu menyelesaikan masalahmu sendiri dan mengasingkan diri saat mencari kesimpulan.",
                "Kamu hidup di masa kini, bukan masa lalu atau masa depan.",
                "Kamu ragu untuk mengasosiasikan dirimu pada suatu peran sosial secara pasti.",
                "Menurutmu, suatu solusi lebih baik dibahas secara menyeluruh sebelum dieksekusi, meskipun waktu yang jadi taruhannya.",
                "Orang-orang palsu membuatmu sebal.",
                "Kamu seringkali kesusahan untuk mengungkapkan suatu hal dalam kata-kata walaupun kamu memahami hal tersebut.",
                "Caramu memahami sebuah konsep adalah mengidentifikasinya secara logis dan menghubungkan pola antara konsep-konsep yang ada.",
                "Kamu jujur pada dirimu sendiri.",
                "Kamu suka mengorganisir atau mengatur hal-hal untuk bersenang-senang.",
                "Kamu berbakat dalam mengidentifikasi apakah sebuah detail cocok dengan kebiasaan yang ada.",
                "Kamu sering mengambil kesimpulan yang datang entah dari mana; kamu cenderung 'menyadari' jawaban.",
                "Kamu memulai banyak rencana, namun hanya beberapa yang akhirnya bisa kamu selesaikan.",
                "Kamu menghargai kebenaran dan logika lebih dari apapun.",
                "Susah bagimu untuk berkonsentrasi pada satu hal saja.",
                "Ketika memiliki waktu luang, kamu merasa canggung dan tanpa tujuan.",
                "Kamu merasa seakan kamu adalah satu dari segelintir orang baik yang tersisa di dunia ini.",
                "Kamu menyukai keindahan dan 'menikmati hal-hal yang baik dalam hidup.'",
                "Kamu mungkin terlihat 'ikut campur' atau 'suka mengatur' di mata orang lain.",
                "Kamu sangat bersemangat atas hal baru. Namun, ketika hal itu tidak lagi terasa baru, kamu akan menelantarkannya.",
                "Menurutmu, kamu adalah orang yang praktis dan realistis, bebas dari imajinasi.",
                "Kamu melihat dunia sebagai kumpulan kemungkinan yang menunggu untuk dieksplor.",
                "Kamu lebih memilih untuk hidup di dunia mimpimu dibanding dunia nyata.",
                "Kamu punya kesulitan untuk menyampaikan ide-idemu kepada orang lain.",
                "Kamu pemecah masalah yang baik dan memiliki kemampuan untuk menganalisis secara mendalam.",                "Kamu mungkin terlihat bar-bar dan menyakiti orang-orang disekitarmu tanpa sadar.",
                "Kamu bisa memanipulasi percakapan dengan menganalisa bahasa tubuh orang lain.",
                "Kamu mengambil jalan pintas yang tidak sesuai dengan kebiasaan yang ada demi efisiensi dan produktivitas.",
                "Menurutmu, kamu adalah orang yang terorganisir dan mampu mengontrol sesuatu sebelum terjadi kekacauan.",
                "Menurutmu, mendapat kebenaran atau fakta lebih penting dari memenangkan sebuah perdebatan.",
                "Kamu menaruh kepercayaan yang banyak terhadap alam bawah sadar dan hal-hal misterius.",
                "Saking banyaknya kemungkinan yang kamu temukan, susah bagimu untuk berkomitmen pada satu keputusan.",
                "Kamu punya kecenderungan untuk berbicara keluar dari topik dalam sebuah percakapan.",                "Kamu tertarik dengan hal-hal abstrak dan sering terobsesi dengan makna tersembunyi.",
                "Kamu merasa bahwa pendapatmu sering disalahpahami orang lain.",
            ];
            private $answers = [];

            public function displayTest() {
                if (!isset($_POST['submit'])) {
                ?>
                <form method="post">
                    <h1>MBTI Personality Test</h1>
                    <div class="attention">
                        <label>Kerjakan dengan jujur dan jadilah dirimu sepenuhnya untuk mengetahui kepribadian yang sesuai dengan Anda!</label>
                        <br><br>
                        <label>Pelajari berbagai macam aspek dalam hidup yang dipengaruhi oleh tipe kepribadian Anda!</label>
                        <br><br>
                        <label>Berkembanglah menjadi pribadi yang lebih baik setelah menemukan jati diri Anda!</label>
                    </div>
                    <?php foreach ($this->questions as $i => $question) {?>
                        <h2><?= $question?></h2>
                        <div class="input">
                            <label>Tidak Setuju</label>
                            <input type="radio" name="agree[<?= $i?>]" value="1" class="radio-input1"> 
                            <input type="radio" name="agree[<?= $i?>]" value="2" class="radio-input1"> 
                            <input type="radio" name="agree[<?= $i?>]" value="3" class="radio-input2"> 
                            <input type="radio" name="agree[<?= $i?>]" value="4" class="radio-input3"> 
                            <input type="radio" name="agree[<?= $i?>]" value="5" class="radio-input3"> 
                            <label>Setuju</label>  
                        </div>
                        <br>
                    <?php }?>
                    <div class="wonder">
                        <select class="form-select" aria-label="Default" name="wonder" id="wonder">
                            <option selected>Apa Tipe Kepribadian yang menurut Anda paling sesuai?</option>
                            <option value="ISTJ">ISTJ</option>
                            <option value="ISFJ">ISFJ</option>
                            <option value="ESTJ">ESTJ</option>
                            <option value="ESFJ">ESFJ</option>
                            <option value="INTP">INTP</option>
                            <option value="INTJ">INTJ</option>
                            <option value="ENTP">ENTP</option>
                            <option value="ENTJ">ENTJ</option>
                            <option value="ISTP">ISTP</option>
                            <option value="ISFP">ISFP</option>
                            <option value="ESTP">ESTP</option>
                            <option value="ESFP">ESTJ</option>
                            <option value="INFJ">INFJ</option>
                            <option value="INFP">INFP</option>
                            <option value="ENFJ">ENFJ</option>
                            <option value="ENFP">ENFP</option>
                        </select>
                    </div>
                    <div class = "submit">
                    <input type="submit" name="submit" value="Lihat Hasil" class="btn-submit">
                    </div>
                </form>
                <?php
            } else {
                $this->processAnswers();
            }
            }

            private function processAnswers() {
                $this->answers = []; 
                if (isset($_POST['agree']) && is_array($_POST['agree'])) {
                    foreach ($_POST['agree'] as $i => $agree) {
                        $this->answers[] = [$agree, $i];
                    }
                }
                $this->calculateResult();
            }

            private function calculateResult() {
                $Te = 0;
                $Ti = 0;
                $Fe = 0;
                $Fi = 0;
                $Se = 0;
                $Si = 0;
                $Ne = 0;
                $Ni = 0;

                foreach ($this->answers as $answer) {
                    $agree = $answer[0];
                    $questionIndex = $answer[1];

                    if ($questionIndex == 0) {
                        $Fi += $agree;
                        $Fe += 6 - $agree;
                    } else if ($questionIndex == 1) {
                        $Si += $agree;
                        $Se += 6 - $agree;
                    } else if ($questionIndex == 2) {
                        $Se += $agree;
                        $Si += 6 - $agree;
                    } else if ($questionIndex == 3) {
                        $Te += $agree;
                        $Ti += 6 - $agree;
                    } else if ($questionIndex == 4) {
                        $Fe += $agree;
                        $Fi += 6 - $agree;
                    } else if ($questionIndex == 5) {
                        $Se += $agree;
                        $Si += 6 - $agree;
                    } else if ($questionIndex == 6) {
                        $Ti += $agree;
                        $Te += 6 - $agree;
                    } else if ($questionIndex == 7) {
                        $Ne += $agree;
                        $Ni += 6 - $agree;
                    } else if ($questionIndex == 8) {
                        $Ni += $agree;
                        $Ne += 6 - $agree;
                    } else if ($questionIndex == 9) {
                        $Ti += $agree;
                        $Te += 6 - $agree;
                    } else if ($questionIndex == 10) {
                        $Fi += $agree;
                        $Fe += 6 - $agree;
                    } else if ($questionIndex == 11) {
                        $Si += $agree;
                        $Se += 6 - $agree;
                    } else if ($questionIndex == 12) {
                        $Fe += $agree;
                        $Fi += 6 - $agree;
                    } else if ($questionIndex == 13) {
                        $Ni += $agree;
                        $Ne += 6 - $agree;
                    } else if ($questionIndex == 14) {
                        $Si += $agree;
                        $Se += 6 - $agree;
                    } else if ($questionIndex == 15) {
                        $Ni += $agree;
                        $Ne += 6 - $agree;
                    } else if ($questionIndex == 16) {
                        $Ti += $agree;
                        $Te += 6 - $agree;
                    } else if ($questionIndex == 17) {
                        $Te += $agree;
                        $Ti += 6 - $agree;
                    } else if ($questionIndex == 18) {
                        $Ne += $agree;
                        $Ni += 6 - $agree;
                    } else if ($questionIndex == 19) {
                        $Fe += $agree;
                        $Fi += 6 - $agree;
                    } else if ($questionIndex == 20) {
                        $Se += $agree;
                        $Si += 6 - $agree;
                    } else if ($questionIndex == 21) {
                        $Ne += $agree;
                        $Ni += 6 - $agree;
                    } else if ($questionIndex == 22) {
                        $Ni += $agree;
                        $Ne += 6 - $agree;
                    } else if ($questionIndex == 23) {
                        $Se += $agree;
                        $Si += 6 - $agree;
                    } else if ($questionIndex == 24) {
                        $Te += $agree;
                        $Ti += 6 - $agree;
                    } else if ($questionIndex == 25) {
                        $Si += $agree;
                        $Se += 6 - $agree;
                    } else if ($questionIndex == 26) {
                        $Se += $agree;
                        $Si += 6 - $agree;
                    } else if ($questionIndex == 27) {
                        $Se += $agree;
                        $Si += 6 - $agree;
                    } else if ($questionIndex == 28) {
                        $Fi += $agree;
                        $Fe += 6 - $agree;
                    } else if ($questionIndex == 29) {
                        $Fe += $agree;
                        $Fi += 6 - $agree;
                    } else if ($questionIndex == 30) {
                        $Si += $agree;
                        $Se += 6 - $agree;
                    } else if ($questionIndex == 31) {
                        $Fi += $agree;
                        $Fe += 6 - $agree;
                    } else if ($questionIndex == 32) {
                        $Si += $agree;
                        $Se += 6 - $agree;
                    } else if ($questionIndex == 33) {
                        $Fi += $agree;
                        $Fe += 6 - $agree;
                    } else if ($questionIndex == 34) {
                        $Fe += $agree;
                        $Fi += 6 - $agree;
                    } else if ($questionIndex == 35) {
                        $Si += $agree;
                        $Se += 6 - $agree;
                    } else if ($questionIndex == 36) {
                        $Fe += $agree;
                        $Fi += 6 - $agree;
                    } else if ($questionIndex == 37) {
                        $Ti += $agree;
                        $Te += 6 - $agree;
                    } else if ($questionIndex == 38) {
                        $Ni += $agree;
                        $Ne += 6 - $agree;
                    } else if ($questionIndex == 39) {
                        $Fe += $agree;
                        $Fi += 6 - $agree;
                    } else if ($questionIndex == 40) {
                        $Ni += $agree;
                        $Ne += 6 - $agree;
                    } else if ($questionIndex == 41) {
                        $Ne += $agree;
                        $Ni += 6 - $agree;
                    } else if ($questionIndex == 42) {
                        $Te += $agree;
                        $Ti += 6 - $agree;
                    } else if ($questionIndex == 43) {
                        $Si += $agree;
                        $Se += 6 - $agree;
                    } else if ($questionIndex == 44) {
                        $Si += $agree;
                        $Se += 6 - $agree;
                    } else if ($questionIndex == 45) {
                        $Fi += $agree;
                        $Fe += 6 - $agree;
                    } else if ($questionIndex == 46) {
                        $Ti += $agree;
                        $Te += 6 - $agree;
                    } else if ($questionIndex == 47) {
                        $Te += $agree;
                        $Ti += 6 - $agree;
                    } else if ($questionIndex == 48) {
                        $Se += $agree;
                        $Si += 6 - $agree;
                    } else if ($questionIndex == 49) {
                        $Ti += $agree;
                        $Te += 6 - $agree;
                    } else if ($questionIndex == 50) {
                        $Ne += $agree;
                        $Ni += 6 - $agree;
                    } else if ($questionIndex == 51) {
                        $Fe += $agree;
                        $Fi += 6 - $agree;
                    } else if ($questionIndex == 52) {
                        $Se += $agree;
                        $Si += 6 - $agree;
                    } else if ($questionIndex == 53) {
                        $Fe += $agree;
                        $Fi += 6 - $agree;
                    } else if ($questionIndex == 54) {
                        $Ti += $agree;
                        $Te += 6 - $agree;
                    } else if ($questionIndex == 55) {
                        $Se += $agree;
                        $Si += 6 - $agree;
                    } else if ($questionIndex == 56) {
                        $Fi += $agree;
                        $Fe += 6 - $agree;
                    } else if ($questionIndex == 57) {
                        $Ti += $agree;
                        $Te += 6 - $agree;
                    } else if ($questionIndex == 58) {
                        $Fi += $agree;
                        $Fe += 6 - $agree;
                    } else if ($questionIndex == 59) {
                        $Ni += $agree;
                        $Ne += 6 - $agree;
                    } else if ($questionIndex == 60) {
                        $Ti += $agree;
                        $Te += 6 - $agree;
                    } else if ($questionIndex == 61) {
                        $Fi += $agree;
                        $Fe += 6 - $agree;
                    } else if ($questionIndex == 62) {
                        $Te += $agree;
                        $Ti += 6 - $agree;
                    } else if ($questionIndex == 63) {
                        $Si += $agree;
                        $Se += 6 - $agree;
                    } else if ($questionIndex == 64) {
                        $Ni += $agree;
                        $Ne += 6 - $agree;
                    } else if ($questionIndex == 65) {
                        $Ne += $agree;
                        $Ni += 6 - $agree;
                    } else if ($questionIndex == 66) {
                        $Ti += $agree;
                        $Te += 6 - $agree;
                    } else if ($questionIndex == 67) {
                        $Ne += $agree;
                        $Ni += 6 - $agree;
                    } else if ($questionIndex == 68) {
                        $Fe += $agree;
                        $Fi += 6 - $agree;
                    } else if ($questionIndex == 69) {
                        $Fi += $agree;
                        $Fe += 6 - $agree;
                    } else if ($questionIndex == 70) {
                        $Fe += $agree;
                        $Fi += 6 - $agree;
                    } else if ($questionIndex == 71) {
                        $Fe += $agree;
                        $Fi += 6 - $agree;
                    } else if ($questionIndex == 72) {
                        $Se += $agree;
                        $Si += 6 - $agree;
                    } else if ($questionIndex == 73) {
                        $Si += $agree;
                        $Se += 6 - $agree;
                    } else if ($questionIndex == 74) {
                        $Ne += $agree;
                        $Ni += 6 - $agree;
                    } else if ($questionIndex == 75) {
                        $Ni += $agree;
                        $Ne += 6 - $agree;
                    } else if ($questionIndex == 76) {
                        $Ti += $agree;
                        $Te += 6 - $agree;
                    } else if ($questionIndex == 77) {
                        $Ti += $agree;
                        $Te += 6 - $agree;
                    } else if ($questionIndex == 78) {
                        $Se += $agree;
                        $Si += 6 - $agree;
                    } else if ($questionIndex == 79) {
                        $Te += $agree;
                        $Ti += 6 - $agree;
                    } else if ($questionIndex == 80) {
                        $Te += $agree;
                        $Ti += 6 - $agree;
                    } else if ($questionIndex == 81) {
                        $Te += $agree;
                        $Ti += 6 - $agree;
                    } else if ($questionIndex == 82) {
                        $Ti += $agree;
                        $Te += 6 - $agree;
                    } else if ($questionIndex == 83) {
                        $Ni += $agree;
                        $Ne += 6 - $agree;
                    } else if ($questionIndex == 84) {
                        $Ne += $agree;
                        $Ni += 6 - $agree;
                    } else if ($questionIndex == 85) {
                        $Ne += $agree;
                        $Ni += 6 - $agree;
                    } else if ($questionIndex == 86) {
                        $Ni += $agree;
                        $Ne += 6 - $agree;
                    } else if ($questionIndex == 87) {
                        $Ni += $agree;
                        $Ne += 6 - $agree;
                    }
                }
                
                $functions = ['Ne' => $Ne, 'Ni' => $Ni, 'Se' => $Se, 'Si' => $Si, 'Te' => $Te, 'Ti' => $Ti, 'Fi' => $Fi, 'Fe' => $Fe];
                arsort($functions);
                $dominantFunction = key($functions);
                $auxiliaryFunctions = array_slice($functions, 1);
                $auxiliaryFunction = key($auxiliaryFunctions);
                
                $mbtiType = '';
                switch ($dominantFunction) {
                    case 'Si':
                        switch ($auxiliaryFunction) {
                            case $Te > $Fe:
                                $auxiliaryFunction = 'Te';
                                $mbtiType = 'ISTJ';
                                break;
                            case $Te < $Fe:
                                $auxiliaryFunction = 'Fe';
                                $mbtiType = 'ISFJ';
                                break;
                            case $Te == $Fe:
                                $auxiliaryFunction = 'XX';
                                $mbtiType = 'ISXJ';
                                break;
                        }
                        break;
                    case 'Ti':
                        switch ($auxiliaryFunction) {
                            case $Ne > $Se:
                                $auxiliaryFunction = 'Ne';
                                $mbtiType = 'INTP';
                                break;
                            case $Ne < $Se:
                                $auxiliaryFunction = 'Se';
                                $mbtiType = 'ISTP';
                                break;
                            case $Ne == $Se:
                                $auxiliaryFunction = 'XX';
                                $mbtiType = 'IXTP';
                                break;
                        }
                        break;
                    case 'Ne':
                        switch ($auxiliaryFunction) {
                            case $Ti > $Fi:
                                $auxiliaryFunction = 'Ti';
                                $mbtiType = 'ENTP';
                                break;
                            case $Ti < $Fi:
                                $auxiliaryFunction = 'Fi';
                                $mbtiType = 'ENFP';
                                break;
                            case $Ti == $Fi:
                                $auxiliaryFunction = 'XX';
                                $mbtiType = 'ENXP';
                                break;
                        }
                        break;
                    case 'Fi':
                        switch ($auxiliaryFunction) {
                            case $Se > $Ne:
                                $auxiliaryFunction = 'Se';
                                $mbtiType = 'ISFP';
                                break;
                            case $Se < $Ne:
                                $auxiliaryFunction = 'Ne';
                                $mbtiType = 'INFP';
                                break;
                            case $Se == $Ne:
                                $auxiliaryFunction = 'XX';
                                $mbtiType = 'IXFP';
                                break;
                        }
                        break;
                    case 'Ni':
                        switch ($auxiliaryFunction) {
                            case $Te > $Fe:
                                $auxiliaryFunction = 'Te';
                                $mbtiType = 'INTJ';
                                break;
                            case $Te < $Fe:
                                $auxiliaryFunction = 'Fe';
                                $mbtiType = 'INFJ';
                                break;
                            case $Te == $Fe:
                                $auxiliaryFunction = 'XX';
                                $mbtiType = 'IXFP';
                                break;
                        }
                        break;
                    case 'Te':
                        switch ($auxiliaryFunction) {
                            case $Si > $Ni:
                                $auxiliaryFunction = 'Si';
                                $mbtiType = 'ESTJ';
                                break;
                            case $Si < $Ni:
                                $auxiliaryFunction = 'Ni';
                                $mbtiType = 'ENTJ';
                                break;
                            case $Si == $Ni:
                                $auxiliaryFunction = 'XX';
                                $mbtiType = 'EXTJ';
                                break;
                        }
                        break;
                    case 'Fe':
                        switch ($auxiliaryFunction) {
                            case $Si > $Ni:
                                $auxiliaryFunction = 'Si';
                                $mbtiType = 'ESFJ';
                                break;
                            case $Si < $Ni:
                                $auxiliaryFunction = 'Ni';
                                $mbtiType = 'ENFJ';
                                break;
                            case $Si == $Ni:
                                $auxiliaryFunction = 'XX';
                                $mbtiType = 'EXFJ';
                                break;
                        }
                        break;
                    case 'Se':
                        switch ($auxiliaryFunction) {
                            case $Ti > $Fi:
                                $auxiliaryFunction = 'Ti';
                                $mbtiType = 'ESTP';
                                break;
                            case $Ti < $Fi:
                                $auxiliaryFunction = 'Fi';
                                $mbtiType = 'ESFP';
                                break;
                            case $Ti == $Fi:
                                $auxiliaryFunction = 'XX';
                                $mbtiType = 'ESXP';
                                break;
                        }
                        break;
                }
                
            if (empty($answer)) {
                $mbtiType = '????';
                $dominantFunction = 'XX';
                $auxiliaryFunction = 'XX';
            
            }
        ?>

        <form method="post">    
            <div class="result">
                <h1>Selamat! Tipe kepribadian Anda adalah <?= $mbtiType?></h1>
                <br><br>
                <?php
                    if ($mbtiType == 'ISTJ') {
                        echo '<img src="img/istj.png" alt="ISTJ">';
                    } elseif ($mbtiType == 'ISFJ') {
                        echo '<img src="img/isfj.png" alt="ISFJ">';
                    } elseif ($mbtiType == 'INFJ') {
                        echo '<img src="img/infj.png" alt="INFJ">';
                    } elseif ($mbtiType == 'INTJ') {
                        echo '<img src="img/intj.png" alt="INTJ">';
                    } elseif ($mbtiType == 'ISTP') {
                        echo '<img src="img/istp.png" alt="ISTP">';
                    } elseif ($mbtiType == 'ISFP') {
                        echo '<img src="img/isfp.png" alt="ISFP">';
                    } elseif ($mbtiType == 'INFP') {
                        echo '<img src="img/infp.png" alt="INFP">';
                    } elseif ($mbtiType == 'INTP') {
                        echo '<img src="img/intp.png" alt="INTP">';
                    } elseif ($mbtiType == 'ESTP') {
                        echo '<img src="img/estp.png" alt="ESTP">';
                    } elseif ($mbtiType == 'ESFP') {
                        echo '<img src="img/esfp.png" alt="ESFP">';
                    } elseif ($mbtiType == 'ENFP') {
                        echo '<img src="img/enfp.png" alt="ENFP">';
                    } elseif ($mbtiType == 'ENTP') {
                        echo '<img src="img/entp.png" alt="ENTP">';
                    } elseif ($mbtiType == 'ESTJ') {
                        echo '<img src="img/estj.png" alt="ESTJ">';
                    } elseif ($mbtiType == 'ESFJ') {
                        echo '<img src="img/esfj.png" alt="ESFJ">';
                    } elseif ($mbtiType == 'ENFJ') {
                        echo '<img src="img/enfj.png" alt="ENFJ">';
                    } elseif ($mbtiType == 'ENTJ') {
                        echo '<img src="img/entj.png" alt="ENTJ">';
                    }
                ?>
                <div class="function">
                    <h2>Dominant function: <?= $dominantFunction?></h2>
                    <h2>Auxiliary function: <?= $auxiliaryFunction?><h2>
                </div>
                <div class="details">
                    <label>Ne (extraverted intuition) : <?= $Ne?></label>
                    <br><br>
                    <label>Ni (introverted intuition) : <?= $Ni?></label>
                    <br><br>
                    <label>Se (extraverted sensing) : <?= $Se?></label>
                    <br><br>
                    <label>Si (introverted sensing) : <?= $Si?></label>
                    <br><br>
                    <label>Fe (extraverted feeling) : <?= $Fe?></label>
                    <br><br>
                    <label>Fi (introverted feeling) : <?= $Fi?></label>
                    <br><br>
                    <label>Te (extraverted thinking) : <?= $Te?></label>
                    <br><br>
                    <label>Ti (introverted thinking) : <?= $Ti?></label>
                    <?php
                        if ($mbtiType == 'ISTJ'){
                            $textarea_value = "ISTJ (Introverted, Sensing, Thinking, Judging) adalah tipe kepribadian yang dikenal karena keseriusan, keandalan, dan keteraturannya. Individu dengan tipe ini cenderung pendiam, berorientasi pada fakta, dan sangat detail dalam pendekatan mereka terhadap kehidupan. Mereka menghargai tanggung jawab dan tradisi, serta suka merencanakan dan mengorganisir segala sesuatu dengan cara yang sistematis dan efisien. ISTJ sangat andal dan dapat dipercaya, menjadikan mereka rekan kerja dan teman yang setia.
                            Namun, ISTJ bisa kurang fleksibel dan mungkin mengalami kesulitan beradaptasi dengan perubahan yang tiba-tiba. Mereka cenderung lebih fokus pada logika dan fakta, yang kadang membuat mereka tampak kurang peka terhadap emosi orang lain. Meskipun begitu, pragmatisme dan dedikasi mereka dalam mencapai hasil yang nyata membuat mereka sangat efektif dalam menyelesaikan tugas-tugas dan menghadapi tantangan dengan cara yang praktis dan terstruktur.";
                        } else if ($mbtiType == 'ISFJ') {
                            $textarea_value = "ISFJ (Introverted, Sensing, Feeling, Judging) adalah tipe kepribadian yang dikenal karena sifat mereka yang hangat, penuh perhatian, dan sangat bertanggung jawab. Individu dengan tipe ini cenderung pendiam dan lebih suka bekerja di belakang layar untuk mendukung orang lain. Mereka sangat menghargai tradisi dan keamanan, serta cenderung menjaga stabilitas dalam lingkungan mereka. ISFJ memiliki kemampuan luar biasa untuk mengingat detail tentang orang-orang yang mereka pedulikan, dan mereka sering kali menunjukkan kasih sayang melalui tindakan nyata dan perhatian terhadap kebutuhan orang lain.
                            Meski begitu, ISFJ bisa mengalami kesulitan dalam mengekspresikan kebutuhan dan perasaan mereka sendiri, seringkali lebih fokus pada kesejahteraan orang lain daripada diri mereka sendiri. Mereka juga mungkin merasa tidak nyaman dengan perubahan mendadak dan situasi yang tidak terduga, lebih memilih pendekatan yang terstruktur dan bisa diprediksi. Kekuatan ISFJ terletak pada kesetiaan, kerja keras, dan kemampuan mereka untuk menciptakan lingkungan yang harmonis dan mendukung bagi orang-orang di sekitar mereka.";
                        } else if ($mbtiType == 'INTP') {
                            $textarea_value = "INTP (Introverted, Intuitive, Thinking, Perceiving) adalah tipe kepribadian yang dikenal karena pemikiran analitis, kreatif, dan logis mereka. Individu dengan tipe ini sering memiliki kemampuan luar biasa untuk memecahkan masalah kompleks dan cenderung sangat tertarik pada ide-ide abstrak dan teori. Mereka cenderung menghabiskan banyak waktu dalam pikiran mereka sendiri, menganalisis konsep dan mencari pemahaman mendalam tentang bagaimana dunia bekerja. INTP sangat mandiri dan menghargai kebebasan intelektual, sering merasa paling puas ketika mengeksplorasi ide-ide baru atau mengerjakan proyek-proyek yang membutuhkan pemikiran inovatif.
                            Meskipun sangat cerdas dan logis, INTP sering menghadapi kesulitan dalam hal interaksi sosial. Mereka mungkin tampak pendiam atau terpisah, dan bisa merasa frustrasi dengan percakapan yang mereka anggap dangkal atau tidak logis. INTP cenderung berkomunikasi dengan cara yang langsung dan jujur, yang kadang bisa dianggap terlalu kritis oleh orang lain. Namun, mereka sangat menghargai kebenaran dan kejujuran dalam diskusi. Kekuatan utama INTP terletak pada kemampuan mereka untuk berpikir di luar kotak dan menghasilkan solusi inovatif untuk masalah-masalah yang kompleks.";
                        } else if ($mbtiType == 'ISTP') {
                            $textarea_value = "ISTP (Introverted, Sensing, Thinking, Perceiving) adalah tipe kepribadian yang dikenal karena kemandirian, pragmatisme, dan keterampilan praktis mereka. Individu dengan tipe ini cenderung memiliki pendekatan langsung dan logis terhadap masalah, sering kali unggul dalam memecahkan masalah teknis atau mekanis. ISTP sangat tertarik pada bagaimana sesuatu bekerja dan menikmati belajar melalui pengalaman langsung. Mereka sering berorientasi pada tindakan dan memiliki kemampuan luar biasa untuk tetap tenang dan efektif dalam situasi krisis.
                            Secara sosial, ISTP mungkin tampak pendiam atau tersembunyi, tetapi mereka memiliki sikap yang santai dan adaptif. Mereka cenderung menikmati kebebasan pribadi dan menghargai kemampuan untuk bekerja secara mandiri. ISTP mungkin merasa terganggu oleh rutinitas yang terlalu ketat atau aturan yang membatasi, lebih memilih fleksibilitas dan kesempatan untuk mengikuti minat mereka saat ini. Meskipun tidak selalu ekspresif secara emosional, ISTP biasanya setia kepada teman-teman mereka dan menunjukkan perhatian mereka melalui tindakan nyata daripada kata-kata. Keahlian mereka dalam menganalisis dan memecahkan masalah praktis membuat mereka sangat efektif dalam berbagai situasi, terutama yang membutuhkan keterampilan teknis atau mekanis.";
                        } else if ($mbtiType == 'ENTP') {
                            $textarea_value = "ENTP (Extraverted, Intuitive, Thinking, Perceiving) adalah tipe kepribadian yang dikenal karena kecerdasan, keterampilan debat, dan inovasi mereka. Individu dengan tipe ini sangat bersemangat dan penuh energi, selalu mencari ide-ide baru dan peluang untuk mengeksplorasi. Mereka memiliki kemampuan untuk melihat berbagai kemungkinan dan menyusun solusi kreatif untuk masalah kompleks. ENTP cenderung sangat persuasif dan menikmati tantangan intelektual, sering kali berpartisipasi dalam debat atau diskusi untuk mengasah argumen mereka dan mengeksplorasi perspektif baru.
                            Secara sosial, ENTP karismatik dan menikmati berinteraksi dengan orang lain. Mereka cenderung memiliki banyak teman dan menikmati menginspirasi orang lain dengan ide-ide mereka. ENTP tidak menyukai rutinitas yang monoton dan lebih suka lingkungan yang dinamis dan fleksibel. Mereka sering kali memulai berbagai proyek, meskipun mungkin tidak selalu menyelesaikan semuanya karena mereka lebih tertarik pada fase eksplorasi dan pengembangan ide. Kepribadian mereka yang terbuka dan adaptif memungkinkan mereka untuk beradaptasi dengan cepat terhadap perubahan dan menciptakan peluang di mana orang lain mungkin tidak melihatnya.";
                        } else if ($mbtiType == 'ENFP') {
                            $textarea_value = "ENFP (Extraverted, Intuitive, Feeling, Perceiving) adalah tipe kepribadian yang penuh dengan antusiasme, kreativitas, dan empati. Individu dengan tipe ini dikenal karena optimisme mereka dan kemampuan untuk menginspirasi orang lain. Mereka sangat berorientasi pada orang dan menikmati berinteraksi dengan berbagai macam individu. ENFP cenderung sangat intuitif, mampu melihat potensi dan kemungkinan dalam berbagai situasi, dan mereka sering memiliki pandangan yang unik dan inovatif tentang dunia.
                            Secara emosional, ENFP sangat selaras dengan perasaan mereka sendiri dan perasaan orang lain, membuat mereka menjadi teman yang pengertian dan pendukung yang baik. Mereka cenderung mengikuti hati mereka dan membuat keputusan berdasarkan nilai-nilai pribadi dan empati. ENFP sering kali memiliki beragam minat dan menikmati mengeksplorasi berbagai ide dan kegiatan. Mereka tidak suka terikat oleh rutinitas dan lebih suka kebebasan untuk mengejar apa yang menarik minat mereka pada saat itu. Kepribadian yang fleksibel dan adaptif ini memungkinkan mereka untuk menavigasi kehidupan dengan optimisme dan rasa ingin tahu yang tinggi.";
                        } else if ($mbtiType == 'ISFP') {
                            $textarea_value = "ISFP (Introverted, Sensing, Feeling, Perceiving) adalah tipe kepribadian yang artistik, sensitif, dan berorientasi pada pengalaman langsung. Individu dengan tipe ini dikenal karena kreativitas mereka yang alami dan apresiasi mendalam terhadap estetika dan keindahan. Mereka sering mengekspresikan diri melalui seni, musik, atau kegiatan kreatif lainnya, serta cenderung memiliki bakat dalam menciptakan dan mengapresiasi keindahan di sekitar mereka.
                            Secara emosional, ISFP sangat selaras dengan perasaan mereka sendiri dan cenderung mengikuti hati mereka dalam membuat keputusan. Mereka menghargai hubungan yang mendalam dan otentik dengan orang lain, meskipun mereka mungkin tampak pendiam atau tertutup pada awalnya. ISFP juga cenderung sangat menghargai kebebasan pribadi dan fleksibilitas, tidak suka merasa terikat oleh aturan atau rutinitas yang kaku. Mereka hidup di saat ini, menikmati pengalaman sensoris dan cenderung mengejar kehidupan yang penuh dengan makna dan petualangan pribadi.";
                        } else if ($mbtiType == 'INFP') {
                            $textarea_value = "INFP (Introverted, Intuitive, Feeling, Perceiving) adalah tipe kepribadian yang idealis, penuh empati, dan sangat selaras dengan nilai-nilai dan perasaan pribadi mereka. Individu dengan tipe ini seringkali introspektif dan berpikiran dalam, memiliki dunia batin yang kaya dan imajinatif. Mereka cenderung melihat potensi dan kemungkinan dalam segala hal dan memiliki visi yang kuat tentang bagaimana dunia bisa menjadi tempat yang lebih baik.
                            Secara emosional, INFP sangat sensitif dan empatik, sering merasakan emosi orang lain dengan intensitas yang sama seperti perasaan mereka sendiri. Mereka menghargai hubungan yang mendalam dan otentik, serta mencari makna dan tujuan dalam semua aspek kehidupan mereka. INFP sering tertarik pada seni, sastra, dan aktivitas kreatif lainnya yang memungkinkan mereka mengekspresikan visi dan perasaan mereka. Mereka juga dikenal karena komitmen mereka terhadap prinsip-prinsip dan idealisme mereka, seringkali bekerja untuk tujuan yang lebih besar dan memperjuangkan hal-hal yang mereka yakini.";
                        } else if ($mbtiType == 'INTJ') {
                            $textarea_value = "INTJ (Introverted, Intuitive, Thinking, Judging) adalah tipe kepribadian yang dikenal karena pemikiran strategis, analitis, dan berorientasi pada tujuan. Individu dengan tipe ini cenderung memiliki visi jangka panjang yang jelas dan kemampuan untuk melihat gambaran besar, membuat mereka ahli dalam perencanaan dan pengambilan keputusan yang logis. Mereka menghargai efisiensi, kompetensi, dan sering berusaha untuk mencapai standar yang tinggi dalam semua yang mereka lakukan.
                            Secara emosional, INTJ cenderung lebih tertutup dan mandiri, lebih memilih waktu sendiri untuk merenung dan mengembangkan ide-ide mereka. Mereka sering dilihat sebagai orang yang tegas dan percaya diri, dengan kemampuan untuk tetap tenang dan rasional bahkan dalam situasi yang menantang. Meskipun mungkin terlihat dingin atau kaku, INTJ memiliki ketertarikan yang mendalam pada konsep-konsep dan teori-teori kompleks, serta sering berusaha untuk memahami dan menguasai bidang-bidang yang mereka minati. Mereka juga cenderung menghargai hubungan yang didasarkan pada intelektualitas dan pertukaran ide yang mendalam.";
                        } else if ($mbtiType == 'INFJ') {
                            $textarea_value = "INFJ (Introverted, Intuitive, Feeling, Judging) adalah tipe kepribadian yang dikenal karena kepekaan, wawasan mendalam, dan idealisme. Individu dengan tipe ini memiliki kemampuan alami untuk memahami emosi dan motivasi orang lain, sering kali menggunakan intuisi mereka untuk menilai situasi secara holistik. Mereka cenderung berorientasi pada tujuan, dengan visi yang kuat tentang bagaimana dunia seharusnya dan keinginan untuk membuat perubahan positif.
                            INFJ sering kali tertarik pada kegiatan yang bermakna dan memiliki dampak, dan mereka merasa terpanggil untuk membantu orang lain mencapai potensi mereka. Mereka biasanya menjaga perasaan mereka sendiri dengan hati-hati, tetapi memiliki kemampuan untuk menunjukkan empati dan dukungan yang mendalam kepada orang lain. INFJ menghargai kedalaman hubungan pribadi dan intelektual, dan mereka sering berusaha menciptakan ikatan yang otentik dan bermakna. Karena kombinasi dari empati dan visi yang kuat, INFJ sering dianggap sebagai pemimpin yang inspirasional dan penasihat yang bijaksana.";
                        } else if ($mbtiType == 'ESTJ') {
                            $textarea_value = "ESTJ (Extraverted, Sensing, Thinking, Judging) adalah tipe kepribadian yang dikenal karena keteraturan, efisiensi, dan orientasi pada tugas. Individu dengan tipe ini sering memiliki kemampuan alami untuk memimpin dan mengelola berbagai situasi dengan efektif. Mereka cenderung praktis, realistis, dan fokus pada hasil yang dapat dicapai melalui tindakan yang terorganisir dan metodis.
                            ESTJ sangat menghargai struktur, aturan, dan tradisi, dan mereka sering menjadi pilar komunitas dan organisasi. Mereka cenderung membuat keputusan berdasarkan logika dan fakta, lebih memilih pendekatan langsung dan jelas. Dalam lingkungan sosial, ESTJ biasanya tegas dan percaya diri, dengan keterampilan komunikasi yang kuat yang membantu mereka memotivasi dan mengarahkan orang lain. Karena orientasi mereka yang kuat pada tujuan dan kemampuan untuk menjaga ketertiban, ESTJ sering berhasil dalam peran manajerial dan administratif.";
                        } else if ($mbtiType == 'ENTJ') {
                            $textarea_value = "ENTJ (Extraverted, Intuitive, Thinking, Judging) adalah tipe kepribadian yang dikenal karena kepemimpinan alami, visi strategis, dan kemampuan untuk mempengaruhi dan memotivasi orang lain. Individu dengan tipe ini biasanya ambisius, tegas, dan berfokus pada tujuan. Mereka memiliki kemampuan luar biasa dalam merencanakan masa depan, mengidentifikasi peluang, dan mengembangkan strategi jangka panjang untuk mencapai tujuan yang mereka tetapkan.
                            ENTJ cenderung sangat logis dan analitis, membuat keputusan berdasarkan data dan fakta daripada emosi. Mereka menghargai efisiensi dan produktivitas, sering kali mendorong diri mereka sendiri dan orang lain untuk mencapai tingkat kinerja yang tinggi. Dalam lingkungan sosial dan profesional, ENTJ biasanya sangat berani dan percaya diri, tidak takut mengambil risiko atau menghadapi tantangan. Kepribadian mereka yang dominan dan kemampuan untuk memimpin membuat mereka sering menempati posisi manajerial atau eksekutif, di mana mereka bisa menerapkan visi mereka dan mengarahkan tim mereka menuju kesuksesan.";
                        } else if ($mbtiType == 'ESFJ') {
                            $textarea_value = "ESFJ (Extraverted, Sensing, Feeling, Judging) adalah tipe kepribadian yang dikenal karena sifatnya yang ramah, perhatian, dan sangat peduli terhadap kesejahteraan orang lain. Individu dengan tipe kepribadian ini cenderung sangat sosial, menikmati interaksi dengan orang lain, dan sering kali menjadi pusat perhatian dalam kelompok mereka. Mereka memiliki kemampuan alami untuk merasakan kebutuhan orang lain dan berusaha untuk menciptakan lingkungan yang harmonis dan mendukung.
                            ESFJ sangat menghargai tradisi dan tanggung jawab, sering kali terlibat dalam kegiatan yang memperkuat hubungan keluarga dan komunitas. Mereka sangat terorganisir, mengutamakan keteraturan dan rutinitas dalam kehidupan sehari-hari. Dalam pekerjaan, ESFJ sering ditemukan dalam peran yang melibatkan layanan kepada orang lain, seperti pengajaran, perawatan kesehatan, atau pekerjaan sosial, di mana mereka bisa memanfaatkan kemampuan mereka untuk merawat dan mendukung orang lain. Mereka adalah komunikator yang efektif, mampu mengungkapkan perasaan dan pikiran mereka dengan jelas, dan sering kali berusaha untuk menyelesaikan konflik dengan cara yang diplomatis dan penuh pengertian.";
                        } else if ($mbtiType == 'ENFJ') {
                            $textarea_value = "ENFJ (Extraverted, Intuitive, Feeling, Judging) adalah tipe kepribadian yang dikenal karena sifatnya yang karismatik, empatik, dan memotivasi. Individu dengan tipe kepribadian ini memiliki kemampuan alami untuk memahami dan menghubungkan diri dengan orang lain, sering kali berperan sebagai pemimpin inspiratif yang mampu mempengaruhi dan memotivasi orang di sekitar mereka. Mereka sangat sosial, menikmati interaksi dengan berbagai macam orang, dan memiliki kemampuan untuk membuat orang merasa didengar dan dihargai.
                            ENFJ sangat peduli terhadap kesejahteraan orang lain dan berusaha menciptakan lingkungan yang harmonis dan mendukung. Mereka sering kali terlibat dalam kegiatan yang mempromosikan pertumbuhan pribadi dan komunitas, seperti pengajaran, konseling, atau advokasi. Mereka memiliki pandangan yang kuat tentang apa yang benar dan salah, dan mereka berusaha untuk menjalani kehidupan sesuai dengan nilai-nilai tersebut. Dalam pekerjaan, ENFJ sering ditemukan dalam peran yang membutuhkan kemampuan untuk memimpin dan mendukung orang lain, di mana mereka bisa menggunakan kemampuan mereka untuk memahami, menginspirasi, dan membantu orang lain mencapai potensi mereka.";
                        } else if ($mbtiType == 'ESTP') {
                            $textarea_value = "ESTP (Extraverted, Sensing, Thinking, Perceiving) adalah tipe kepribadian yang dikenal karena sifatnya yang dinamis, berani, dan praktis. Individu dengan tipe kepribadian ini senang hidup di saat ini dan menikmati berbagai pengalaman baru dan menantang. Mereka cepat dalam mengambil tindakan dan mampu berpikir cepat dalam situasi yang memerlukan keputusan mendadak, membuat mereka sangat efektif dalam situasi darurat atau yang memerlukan respons cepat.
                            ESTP sangat terampil dalam memahami dan menganalisis lingkungan sekitar mereka, sering kali menggunakan keterampilan observasional mereka untuk membaca situasi dan orang lain dengan sangat baik. Mereka memiliki kemampuan alami untuk memecahkan masalah secara praktis dan seringkali menemukan solusi yang efisien dan efektif. Di lingkungan sosial, mereka menonjol sebagai individu yang karismatik dan penuh energi, sering kali menjadi pusat perhatian dalam kelompok mereka. Mereka menikmati interaksi sosial dan sering kali berperan sebagai penghibur atau pemimpin yang memotivasi orang lain untuk terlibat dan berpartisipasi.";
                        } else if ($mbtiType == 'ESFP') {
                            $textarea_value = "ESFP (Extraverted, Sensing, Feeling, Perceiving) adalah tipe kepribadian yang dikenal karena sifatnya yang ramah, spontan, dan antusias. Individu dengan tipe kepribadian ini sangat menikmati kehidupan sosial dan senang berada di sekitar orang lain, sering kali menjadi pusat perhatian dalam berbagai acara. Mereka memiliki kemampuan alami untuk membuat orang lain merasa nyaman dan terhibur, sering kali memancarkan energi positif yang menular kepada orang-orang di sekitar mereka.
                            ESFP sangat terampil dalam merasakan dan menikmati momen saat ini, serta menghargai pengalaman sensoris dan praktis. Mereka lebih suka menghindari rutinitas yang membosankan dan lebih memilih kegiatan yang dinamis dan menyenangkan. Dalam pengambilan keputusan, mereka cenderung mengandalkan perasaan dan empati mereka, sering kali mempertimbangkan dampak emosional dari keputusan mereka terhadap orang lain. Mereka menghargai hubungan pribadi dan sering kali berusaha untuk menjaga harmoni dan kebahagiaan dalam lingkungan sosial mereka.";
                        } else {
                            $textarea_value = "Kamu belum mengisi jawaban secara keseluruhan atau mungkin saja terdapat kesamaan skor pada dominant maupun auxiliary function. Coba pikirkan kembali jawabanmu, ya!";
                        }
                    ?>
                    <textarea cols="40" rows="10">
                        <?php echo $textarea_value;?>
                    </textarea>
                </div>
                <nav>
                <a href="index.php">Mulai Ulang</a>
                </nav>
            </div>  
        </form>
        <?php
        }
    }    

    $test = new MBTIPersonalityTest();
    $test->displayTest();
    ?>
    </div>
    </body>
</html>
