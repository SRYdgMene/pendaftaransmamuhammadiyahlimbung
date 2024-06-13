<!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container text-center">
                <h1 class="display-3">SELAMAT DATANG!</h1>
                <h4>sekolah berkualitas, berkarakter, dan berwawasan lingkungan.</h4>
            </div>
        </div>

        <div class="container text-center py-5 my-5">
        
            <div id="countdown"></div>
            
        </div>

        <hr>

        <div class="container p-3">
            <!-- Example row of columns -->
            <div class="text-center">
                <h2>Visi</h2>
                <h4>Terwujudnya lulusan yang berkarakter islami, berwawasan kebangsaan dan lingkungan, unggul, berkemajuan, serta berdaya saing global</h4>
            </div>
            <div class="text-center mt-5">
                <h2>Misi</h2>
                <h5><p> 1. Mewujudkan sekolah unggul dengan menanamkan nilai-nilai keislaman, kebangsaan, dan wawasan lingkungan </p>
                    <p> 2. Menyiapkan kader Muhammadiyah dan pemimpin bangsa yang beriman, bertakwa dan berakhlakul karimah </p>
                    <p> 3. Meningkatkan kompetensi sumber daya manusia yang ikhlas, tulus, amanah, profesional, kompetitif, kreatif, dan inovatif</p>
                    <p> 4. Meningkatkan komunikasi dan kerjasama dengan seluruh stakeholder sekolah untuk mencapai tujuan pendidikan</p>
                    <p> 5. Mengembangkan kemandirian, kepemimpinan, kewirausahaan, dan kepedulian sosial peserta didik</p>
                    <p> 6. Menyelenggarakan pendidikan yang berdaya saing global dengan peningkatan kompetensi literasi dan numerasi serta penguasaan teknologi dan informasi</p>
                    
                </h5>
            </div>

        </div> <!-- /container -->

        <hr>

        <div class="container p-3">
            <h2 class="text-center">Program keahlian</h2>

                <div class="text-center">
                <h4><p>IPA (Ilmu pengetahuan Alam)</p></h4>
            <h4><p>IPS (Ilmu Pengetahuan Sosial)</p></h4>
        <hr>

        <div class="container p-3">
            <div class="row">
                <div class="col-8">
                    <h4>Galeri SMADIYAH</h4>
                    <img src="../../assets/img/pentas.jpg" alt="Pentas Seni Oleh Organisasi Impresi 2023" width="350">
                    <img src="../../assets/img/pic3.jpg" alt="Pelepasan Pramuka SMADIYAH untuk Mengikuti Lomba 17 Agustus 2023" width="350">
                </div>
              
                    </div>
                </div>
            </div>
        </div>

<?php
        include "../../controller/connect.php";
        $query = mysqli_query($connect, "SELECT * FROM countdown");
        $data = mysqli_fetch_array($query);
        $tgl = $data['tanggal'];
        $tgl = date("m/d/Y", strtotime($tgl));
    ?>
<script type="text/javascript">

    var target = new Date("<?= $tgl ?>").getTime();

    var hari, jam, menit, detik;

    var countdown = document.getElementById("countdown");

    setInterval(function () {

    var sekarang = new Date().getTime();
    var sisa = (target - sekarang) / 1000;

    hari = parseInt(sisa / 86400);
    sisa = sisa % 86400;
    jam = parseInt(sisa / 3600);
    sisa = sisa % 3600;
    menit = parseInt(sisa / 60);
    detik = parseInt(sisa % 60);

    countdown.innerHTML = "<h1> Ayo segera daftar</h1><h1 class='d-inline'>"+hari+" hari </h1><h1 class='d-inline'>"+jam+" jam </h1><h1 class='d-inline'>"+menit+" menit </h1><h1 class='d-inline mt-5'>"+detik+" detik</h1>";
    }, 1000);

</script>