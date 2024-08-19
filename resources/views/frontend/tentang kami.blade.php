@extends('layout.index')

@section('main-content')
  <!-- Header Start -->
  <div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px">
      <h3 class="display-4 font-weight-bold text-white">Tentang Kami</h3>
      <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="">Home</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Tentang Kami</p>
      </div>
    </div>
  </div>
  <!-- Header End -->

  <!-- About Start -->
  <div class="container-fluid py-2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <img class="logo-kamu" src="{{ asset('img/logo.png')}}" alt="" />
        </div>
        <div class="col-lg-7" style="padding-right:50px ;">
          <p class="section-title pr-5">
            <span class="pr-2">Mengenal Lebih Tentang Kami</span>
          </p>
          <h1 class="mb-2">Himpunan Mahasiswa Islam Komisariat Dakwah-Ushuludin</h1>
          <p style="text-align:justify;">
            HMI komisariat Dakwah-Ushuludin(dakush) merupakan salah satu komisariat HMI yang dibawah naungan HMI cabang
            Kudus. HMI Komisariat Dakush menaungi fakultas dakwah dan ushuludin IAIN Kudus. Untuk saat ini
            bersekretariat Jl. Raya Kudus UMK, Dersalam Gang 10, Kecamatan Bae, Kabupaten Kudus. Dalam dinamikapun dunia
            kampus, HMI komisariat Dakush selalu berkontribusi dalam arti yang positif. Ini merupakan komitmen bersama
            bahwa HMI akan selalu menjadi wadah untuk menciptakan kader umat dan kader bangsa.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->
  <div class="container-fluid py-5">
    <div class="container">

      <div class="col-lg-0 mb-4 mb-lg-0">
        <p class="section-title pr-5">
          <span class="pr-2">Sejarah Organisasi Kami</span>
        </p>
        <h1 class="mb-3">Sejarah HMI (Himpunan Mahasiswa Islam)</h1>
        <p style="text-align:justify;">
          Sejarah HMI berawal dari momen berdirinya pada tanggal 5 Februari 1947. HMI adalah organisasi kemahasiswaan
          yang pendiriannya diprakarsai oleh seorang mahasiswa Sekolah Tinggi Islam (Sekarang UII) bernama Lafran Pane
          beserta 14 orang rekannya.
        </p>
        <p style="text-align:justify;">
          Sebelum ada HMI, telah lebih dulu ada organisasi kemahasiswaan pada tahun 1946 yang bernama Perserikatan
          Mahasiswa Yogyakarta (PMY). Anggotanya antara lain adalah mahasiswa-mahasiswa dari 3 perguruan tinggi di
          Yogyakarta, yaitu:
        </p>
        <OL type="1" >
          <LI>Sekolah Tinggi Teknik (STT)</LI>
          <LI>Sekolah Tinggi Islam (STI)</LI>
          <LI>Balai Perguruan Tinggi Gajah Mada (sekarang UGM)</LI>
          </OL>
        <p>
          Lafran Pane adalah seorang mahasiswa yang berada di fakultas hukum Sekolah Tinggi Islam (sekarang menjadi FH-UII) yang memiliki gagasan untuk membentuk dan mendirikan organisasi kemahasiswaan yang baru.
        </p>
        <p style="text-align: justify;">
          Awalnya, Pane dan rekannya membicarakan mengenai ide untuk membentuk organisasi kemahasiswaan dengan nilai-nilai keislaman. Kemudian pada November 1946, Pane mengadakan rapat dengan mengundang mahasiswa Islam yang berada di beberapa perguruan tinggi di Yogyakarta, yang dihadiri sekitar 30 orang mahasiswa yang merupakan anggota dari organisasi PMY dan Pemuda Islam indonesia. Sayangnya, rapat tersebut tidak menghasilkan keputusan apa pun.        <p>
          Lafran Pane adalah seorang mahasiswa yang berada di fakultas hukum Sekolah Tinggi Islam (sekarang menjadi FH-UII) yang memiliki gagasan untuk membentuk dan mendirikan organisasi kemahasiswaan yang baru.
        </p>
        <p style="text-align: justify;">
          Selanjutnya, pada tanggal 5 februari 1947, Lafran Pane mengadakan pertemuan mendadak yang bertempat di ruang kuliah Sekolah Tinggi Islam dengan agenda pembentukan organisasi mahasiswa Islam. Mengutip dari Pergulatan HMI di Pulau Seribu masjid (sejarah dan aksi), Darsono Yusin Sali, 2018, beberapa tokoh pemuda muslim yang terlibat antara lain adalah:
        </p>
		  <table align="center" width="100%" class="mb-2">
  <tbody>
    <tr>
      <td><li>Lafran Pane</li></td>
      <td><li>Yusdi Ghozali</li></td>
      <td><li>Toha Mashudi</li></td>

    </tr>
    <tr>
      <td> <li>Asmin Nasution</li>
          </td>
      <td><li>Mansyur</li></td>
      <td><li>Bidron Hadi</li></td>
    </tr>
    <tr>
      <td> <li>Dahlan Husain</li></td>
      <td><li>Siti Zainab</li></td>
      <td> <li>M. Anwar</li></td>
    </tr>
    <tr>
      <td><li>Kartono Zarkasi</li></td>
      <td> <li>Hasan Basri</li></td>
    </tr>
    <tr>
      <td><li>Suwali</li></td>
      <td><li>Zulkarnaen</li></td>
    </tr>
  </tbody>
</table>
        <p>
          Hari itu jugalah yang kemudian dikenang dan diperingati sebagai hari berdirinya HMI. Ada dua tujuan yang hendak dicapai atas berdirinya HMI, yaitu:
        </p>
        <OL type="1" >
          <LI>Mempertahankan dan mempertinggi derajat rakyat Indonesia</LI>
          <LI>Menegakkan dan mengembangkan ajaran agama Islam</LI>
          </OL>
          <p>Untuk lebih mengukuhkan eksistensi HMI, dibentuklah pengurus HMI yang pertama. Susunannya adalah:</p>
          <ul>
            <li>Ketua: Lafran Pane </li>
            <li>Wakil Ketua: Asmin Nasution</li>
            <li>Penulis I: Anton Timoer Djailani </li>
            <li>Penulis II: Karnoto Zarkasyi</li>
            <li>Bendahara I: Dahlan Husein </li>
            <li>Bendahara II: Maisaroh Hilal, Soewali</li>
            <li>Anggota: Yusdi Gozali, Mansyur</li>
          </ul>
          <p>Sampai saat ini, dengan semangat keislaman dan keIndonesiaan HMI sudah memberikan banyak kontribusi besar pada pembangunan Indonesia</p>
          <p class="section-title pr-5">
            <span class="pr-2">Latar Belakang</span>
          </p>
          <h1 class="mb-3">Latar Belakang Berdirinya HMI</h1>
          <p style="text-align:justify;">
            Berdirinya HMI bukanlah tanpa alasan melainkan merupakan respon terhadap kondisi sosio-politik pada masa itu. Adapun kondisi-kondisi yang melatar belakangi beridirnya HMI dalam pandangan Lafran Pane adalah
          </p>
          <h4 class="section-title pr-5">
            <span class="pr-2">Situasi Dunia Internasional</span>
          </h4>
          <p>Berbagai argumen telah diungkapkan sebab-sebab kemunduran ummat Islam. Tetapi hanya satu hal yang mendekati kebenaran, yaitu bahwa kemunduran ummat Islam diawali dengan kemunduran berpikir, bahkan sama sekali menutup kesempatan untuk berpikir. Yang jelas ketika ummat Islam terlena dengan kebesaran dan keagungan masa lalu maka pada saat itu pula kemunduran menghinggapi kita.</p>
          <p style="text-align:justify;">
            Akibat dari keterbelakangan ummat Islam , maka munculah gerakan untuk menentang keterbatasan seseorang melaksanakan ajaran Islam secara benar dan utuh. Gerakan ini disebut Gerakan Pembaharuan. Gerakan Pembaharuan ini ingin mengembalikan ajaran Islam kepada ajaran yang totalitas, dimana disadari oleh kelompok ini, bahwa Islam bukan hanya terbatas kepada hal-hal yang sakral saja, melainkan juga merupakan pola kehidupan manusia secara keseluruhan. Untuk itu sasaran Gerakan Pembaharuan atau reformasi adalah ingin mengembalikan ajaran Islam kepada proporsi yang sebenarnya, yang berpedoman kepada Al Qur'an dan Hadist Rassullulah SAW.
          </p>
          <p style="text-align:justify;">Dengan timbulnya ide pembaharuan itu, maka Gerakan Pem-baharuan di dunia Islam bermunculan, seperti di Turki (1720), Mesir (1807). Begitu juga penganjurnya seperti Rifaah Badawi Ath Tahtawi (1801-1873), Muhammad Abduh (1849-1905), Muhammad Ibnu Abdul Wahab (Wahabisme) di Saudi Arabia (1703-1787), Sayyid Ahmad Khan di India (1817-1898), Muhammad Iqbal di Pakistan (1876-1938) dan lain-lain.
          </p>
          <h4 class="section-title pr-5">
            <span class="pr-2">Situasi NKRI</span>
          </h4>
          <p style="text-align:justify;">Tahun 1596 Cornrlis de Houtman mendarat di Banten. Maka sejak itu pulalah Indonesia dijajah Belanda. Imprealisme Barat selama ± 350 tahun membawa paling tidak 3 (tiga) hal :</p>
          <p>Penjajahan itu sendiri dengan segala bentuk implikasinya. Missi dan Zending agama Kristiani.</p>
          <p>Peradaban Barat dengan ciri sekulerisme dan liberalisme.
            Setelah melalui perjuangan secara terus menerus dan atas rahmat Allah SWT maka pada tanggal 17 Agustus 1945, Soekarno-Hatta Sang Dwi Tunggal Proklamasi atas nama bangsa Indonesia mengumandangkan kemerdekaannya.
            </p>
            <h4 class="section-title pr-5">
              <span class="pr-2">Kondisi Mikrobiologis Ummat Islam di Indonesia</span>
            </h4>
              <p style="text-align:justify;">Kondisi ummat Islam sebelum berdirinya HMI dapat dikategorikan menjadi 4 (empat) golongan, yaitu : Pertama : Sebagian besar yang melakukan ajaran Islam itu hanya sebagai kewajiban yang diadatkan seperti dalam upacara perkawinan, kematian serta kelahiran. Kedua : Golongan alim ulama dan pengikut-pengikutnya yang mengenal dan mempraktekkan ajaran Islam sesuai yang dilakukan oleh Nabi Muhammad SAW. Ketiga : Golongan alim ulama dan pengikut-pengikutnya yang terpengaruh oleh mistikisme yang menyebabkan mereka berpendirian bahwa hidup ini adalah untuk kepentingan akhirat saja. Keempat : Golongan kecil yang mencoba menyesuaikan diri dengan kemajuan jaman, selaras dengan wujud dan hakekat agama Islam. Mereka berusaha supaya agama Islam itu benar-benar dapat dipraktekkan dalam masyarakat Indonesia.</p>
              <h4 class="section-title pr-5">
                <span class="pr-2">Kondisi Perguruan Tinggi dan Dunia Kemahasiswaan</span>
              </h4>
                <p style="text-align:justify;">Ada dua faktor yang sangat dominan yang mewarnai Perguruan Tinggi (PT) dan dunia kemahasiswaan sebelum HMI berdiri. Pertama: sisitem yang diterapkan dalam dunia pendidikan umumnya dan PT khususnya adalah sistem pendidikan barat, yang mengarah kepada sekulerisme yang "mendangkalkan agama disetiap aspek kehidupan manusia". Kedua : adanya Perserikatan Mahasiswa Yogyakarta (PMY) dan Serikat Mahasiswa Indonesia (SMI) di Surakarta dimana kedua organisasi ini dibawah pengaruh Komunis. Bergabungnya dua faham ini (Sekuler dan Komunis), melanda dunia PT dan Kemahsiswaan, menyebabkan timbulnya "Krisis Keseimbangan" yang sangat tajam, yakni tidak adanya keselarasan antara akal dan kalbu, jasmani dan rohani, serta pemenuhan antara kebutuhan dunia dan akhirat.</p>
                <div class="text-center pb-2">
                <h4 class="section-title px-5">
                  <span class="px-2">Tujuan HMI</span>
                </h4>
              </div>
                <p>HMI  menetapkan tujuannya sebagaimana dirumuskan dalam pasal 4. AD ART HMI yaitu :</p>
                <div class="text-center pb-2">
                <b style="text-align:center">" TERBINANYA INSAN AKADEMIS, PENCIPTA, PENGABDI YANG BERNAFASKAN ISLAM DAN BERTANGGUNG JAWAB ATAS TERWUJUDNYA MASYARAKAT ADIL MAKMUR YANG DIRIDHOI ALLAH SWT ”.</b>
              </div>
              <p>Dengan rumusan tersebut,  maka  pada hakekatnya HMI bukanlah organisasi massa dalam pengertian fisik dan kualitatif, sebaliknya HMI secara kualitatif  merupakan lembaga pengabdian dan pengembangan ide, bakat dan potensi yang mendidik, memimpin dan membimbing anggota-anggotanya untuk mencapai tujuan dengan cara-cara perjuangan yang benar dan efektif.</p>
              <div class="text-center pb-2">
                <h4 class="section-title px-5">
                  <span class="px-2">Azas HMI</span>
                </h4>
              </div>
              <p style="text-align:justify;">Islam yang senantiasa memberikan energi perubahan mengharuskan para penganutnya untuk melakukan invonasi, internalisasi, eksternalisasi maupun obyektifikasi. Dan yang paling fundamental peningkatan gradasi umat diukur dari kualitas keimanan yang datang dari kesadaran paling dalam bukan dari pengaruh eksternal. Perubahan bagi HMI merupakan suatu keharusan, dengan semakin meningkatnya keyakinan akan Islam sebagai landasan teologis dalam berinteraksi secara vertikal maupun horizontal, maka pemilihan Islam sebagai azas merupakan pilihan dasar dan bukan implikasi dari sebuah dinamika kebangsaan. Ini termaktub dalam pasal 3 AD HMI yang menyatakan HMI berazaskan Islam.</p>
              <div class="text-center pb-2">
                <h4 class="section-title px-5">
                  <span class="px-2">Independensi HMI</span>
                </h4>
              </div>
              <p>HMI sebagai organisasi mahasiswa yang bersifat independen. Penegasan ini dirumuskan dalam pasal 6 Anggaran Dasar HMI yang mengemukakan secara tersurat bahwa "HMI adalah organisasi yang bersifat independen"sifat dan watak independen bagi HMI adalah merupakan hak azasi yang pertama.</p>
              <div class="text-center pb-2">
                <h4 class="section-title px-5">
                  <span class="px-2">Peran dan Fungsi HMI</span>
                </h4>
              </div>
              <p>HMI berfungsi sebagai organisasi kader (pasal 8 AD HMI)</p>
              <p>HMI sebagai organisasi kader adalah organisasi mahasiswa yang berorientasikan Islam yang melakukan perkaderan,dimana seluruh aktivitas yang dilakukan pada dasarnya merupakan proses kaderisasi, sehingga HMI berfungsi dan hanya selalu membentuk kader-kader muslim intelektual yang profesional.</p>
              <p>HMI berperan sebagai organisasi perjuangkan (pasal 9 AD HMI)</p>
              <p>HMI berperan sebagai organisasi perjuangan adalah organisasi yang selalu berjuang melakukan dan membentuk kader bangsa yang muslim, intelektual,dan profesional dimana outputnya ditujukan untuk kepentingan bangsa secara keseluruhan, sehingga insan HMI siap dapat bermanfaat bagi seluruh golongan yang ada di masyarakat selama tidak bertentangan dengan koridor HMI</p>
            </div>
    </div>
  </div>
  <!-- Team End -->

@endsection