<?php include('../src/pages/mhs/layout/sidebar.php'); ?>

<section class="page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title mb-60 text-center">
                    <h6>Detail Statistik</h6>
                    <h2 class="title-effect">Infografis 2019</h2>
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
                                <h1 class="text-white">100</h1>
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
                                <h1 class="text-white">100</h1>
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
                                <h1 class="text-white">100</h1>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="text-center">Grafik</h2>
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
    var plugin_path = '/js/';
</script>

<!-- custom -->
<script src="/assets/mhs/js/custom.js"></script>

<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Contry', 'Mhl'],
            ['Bekerja', 54.8],
            ['Wirausaha', 48.6],
            ['Melanjutkan Pendidikan', 44.4],
            ['Lain-lain', 23.9]
        ]);

        var data2 = google.visualization.arrayToDataTable([
            ['Contry', 'Mhl'],
            ['Ya', 54.8],
            ['Tidak', 48.6]
        ]);

        var options = {
            title: 'Sebaran Lulusan Prodi ANKIM'
        };

        var options2 = {
            title: 'Apakah saat ini mereka bekerja?'
        };

        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        var chart2 = new google.visualization.PieChart(document.getElementById('myChart2'));
        chart.draw(data, options);
        chart2.draw(data2, options2);
    }
</script>

</body>

</html>