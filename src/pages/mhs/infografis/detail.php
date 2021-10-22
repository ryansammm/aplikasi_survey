<?php include('../src/pages/mhs/layout/sidebar.php'); ?>

<section class="page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title mb-60 text-center">
                    <h6>Detail Statistik</h6>
                    <h2 class="title-effect">Infografis <?= $id ?></h2>
                    <p>Rincian Infografis</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4"><i class="fa fa-address-card fa-5x"></i></div>
                            <div class="col-8">
                                <p class="d-inline text-white">Total Mahasiswa<br>
                                <h1 class="text-white"><?= $mhs_count['count'] ?></h1>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card text-white bg-warning">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4"><i class="fa fa-users fa-5x"></i></div>
                            <div class="col-8">
                                <p class="d-inline text-white">Total Responden<br>
                                <h1 class="text-white"><?= $hasil_survey_count['count'] ?></h1>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card text-white bg-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4"><i class="fa fa-briefcase fa-5x"></i></div>
                            <div class="col-8">
                                <p class="d-inline text-white">Total Serapan (%)<br>
                                <h1 class="text-white"><?= number_format($presentase, 2) ?>%</h1>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-8">
                <h2 class="">Grafik</h2>
            </div>
            <div class="col-4">
                <div class="input-group mb-3">
                    <select class="form-select" name="bulan" aria-label="Default select example">
                        <option selected>-- Pilih Tahun --</option>
                        <?php foreach ($mhs_tahun as $key => $value) { ?>
                            <option value="<?= $value['tahunAjaran'] ?>"><?= $value['tahunAjaran'] ?></option>
                        <?php } ?>
                    </select>
                    <button class="btn btn-bulan btn-primary" type="button" id="button-addon2">Filter</button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div id="myChart" style="width:100%; max-width:1000px; height:300px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div id="myChart2" style="width:100%; max-width:1000px; height:300px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div id="myChart3" style="width:100%; max-width:1000px; height:300px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div id="myChart4" style="width:100%; max-width:1000px; height:300px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div id="myChart5" style="width:100%; max-width:1000px; height:300px;">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--=================================
Choose Your Pricing-->

<!--=================================
 portfolio -->


<!--=================================
 footer -->

<footer class="footer page-section-pt black-bg">
    <div class="container">
        <div class="footer-widget mt-20">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <p class="mt-15"> &copy;Copyright <span id="copyright">
                            <script>
                                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                            </script>
                        </span> <a href="#"> SINOVATIF </a> All Rights Reserved </p>
                </div>
                <div class="col-lg-6 col-md-6 text-left text-md-right">
                    <div class="social-icons color-hover mt-10">
                        <ul>
                            <li class=""><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li class=""><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li class=""><a href="#"><i class="fab fa-dribbble"></i> </a></li>
                            <li class=""><a href="#"><i class="fab fa-twitter"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--=================================
 footer -->

</div>



<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>


<!--=================================
 jquery -->

<!-- jquery -->
<script src="/assets/mhs/js/jquery-3.4.1.min.js"></script>
<script src="https://www.gstatic.com/charts/loader.js">
</script>

<!-- plugins-jquery -->
<script src="/assets/mhs/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>
    var plugin_path = '/assets/mhs/js/';
</script>

<!-- custom -->
<script src="/assets/mhs/js/custom.js"></script>

<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        $.ajax({
            type: 'get',
            url: '/infografis/<?= $id ?>/chart'
        }).done(function(datas) {

            var data = google.visualization.arrayToDataTable([
                ['Contry', 'Mhl'],
                ['Bekerja', parseInt(datas.data_kuesioner_bekerja.count)],
                ['Wirausaha', parseInt(datas.data_kuesioner_wirausaha.count)],
                ['Melanjutkan Pendidikan', parseInt(datas.data_kuesioner_pendidikan.count)],
                ['Lain-lain', parseInt(datas.data_kuesioner_lainnya.count)]
            ]);

            var data2 = google.visualization.arrayToDataTable([
                ['Contry', 'Mhl'],
                ['Sebelum lulus kuliah', parseInt(datas.data_kuesioner_b29a.count)],
                ['0-3 bulan setelah lulus kuliah', parseInt(datas.data_kuesioner_b29b.count)],
                ['4-6 bulan setelah lulus kuliah', parseInt(datas.data_kuesioner_b29c.count)],
                ['>6 bulan setelah lulus kuliah', parseInt(datas.data_kuesioner_b29d.count)]
            ]);

            var data3 = google.visualization.arrayToDataTable([
                ['Contry', 'Mhl'],
                ['Ya, sesuai', parseInt(datas.data_kuesioner_b13a.count)],
                ['Tidak, tingkat pendidikan saya LEBIH TINGGI dari tingkat pendidikan yg dibutuhkan oleh pekerjaan ini', parseInt(datas.data_kuesioner_b13b.count)],
                ['Tidak, tingkat pendidikan saya LEBIH RENDAH dari tingkat pendidikan yg dibutuhkan oleh pekerjaan ini', parseInt(datas.data_kuesioner_b13c.count)],
                ['Tidak, pekerjaan ini tidak membutuhkan pendidikan TINGGI', parseInt(datas.data_kuesioner_b13d.count)]
            ]);

            var data4 = google.visualization.arrayToDataTable([
                ['Contry', 'Mhl'],
                ['Instansi Pemerintah', parseInt(datas.data_kuesioner_b3a.count)],
                ['Badan Usaha Milik Negara/ Daerah', parseInt(datas.data_kuesioner_b3b.count)],
                ['Perusahaan swasta multi nasional', parseInt(datas.data_kuesioner_b3c.count)],
                ['Perusahaan swasta dalam neger', parseInt(datas.data_kuesioner_b3d.count)],
                ['Perusahaan perseorangan', parseInt(datas.data_kuesioner_b3e.count)],
                ['Koperasi/ Yayasan', parseInt(datas.data_kuesioner_b3f.count)],
                ['Lainnya', parseInt(datas.data_kuesioner_b3g.count)]
            ]);

            var data5 = google.visualization.arrayToDataTable([
                ['Contry', 'Mhl'],
                ['< 3jt', parseInt(datas.data_kuesioner_b28a.count)],
                ['3 - 5jt', parseInt(datas.data_kuesioner_b28b.count)],
                ['5 - 10jt', parseInt(datas.data_kuesioner_b28c.count)],
                ['> 10jt', parseInt(datas.data_kuesioner_b28d.count)],
                ['Lainnya', parseInt(datas.data_kuesioner_b28e.count)]
            ]);

            var options = {
                title: 'Sebaran Lulusan Prodi ANKIM'
            };

            var options2 = {
                title: 'Masa Tunggu Lulusan Prodi ANKIM'
            };

            var options3 = {
                title: 'Kesesuaian Bidang Kerja Lulusan Prodi ANKIM'
            };

            var options4 = {
                title: 'Ukuran Tempat Bekerja Lulusan Prodi ANKIM'
            };

            var options5 = {
                title: 'Penghasilan Pertama Lulusan Prodi ANKIM'
            };

            var chart = new google.visualization.PieChart(document.getElementById('myChart'));
            var chart2 = new google.visualization.PieChart(document.getElementById('myChart2'));
            var chart3 = new google.visualization.PieChart(document.getElementById('myChart3'));
            var chart4 = new google.visualization.PieChart(document.getElementById('myChart4'));
            var chart5 = new google.visualization.PieChart(document.getElementById('myChart5'));
            chart.draw(data, options);
            chart2.draw(data2, options2);
            chart3.draw(data3, options3);
            chart4.draw(data4, options4);
            chart5.draw(data5, options5);


        })

    }
</script>

</body>

</html>