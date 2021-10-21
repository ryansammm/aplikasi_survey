<?php include('../src/pages/admin/layout/sidebar.php'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Master Survey</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Master Survey</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a type="button" class="btn btn-sm btn-primary mb-1" href="/master-survey/create">Tambah Data </a>
                <a type="button" class="btn btn-sm btn-warning mb-1" href="" data-bs-toggle="modal" data-bs-target="#import"> Import </a>
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pertanyaan</th>
                            <!-- <th>Opsi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datas as $key => $value) { ?>
                            <tr>

                                <td><?= $key += 1 ?></td>
                                <td><?= $value['pertanyaan'] ?></td>
                                <!-- <td><?= $value['jenisPertanyaan'] ?></td> -->
                                <!-- <td><?= $value['tahunAjaran'] ?></td> -->
                                <!-- <td>
                                    <a href="/data-mahasiswa/<?= $value['nim'] ?>/edit" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="/data-mahasiswa/<?= $value['nim'] ?>" class="btn btn-sm btn-outline-warning"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-danger btn-hapus" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-id="<?= $value['nim'] ?>"><i class="fas fa-user-slash"></i></a>
                                </td> -->

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin?
            </div>
            <div class="modal-footer">
                <a href="" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>

                <form class="hapusData" action="" method="post"> <button type="submit" class="btn btn-danger btn-hapus-modal">Hapus</button></form>
            </div>
        </div>
    </div>
</div>


<script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/jquery-3.4.1.min.js"></script>

<script src="/assets/vendors/chartjs/Chart.min.js"></script>
<script src="/assets/js/ui-chartjs.js"></script>

<script src="/assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

<script src="/assets/js/main.js"></script>

<script>
    $(document).on('click', '.btn-hapus', function() {
        var id = $(this).attr('data-bs-id');
        console.log(id);
        var bebas = $('#exampleModal');
        bebas.find('.hapusData').prop('action', '/data-mahasiswa/' + id + '/delete');
    })
</script>

</body>

</html>