<?php include('../src/pages/admin/layout/sidebar.php'); ?>

<div class="page-heading">

    <section class="section">
        <div class="card">
            <div class="card-content">

                <form class="form form-vertical" id="qual" method="post" action="/data-mahasiswa/<?= $detail['nim'] ?>/update" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-1" style="padding-top: 3pt; padding-left: 21pt;">
                                <a href="/data-mahasiswa" class="btn btn-outline-primary"><i class="fas fa-arrow-left"></i></a>

                            </div>
                            <div class="col">
                                <h4 class="card-title">Edit Data Mahasiswa</h4>
                                <p style="font-size: 13px;">Data Mahasiswa</p>
                            </div>
                        </div>
                        <div style="background-color: #589cd1;height: 2px;margin-bottom: 20px;"></div>

                        <div class="form-body">
                            <h5>Data Diri</h5>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <div class="card-body border border-1 rounded">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">NIM *</label>
                                                    <input type="text" class="form-control" name="nim" value="<?= $detail['nim'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Program Studi *</label>
                                                    <select name="programStudi" class="form-select" required>
                                                        <option value="">-- Pilih Program Studi --</option>
                                                        <?php foreach ($data_program_studi as $key => $value) { ?>
                                                            <option <?= $value['idStudi'] == $detail['programStudi'] ? 'selected' : '' ?> value="<?= $value['idStudi'] ?>"><?= $value['namaStudi'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Kelas *</label>
                                                    <input type="text" class="form-control" name="kelas" value="<?= $detail['kelas'] ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Nama Mahasiswa *</label>
                                                    <input type="text" class="form-control" name="namaMhs" value="<?= $detail['namaMhs'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Tahun Ajaran *</label>
                                                    <input type="text" class="form-control" name="tahunAjaran" value="<?= $detail['tahunAjaran'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Tahun Lulus</label>
                                                    <input type="text" class="form-control" name="tahunLulus" value="<?= $detail['tahunLulus'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Jalur Masuk</label>
                                                    <input type="text" class="form-control" name="jalurMasuk" value="<?= $detail['jalurMasuk'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" name="tglLahir" value="<?= $detail['tglLahir'] ?>">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Tempat Lahir</label>
                                                        <input type="text" class="form-control" name="tempatLahir" value="<?= $detail['tempatLahir'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Asal Sekolah</label>
                                                        <input type="text" class="form-control" name="asalSekolah" value="<?= $detail['asalSekolah'] ?>">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Alamat Sekolah</label>
                                                        <textarea type="text" class="form-control" name="alamatSekolah"> <?= $detail['alamatSekolah'] ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
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

<script src="/assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

<script src="/assets/js/main.js"></script>

</body>

</html>