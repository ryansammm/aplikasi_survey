<?php include('../src/pages/mhs/layout/sidebar.php'); ?>

<section class="page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title mb-60 text-center">
                    <h6>Detail Statistik</h6>
                    <h2 class="title-effect">Infografis</h2>
                    <p>Dirangkum per tahun</p>
                </div>
            </div>
        </div>
        <div class="row">

            <?php foreach ($data_hasil_survey as $key => $value) { ?>
                <div class="col-lg-4 col-md-4">
                    <div class="pricing-table boxed">
                        <div class="pricing-top">
                            <div class="pricing-title">
                                <h3 class="mb-15">Tahun <?= $value['tahun'] ?></h3>
                            </div>
                            <div class="pricing-button">
                                <a class="button" href="/infografis/<?= $value['tahun'] ?>/detail">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>


<footer class="footer page-section-pt black-bg">
    <div class="container">
        <div class="footer-widget " style="margin-top: 46.5pt;">
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
                            <li class="social-facebook"><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li class="social-dribbble"><a href="#"><i class="fab fa-dribbble"></i> </a></li>
                            <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>



<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>


<!--=================================
 jquery -->

<!-- jquery -->
<script src="assets/mhs/js/jquery-3.4.1.min.js"></script>

<!-- plugins-jquery -->
<script src="assets/mhs/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>
    var plugin_path = 'assets/mhs/js/';
</script>

<!-- custom -->
<script src="assets/mhs/js/custom.js"></script>



</body>

</html>