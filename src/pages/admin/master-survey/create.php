<?php include('../src/pages/admin/layout/sidebar.php'); ?>

<div class="page-heading">

    <section class="section">
        <div class="card">
            <div class="card-content">

                <form class="form form-vertical" id="qual" method="post" action="/data-mahasiswa/store" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-1" style="padding-top: 3pt; padding-left: 21pt;">
                                <a href="/master-survey" class="btn btn-outline-primary"><i class="fas fa-arrow-left"></i></a>

                            </div>
                            <div class="col">
                                <h4 class="card-title">Tambah Pertanyaan</h4>
                                <p style="font-size: 13px;">Data Survey</p>
                            </div>
                        </div>
                        <div style="background-color: #589cd1;height: 2px;margin-bottom: 20px;"></div>

                        <div class="form-body">
                            <h5>Form Pertanyaan</h5>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <div class="card-body border border-1 rounded">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Jenis Pertanyaan</label>
                                                    <select name="jenisPertanyaan" class="form-select" required>
                                                        <option value="">-- Pilih Jenis Pertanyaan --</option>
                                                        <option value="1">Jawaban Singkat</option>
                                                        <option value="2">Paragraf</option>
                                                        <option value="3">Pilihan Ganda</option>
                                                        <option value="4">Kotak Centang</option>
                                                        <option value="5">Dropdown</option>
                                                        <option value="6">Tanggal</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Pertanyaan *</label>
                                                    <textarea class="form-control" name="pertanyaan" id=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h5>Detail Pertanyaan</h5>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <div class="card-body border border-1 rounded">
                                        <div class="row">

                                            <div class="col-2">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Wajib Diisi</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="statusDiisi" id="statusDiisi1">
                                                        <label class="form-check-label" for="statusDiisi1">
                                                            Ya
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="statusDiisi" id="statusDiisi2">
                                                        <label class="form-check-label" for="statusDiisi2">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Munculkan Opsi "Lainya.."</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="opsiLainnya" id="opsiLainnya1">
                                                        <label class="form-check-label" for="opsiLainnya1">
                                                            Ya
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="opsiLainnya" id="opsiLainnya2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="col-6">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Paragraf</label>
                                                            <textarea class="form-control" name="pertanyaan" id=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Pilihan Ganda</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Ya
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Tidak
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Kotak Centang</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    Default checkbox
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                <label class="form-check-label" for="flexCheckChecked">
                                                                    Checked checkbox
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Dropdown</label>
                                                            <select name="programStudi" class="form-select" required>
                                                                <option value="">-- Pilih Jenis Pertanyaan --</option>
                                                                <option value="1">Deskripsi</option>
                                                                <option value="2">Pilihan Ganda</option>
                                                                <option value="3">Kotak Centang</option>
                                                                <option value="4">Dropdown</option>
                                                                <option value="5">Tanggal</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Tanggal</label>
                                                            <input type="date" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

                                        </div>


                                        <div class="row">
                                            <div class="col-9">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Opsi</label>
                                                    <input class="form-control" name="opsiPertanyaan" id=""></input>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <label for="first-name-vertical"></label>
                                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                    <button type="button" class="btn btn-outline-primary add_form_field">Tambah</button>
                                                    <button type="button" class="btn btn-outline-primary delete">Hapus</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container1"> </div>

                                        <div class="row">

                                            <!-- <div class="col-7">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Opsi</label>
                                                    <input class="form-control" name="pertanyaan" id=""></input>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
</div>


<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2021 &copy; SNI</p>
        </div>
        <div class="float-end">
            <p>Crafted with <span class="text-danger"></span> by <a href="http://www.sinovatif.com/">SNI</a></p>
        </div>
    </div>
</footer>
</div>
</div>




<!-- Modal -->
<div class="modal fade" id="import" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="importLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="/import">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importLabel">Import Data Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="formFile" class="form-label">Masukan File :</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>

<script src="/assets/vendors/chartjs/Chart.min.js"></script>
<script src="/assets/js/ui-chartjs.js"></script>
<script src="/assets/js/jquery-3.4.1.min.js"></script>

<script src="/assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

<script src="/assets/js/main.js"></script>

<script>
    $(document).ready(function() {
        var max_fields = 10;
        var wrapper = $(".container1");
        var add_button = $(".add_form_field");

        var x = 1;
        $(add_button).click(function(e) {
            e.preventDefault();
            if (x < max_fields) {
                x++;
                $(wrapper).append('<div class="container1"><div class="row"><div class="col-9"><div class="form-group"><label for="first-name-vertical">Opsi</label><input class="form-control" name="opsiPertanyaan" id=""></input></div></div><div class="col-2"><label for="first-name-vertical"></label><div class="btn-group" role="group" aria-label="Basic outlined example"><button type="button" class="btn btn-outline-primary add_form_field">Tambah</button><button type="button" class="btn btn-outline-primary delete">Hapus</button></div></div></div></div>'); //add input box
            } else {
                alert('You Reached the limits')
            }
        });

        $(wrapper).on("click", ".delete", function(e) {
            e.preventDefault();
            $(this).parent().parent().parent().parent().remove();
            x--;
        })
    });
</script>

</body>

</html>