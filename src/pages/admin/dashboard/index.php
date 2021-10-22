<?php include('../src/pages/admin/layout/sidebar.php'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dashboard</h3>
                <p class="text-subtitle text-muted"> </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <div class="input-group mb-3">
                                <select class="form-select bulan" name="bulan" aria-label="Default select example">
                                    <option selected>-- Pilih Bulan --</option>
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                                <button class="btn btn-bulan btn-primary" type="button" id="button-addon2">Filter</button>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="text-center">Grafik Bulan <span class="nama-bulan"></span></h2>
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
</div>

<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2021 &copy; Mazer</p>
        </div>
        <div class="float-end">
            <p>Crafted with <span class="text-danger"></span> by <a href="http://www.sinovatif.com/">SNI</a></p>
        </div>
</footer>
</div>
</div>
<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- <script src="assets/vendors/chartjs/Chart.min.js"></script>
<script src="assets/js/ui-chartjs.js"></script> -->

<script src="assets/js/main.js"></script>

<script src="https://www.gstatic.com/charts/loader.js">
</script>


<script src="/assets/mhs/js/jquery-3.4.1.min.js"></script>
<!-- plugins-jquery -->
<script src="/assets/mhs/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>
    var plugin_path = '/assets/mhs/js/';
</script>

<!-- custom -->
<script src="/assets/mhs/js/custom.js"></script>

<!-- <script>
    var ctx = document.getElementById('pie').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script> -->


<script>
    function drawChart(bulan = "") {
        $.ajax({
            type: 'get',
            url: '/dashboard/chart',
            data: {
                bulan: bulan
            }
        }).done(function(datas) {

            $('.nama-bulan').html(datas.nama_bulan)

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


    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);



    $('.btn-bulan').on('click', function() {
        var bulan = $('.bulan').val();
        drawChart(bulan);
        // console.log(bulan);
    })
</script>

</body>

</html>