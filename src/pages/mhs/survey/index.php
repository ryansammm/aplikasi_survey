<?php include('../src/pages/mhs/layout/sidebar.php'); ?>

<section class="our-team white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-center">
                    <h6>Survey Tracer Study</h6>
                    <h2 class="title-effect">Lulusan Politeknik AKA Bogor</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 sm-mb-30">
                <div class="team team-round">
                    <div class="team-photo">
                        <img class="img-fluid mx-auto" src="/assets/images/ANKI.jpeg" alt="">
                    </div>
                    <div class="team-description">
                        <div class="team-info">
                            <h5><a href="" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Analis Kimia</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 sm-mb-30">
                <div class="team team-round">
                    <div class="team-photo">
                        <img class="img-fluid mx-auto" src="/assets/images/PMIP.jpeg" alt="">
                    </div>
                    <div class="team-description">
                        <div class="team-info">
                            <h5><a href="" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> PMIP</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 sm-mb-30">
                <div class="team team-round">
                    <div class="team-photo">
                        <img class="img-fluid mx-auto" src="/assets/images/PLI.jpeg" alt="">
                    </div>
                    <div class="team-description">
                        <div class="team-info">
                            <h5><a href="" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> PLI</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer page-section-pt black-bg">
    <div class="container">
        <div class="footer-widget mt-80">
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

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
    </button> -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/survey/nim" method="post">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Silahkan isikan NIM sebelum mengisi survey
                    <input class="form-control" name="nim" type="text" placeholder="NIM" aria-label="NIM">
                </div>
                <div class="modal-footer align-content-center">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
            </form>
        </div>
    </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</body>

</html>