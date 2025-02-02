-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2025 pada 17.34
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nuha`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username_db` varchar(50) NOT NULL,
  `password_db` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username_db`, `password_db`) VALUES
(2, 'Admin', 'nuha_solution_v2', '0f6deaa52ef8058af3ec7053099bf2d6'),
(3, 'hi', 'hi', '49f68a5c8493ec2c0bf489821c21fc3b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `nama_artikel` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `nama_artikel`, `konten`, `foto`) VALUES
(12, 'FENOMENA SALAH JURUSAN ', '<p>Fenomena salah jurusan seringkali menimbulkan problematika seperti problem dibidang akademis, problem psikologis, bahkan berdampak pada hubungan relasional dengan orang lain. Sebuah penelitian mengungkapkan bahwa salah jurusan menimbulkan rasa kecewa, marah, <em>insecure</em>, menyesal, dan stres. Dampak kekecewaan yang paling merugikan adalah kehilangan motivasi dalam belajar.&nbsp;Berdasarkan data <em>Indonesia Career Center Network</em> (ICCN) pada tahun 2017, lebih dari 71,7% orang bekerja tidak sesuai dengan pendidikannya, sementara prosentase pelajar dan mahasiswa tidak linear dengan minat dan bakatnya menempati angka 87%.</p>\r\n\r\n<p>Dalam hal ini, mahasiswa harus mampu mengatasi tekanan dengan mengembangkan strategi adaptasi yang memadai. Berikut beberapa langkah yang bisa dicoba:</p>\r\n\r\n<ol>\r\n	<li>Buat rencana untuk kedepannya</li>\r\n	<li>Temukan ketrampilan kamu, dengan mencoba segala bidang, sampai menemukan minat yang sesuai dengan potensi diri.</li>\r\n	<li>Cobalah untuk tidak menyerah begitu saja, dan berfikir positif, agar dapat mengenali lagi minat dan bakat yang ada dalam diri.</li>\r\n	<li>Meminta bantuan orang terdekat atau bantuan profesionalKamu bisa datang ke biro psikologi terdekatmu, melakukan tes minat dan bakat secara offline ataupun secara online.</li>\r\n</ol>\r\n\r\n<p>Gimana? hari gini masih bingung sama minat dan bakat sendiri?&nbsp;Yuk kami bantu temukan jawabannya melalui assesment tes minat dan bakat di <strong>Biro Psikologi Nuha Solution.</strong></p>\r\n\r\n<p>Daftar Pustaka:</p>\r\n\r\n<p>Rohmah, A., &amp; Azzahrah, F. (2021). Strategi Coping Nilai Akademik Pada Mahasiswa Salah Jurusan.&nbsp;<em>Literasi: Jurnal Kajian Keislaman Multi-Perspektif</em>,&nbsp;<em>1</em>(2), 223-252. <a href=\"https://ejournal.iainsurakarta.ac.id/index.php/literasi/article/view/3714\">https://ejournal.iainsurakarta.ac.id/index.php/literasi/article/view/3714</a>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1595130081_salah jurusan.jpg'),
(17, 'KEKERASAN SEKSUAL : Kami Korban yang tidak didengar', '<p><strong>Maraknya fenomena kekerasan seksual dikalangan masyarakat, menjadi sebuah fenomena yang memilukan.&nbsp;Kekerasan seksual adalah suatu tindakan perbuatan yang mengakibatkan ketidaknyamanan baik secara Fisik (memukul/menampar, menendang, mendorong, mencubit, membakar menyundut rokok, mecekik, dll)&nbsp;maupun verbal (menglok-olok bentuk tubuh , berbohong, dll). Fenomena mengerikan ini banyak terjadi dimasyarkat, tetapi banyak orang yang menutup mata dan telinganya, dari penderitaan&nbsp; para korban. Tindakan yang tidak pantas ini dilakukan oleh para oknum yang tidak bertanggung jawab, dan memikirkan kepentingan pribadi. Fenomena ini dapat dialami oleh&nbsp;pasangan, anak-anak, dan orang tua. Kekerasan dalam bentuk seksual itu seperti memaksa berhubungan seksual, menyentuh diarea yang membuat tidak nyaman, bisa saja mengirim pesan vulgar kepada lawan jenis, pemaksaan untuk aborsi bagi korban kekerasan seksual. Fenomena ini marak terjadi dikalangan anak muda yang berpacaran. Gaya berpacaran yang tidak sewajarnya dan kurang sehat, memiliki peluang lebih tinggi melakukan kekerasan seksual.&nbsp;</strong></p>\r\n\r\n<p><strong>Para korban sejatinya mendapatkan bantuan secara psikologis dan hukum, namun mirisnya korban kekerasan tidak berani speak up. Sejatinya mengutarakan apa yang kita rasakan adalah hal yang melegakan, namun beberapa orang termasuk para korban kekerasan seksual kesulitan mengutarakan perasaan mereka, karena rasa malu, dan stereotif negatif yang akan didaptkan korban jika berbicara.&nbsp; Untuk itu hal-hal yang bisa membantu korban untuk berani berbicara dan mengutarakan apa yang dirasakan, seperti :&nbsp;</strong></p>\r\n\r\n<ol>\r\n	<li><strong>Mencari tempat nyaman untuk bercerita&nbsp;</strong></li>\r\n	<li><strong>Mendekatkan diri kepada sang pencipta&nbsp;</strong></li>\r\n	<li><strong>Mengunjungi lembaga profesional untuk mendaptkan penanganan secara psikologis, seperti datang ke&nbsp;&quot;Biro Nuha Solution &quot;.</strong></li>\r\n</ol>\r\n', '1049591939_artikel 2.jpg'),
(18, 'Dirgahayu Republik Indonesia : Promo Kemerdekaan, Potongan Layanan Psikologi', '<p>Kemerdekaan sejatinya sesuatu yang patut untuk dirayakan dan dimaknai setiap tahunnya, seperti dirgahayu kemerdekaan republik Indonesia ke 77 tahun yang akan diperingati pada 17 Agustus 2022. Dalam memperingati dirgahayu republik Indonesia,&nbsp;Biro Psikologi Nuha Solution akan memberikan promo spesial kemerdekaan, bagi teman Nuha yang akan menggunakan jasa layanan psikologi dari kami. Promo yang kami tawarkan meliputi :</p>\r\n\r\n<ol>\r\n	<li><strong>Tes Minat Bakat - Rp.60.000 (tarif normal Rp.120.000)</strong></li>\r\n	<li><strong>Tes IQ Online - Rp.50.000 (tarif normal Rp.100.000)</strong></li>\r\n	<li><strong>Konseling Psikologi - Rp.100.000 (tarif normal Rp. 150.000)</strong></li>\r\n	<li><strong>Fun Game - Rp.250.000</strong></li>\r\n</ol>\r\n\r\n<p>Tunggu apalagi, yuk segera datang dan kunjungi Biro Psikologi &quot;Nuha Solution&quot;, karena kami melayani dengan Objektif, Ramah, Tuntas dan Profesional.</p>\r\n', '762303777_Foto dari Aninda.jpg'),
(20, 'Body Shaming: Apa aku merusak mental mu?', '<p><em>Body shaming</em> dikenal sebagai sebuah bentuk ejekan pada fisik seseorang, dan salah satu bentuk dari perilaku bullying verbal yang dilakukan pada diri seseorang. <em>Body shaming </em>tidak hanya dilakukan oleh orang lain, tetapi diri sendiri juga dapat melakukan hal tersebut sebagai bentuk perilaku rendah diri karena tidak memiliki rasa syukur terhadap dirinya.&nbsp;Menurut kamus <em>oxfor</em>, <em>body shaming</em> adalah sebuah tindakan mempermalukan seseorang dengan cara mengomentari bentuk fisik yang mereka miliki.</p>\r\n\r\n<p>Seseorang yang mengalami <em>body shaming</em> akan merasa malu, karena&nbsp; dirinya&nbsp; dipermalukan orang lain,selain itu merasa, tidak percaya diri, hingga resiko bunuh diri karena mendapatkaan tekanan dariluar, Gangguan lainnya seperti,&nbsp;<em>Axienty, Anorexia</em>&nbsp;&amp; <em>Bulimia</em>, serta merasa rendah diri. Terdapat beberapa cara yang dapat dilakukan untuk pencegahan <em>body shaming</em> tersebut, diantaranya :</p>\r\n\r\n<ol>\r\n	<li>Belajar menjadi pribadi yang lebih baik &amp; Menyadari bahwa semua manusia tidak sempurna</li>\r\n	<li>Berhenti membandingkan diri sendiri dengan orang lain &amp; Berhenti memikirkan orang lain</li>\r\n</ol>\r\n\r\n<p>Selain itu untuk menghindari gangguan mental karena adanya <em>body shaming</em> tersebut. Individu juga perlu memiliki beberapa cara diantaranya :</p>\r\n\r\n<ol>\r\n	<li>Berlatih mensyukuri kondisi diri sendiri, dengan menerima kekurangan dan kelebihan diri.&nbsp;</li>\r\n	<li>Ciptakan inner supporter untuk melawan inner bully</li>\r\n	<li>Mengubah pola pikir terhadap diri sendiri</li>\r\n	<li>Selektif terhadap pesan di media sosial&nbsp;</li>\r\n	<li>Mengunjungi ahli profresional, seperti &quot; Biro Psikologi Nuha Solution&quot;&nbsp;</li>\r\n</ol>\r\n\r\n<p>pict by:&nbsp;<a href=\"https://www.independenmedia.id/various/pr-2762562763/anda-ternyata-sering-lakukan-body-shaming-ke-sahabat-ini-buktinya\">https://www.independenmedia.id/various/pr-2762562763/anda-ternyata-sering-lakukan-body-shaming', '292808008_body shaming.jpg'),
(23, 'Apa Itu Krisis Kepercayaan Diri ?', '<p>Perkembangan zaman yang pesat dan juga adaptasi yang sesuai dengan kebutuhan di masyarakat sekarang ini bisa memunculkan krisis kepercayaan diri. Krisis kepercayaan diri ini penting untuk diberikan perhatian khusus berupa pencegahan dan peningkatan percaya diri.&nbsp;Krisis kepercayaan diri bisa menghambat karir kamu di kuliah maupun pekerjaan. Penting untuk memahami bagaimana cara meningkatkan kepercayaan diri. Kepercayaan diri merupakan salah satu aspek kepribadian yang berupa keyakinan akan kemampuan diri seseorang sehingga tidak terpengaruh oleh orang lain dan dapat bertindak sesuai kehendak, gembira, optimis, cukup toleran, dan bertanggung jawab (Ghufron dan Risnawari, 2010). Salah satu ciri orang yang memiliki kepercayaan diri yang baik yakni memahami betul kekurangan dan kelebihan yang dimilikinya kemudian dapat mengembangkan potensi dalam dirinya. Mengenal potensi diri adalah sangat penting dalam upaya untuk merencanakan suatu pekerjaan atau karir sehingga akan dapat digunakan sebagai acuan dalam melakukan pemilihan dan penetapan suatu pekerjaan yang sesuai dengan potensi yang dimilikinya.&nbsp;</p>\r\n\r\n<p>Ada beberapa langkah yang dapat dilakukan untuk mengenali potensi diri :&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Kenali diri dan Fokus pada diri sendiri guna memahami potensi yang ada dalam diri, dan jangan takut untuk mencoba hal baru dan keluar dari Zona nyaman&nbsp;</li>\r\n	<li>Tentukan tujuan dengan menggali informasi sebanyak-banyaknya, dan sharing dengan orang-orang terdekat&nbsp;</li>\r\n	<li>Tes Assessment guna mengenali minat dan bakat, kemampuan serta potensi yang ada diri&nbsp;</li>\r\n</ol>\r\n\r\n<p>Yuk mulai saat ini untuk meningkatkan kepercayaan diri kita dengan memahami potensi dalam diri, hal ini bisa membuat kita jauh lebih bangga dengan diri kita loh sobat....&nbsp;</p>\r\n\r\n<p>Referensi: Jurnal Ilmiah</p>\r\n\r\n<p>pict by: Google&nbsp;</p>\r\n', '278984938_krisis kepercayaan diri.png'),
(25, 'Jangan Nambahi Pusing: Yuk Jauhi Overthinking', '<p>Overthinking sudah menjadi pembahasan yang melekat terutama di kaum mahasiswa. Tapi apa sih sebenarnya overthinking itu?. Overthinking adalah memikirkan sesuatu hal secara berlebihan baik yang sudah terjadi maupun belum terjadi dan bisa jadi hal tersebut jika dilakukan secara terus menerus akan menjadi kebiasaan yang kurang baik. Mungkin diantaranya penolakan masa lalu, rasa sakit hati, kekhawatiran-kekhawatiran yang akan terjadi masa yang akan mendatang dan lain-lain.</p>\r\n\r\n<p>Overthinking dapat memberikan dampak buruk bagi kesehatan fisik dan mental kamu. Memikirkan sesuatu secara berlebihan dapat membuang energi kamu dan menimbulkan kecemasan, serta dapat mengganggu kualitas tidur kamu dan produktivitasmu.</p>\r\n\r\n<p>Nah, ada beberapa tips yang bisa kamu lakukan untuk mengurangi overthinking</p>\r\n\r\n<ol>\r\n	<li>Temukan pengalihan perhatian</li>\r\n</ol>\r\n\r\n<p>Kamu bisa mengatasi overthinking dengan melakukan aktivitas atau hal-hal yang kamu sukai. Apapun itu asal bersifat positif dan bisa membuat kamu produktif.</p>\r\n\r\n<ol>\r\n	<li>Beri batas waktu dalam mengambil keputusan</li>\r\n</ol>\r\n\r\n<p>Biasanya overthinking karena kita dihadapkan dengan pilihan-pilihan yang besar dan pengambilan keputusan yang berat. Oleh karena itu kita harus memberikan batasan untuk diir kita sendiri kapan kita harus memikirkan hal tersebut dan kapan kita untuk tidak memikirkan hal tersebut.</p>\r\n\r\n<ol>\r\n	<li>Bersyukurlah&nbsp;</li>\r\n</ol>\r\n\r\n<p>Dengan kita merasa bersyukur terhadap apa yang sudah kita miliki dan kita raih hal tersebut dapat mengurangi rasa overthinking kita. Bersyukur bukan berarti berpasrah diri tentang apa yang sudah kita dapatkan. Namun, kita juga terus berusaha dan berdoa untuk hal-hal yang terbaik untuk kita dan orang lain.</p>\r\n\r\n<p>Nah, maka dari itu mulailah sayangi fisik dan mental kita dengan mengurangi overthinking.</p>\r\n', '334765123_overthingking.jpg'),
(28, 'Kenalan Dengan Konsep Toxic Positivity', '<p>Toxic positivity adalah gambaran berlebihan terhadap kebahgian, dan mengabaikan emosi negatif, padahal seseorang dapat mengalami masalah dan regulasi emosi, dan itu sangat wajar. Menurut Quintero&amp;Long:2019 (dalam Konjongian m,g,r, dkk :2021) toxic positivity adalah berfokus pada hal positif &amp; mengabaikan apapun yang memicu emosi negatif, seperti selalu bersyukur pada keadaan yang sedang tidak baik, dan membandingkan dengan masalah orang lain, seperti &ldquo; aku bukannya gimana-gimana, tapi masalah mu itu gak seberapa, masih berat masalah dia, tapi liat dia tuh, bisa tuh dia nglewatin itu tanpa ngeluh&rdquo;, yang seharusnya ketika mendapat masalah, seseorang memberikan dukungannya bukan memberikan tanggapan seperti itu. Nah kira-kira kamu termasuk orang yang memakai konsep toxic positivity gak ya ? yuk kenali tanda-tandanya:</p>\r\n\r\n<ol>\r\n	<li>Menyembunyikan perasaan yang sebenarnya dirasakan &amp; terkesan menghindar atau membiarkan masalah</li>\r\n	<li>Merasa bersalah ketika merasakan atau mengungkapkan emosi negatif</li>\r\n	<li>Mencoba memberikan semangat namun dengan kata negatif</li>\r\n</ol>\r\n\r\n<p>Gimana ya cara untuk menghindari konsep toxic positivity? Kalian bisa mencoba tips ini:</p>\r\n\r\n<ol>\r\n	<li>Rasakan dan kelola emosi</li>\r\n	<li>Coba berusaha untuk memahami bukan menghakimi</li>\r\n	<li>Hindari membanding-bandingkan masalah</li>\r\n	<li>Mengurangi penggunaan media sosial</li>\r\n</ol>\r\n\r\n<p>Nah setelah membaca artikel ini semoga dapat menambah pengetahuan serta meningkatkan kesadaran dalam diri bahwa &ldquo; tidak apa-apa merasa tidak baik-baik saja, kamu boleh bersedih, menangis, dan mengeluh, dan bangkit kembali&rdquo;</p>\r\n\r\n<p>Referensi:</p>\r\n\r\n<p>Pict by: Google</p>\r\n\r\n<p>Konjongian, MGR,dkk. (2021).<em>&nbsp;Psychopreneur Journal.</em>&nbsp;Toxic Positivity: Sisi Lain dari Konsep untuk Selalu Positif dalam Segala Kondisi. 6(1).</p>\r\n\r\n<p><a href=\"https://www.alodokter.com/mengenal-lebih-jauh-tentang-toxic-positivity\">https://www.alodokter.com/men', '71363325_download toxic.jpg'),
(33, 'Bentuk Kekerasan Psikologis: Silent Treatment ', '<p>Bentuk Kekerasan Psikologis: <em>Silent Treatment</em>&nbsp;</p>\r\n\r\n<p>Halo, sobat nuha ! Gimana kabarnya?</p>\r\n\r\n<p>Kalian pernah gak, didiemin sama seseorang setelah bertengkar? Bingung gak sih? Yaa, gue juga bingung sebenernya. Tapi, sebelum kita fokus ke masalah ini, kita harus tau dulu nih! Apa maksud dari perilaku ngediemin orang kalau habis bertengkar.&nbsp;</p>\r\n\r\n<p>Ok, kita bahas langsung aja!</p>\r\n\r\n<p>Jadi dalam istilah psikologi, perilaku ini disebut dengan <em>silent treatment</em>.&nbsp;<em>Silent treatment</em> merupakan bentuk penolakan dalam berkomunikasi dengan orang lain. Hal ini biasanya terjadi setelah adanya pertengkaran misalnya adu argumen antar individu.&nbsp;</p>\r\n\r\n<p>Menurut Psikiater Jiemi Ardiyan, orang yang melakukan silent treatment biasanya ingin menghukum orang lain agar sadar diri, menyakiti orang lain dengan sikap diam tersebut atau memanipulasinya tanpa sadar. Akibatnya, korban akan merasa bingung, takut, marah, frustasi, merasa rendah diri dan merasa tidak di hargai. Dampak psikologis bagi korban inilah yang menjadikan silent treatment termasuk dalam kategori kekerasan emosional.&nbsp;</p>\r\n\r\n<p>Berikut beberapa bentuk dari <em>silent treatment</em>.</p>\r\n\r\n<ul>\r\n	<li>Mengabaikan pesan teks, panggilan telepon dan lain-lain</li>\r\n	<li>Menolak untuk berbicara&nbsp;</li>\r\n	<li>Berpura-pura tidak mendengarkan&nbsp;</li>\r\n	<li>Mengabaikan permintaan seseorang untuk berkomunikasi dengan jelas</li>\r\n</ul>\r\n\r\n<p>Dilansir dari Medical News Today terdapat&nbsp; beberapa alasan seseorang melakukan <em>silent treatment</em>, sebagai berikut.</p>\r\n\r\n<ul>\r\n	<li>Sebagai bentuk dari penghindaran&nbsp;</li>\r\n</ul>\r\n\r\n<p>Seseorang biasanya memilih untuk diam ketika mereka tidak tahu harus merespon seperti apa dan lebih memilih untuk menghindari konflik&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Sebagai bentuk komunikasi&nbsp;</li>\r\n</ul>\r\n\r\n<p>Sikap silent treatment diambil disaat individu tidak tahu cara mengungkapkan perasaannya tetapi, ia ingin pasangannya mengetahui perasaan tersebut</p>\r\n\r\n<ul>\r\n	<li>Sebagai bentuk hukuman</li>\r\n</ul>\r\n\r\n<p>Seseorang yang memilih untuk diam, hal ini dilakukan untuk mengontrol dan menguasai orang lain&nbsp;</p>\r\n\r\n<p>Cara mengatasi silent treatment</p>\r\n\r\n<ul>\r\n	<li>Memperjelas situasi</li>\r\n</ul>\r\n\r\n<p>Menyadarkan pelaku akan sikapnya agar dapat membuka komunikais yang lebih efektif</p>\r\n\r\n<ul>\r\n	<li>Mengakui perasaan orang lain</li>\r\n</ul>\r\n\r\n<p>Dengan meminta pelaku untuk menjelaskan perasaanya sehingga mereka tahu bahwa yang ia rasakan itu valid dan hal ini memudahkan untuk membuka percakapan.</p>\r\n\r\n<ul>\r\n	<li>Meminta maaf atas kata-kata dan tindakan</li>\r\n</ul>\r\n\r\n<p>Sebaiknya menghindari perasaan menyalahkan diri sendiri, namun pelaku juga memerlukan permintaan maaf karena telah berbicara sesuatu yang menyakiti perasaan.</p>\r\n\r\n<ul>\r\n	<li>Bersikap tenang dan mengatur waktu untuk menyelesaikan masalah</li>\r\n</ul>\r\n\r\n<p>Terkadang seseorang memilih untuk melakukan silent treatment karena takut akan mengatakan sesuatu yang memperburuk situasi. Sikap tenang ini diperlukan untuk membantu kedua belah pihak untuk menenangkan diri saat akan membahas masalah yang terjadi.</p>\r\n\r\n<p>Sobat nuha, sikap <em>silent treatment</em> adalah bentuk komunikasi yang tidak produktif serta tidak efektif dalam sebuah hubungan. Walaupun sikap ini termasuk dakam perlindungan diri, namun sikap ini menunjukan kekerasan secara emosional.&nbsp;</p>\r\n\r\n<p>Sumber:<br />\r\n<a href=\"https://www.orami.co.id/magazine/silent-treatment\">https://www.orami.co.id/magazine/silent-treatment</a></p>\r\n\r\n<p><a href=\"https://www.medicalnewstoday.com/\">https://www.medicalnewstoday.com/</a></p>\r\n\r\n<p><a href=\"https://twitter.com/jiemiardian/status/1314064190424797185?t=Gx6IehiZCy_9tyDtdvWJRg&amp;s=19\">https://twitter.com/jiemiardian/status/1314064190424797185?t=Gx6IehiZCy_9tyDtdvWJRg&amp;s=19</a></p>\r\n\r\n<p><a href=\"https://connect.springerpub.com/content/sgrvv\">https://connect.springerpub.com/content/sgrvv</a></p>\r\n\r\n<p>Pict by:</p>\r\n\r\n<p><a href=\"https://fresh.suakaonline.com/silent-treatment-sebuah-bentuk-kekerasan-emosional/\">https://fresh.suakaonline.com/silent-treatment-sebuah-bentuk-kekerasan-emosional/</a></p>\r\n', '1173892946_bbbb.jpg'),
(34, 'FENOMENA BULLYING PADA ANAK', '<p>Hai sobat Nuha, kali ini kita akan membahas tentang fenomena bullying. Sungguh miris rasanya, ketika kita melihat keadilan tidak berada di setiap anak-anak. Anak-anak yang seharusnya berbaur dan mulai membangun serta mewarnai setiap kertas putih dihidupnya dengan warna-warni yang indah, justru harus meninggalkan setitik hitam yang tergambar dengan luka. Seperti luka karena tindakan bullying.&nbsp;</p>\r\n\r\n<p><br />\r\nBullying adalah pola perilaku, bukan insiden yang terjadi sekali-kali. Anak-anak yang melakukan bullying biasanya berasal dari status sosial atau posisi kekuasaan yang lebih tinggi, seperti anak-anak yang lebih besar, lebih kuat, atau dianggap populer sehingga dapat menyalahgunakan posisinya.&nbsp;</p>\r\n\r\n<p>Banyak tindakan bullying yang dilakukan pada lingkungan yang seharusnya memberikan rasa nyaman dan aman, salah satunya di sekolah, namun tak jarang banyak kasus bullying tertinggi terjadi disebuah sekolah. Tindakan bullying ini dapat memberikan dampak buruk kepada korban maupun pelakunya.&nbsp; Korban yang mengalami tindakan ini akan mengalami gangguan mental, penurunan dalam belajar, bahkan hingga membuat korbannya kehilangan semangat hidup.&nbsp;&nbsp;</p>\r\n\r\n<p>Tindakan bullying dapat terbagi menjadi:&nbsp;<br />\r\n1. Bullying verbal&nbsp;<br />\r\nTindakan bullying ini dapat digambarkan dengan tindakan mencaci maki korban nya sehingga dapat menurunkan harga diri dan kepercayaan diri sang korban, tindakan mengolok-olok ini akan sangat membekas di benak korban hingga dapat menyebabkan luka batin dan trauma</p>\r\n\r\n<p><br />\r\n2. Cyberbullying<br />\r\nTindakan bullying ini dapat digambarkan dengan banyaknya komentar-komentar negatif di sosial media, dimana pengguna sosmed dengan mudah nya menilai dan menghakimi setiap apa yang mereka lihat dengan kata-kata yang seharusnya tidak dikatakan, melalui ketikan mereka, korban akan sangat merasa tertekan dan merasakan gangguan psikologis lainnya&nbsp;</p>\r\n\r\n<p><br />\r\n3. Bullying fisik&nbsp;<br />\r\nTindakan bullying ini berbentuk kontak fisik/ kekerasan fisik yang akan diberikan pelaku kepada korban nya, bentuk tindakan bullying ini bukan hanya berbekas secara batin namun juga secara fisik.&nbsp;</p>\r\n\r\n<p>Untuk para korban yang pernah merasakan tindakan bullying ini, sebaiknya menceritakan apa yang mereka alami kepada orang terdekat yang mereka percaya, atau melaporkannya tindakan tersebut kepada pihak yang berwenang, agar nantinya korban mendapatkan perlindungan dan rasa aman untuk berbicara membela diri dan membangun hidupnya kembali.</p>\r\n', '395120104_Grafis Sosial Media Acara Workshop Coklat dan Hitam (5).png'),
(37, 'MENGENAL TIPE KEPRIBADIAN MANUSIA', '<p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Mengenal tipe kepribadian </font></font><br />\r\n<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Dalam ilmu psikologi karateristik manusia dapat dibagi menjadi beberapa golongan atau tipe, seperti: </font></font><br />\r\n<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">1. Introvert</font></font></p>\r\n\r\n<p><br />\r\n<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Tipe kepribadian ini memiliki karakteristik kepribadian yang cenderung tertutup. </font><font style=\"vertical-align: inherit;\">Hingga terkadang mengalami kesulitan dalam beradaptasi dengan lingkungan sosialnya. </font><font style=\"vertical-align: inherit;\">Tipe ini memiliki ciri-ciri yakni:</font></font></p>\r\n\r\n<ul>\r\n	<li><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Suka bekerja/ mengerjakan sesuatu sendiri&nbsp;</font></font></li>\r\n	<li><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Tidakmenyukai keramaian&nbsp;</font></font></li>\r\n	<li><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">memulai pembicaraan terlebih dahulu&nbsp;</font></font></li>\r\n	<li><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Lebih pasif, pendiam, sensitif</font></font></li>\r\n	<li><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Senang waktu dengan sendirinya</font></font></li>\r\n	<li><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Lingkar pertemanan yang sedikit,dll.</font></font></li>\r\n</ul>\r\n\r\n<p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">2.&nbsp; </font></font><br />\r\n<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Tipe kepribadian ekstrovert ini memiliki karakteristik kepribadian lebih terbuka untuk bersosialisasi, adapun ciri-ciri kepribadian ekstrovert seperti:&nbsp;</font></font></p>\r\n\r\n<ul>\r\n	<li><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Suka bekerja dalam tim</font></font></li>\r\n	<li><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Agresif, lincah, optimis</font></font></li>\r\n	<li><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Memiliki lingkar pertemanan yang luas&nbsp;</font></font></li>\r\n	<li><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Menyukai adanya perubahan</font></font></li>\r\n	<li><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Mudah beradaptasi dengan hal baru,dll.</font></font></li>\r\n</ul>\r\n\r\n<p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Nah, itulah beberapa karakteristik dari tipe kepribadian introvert dan ekstrovert, jadi sobat Nuha termasuk yang mana nih kira-kira?&nbsp;</font></font></p>\r\n\r\n<p><br />\r\n<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Hmm dari pada sobat Nuha masih merasa kebinggungan dengan tipe kepribadian kalian, sobat Nuha bisa melakukan tes kepribadian dibeberapa psikologi yang menyediakan layanan tersebut, seperti biologi psikologi Nuha Solution, untuk mengetahui tipe kepribadian kalian dengan lebih mendalam.&nbsp;</font></font></p>\r\n', '1769274304_Coklat Minimalis Modern Simpel Promo Produk Interior Furniture Instagram Post.png'),
(40, 'SELF TALK: Berbicara dengan diri sendiri tidaklah salah ', '<p>Kalimat-kalimat self talk yang dapat kita katakana kepada diri kita sendiri seperti beberapa contoh dibawah ini:</p>\r\n\r\n<ol>\r\n	<li>Terimakasih aku sudah berusaha sampai saat ini, aku hebat, kita hebat</li>\r\n	<li>Aku berharga dan aku unik</li>\r\n	<li>Aku bangga dengan diri ku sendiri</li>\r\n	<li>Tidak mengapa ya melakukan kesalahan, hai diriku, kita pasti bisa melaluinya.</li>\r\n</ol>\r\n\r\n<p>Nah, itulah beberapa informasi yang dapat Minha bagi kepada kalian semua, semoga informasi ini dapat memacu perubahan didalam diri kita semua lewat kalimat-kalimat positif untuk diri sendiri.</p>\r\n', '399238168_coklat bunga kata kata bijak foto instagram post (5)-min.png'),
(41, 'GANGGUAN MAKAN - EATING DISORDER', '<p>Hai sobat nuha, kali ini Minha akan berbagi informasi terkait gangguan makan. Sebelumnya seperti yang kita tahu, makan adalah sebuah kebutuhan setiap manusia. Makan menjadi salah satu cara untuk bertahan hidup. Namun makan mejadi salah satu hal yang sensitive bagi berbagai orang, hingga membuat seseorang mengalami gangguan.</p>\r\n\r\n<p>Beberapa contoh gangguan makan:</p>\r\n\r\n<ol>\r\n	<li>Anoreksia Nervosa</li>\r\n</ol>\r\n\r\n<p>Gangguan ini membuat individu berusaha untuk kurus secara terus menerus, dengan cara menahan rasa lapar. Gangguan ini biasanya muncul pada remaja ataupun wanita, dan jarang ditemui pada seorang pria. Individu dengan gangguan ini memiliki obsesi tentang berat badan, ciri lain individu dengan gangguan ini adalah, rasa takut yang intens terhadap kenaikan berat badan yang tidak akan menurun, individu merasa belum kurus saat sebetulnya berat badannya sudah mengalami penurunan dan telah cukup kurus, dll.</p>\r\n\r\n<ol>\r\n	<li>Bulimia Nervosa</li>\r\n</ol>\r\n\r\n<p>Gangguan ini membuat individu terkhusus wanita, memiliki nafsu makan atau pola makan yang berlebih dan kemudian memuntahkannya. Individu dengan gangguan ini akan memaksa memuntahkan semua makananannya hingga menggunakan obat-obatan pencahar, motif dari perilaku tersebut didukung oleh ketakutan individu akan kenaikan berat badan, yang akan membuat individu merasa cemas, stress bahkan mengalami depresi.</p>\r\n\r\n<ol>\r\n	<li>Binge Eating Disorder (BED) / gangguan pesta makanan berlebihan</li>\r\n</ol>\r\n\r\n<p>Gangguan ini dicirikan dengan episode berulang memakan lebih banyak makanan yang terjadi dalam suatu periode waktu yang pendek dibandingkan kebayakan orang pada saat dimana seseorang merasakan kurangnya kontrol terhadap perilaku makan. Mayoritas individu dengan BED, mengalami obesitas atau kelbihan berat badan. Individu dengan gangguan ini seringkali mengalami stress atau tertekan yang kemudian cara mengatasi hal tersebut dengan melakukan pesta makanan.</p>\r\n\r\n<p>Semoga informasi kali ini bisa menambah pengetahuan sobat nuha, terimakasih sudah membaca.&nbsp;</p>\r\n', '886971249_Pink Minimalist Beauty Skincare Instagram Post (1).png'),
(42, 'CINTA DALAM ILMU PSIKOLOGI', '<p>Hallo sobat Nuha&hellip;.</p>\r\n\r\n<p>Minha kali ini akan berbagi informasi tentang &ldquo;Cinta&rdquo;, hmmm siapa sih yang gak mengenal cinta?</p>\r\n\r\n<p>Semua orang pasti apa itu cinta, tapi nih tapi tidak semua orang bisa memaknai cinta bahkan beberapa orang masih binggung dengan bentuk cinta yang ada. Nah kali ini kita akan mebahas cinta dalam sudut pandang ilmu psikologi ya, terkhusus ilmu psikologi sosial.</p>\r\n\r\n<p>Dalam ilmu psikologi social cinta dapat didefinisikan sebagai berbagai jenis hubungan manusia, seperti persahabatan, dan hubungan romantic. cinta dating karena terbiasa, cinta dating karena kecocokan atau[un kemistri, itulah beberapa anggapan jika kita menanyakan mengapa kita menjadi cinta?</p>\r\n\r\n<p>Dalam dunia psikologi hal tersbut dapat dijelakan bawasanya sesorang yang memiliki rasa cinta akan merasakan Exposure Effect, dimana dapat dijelaskan dalam fenomena ini bawasanya semakin sering kita menemui seseorang atau sesuatu (individu,kata,gambar), semakin besar kemungkinan kita menyukai orang atau benda tersebut tanpa kita sadari.</p>\r\n\r\n<p>Dalam kehidupan sehari-hari kita dapat mendengar dan mengenal kata dan makna cinta lewat syair lagu, puisi serta buku, dan secara tidak langsung pun kita menerima dan memberikan cinta kepada orang-orang yang ada disekitar kita.</p>\r\n\r\n<p>Cinta dapat terbagi menjadi berbagi jenis, yang akan kita bahas kali ini, Menurut Heudrick &amp; Hendrick, 2006, cinta terbagi menjadi cinta romantis dan cinta membara.</p>\r\n\r\n<ul>\r\n	<li>Cinta Romatis (<em>romantic or passionate love)</em></li>\r\n</ul>\r\n\r\n<p>Jenis cinta ini dapat dapat diartikan sebagai cinta yang memiliki unsur seksualitas dan ketertarikan fisik yang kuat, umumnya dominan ditahap awal hubungan</p>\r\n\r\n<ul>\r\n	<li>Cinta Membara <em>(affectionate or companionate love)</em></li>\r\n</ul>\r\n\r\n<p>Jenis cinta ini dapat diartikan sebagai cinta yang terjadi ketika individu menginginkan seseorang untuk dekat dengannya dan memiliki afeksi yang dalam terhadap orang terdekat.</p>\r\n\r\n<p>Oke sobat Nuha, itulah pembahasan kali ini tentang &ldquo;Cinta dalam ilmu psikologi&rdquo;, semoga pembahasan kali ini dapat menambah ilmu dan pengetahuan kalian, Minha ucapkan Terimakasih.</p>\r\n', '1058258119_Produk Skincare Terbaru Postingan Instagram (2).png'),
(43, 'MENJADI PENDENGAR YANG BAIK SECARA EMPATIK ', '<p>Hallo sobat Nuha&hellip;</p>\r\n\r\n<p>Minha kali ini akan berbagi informasi menarik, tentang bagaimaa menjadi seorang pendengar yang baik secara empatik.</p>\r\n\r\n<p>Apakah sobat nuha disini sering dijadikan tempat untuk teman ataupun saudara sebagai tempat bercerita?</p>\r\n\r\n<p>Untuk mendengarkan cerita ataupun kisah dari seseorang memanglah terlihat seperti hal yang mudah, namun tidak semua orang mampu untuk mendengarkan dan memahami makna setiap cerita yang ada. Bagaimana kita seharusnya menanggapi, bagaimana seharusnya kita bersikap, hal tersebut yang terkadang luput dari kita.</p>\r\n\r\n<p>Mendengarkan cerita atau kisah dari seseorang memang membutuhkan ketrampilan khusus. Menemukan sseorang yang bisa kita ajak untuk berbagi kisah ataupun kesulitan kita terkadang juga sulit, karena banyak dari mereka hanya ingin tau saja apa yang menimpa kita tanpa ada rasa empati atau rasa ketertarikan lebih dalam untuk memahami dan memaknai kisah kita. Nah untuk itu beberapa cara dapat kita lakukan agar kita dapat menjadi pendengar yang baik sekaligus memiliki rasa empati.</p>\r\n\r\n<ol>\r\n	<li>Membuat kontak mata dengan pembicara</li>\r\n	<li>Hindari gerakan atau perilaku yang menimbulkan gangguan</li>\r\n	<li>Ajukan pertayaan dan berikan tanggapan yang sesuai</li>\r\n	<li>Jadilah pendengar sekaligus pembicara yang baik</li>\r\n	<li>Berusaha mengerti</li>\r\n	<li>Tunjukan minat dan ketertarikan serta kepedulian</li>\r\n</ol>\r\n\r\n<p>Oke sobat Nuha, itulah pembahasan kali ini tentang, semoga pembahasan kali ini dapat menambah ilmu dan pengetahuan kalian, Minha ucapkan Terimakasih</p>\r\n', '1235173736_IIII.png'),
(44, 'KENALI TANDA PROKRASTINASI AKADEMIK', '<p>Hallo sobat Nuha, Minha kali ini ada pembahasan yang menarik nih, kira-kira apa ya?</p>\r\n\r\n<p>Hmm, oke langsung saja, Minha kali ini akan membahasa tentang &ldquo;Tanda Perilaku Prokrastinasi Akademik&rdquo;. Oke kita mulai yuk kita simak</p>\r\n\r\n<p>Menunda tugas menjadi salah satu perilaku yang sering kali kita temui, perilaku yang kurang sesuai ini biasanya banyak kita jumpai pada kalangan pelajar. Seperti yang kita tahu pelajar yang memiliki tugas untuk belajar dan mempelajari sesuatu dengan berbagi media yang ada salah satunya adalah melalui pemberian tugas-tugas.</p>\r\n\r\n<p>Namun seringkali tugas ditinggalkan begitu saja, alih-alih segera dituntaskan, banyak dari mereka memilih untuk menunda mengerjakannya, nah perilaku ini didalam ilmu psikologi dikenal dengan &ldquo;Prokrastinasi&rdquo;, jika hal ini terjadi pada seorang pelajar maupun mahasiswa maka dikenal dengan &ldquo;Prokrastinasi Akademik&rdquo;</p>\r\n\r\n<p>Lebih jelasnya Prokrastinasi sendiri adalah suatu kecenderungan untuk menunda dalam memulai maupun menyelesaikan pekerjaan secara keseluruhan, tetapi melakukan aktivitas lain yang tidak berguna (Azar, 2013), sedangkan Prokrastinasi Akademik adalah kegagalan menyelesaikan tugas akademik hingga batas waktu untuk menyelesaikannya, Satiadarma (2005).</p>\r\n\r\n<p>Setelah kita memahami pengertian dari Prokratinasi maupun Prokrastinasi Akademik, selanjutnya, terdapat tanda-tanda sesorang menjadi memiliki pola perilaku Prokrastinasi Akademik, seperti sebagai berikut:</p>\r\n\r\n<ol>\r\n	<li>Penundaan untuk memulai dan menyelesaikan tugas</li>\r\n	<li>Keterlambatan dalam mengerjakan tugas</li>\r\n	<li>Kesenjangan waktu anatara rencana mengerjakan tugas dan melakukan kegiatan lain</li>\r\n	<li>Lebih memilih melakukan kegiatan lain terlebih dahulu daripada menyelesaikan tugas yang ada</li>\r\n	<li>Suka mengerjakan tugas mendekati tengang waktu atau deadline</li>\r\n</ol>\r\n\r\n<p>Meskipun beberapa mahasiswa dan pelajar seringkali mendaptkan prestasi yang memuaskan meskipun menerapkan pola perilaku tersebut, namun jika dijadikan kebiasan maka akan membentuk konsep diri yang kurangbaik, seperti dalam hal ketepatan, serta perencanaan. Menunda tugas juga membuat prestasi belajar akan menurun, serta akan merasa terkena rasa cemas, panic, tak sering beberapa dari mereka merasa frustasi saat mengerjakan tugas mendekati waktu akhir.</p>\r\n\r\n<p>Oke sobat Nuha, itulah pembahasan kali ini tentang &ldquo;Prokrastinasi Akademik&rdquo;, semoga pembahasan kali ini dapat menambah ilmu dan pengetahuan kalian, Minha ucapkan Terimakasih.</p>\r\n', '1778664939_Kuning Abstract Testimoni Instagram Post.png'),
(45, 'KETIKA KESEHATAN MENTAL TERGANGGU', '<p>Hallo sobat nuha</p>\r\n\r\n<p>Minha kali ini akan berbagi informasi tentang apa yang akan terjadi ketika kesehatan mental kita sedang terganggu?</p>\r\n\r\n<p>Kesehatan mental sendiri adalah suatu keadaan yang mengambarkan mental kita. Seseorang dengan kesehatan mental yang akan akan memiliki jiwa yang positif dan dapat menjalankan kehidupannya dengan normal, serta dapat mengatasi masalah dan problem dalam dirinya.</p>\r\n\r\n<p>Lalu bagaiamana jadinya ketika kesehatan mental kita terganggu? Apakaha yang akan terjadi pada diri kita?</p>\r\n\r\n<p>Beberapa hal yang mungkin bisa terjadi seperti:</p>\r\n\r\n<ol>\r\n	<li>Pengetahuan dan perbuatannya tidak sinkron</li>\r\n	<li>Tidak bisa membaur dengan keadaan</li>\r\n	<li>Tidak bisa menunjukkan potensinya</li>\r\n	<li>Tidak bisa mengatasi masalah sehingga masalah menjadi menumpuk</li>\r\n	<li>Mengakibatkan individu kesulitan berfikir positif</li>\r\n</ol>\r\n\r\n<p>Oke sobat Nuha, itulah pembahasan, semoga pembahasan kali ini dapat menambah ilmu dan pengetahuan kalian, Minha ucapkan Terimakasih.</p>\r\n', '1114787995_666.png'),
(46, 'TIPS ME TIME ', '<p>Hallo sobat Nuha , kali ini Minha akan berbagi informasi tentang tips-tips me me time.</p>\r\n\r\n<p>Sebelumnya menurut kalian me time itu apasih ? hmmm</p>\r\n\r\n<p>Kalau menurut Minha, Me Time adalah,&nbsp; waktu-waktu dimana kita memberikan spare time khusus untuk diri kita sendiri, hal ini dapat dilakukan dengan beberapa aktivitas menyenangkan dan dianggap dapat meningkatkan rasa senang dan mengurangi stress yang ada pada dalam diri. Kegiatan Me Time biasanya diisi dengan berbagai aktivitas menyenangkan seperti:</p>\r\n\r\n<ol>\r\n	<li>Mengunjungi tempat-empat menarik</li>\r\n	<li>Berbelanja</li>\r\n	<li>Melakukan perwatan tubuh</li>\r\n	<li>Meditasi</li>\r\n	<li>Melakukan wisata kuliner, dan masih banyak lagi</li>\r\n</ol>\r\n\r\n<p>Nah, sobat nuha, ketika kita Me Time terkadang ada beberapa hal yang membuat kita gak fokus nih, nah disini Minha akan kasih tips supaya kegiatan Me Time kita dapat berkualitas yuk simak tips nya</p>\r\n\r\n<ol>\r\n	<li>Alihkan pikiran kamu sejenak dari social media</li>\r\n	<li>Lakukan aktivitas yang kamu sukai</li>\r\n	<li>Fokuslah kepada diri kamu sendiri</li>\r\n	<li>Pergi ketempat yang menyenangkan</li>\r\n	<li>Alihkan masalah dan beban kamu sejenak</li>\r\n</ol>\r\n\r\n<p>Oke sobat Nuha, itulah pembahasan kali ini tentang, semoga pembahasan kali ini dapat menambah ilmu dan pengetahuan kalian, Minha ucapkan Terimakasih</p>\r\n', '2081047165_Krem Ilustrasi  To Do List Instagram Post.png'),
(47, 'MENGENAL GANGGUAN FOBIA SPESIFIK', '<p>Hai sobat Nuha&hellip;.</p>\r\n\r\n<p>Minha kali ini akan berbagi informasi tentang Gangguan Fobia Spesifik&rdquo;.</p>\r\n\r\n<p>Gangguan Fobia Spesifik itu sendiri adalah gangguan kecemasan dimana seseorang merasakan ketakutan yang tidak rasional, berlebihan dan bersifat terus menerus dihadapan sebuah objek atau situasi. Ganguan psikologis ini muncul karena pengalaman masa lalu, atau asosiasi dari sebuah peristiwa. Individu dengan gangguan ini akan merasakan rasa cemas dan ketakutan yang mendalam terhadap sesuatu atau objek tertentu. Seperti individu yang mengalami fobia terhadap ketinggian, mumgkin pernah jatuh dari tempat tinggi ketika dirinya masih kecil, sehingga individu tersebut mengasosiasikan ketinggian dengan rasa sakit.</p>\r\n\r\n<p>Mengenal jenis gangguan fobia spesifik</p>\r\n\r\n<ul>\r\n	<li>Amaxophobia, adalah sebutan untuk individu yang memiliki ketakutan terhadap kendaraan atau berkendara, mengemudi</li>\r\n	<li>Hydrophobia, adalah sebutan untuk individu yang memiliki ketakutan terhadap air</li>\r\n	<li>Nyctophobia, adalah sebutan untuk individu yang memiliki ketakutan terhadap kegelapan</li>\r\n	<li>Acrophobia, adalah sebutan untuk individu yang memiliki ketakutan terhadap ketinggian</li>\r\n	<li>Mysophobia, adalah sebutan untuk individu yang memilik ketakutan akan rasa kotor atau sesuatu yang kotor</li>\r\n</ul>\r\n\r\n<p>Oke sobat Nuha, itulah pembahasan kali ini tentang &ldquo;Gangguan Fobia Spesifik&rdquo;, semoga pembahasan kali ini dapat menambah ilmu dan pengetahuan kalian, Minha ucapkan Terimakasih</p>\r\n', '573493148_SG.png'),
(53, 'MENGENAL INNER CHILD', '<p>Hallo sobat Nuha, Minha ingin berbagi informasi dengan kalian tentang &quot;INNER CHILD&quot;</p>\r\n\r\n<p><em>Inner child </em>bisa digambarkan sebagai bagian dari diri Anda yang tidak ikut tumbuh dewasa dan tetap menjadi anak-anak. Artinya, bagian ini terus menetap dan bersembunyi di dalam diri Anda. Bagian ini menggenggam erat setiap ingatan dan emosi yang pernah Anda alami saat masih kecil, baik yang indah maupun yang buruk.</p>\r\n\r\n<p>Inner child terkadang dapat menghambat potensi dalam dirinya yang ingin berkembang. Hal itu dapat terjadi jika seorang anak memiliki ketakutan atau tahap-tahap yang belum dilalaui atau berkembang ketika masih kecil, sehingga mengakibatkan pembentukan inner child buruk.&nbsp;&nbsp;</p>\r\n\r\n<p><em>Inner child </em>merupakan salah satu komponen <a href=\"https://hellosehat.com/parenting/anak-1-sampai-5-tahun/perkembangan-balita/pendidikan-karakter-anak/\" target=\"_blank\">pembentuk karakter</a> dari diri Anda. Oleh sebab itu, Anda perlu mengetahui, menerima, dan terkoneksi dengan sisi dalam anak-anak<em> </em>yang ada di dalam diri.</p>\r\n\r\n<p>Semoga informasi ini dapat menambah pengetahuan kalian, terimakasih sudah membaca&nbsp;</p>\r\n\r\n<p>Referensi:</p>\r\n\r\n<p><a href=\"https://hellosehat.com/mental/inner-child/\">https://hellosehat.com/mental/inner-child/</a></p>\r\n', '1225053109_J.png'),
(54, 'KENALI APA ITU OCD', '<p>Hallo sobat Nuha</p>\r\n\r\n<p>MInha kali ini akan membahas tentang &Ouml;CD atau <em>obsessive compulsive disorder</em>.</p>\r\n\r\n<p>OCD adalah salah satu gangguan kesehatan mental yang masuk dalam kategori gangguan kecemasan. Lebih jelanya OCD merupakan gangguan psikologis dimana individu memiliki pikiran pemicu kecemasanyang tidak dapat disingkirkan serta dorongan untuk melakukan perilaku yang bersifat repetitive dan ritualistic yang bertujuan untuk menghindari atau mencegah situasi tertentu dimasa yang akan datang.</p>\r\n\r\n<p>Gangguan ini terdiri dari perilaku obsesi atau dapat diartikan sebagai pikiran yang berulang, serta kompulsif yang diartikan sebagai perilaku yang berulang-ulang</p>\r\n\r\n<p>Gangguan psikologis ini memiliki simtom atau tanda yang dapat diidentifikasi seperti:</p>\r\n\r\n<ol>\r\n	<li>Pikiran obsesif, merasa gemas ketika melihat barang tidak tersusun rapi / simetris</li>\r\n	<li>Individu memiliki kekhawatiran yang berlebih</li>\r\n	<li>Individu dengan gangguan ini memiliki tingkat perfecionis ynag tinggi</li>\r\n	<li>Memiliki kebiasan memeriksa sesuatu secara terus menerus dan berulang-ulang, hingga menganggu aktivitas sehari-hari</li>\r\n	<li>Takut kotor, mencuci tangan dengan berlebihan dan berkali-kali meskipun sudah bersih</li>\r\n</ol>\r\n\r\n<p>Oke sobat Nuha, itulah pembahasan kali ini, semoga pembahasan kali ini dapat menambah ilmu dan pengetahuan kalian, Minha ucapkan Terimakasih.</p>\r\n', '2120696346_ocd.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `jawaban` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok`
--

CREATE TABLE `kelompok` (
  `id_kelompok` int(11) NOT NULL,
  `nama_kelompok` varchar(50) NOT NULL,
  `keterangan_kelompok` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_an`
--

CREATE TABLE `soal_an` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `soal1` varchar(1) DEFAULT NULL,
  `soal2` varchar(1) DEFAULT NULL,
  `soal3` varchar(1) DEFAULT NULL,
  `soal4` varchar(1) DEFAULT NULL,
  `soal5` varchar(1) DEFAULT NULL,
  `soal6` varchar(1) DEFAULT NULL,
  `soal7` varchar(1) DEFAULT NULL,
  `soal8` varchar(1) DEFAULT NULL,
  `soal9` varchar(1) DEFAULT NULL,
  `soal10` varchar(1) DEFAULT NULL,
  `soal11` varchar(1) DEFAULT NULL,
  `soal12` varchar(1) DEFAULT NULL,
  `soal13` varchar(1) DEFAULT NULL,
  `soal14` varchar(1) DEFAULT NULL,
  `soal15` varchar(1) DEFAULT NULL,
  `soal16` varchar(1) DEFAULT NULL,
  `soal17` varchar(1) DEFAULT NULL,
  `soal18` varchar(1) DEFAULT NULL,
  `soal19` varchar(1) DEFAULT NULL,
  `soal20` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_an_k`
--

CREATE TABLE `soal_an_k` (
  `id` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `nama_user_k` varchar(50) NOT NULL,
  `soal1` varchar(1) DEFAULT NULL,
  `soal2` varchar(1) DEFAULT NULL,
  `soal3` varchar(1) DEFAULT NULL,
  `soal4` varchar(1) DEFAULT NULL,
  `soal5` varchar(1) DEFAULT NULL,
  `soal6` varchar(1) DEFAULT NULL,
  `soal7` varchar(1) DEFAULT NULL,
  `soal8` varchar(1) DEFAULT NULL,
  `soal9` varchar(1) DEFAULT NULL,
  `soal10` varchar(1) DEFAULT NULL,
  `soal11` varchar(1) DEFAULT NULL,
  `soal12` varchar(1) DEFAULT NULL,
  `soal13` varchar(1) DEFAULT NULL,
  `soal14` varchar(1) DEFAULT NULL,
  `soal15` varchar(1) DEFAULT NULL,
  `soal16` varchar(1) DEFAULT NULL,
  `soal17` varchar(1) DEFAULT NULL,
  `soal18` varchar(1) DEFAULT NULL,
  `soal19` varchar(1) DEFAULT NULL,
  `soal20` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_fa`
--

CREATE TABLE `soal_fa` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `soal1` varchar(1) DEFAULT NULL,
  `soal2` varchar(1) DEFAULT NULL,
  `soal3` varchar(1) DEFAULT NULL,
  `soal4` varchar(1) DEFAULT NULL,
  `soal5` varchar(1) DEFAULT NULL,
  `soal6` varchar(1) DEFAULT NULL,
  `soal7` varchar(1) DEFAULT NULL,
  `soal8` varchar(1) DEFAULT NULL,
  `soal9` varchar(1) DEFAULT NULL,
  `soal10` varchar(1) DEFAULT NULL,
  `soal11` varchar(1) DEFAULT NULL,
  `soal12` varchar(1) DEFAULT NULL,
  `soal13` varchar(1) DEFAULT NULL,
  `soal14` varchar(1) DEFAULT NULL,
  `soal15` varchar(1) DEFAULT NULL,
  `soal16` varchar(1) DEFAULT NULL,
  `soal17` varchar(1) DEFAULT NULL,
  `soal18` varchar(1) DEFAULT NULL,
  `soal19` varchar(1) DEFAULT NULL,
  `soal20` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_fa_k`
--

CREATE TABLE `soal_fa_k` (
  `id` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `nama_user_k` varchar(50) NOT NULL,
  `soal1` varchar(1) DEFAULT NULL,
  `soal2` varchar(1) DEFAULT NULL,
  `soal3` varchar(1) DEFAULT NULL,
  `soal4` varchar(1) DEFAULT NULL,
  `soal5` varchar(1) DEFAULT NULL,
  `soal6` varchar(1) DEFAULT NULL,
  `soal7` varchar(1) DEFAULT NULL,
  `soal8` varchar(1) DEFAULT NULL,
  `soal9` varchar(1) DEFAULT NULL,
  `soal10` varchar(1) DEFAULT NULL,
  `soal11` varchar(1) DEFAULT NULL,
  `soal12` varchar(1) DEFAULT NULL,
  `soal13` varchar(1) DEFAULT NULL,
  `soal14` varchar(1) DEFAULT NULL,
  `soal15` varchar(1) DEFAULT NULL,
  `soal16` varchar(1) DEFAULT NULL,
  `soal17` varchar(1) DEFAULT NULL,
  `soal18` varchar(1) DEFAULT NULL,
  `soal19` varchar(1) DEFAULT NULL,
  `soal20` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_ge`
--

CREATE TABLE `soal_ge` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `soal1` varchar(30) DEFAULT NULL,
  `soal2` varchar(30) DEFAULT NULL,
  `soal3` varchar(30) DEFAULT NULL,
  `soal4` varchar(30) DEFAULT NULL,
  `soal5` varchar(30) DEFAULT NULL,
  `soal6` varchar(30) DEFAULT NULL,
  `soal7` varchar(30) DEFAULT NULL,
  `soal8` varchar(30) DEFAULT NULL,
  `soal9` varchar(30) DEFAULT NULL,
  `soal10` varchar(30) DEFAULT NULL,
  `soal11` varchar(30) DEFAULT NULL,
  `soal12` varchar(30) DEFAULT NULL,
  `soal13` varchar(30) DEFAULT NULL,
  `soal14` varchar(30) DEFAULT NULL,
  `soal15` varchar(30) DEFAULT NULL,
  `soal16` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_ge_k`
--

CREATE TABLE `soal_ge_k` (
  `id` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `nama_user_k` varchar(50) NOT NULL,
  `soal1` varchar(30) DEFAULT NULL,
  `soal2` varchar(30) DEFAULT NULL,
  `soal3` varchar(30) DEFAULT NULL,
  `soal4` varchar(30) DEFAULT NULL,
  `soal5` varchar(30) DEFAULT NULL,
  `soal6` varchar(30) DEFAULT NULL,
  `soal7` varchar(30) DEFAULT NULL,
  `soal8` varchar(30) DEFAULT NULL,
  `soal9` varchar(30) DEFAULT NULL,
  `soal10` varchar(30) DEFAULT NULL,
  `soal11` varchar(30) DEFAULT NULL,
  `soal12` varchar(30) DEFAULT NULL,
  `soal13` varchar(30) DEFAULT NULL,
  `soal14` varchar(30) DEFAULT NULL,
  `soal15` varchar(30) DEFAULT NULL,
  `soal16` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_kd_ist`
--

CREATE TABLE `soal_kd_ist` (
  `id_kd_ist` int(11) NOT NULL,
  `nama_kd_ist` varchar(50) NOT NULL,
  `link_kd_ist` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_kd_msdt`
--

CREATE TABLE `soal_kd_msdt` (
  `id_kd_msdt` int(11) NOT NULL,
  `nama_kd_msdt` varchar(50) NOT NULL,
  `link_kd_msdt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_kd_papi`
--

CREATE TABLE `soal_kd_papi` (
  `id_soal_papi` int(11) NOT NULL,
  `nama_kd_papi` varchar(50) NOT NULL,
  `link_kd_papi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_me`
--

CREATE TABLE `soal_me` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `soal1` varchar(1) DEFAULT NULL,
  `soal2` varchar(1) DEFAULT NULL,
  `soal3` varchar(1) DEFAULT NULL,
  `soal4` varchar(1) DEFAULT NULL,
  `soal5` varchar(1) DEFAULT NULL,
  `soal6` varchar(1) DEFAULT NULL,
  `soal7` varchar(1) DEFAULT NULL,
  `soal8` varchar(1) DEFAULT NULL,
  `soal9` varchar(1) DEFAULT NULL,
  `soal10` varchar(1) DEFAULT NULL,
  `soal11` varchar(1) DEFAULT NULL,
  `soal12` varchar(1) DEFAULT NULL,
  `soal13` varchar(1) DEFAULT NULL,
  `soal14` varchar(1) DEFAULT NULL,
  `soal15` varchar(1) DEFAULT NULL,
  `soal16` varchar(1) DEFAULT NULL,
  `soal17` varchar(1) DEFAULT NULL,
  `soal18` varchar(1) DEFAULT NULL,
  `soal19` varchar(1) DEFAULT NULL,
  `soal20` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_me_k`
--

CREATE TABLE `soal_me_k` (
  `id` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `nama_user_k` varchar(50) NOT NULL,
  `soal1` varchar(1) DEFAULT NULL,
  `soal2` varchar(1) DEFAULT NULL,
  `soal3` varchar(1) DEFAULT NULL,
  `soal4` varchar(1) DEFAULT NULL,
  `soal5` varchar(1) DEFAULT NULL,
  `soal6` varchar(1) DEFAULT NULL,
  `soal7` varchar(1) DEFAULT NULL,
  `soal8` varchar(1) DEFAULT NULL,
  `soal9` varchar(1) DEFAULT NULL,
  `soal10` varchar(1) DEFAULT NULL,
  `soal11` varchar(1) DEFAULT NULL,
  `soal12` varchar(1) DEFAULT NULL,
  `soal13` varchar(1) DEFAULT NULL,
  `soal14` varchar(1) DEFAULT NULL,
  `soal15` varchar(1) DEFAULT NULL,
  `soal16` varchar(1) DEFAULT NULL,
  `soal17` varchar(1) DEFAULT NULL,
  `soal18` varchar(1) DEFAULT NULL,
  `soal19` varchar(1) DEFAULT NULL,
  `soal20` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_ra`
--

CREATE TABLE `soal_ra` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `soal1` varchar(30) DEFAULT NULL,
  `soal2` varchar(30) DEFAULT NULL,
  `soal3` varchar(30) DEFAULT NULL,
  `soal4` varchar(30) DEFAULT NULL,
  `soal5` varchar(30) DEFAULT NULL,
  `soal6` varchar(30) DEFAULT NULL,
  `soal7` varchar(30) DEFAULT NULL,
  `soal8` varchar(30) DEFAULT NULL,
  `soal9` varchar(30) DEFAULT NULL,
  `soal10` varchar(30) DEFAULT NULL,
  `soal11` varchar(30) DEFAULT NULL,
  `soal12` varchar(30) DEFAULT NULL,
  `soal13` varchar(30) DEFAULT NULL,
  `soal14` varchar(30) DEFAULT NULL,
  `soal15` varchar(30) DEFAULT NULL,
  `soal16` varchar(30) DEFAULT NULL,
  `soal17` varchar(30) DEFAULT NULL,
  `soal18` varchar(30) DEFAULT NULL,
  `soal19` varchar(30) DEFAULT NULL,
  `soal20` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_ra_k`
--

CREATE TABLE `soal_ra_k` (
  `id` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `nama_user_k` varchar(50) NOT NULL,
  `soal1` varchar(30) DEFAULT NULL,
  `soal2` varchar(30) DEFAULT NULL,
  `soal3` varchar(30) DEFAULT NULL,
  `soal4` varchar(30) DEFAULT NULL,
  `soal5` varchar(30) DEFAULT NULL,
  `soal6` varchar(30) DEFAULT NULL,
  `soal7` varchar(30) DEFAULT NULL,
  `soal8` varchar(30) DEFAULT NULL,
  `soal9` varchar(30) DEFAULT NULL,
  `soal10` varchar(30) DEFAULT NULL,
  `soal11` varchar(30) DEFAULT NULL,
  `soal12` varchar(30) DEFAULT NULL,
  `soal13` varchar(30) DEFAULT NULL,
  `soal14` varchar(30) DEFAULT NULL,
  `soal15` varchar(30) DEFAULT NULL,
  `soal16` varchar(30) DEFAULT NULL,
  `soal17` varchar(30) DEFAULT NULL,
  `soal18` varchar(30) DEFAULT NULL,
  `soal19` varchar(30) DEFAULT NULL,
  `soal20` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_se`
--

CREATE TABLE `soal_se` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `soal1` varchar(10) DEFAULT NULL,
  `soal2` varchar(10) DEFAULT NULL,
  `soal3` varchar(10) DEFAULT NULL,
  `soal4` varchar(10) DEFAULT NULL,
  `soal5` varchar(10) DEFAULT NULL,
  `soal6` varchar(10) DEFAULT NULL,
  `soal7` varchar(10) DEFAULT NULL,
  `soal8` varchar(10) DEFAULT NULL,
  `soal9` varchar(10) DEFAULT NULL,
  `soal10` varchar(10) DEFAULT NULL,
  `soal11` varchar(10) DEFAULT NULL,
  `soal12` varchar(10) DEFAULT NULL,
  `soal13` varchar(10) DEFAULT NULL,
  `soal14` varchar(10) DEFAULT NULL,
  `soal15` varchar(10) DEFAULT NULL,
  `soal16` varchar(10) DEFAULT NULL,
  `soal17` varchar(10) DEFAULT NULL,
  `soal18` varchar(10) DEFAULT NULL,
  `soal19` varchar(10) DEFAULT NULL,
  `soal20` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_se_k`
--

CREATE TABLE `soal_se_k` (
  `id` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `nama_user_k` varchar(50) NOT NULL,
  `soal1` varchar(1) DEFAULT NULL,
  `soal2` varchar(1) DEFAULT NULL,
  `soal3` varchar(1) DEFAULT NULL,
  `soal4` varchar(1) DEFAULT NULL,
  `soal5` varchar(1) DEFAULT NULL,
  `soal6` varchar(1) DEFAULT NULL,
  `soal7` varchar(1) DEFAULT NULL,
  `soal8` varchar(1) DEFAULT NULL,
  `soal9` varchar(1) DEFAULT NULL,
  `soal10` varchar(1) DEFAULT NULL,
  `soal11` varchar(1) DEFAULT NULL,
  `soal12` varchar(1) DEFAULT NULL,
  `soal13` varchar(1) DEFAULT NULL,
  `soal14` varchar(1) DEFAULT NULL,
  `soal15` varchar(1) DEFAULT NULL,
  `soal16` varchar(1) DEFAULT NULL,
  `soal17` varchar(1) DEFAULT NULL,
  `soal18` varchar(1) DEFAULT NULL,
  `soal19` varchar(1) DEFAULT NULL,
  `soal20` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_wa`
--

CREATE TABLE `soal_wa` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `soal1` varchar(1) DEFAULT NULL,
  `soal2` varchar(1) DEFAULT NULL,
  `soal3` varchar(1) DEFAULT NULL,
  `soal4` varchar(1) DEFAULT NULL,
  `soal5` varchar(1) DEFAULT NULL,
  `soal6` varchar(1) DEFAULT NULL,
  `soal7` varchar(1) DEFAULT NULL,
  `soal8` varchar(1) DEFAULT NULL,
  `soal9` varchar(1) DEFAULT NULL,
  `soal10` varchar(1) DEFAULT NULL,
  `soal11` varchar(1) DEFAULT NULL,
  `soal12` varchar(1) DEFAULT NULL,
  `soal13` varchar(1) DEFAULT NULL,
  `soal14` varchar(1) DEFAULT NULL,
  `soal15` varchar(1) DEFAULT NULL,
  `soal16` varchar(1) DEFAULT NULL,
  `soal17` varchar(1) DEFAULT NULL,
  `soal18` varchar(1) DEFAULT NULL,
  `soal19` varchar(1) DEFAULT NULL,
  `soal20` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_wa_k`
--

CREATE TABLE `soal_wa_k` (
  `id` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `nama_user_k` varchar(50) NOT NULL,
  `soal1` varchar(1) DEFAULT NULL,
  `soal2` varchar(1) DEFAULT NULL,
  `soal3` varchar(1) DEFAULT NULL,
  `soal4` varchar(1) DEFAULT NULL,
  `soal5` varchar(1) DEFAULT NULL,
  `soal6` varchar(1) DEFAULT NULL,
  `soal7` varchar(1) DEFAULT NULL,
  `soal8` varchar(1) DEFAULT NULL,
  `soal9` varchar(1) DEFAULT NULL,
  `soal10` varchar(1) DEFAULT NULL,
  `soal11` varchar(1) DEFAULT NULL,
  `soal12` varchar(1) DEFAULT NULL,
  `soal13` varchar(1) DEFAULT NULL,
  `soal14` varchar(1) DEFAULT NULL,
  `soal15` varchar(1) DEFAULT NULL,
  `soal16` varchar(1) DEFAULT NULL,
  `soal17` varchar(1) DEFAULT NULL,
  `soal18` varchar(1) DEFAULT NULL,
  `soal19` varchar(1) DEFAULT NULL,
  `soal20` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_wu`
--

CREATE TABLE `soal_wu` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `soal1` varchar(1) DEFAULT NULL,
  `soal2` varchar(1) DEFAULT NULL,
  `soal3` varchar(1) DEFAULT NULL,
  `soal4` varchar(1) DEFAULT NULL,
  `soal5` varchar(1) DEFAULT NULL,
  `soal6` varchar(1) DEFAULT NULL,
  `soal7` varchar(1) DEFAULT NULL,
  `soal8` varchar(1) DEFAULT NULL,
  `soal9` varchar(1) DEFAULT NULL,
  `soal10` varchar(1) DEFAULT NULL,
  `soal11` varchar(1) DEFAULT NULL,
  `soal12` varchar(1) DEFAULT NULL,
  `soal13` varchar(1) DEFAULT NULL,
  `soal14` varchar(1) DEFAULT NULL,
  `soal15` varchar(1) DEFAULT NULL,
  `soal16` varchar(1) DEFAULT NULL,
  `soal17` varchar(1) DEFAULT NULL,
  `soal18` varchar(1) DEFAULT NULL,
  `soal19` varchar(1) DEFAULT NULL,
  `soal20` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_wu_k`
--

CREATE TABLE `soal_wu_k` (
  `id` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `nama_user_k` varchar(50) NOT NULL,
  `soal1` varchar(1) DEFAULT NULL,
  `soal2` varchar(1) DEFAULT NULL,
  `soal3` varchar(1) DEFAULT NULL,
  `soal4` varchar(1) DEFAULT NULL,
  `soal5` varchar(1) DEFAULT NULL,
  `soal6` varchar(1) DEFAULT NULL,
  `soal7` varchar(1) DEFAULT NULL,
  `soal8` varchar(1) DEFAULT NULL,
  `soal9` varchar(1) DEFAULT NULL,
  `soal10` varchar(1) DEFAULT NULL,
  `soal11` varchar(1) DEFAULT NULL,
  `soal12` varchar(1) DEFAULT NULL,
  `soal13` varchar(1) DEFAULT NULL,
  `soal14` varchar(1) DEFAULT NULL,
  `soal15` varchar(1) DEFAULT NULL,
  `soal16` varchar(1) DEFAULT NULL,
  `soal17` varchar(1) DEFAULT NULL,
  `soal18` varchar(1) DEFAULT NULL,
  `soal19` varchar(1) DEFAULT NULL,
  `soal20` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_zr`
--

CREATE TABLE `soal_zr` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `soal1` varchar(30) DEFAULT NULL,
  `soal2` varchar(30) DEFAULT NULL,
  `soal3` varchar(30) DEFAULT NULL,
  `soal4` varchar(30) DEFAULT NULL,
  `soal5` varchar(30) DEFAULT NULL,
  `soal6` varchar(30) DEFAULT NULL,
  `soal7` varchar(30) DEFAULT NULL,
  `soal8` varchar(30) DEFAULT NULL,
  `soal9` varchar(30) DEFAULT NULL,
  `soal10` varchar(30) DEFAULT NULL,
  `soal11` varchar(30) DEFAULT NULL,
  `soal12` varchar(30) DEFAULT NULL,
  `soal13` varchar(30) DEFAULT NULL,
  `soal14` varchar(30) DEFAULT NULL,
  `soal15` varchar(30) DEFAULT NULL,
  `soal16` varchar(30) DEFAULT NULL,
  `soal17` varchar(30) DEFAULT NULL,
  `soal18` varchar(30) DEFAULT NULL,
  `soal19` varchar(30) DEFAULT NULL,
  `soal20` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_zr_k`
--

CREATE TABLE `soal_zr_k` (
  `id` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `nama_user_k` varchar(50) NOT NULL,
  `soal1` varchar(30) DEFAULT NULL,
  `soal2` varchar(30) DEFAULT NULL,
  `soal3` varchar(30) DEFAULT NULL,
  `soal4` varchar(30) DEFAULT NULL,
  `soal5` varchar(30) DEFAULT NULL,
  `soal6` varchar(30) DEFAULT NULL,
  `soal7` varchar(30) DEFAULT NULL,
  `soal8` varchar(30) DEFAULT NULL,
  `soal9` varchar(30) DEFAULT NULL,
  `soal10` varchar(30) DEFAULT NULL,
  `soal11` varchar(30) DEFAULT NULL,
  `soal12` varchar(30) DEFAULT NULL,
  `soal13` varchar(30) DEFAULT NULL,
  `soal14` varchar(30) DEFAULT NULL,
  `soal15` varchar(30) DEFAULT NULL,
  `soal16` varchar(30) DEFAULT NULL,
  `soal17` varchar(30) DEFAULT NULL,
  `soal18` varchar(30) DEFAULT NULL,
  `soal19` varchar(30) DEFAULT NULL,
  `soal20` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `test_msdt`
--

CREATE TABLE `test_msdt` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `soal1` varchar(1) DEFAULT NULL,
  `soal2` varchar(1) DEFAULT NULL,
  `soal3` varchar(1) DEFAULT NULL,
  `soal4` varchar(1) DEFAULT NULL,
  `soal5` varchar(1) DEFAULT NULL,
  `soal6` varchar(1) DEFAULT NULL,
  `soal7` varchar(1) DEFAULT NULL,
  `soal8` varchar(1) DEFAULT NULL,
  `soal9` varchar(1) DEFAULT NULL,
  `soal10` varchar(1) DEFAULT NULL,
  `soal11` varchar(1) DEFAULT NULL,
  `soal12` varchar(1) DEFAULT NULL,
  `soal13` varchar(1) DEFAULT NULL,
  `soal14` varchar(1) DEFAULT NULL,
  `soal15` varchar(1) DEFAULT NULL,
  `soal16` varchar(1) DEFAULT NULL,
  `soal17` varchar(1) DEFAULT NULL,
  `soal18` varchar(1) DEFAULT NULL,
  `soal19` varchar(1) DEFAULT NULL,
  `soal20` varchar(1) DEFAULT NULL,
  `soal21` varchar(1) DEFAULT NULL,
  `soal22` varchar(1) DEFAULT NULL,
  `soal23` varchar(1) DEFAULT NULL,
  `soal24` varchar(1) DEFAULT NULL,
  `soal25` varchar(1) DEFAULT NULL,
  `soal26` varchar(1) DEFAULT NULL,
  `soal27` varchar(1) DEFAULT NULL,
  `soal28` varchar(1) DEFAULT NULL,
  `soal29` varchar(1) DEFAULT NULL,
  `soal30` varchar(1) DEFAULT NULL,
  `soal31` varchar(1) DEFAULT NULL,
  `soal32` varchar(1) DEFAULT NULL,
  `soal33` varchar(1) DEFAULT NULL,
  `soal34` varchar(1) DEFAULT NULL,
  `soal35` varchar(1) DEFAULT NULL,
  `soal36` varchar(1) DEFAULT NULL,
  `soal37` varchar(1) DEFAULT NULL,
  `soal38` varchar(1) DEFAULT NULL,
  `soal39` varchar(1) DEFAULT NULL,
  `soal40` varchar(1) DEFAULT NULL,
  `soal41` varchar(1) DEFAULT NULL,
  `soal42` varchar(1) DEFAULT NULL,
  `soal43` varchar(1) DEFAULT NULL,
  `soal44` varchar(1) DEFAULT NULL,
  `soal45` varchar(1) DEFAULT NULL,
  `soal46` varchar(1) DEFAULT NULL,
  `soal47` varchar(1) DEFAULT NULL,
  `soal48` varchar(1) DEFAULT NULL,
  `soal49` varchar(1) DEFAULT NULL,
  `soal50` varchar(1) DEFAULT NULL,
  `soal51` varchar(1) DEFAULT NULL,
  `soal52` varchar(1) DEFAULT NULL,
  `soal53` varchar(1) DEFAULT NULL,
  `soal54` varchar(1) DEFAULT NULL,
  `soal55` varchar(1) DEFAULT NULL,
  `soal56` varchar(1) DEFAULT NULL,
  `soal57` varchar(1) DEFAULT NULL,
  `soal58` varchar(1) DEFAULT NULL,
  `soal59` varchar(1) DEFAULT NULL,
  `soal60` varchar(1) DEFAULT NULL,
  `soal61` varchar(1) DEFAULT NULL,
  `soal62` varchar(1) DEFAULT NULL,
  `soal63` varchar(1) DEFAULT NULL,
  `soal64` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `test_msdt_k`
--

CREATE TABLE `test_msdt_k` (
  `id` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `nama_user_k` varchar(50) NOT NULL,
  `soal1` varchar(1) DEFAULT NULL,
  `soal2` varchar(1) DEFAULT NULL,
  `soal3` varchar(1) DEFAULT NULL,
  `soal4` varchar(1) DEFAULT NULL,
  `soal5` varchar(1) DEFAULT NULL,
  `soal6` varchar(1) DEFAULT NULL,
  `soal7` varchar(1) DEFAULT NULL,
  `soal8` varchar(1) DEFAULT NULL,
  `soal9` varchar(1) DEFAULT NULL,
  `soal10` varchar(1) DEFAULT NULL,
  `soal11` varchar(1) DEFAULT NULL,
  `soal12` varchar(1) DEFAULT NULL,
  `soal13` varchar(1) DEFAULT NULL,
  `soal14` varchar(1) DEFAULT NULL,
  `soal15` varchar(1) DEFAULT NULL,
  `soal16` varchar(1) DEFAULT NULL,
  `soal17` varchar(1) DEFAULT NULL,
  `soal18` varchar(1) DEFAULT NULL,
  `soal19` varchar(1) DEFAULT NULL,
  `soal20` varchar(1) DEFAULT NULL,
  `soal21` varchar(1) DEFAULT NULL,
  `soal22` varchar(1) DEFAULT NULL,
  `soal23` varchar(1) DEFAULT NULL,
  `soal24` varchar(1) DEFAULT NULL,
  `soal25` varchar(1) DEFAULT NULL,
  `soal26` varchar(1) DEFAULT NULL,
  `soal27` varchar(1) DEFAULT NULL,
  `soal28` varchar(1) DEFAULT NULL,
  `soal29` varchar(1) DEFAULT NULL,
  `soal30` varchar(1) DEFAULT NULL,
  `soal31` varchar(1) DEFAULT NULL,
  `soal32` varchar(1) DEFAULT NULL,
  `soal33` varchar(1) DEFAULT NULL,
  `soal34` varchar(1) DEFAULT NULL,
  `soal35` varchar(1) DEFAULT NULL,
  `soal36` varchar(1) DEFAULT NULL,
  `soal37` varchar(1) DEFAULT NULL,
  `soal38` varchar(1) DEFAULT NULL,
  `soal39` varchar(1) DEFAULT NULL,
  `soal40` varchar(1) DEFAULT NULL,
  `soal41` varchar(1) DEFAULT NULL,
  `soal42` varchar(1) DEFAULT NULL,
  `soal43` varchar(1) DEFAULT NULL,
  `soal44` varchar(1) DEFAULT NULL,
  `soal45` varchar(1) DEFAULT NULL,
  `soal46` varchar(1) DEFAULT NULL,
  `soal47` varchar(1) DEFAULT NULL,
  `soal48` varchar(1) DEFAULT NULL,
  `soal49` varchar(1) DEFAULT NULL,
  `soal50` varchar(1) DEFAULT NULL,
  `soal51` varchar(1) DEFAULT NULL,
  `soal52` varchar(1) DEFAULT NULL,
  `soal53` varchar(1) DEFAULT NULL,
  `soal54` varchar(1) DEFAULT NULL,
  `soal55` varchar(1) DEFAULT NULL,
  `soal56` varchar(1) DEFAULT NULL,
  `soal57` varchar(1) DEFAULT NULL,
  `soal58` varchar(1) DEFAULT NULL,
  `soal59` varchar(1) DEFAULT NULL,
  `soal60` varchar(1) DEFAULT NULL,
  `soal61` varchar(1) DEFAULT NULL,
  `soal62` varchar(1) DEFAULT NULL,
  `soal63` varchar(1) DEFAULT NULL,
  `soal64` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `test_papi`
--

CREATE TABLE `test_papi` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `soal1` varchar(1) DEFAULT NULL,
  `soal2` varchar(1) DEFAULT NULL,
  `soal3` varchar(1) DEFAULT NULL,
  `soal4` varchar(1) DEFAULT NULL,
  `soal5` varchar(1) DEFAULT NULL,
  `soal6` varchar(1) DEFAULT NULL,
  `soal7` varchar(1) DEFAULT NULL,
  `soal8` varchar(1) DEFAULT NULL,
  `soal9` varchar(1) DEFAULT NULL,
  `soal10` varchar(1) DEFAULT NULL,
  `soal11` varchar(1) DEFAULT NULL,
  `soal12` varchar(1) DEFAULT NULL,
  `soal13` varchar(1) DEFAULT NULL,
  `soal14` varchar(1) DEFAULT NULL,
  `soal15` varchar(1) DEFAULT NULL,
  `soal16` varchar(1) DEFAULT NULL,
  `soal17` varchar(1) DEFAULT NULL,
  `soal18` varchar(1) DEFAULT NULL,
  `soal19` varchar(1) DEFAULT NULL,
  `soal20` varchar(1) DEFAULT NULL,
  `soal21` varchar(1) DEFAULT NULL,
  `soal22` varchar(1) DEFAULT NULL,
  `soal23` varchar(1) DEFAULT NULL,
  `soal24` varchar(1) DEFAULT NULL,
  `soal25` varchar(1) DEFAULT NULL,
  `soal26` varchar(1) DEFAULT NULL,
  `soal27` varchar(1) DEFAULT NULL,
  `soal28` varchar(1) DEFAULT NULL,
  `soal29` varchar(1) DEFAULT NULL,
  `soal30` varchar(1) DEFAULT NULL,
  `soal31` varchar(1) DEFAULT NULL,
  `soal32` varchar(1) DEFAULT NULL,
  `soal33` varchar(1) DEFAULT NULL,
  `soal34` varchar(1) DEFAULT NULL,
  `soal35` varchar(1) DEFAULT NULL,
  `soal36` varchar(1) DEFAULT NULL,
  `soal37` varchar(1) DEFAULT NULL,
  `soal38` varchar(1) DEFAULT NULL,
  `soal39` varchar(1) DEFAULT NULL,
  `soal40` varchar(1) DEFAULT NULL,
  `soal41` varchar(1) DEFAULT NULL,
  `soal42` varchar(1) DEFAULT NULL,
  `soal43` varchar(1) DEFAULT NULL,
  `soal44` varchar(1) DEFAULT NULL,
  `soal45` varchar(1) DEFAULT NULL,
  `soal46` varchar(1) DEFAULT NULL,
  `soal47` varchar(1) DEFAULT NULL,
  `soal48` varchar(1) DEFAULT NULL,
  `soal49` varchar(1) DEFAULT NULL,
  `soal50` varchar(1) DEFAULT NULL,
  `soal51` varchar(1) DEFAULT NULL,
  `soal52` varchar(1) DEFAULT NULL,
  `soal53` varchar(1) DEFAULT NULL,
  `soal54` varchar(1) DEFAULT NULL,
  `soal55` varchar(1) DEFAULT NULL,
  `soal56` varchar(1) DEFAULT NULL,
  `soal57` varchar(1) DEFAULT NULL,
  `soal58` varchar(1) DEFAULT NULL,
  `soal59` varchar(1) DEFAULT NULL,
  `soal60` varchar(1) DEFAULT NULL,
  `soal61` varchar(1) DEFAULT NULL,
  `soal62` varchar(1) DEFAULT NULL,
  `soal63` varchar(1) DEFAULT NULL,
  `soal64` varchar(1) DEFAULT NULL,
  `soal65` varchar(1) DEFAULT NULL,
  `soal66` varchar(1) DEFAULT NULL,
  `soal67` varchar(1) DEFAULT NULL,
  `soal68` varchar(1) DEFAULT NULL,
  `soal69` varchar(1) DEFAULT NULL,
  `soal70` varchar(1) DEFAULT NULL,
  `soal71` varchar(1) DEFAULT NULL,
  `soal72` varchar(1) DEFAULT NULL,
  `soal73` varchar(1) DEFAULT NULL,
  `soal74` varchar(1) DEFAULT NULL,
  `soal75` varchar(1) DEFAULT NULL,
  `soal76` varchar(1) DEFAULT NULL,
  `soal77` varchar(1) DEFAULT NULL,
  `soal78` varchar(1) DEFAULT NULL,
  `soal79` varchar(1) DEFAULT NULL,
  `soal80` varchar(1) DEFAULT NULL,
  `soal81` varchar(1) DEFAULT NULL,
  `soal82` varchar(1) DEFAULT NULL,
  `soal83` varchar(1) DEFAULT NULL,
  `soal84` varchar(1) DEFAULT NULL,
  `soal85` varchar(1) DEFAULT NULL,
  `soal86` varchar(1) DEFAULT NULL,
  `soal87` varchar(1) DEFAULT NULL,
  `soal88` varchar(1) DEFAULT NULL,
  `soal89` varchar(1) DEFAULT NULL,
  `soal90` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `test_papi_k`
--

CREATE TABLE `test_papi_k` (
  `id` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `nama_user_k` varchar(50) NOT NULL,
  `soal1` varchar(1) DEFAULT NULL,
  `soal2` varchar(1) DEFAULT NULL,
  `soal3` varchar(1) DEFAULT NULL,
  `soal4` varchar(1) DEFAULT NULL,
  `soal5` varchar(1) DEFAULT NULL,
  `soal6` varchar(1) DEFAULT NULL,
  `soal7` varchar(1) DEFAULT NULL,
  `soal8` varchar(1) DEFAULT NULL,
  `soal9` varchar(1) DEFAULT NULL,
  `soal10` varchar(1) DEFAULT NULL,
  `soal11` varchar(1) DEFAULT NULL,
  `soal12` varchar(1) DEFAULT NULL,
  `soal13` varchar(1) DEFAULT NULL,
  `soal14` varchar(1) DEFAULT NULL,
  `soal15` varchar(1) DEFAULT NULL,
  `soal16` varchar(1) DEFAULT NULL,
  `soal17` varchar(1) DEFAULT NULL,
  `soal18` varchar(1) DEFAULT NULL,
  `soal19` varchar(1) DEFAULT NULL,
  `soal20` varchar(1) DEFAULT NULL,
  `soal21` varchar(1) DEFAULT NULL,
  `soal22` varchar(1) DEFAULT NULL,
  `soal23` varchar(1) DEFAULT NULL,
  `soal24` varchar(1) DEFAULT NULL,
  `soal25` varchar(1) DEFAULT NULL,
  `soal26` varchar(1) DEFAULT NULL,
  `soal27` varchar(1) DEFAULT NULL,
  `soal28` varchar(1) DEFAULT NULL,
  `soal29` varchar(1) DEFAULT NULL,
  `soal30` varchar(1) DEFAULT NULL,
  `soal31` varchar(1) DEFAULT NULL,
  `soal32` varchar(1) DEFAULT NULL,
  `soal33` varchar(1) DEFAULT NULL,
  `soal34` varchar(1) DEFAULT NULL,
  `soal35` varchar(1) DEFAULT NULL,
  `soal36` varchar(1) DEFAULT NULL,
  `soal37` varchar(1) DEFAULT NULL,
  `soal38` varchar(1) DEFAULT NULL,
  `soal39` varchar(1) DEFAULT NULL,
  `soal40` varchar(1) DEFAULT NULL,
  `soal41` varchar(1) DEFAULT NULL,
  `soal42` varchar(1) DEFAULT NULL,
  `soal43` varchar(1) DEFAULT NULL,
  `soal44` varchar(1) DEFAULT NULL,
  `soal45` varchar(1) DEFAULT NULL,
  `soal46` varchar(1) DEFAULT NULL,
  `soal47` varchar(1) DEFAULT NULL,
  `soal48` varchar(1) DEFAULT NULL,
  `soal49` varchar(1) DEFAULT NULL,
  `soal50` varchar(1) DEFAULT NULL,
  `soal51` varchar(1) DEFAULT NULL,
  `soal52` varchar(1) DEFAULT NULL,
  `soal53` varchar(1) DEFAULT NULL,
  `soal54` varchar(1) DEFAULT NULL,
  `soal55` varchar(1) DEFAULT NULL,
  `soal56` varchar(1) DEFAULT NULL,
  `soal57` varchar(1) DEFAULT NULL,
  `soal58` varchar(1) DEFAULT NULL,
  `soal59` varchar(1) DEFAULT NULL,
  `soal60` varchar(1) DEFAULT NULL,
  `soal61` varchar(1) DEFAULT NULL,
  `soal62` varchar(1) DEFAULT NULL,
  `soal63` varchar(1) DEFAULT NULL,
  `soal64` varchar(1) DEFAULT NULL,
  `soal65` varchar(1) DEFAULT NULL,
  `soal66` varchar(1) DEFAULT NULL,
  `soal67` varchar(1) DEFAULT NULL,
  `soal68` varchar(1) DEFAULT NULL,
  `soal69` varchar(1) DEFAULT NULL,
  `soal70` varchar(1) DEFAULT NULL,
  `soal71` varchar(1) DEFAULT NULL,
  `soal72` varchar(1) DEFAULT NULL,
  `soal73` varchar(1) DEFAULT NULL,
  `soal74` varchar(1) DEFAULT NULL,
  `soal75` varchar(1) DEFAULT NULL,
  `soal76` varchar(1) DEFAULT NULL,
  `soal77` varchar(1) DEFAULT NULL,
  `soal78` varchar(1) DEFAULT NULL,
  `soal79` varchar(1) DEFAULT NULL,
  `soal80` varchar(1) DEFAULT NULL,
  `soal81` varchar(1) DEFAULT NULL,
  `soal82` varchar(1) DEFAULT NULL,
  `soal83` varchar(1) DEFAULT NULL,
  `soal84` varchar(1) DEFAULT NULL,
  `soal85` varchar(1) DEFAULT NULL,
  `soal86` varchar(1) DEFAULT NULL,
  `soal87` varchar(1) DEFAULT NULL,
  `soal88` varchar(1) DEFAULT NULL,
  `soal89` varchar(1) DEFAULT NULL,
  `soal90` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_kelompok`
--

CREATE TABLE `user_kelompok` (
  `id_user_k` int(11) NOT NULL,
  `nama_user_k` varchar(50) NOT NULL,
  `psd_user_k` varchar(500) NOT NULL,
  `username_user_k` varchar(255) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `id_kd_ist` varchar(50) NOT NULL,
  `id_kd_msdt` varchar(50) NOT NULL,
  `id_kd_papi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_mandiri`
--

CREATE TABLE `user_mandiri` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `psd_user` varchar(500) NOT NULL,
  `username_user` varchar(50) NOT NULL,
  `id_kd_ist` varchar(50) NOT NULL,
  `id_kd_msdt` varchar(50) NOT NULL,
  `id_kd_papi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_kelompok` (`id_kelompok`);

--
-- Indeks untuk tabel `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id_kelompok`);

--
-- Indeks untuk tabel `soal_an`
--
ALTER TABLE `soal_an`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_an_k`
--
ALTER TABLE `soal_an_k`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_fa`
--
ALTER TABLE `soal_fa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_fa_k`
--
ALTER TABLE `soal_fa_k`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_ge`
--
ALTER TABLE `soal_ge`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_ge_k`
--
ALTER TABLE `soal_ge_k`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_kd_ist`
--
ALTER TABLE `soal_kd_ist`
  ADD PRIMARY KEY (`id_kd_ist`);

--
-- Indeks untuk tabel `soal_kd_msdt`
--
ALTER TABLE `soal_kd_msdt`
  ADD PRIMARY KEY (`id_kd_msdt`);

--
-- Indeks untuk tabel `soal_kd_papi`
--
ALTER TABLE `soal_kd_papi`
  ADD PRIMARY KEY (`id_soal_papi`);

--
-- Indeks untuk tabel `soal_me`
--
ALTER TABLE `soal_me`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_me_k`
--
ALTER TABLE `soal_me_k`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_ra`
--
ALTER TABLE `soal_ra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_ra_k`
--
ALTER TABLE `soal_ra_k`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_se`
--
ALTER TABLE `soal_se`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_se_k`
--
ALTER TABLE `soal_se_k`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_wa`
--
ALTER TABLE `soal_wa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_wa_k`
--
ALTER TABLE `soal_wa_k`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_wu`
--
ALTER TABLE `soal_wu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_wu_k`
--
ALTER TABLE `soal_wu_k`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_zr`
--
ALTER TABLE `soal_zr`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_zr_k`
--
ALTER TABLE `soal_zr_k`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `test_msdt`
--
ALTER TABLE `test_msdt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `test_msdt_k`
--
ALTER TABLE `test_msdt_k`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `test_papi`
--
ALTER TABLE `test_papi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `test_papi_k`
--
ALTER TABLE `test_papi_k`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_kelompok`
--
ALTER TABLE `user_kelompok`
  ADD PRIMARY KEY (`id_user_k`),
  ADD KEY `id_kelompok` (`id_kelompok`);

--
-- Indeks untuk tabel `user_mandiri`
--
ALTER TABLE `user_mandiri`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id_kelompok` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_an`
--
ALTER TABLE `soal_an`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_an_k`
--
ALTER TABLE `soal_an_k`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_fa`
--
ALTER TABLE `soal_fa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_fa_k`
--
ALTER TABLE `soal_fa_k`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_ge`
--
ALTER TABLE `soal_ge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_ge_k`
--
ALTER TABLE `soal_ge_k`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_kd_ist`
--
ALTER TABLE `soal_kd_ist`
  MODIFY `id_kd_ist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_kd_msdt`
--
ALTER TABLE `soal_kd_msdt`
  MODIFY `id_kd_msdt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_kd_papi`
--
ALTER TABLE `soal_kd_papi`
  MODIFY `id_soal_papi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_me`
--
ALTER TABLE `soal_me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_me_k`
--
ALTER TABLE `soal_me_k`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_ra`
--
ALTER TABLE `soal_ra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_ra_k`
--
ALTER TABLE `soal_ra_k`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_se`
--
ALTER TABLE `soal_se`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_se_k`
--
ALTER TABLE `soal_se_k`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_wa`
--
ALTER TABLE `soal_wa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_wa_k`
--
ALTER TABLE `soal_wa_k`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_wu`
--
ALTER TABLE `soal_wu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_wu_k`
--
ALTER TABLE `soal_wu_k`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_zr`
--
ALTER TABLE `soal_zr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal_zr_k`
--
ALTER TABLE `soal_zr_k`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `test_msdt`
--
ALTER TABLE `test_msdt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `test_msdt_k`
--
ALTER TABLE `test_msdt_k`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `test_papi`
--
ALTER TABLE `test_papi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `test_papi_k`
--
ALTER TABLE `test_papi_k`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_kelompok`
--
ALTER TABLE `user_kelompok`
  MODIFY `id_user_k` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_mandiri`
--
ALTER TABLE `user_mandiri`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`id_kelompok`) REFERENCES `kelompok` (`id_kelompok`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user_kelompok`
--
ALTER TABLE `user_kelompok`
  ADD CONSTRAINT `user_kelompok_ibfk_1` FOREIGN KEY (`id_kelompok`) REFERENCES `kelompok` (`id_kelompok`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
