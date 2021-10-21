<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Webster - Responsive Multi-purpose HTML5 Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/kuesioner/images/favicon.ico" />

    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="/assets/kuesioner/css/plugins-css.css" />

    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="/assets/kuesioner/css/typography.css" />

    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="/assets/kuesioner/css/shortcodes/shortcodes.css" />

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="/assets/kuesioner/css/style.css" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="/assets/kuesioner/css/responsive.css" />

</head>

<body>

    <div class="wrapper">

        <!-- <div id="pre-loader">
            <img src="/assets/kuesioner/images/pre-loader/loader-01.svg" alt="">
        </div> -->

        <section class="page-section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- <div id="formmessage">Success/Error Message Goes Here</div> -->
                                <form role="form" method="post" action="/kuesioner/store">
                                    <h4 class="mb-20">A. Bidata Responden</h4>
                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label for="name">Email Address</label>
                                            <input id="name" type="text" class="form-control" name="email" required>
                                        </div>
                                        <div class="col-4">
                                            <label for="name">Nama Lengkap</label>
                                            <input id="name" type="text" class="form-control" name="nama" required>
                                        </div>
                                        <div class="col-4">
                                            <label for="name">Program Studi</label>
                                            <div class="box">
                                                <select name="programStudi" class="fancyselect" id="">
                                                    <option value="">-- Pilih Jurusan --</option>
                                                    <option value="1">D3 Analisis Kimia</option>
                                                    <option value="2">D3 Pengolahan Limbah Industri</option>
                                                    <option value="3">D3 Penjaminan Mutu Industri Pangan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-4">
                                            <label for="name">NIM</label>
                                            <input id="name" type="text" class="form-control" name="nim" required>
                                        </div>
                                        <div class="col-4">
                                            <label for="name">Tahun Lulus</label>
                                            <input id="name" type="text" class="form-control" name="tahunLulus" required>
                                        </div>
                                        <div class="col-4">
                                            <label for="name">Telepon/Handphone</label>
                                            <input id="name" type="text" class="form-control" name="telepon" required>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">B. Kegiatan Utama</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B1. Apakah saat ini Anda BEKERJA (bukan berwirausaha)?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b1" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya (lanjut ke pertanyaan berikutnya)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b1" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak (lanjut ke pertanyaan B36)
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B2. Nama perusahaan tempat Anda bekerja saat ini: </label>
                                            <input id="name" type="text" class="form-control" name="b2">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B3. Apa jenis perusahaan tempat Anda bekerja saat ini?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b3" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Instansi Pemerintah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b3" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Badan Usaha Milik Negara/ Daerah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b3" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Perusahaan swasta multi nasional
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b3" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Perusahaan swasta dalam negeri
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b3" value="5" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Perusahaan perseorangan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b3" value="6" id="flexRadioDefault6">
                                                <label class="form-check-label" for="flexRadioDefault6">
                                                    Koperasi/ Yayasan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b3" value="7" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b3Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B4. Berapa jumlah karyawan perusahaan tempat Anda bekerja saat ini?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b4" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    < 10 Orang </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b4" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    10 - 49 Orang
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b4" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    50 - 249 Orang
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b4" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    > 249 Orang
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B5. Apa bidang/sektor usaha perusahaan tempat bekerja Anda sekarang?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Pertanian/peternakan/perikanan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Pertambangan dan penggalian
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Industri pengolahan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Listrik, gas dan air
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="5" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Konstruksi/ bangunan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="6" id="flexRadioDefault6">
                                                <label class="form-check-label" for="flexRadioDefault6">
                                                    Perdagangan, hotel, dan restoran
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="7" id="flexRadioDefault6">
                                                <label class="form-check-label" for="flexRadioDefault6">
                                                    Angkutan dan komunikasi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="8" id="flexRadioDefault6">
                                                <label class="form-check-label" for="flexRadioDefault6">
                                                    Keuangan, persewaan dan jasa perusahaan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="9" id="flexRadioDefault6">
                                                <label class="form-check-label" for="flexRadioDefault6">
                                                    Jasa-jasa
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="10" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b5Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B6. Apa produk/jasa utama yang dihasilkan oleh perusahaan tempat Anda bekerja sekarang? (isi dengan jenis produk yang sesuai, misal: pakaian, teh dalam kemasan, pengiriman barang,dll)</label>
                                            <input id="name" type="text" class="form-control" name="b6">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B7. Sejak kapan Anda bekerja di tempat sekarang? </label>
                                                <input type='text' name="b7" class="form-control datetimepicker" id='datetimepicker4' />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B8. Apa status kepegawaian Anda dalam pekerjaan saat ini?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b8" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Staf tetap/ permanen
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b8" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tenaga kontrak waktu tertentu
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b8" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Out sourcing
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b8" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Tenaga harian
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b8" value="5" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Bekerja tanpa ikatan kontrak
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b8" value="6" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b8Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B9. Sebutkan tugas/pekerjaan utama yang Anda lakukan saat ini secara spesifik ?</label>
                                                <div class="section-field textarea">
                                                    <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="b9"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B10. Apa posisi/jabatan Anda saat ini?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b10" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Staf
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b10" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Supervisor (membawahi beberapa staf)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b10" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Manajer (membawahi beberapa supervisor)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b10" value="4" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b10">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B11. Sejak kapan Anda menempati posisi/jabatan saat ini?</label>
                                                <input type='text' name="b11" class="form-control datetimepicker" id='datetimepicker4' />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B12. Berapa penghasilan total rata-rata Anda per bulan? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b12" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    < 3jt </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b12" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    3 - 5jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b12" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    5 - 10jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b12" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    > 10jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b12" value="5" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b12Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B13. Menurut pendapat Anda, apakah pekerjaan ini sesuai dengan tingkat pendidikan Anda?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b13" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya, sesuai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b13" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak, tingkat pendidikan saya LEBIH TINGGI dari tingkat pendidikan yg dibutuhkan oleh pekerjaan ini
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b13" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Tidak, tingkat pendidikan saya LEBIH RENDAH dari tingkat pendidikan yg dibutuhkan oleh pekerjaan ini
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b13" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Tidak, pekerjaan ini tidak membutuhkan pendidikan TINGGI
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B14. Menurut pendapat Anda, bagaimanakah kesesuaian bidang pendidikan yang dipelajari di politeknik dengan kebutuhan pekerjaan Anda saat ini?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b14" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Sangat sesuai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b14" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Sesuai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b14" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Kurang sesuai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b14" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Tidak sesuai
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="formFile" class="form-label">B15. Jika menurut Anda pekerjaan saat ini tidak sesuai dengan pendidikan Anda, mengapa Anda mengambilnya? jawaban bisa lebih dari satu</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pertanyaan tidak relevan, pendidikan saya sudah sesuai dengan pekerjaan saat ini.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="2" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Saya belum mendapatkan pekerjaan yang lebih sesuai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="3" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="4" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Di pekerjaan ini saya memeroleh prospek karir yang baik
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="5" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="6" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="7" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pekerjaan saya saat ini lebih aman/terjamin/secure
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="8" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pekerjaan saya saat ini lebih menarik
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="9" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pekerjaan saya saat ini lebih memungkinkan saya memiliki jadwal yang fleksibel/ mengambil pekerjaan tambahan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="10" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="11" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="12" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B16. Apakah pekerjaan saat ini merupakan pekerjaan PERTAMA Anda SETELAH lulus dari politeknik?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b16" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b16" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Saat ini Bukan Pekerjaan Pertama</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B17. Nama perusahaan tempat Anda bekerja PERTAMA kali setelah menyelesaikan pendidikan di politeknik?</label>
                                            <input id="name" type="text" class="form-control" name="b17">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B18. Kapan Anda memulai pekerjaan PERTAMA tersebut? </label>
                                                <input type='text' class="form-control datetimepicker" name="b18" id='datetimepicker4' />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B19. Kapan Anda berhenti dari pekerjaan PERTAMA tersebut? </label>
                                                <input type='text' class="form-control datetimepicker" name="b19" id='datetimepicker4' />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B20. Apa jenis perusahaan tempat Anda PERTAMA kali bekerja? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b20" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Instansi pemerintah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b20" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Badan Usaha Milik Negara/ Daerah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b20" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Perusahaan swasta multi nasional
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b20" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Perusahaan swasta dalam negeri
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b20" value="5" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Perusahaan perseorangan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b20" value="6" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Koperasi/ Yayasan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b20" value="7" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b20Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B21. Berapa jumlah karyawan perusahaan tempat Anda PERTAMA kali bekerja?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b21" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    < 10 orang </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b21" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    < 50 orang </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b21" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    < 250 orang </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b21" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    > 250 orang
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B22. Apa bidang/sektor usaha perusahaan tempat Anda PERTAMA kali bekerja?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Pertanian/peternakan/perikanan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Pertambangan dan penggalian
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Industri pengolahan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Listrik, gas dan air
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="5" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Konstruksi/ bangunan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="6" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Perdagangan, hotel, dan restoran
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="7" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Angkutan dan komunikasi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="8" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Keuangan, persewaan dan jasa perusahaan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="9" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Jasa-jasa
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="10" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b22Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B23. Apa produk/jasa yang dihasilkan oleh perusahaan tempat Anda PERTAMA kali bekerja? </label>
                                            <input id="name" type="text" class="form-control" name="b23">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B24. Sebutkan secara spesifik tugas/pekerjaan utama yang Anda lakukan pada pekerjaan PERTAMA</label>
                                            <input id="name" type="text" class="form-control" name="b24">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B25. Apa alasan utama Anda berhenti dari pekerjaan PERTAMA? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Pemutusan hubungan kerja
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Gaji tidak sesuai harapan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Posisi tidak sesuai harapan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Konflik di tempat kerja
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="5" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Prospek pengembangan karir tidak jelas
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="6" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Jenis pekerjaan tidak sesuai dengan pendidikan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="7" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Lokasi perusahaan jauh dari tempat tinggal
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="8" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Melanjutkan studi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="9" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b25Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Pekerjaan Pertama</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B26. Apa posisi/jabatan PERTAMA Anda? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b26" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Staf
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b26" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Supervisor (membawahi beberapa staf)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b26" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Manajer (membawahi beberapa supervisor)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b26" value="4" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b26Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B27. Apa status kepegawaian pekerjaan PERTAMA Anda?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b27" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Staf tetap/ permanen
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b27" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tenaga kontrak waktu tertentu
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b27" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Out sourcing
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b27" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Tenaga harian
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b27" value="5" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Bekerja tanpa ikatan kontrak
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b27" value="6" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b27Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B28. Berapa penghasilan total rata-rata pekerjaan PERTAMA Anda per bulan? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b28" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    < 3jt </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b28" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    3 - 5jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b28" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    5 - 10jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b28" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    > 10jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b28" value="5" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b28Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B29. Kapan Anda memulai pekerjaan pertama Anda? (lulus kuliah terhitung tanggal wisuda Anda) </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b29" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Sebelum lulus kuliah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b29" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    0-3 bulan setelah lulus kuliah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b29" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    4-6 bulan setelah lulus kuliah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b29" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    >6 bulan setelah lulus kuliah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b29" value="5" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b29Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="formFile" class="form-label">B30. Bagaimana cara Anda mencari pekerjaan?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Melalui iklan di koran/majalah, brosur
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="2" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Mencari lewat internet/iklan online/milis
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="3" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Menghubungi Disnakertrans
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="4" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Melamar ke perusahaan tanpa mengetahui lowongan yang ada
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="5" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Melalui recruitment on campus
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="6" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="7" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Melalui pusat karir (CDC) politeknik
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="8" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pergi ke bursa/pameran kerja
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="9" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Menghubungi ikatan alumni
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="10" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Membangun jejaring (network) sejak masih kuliah
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B31. Kepada berapa perusahaan/instansi/ institusi Anda mengirimkan surat lamaran sebelum akhirnya Anda memperoleh pekerjaan PERTAMA?</label>
                                            <input id="name" type="text" class="form-control" name="b31">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B32. Berapa banyak perusahaan/instansi/ institusi yang mengundang Anda untuk wawancara?</label>
                                            <input id="name" type="text" class="form-control" name="b32">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B33. Apakah Anda ikut pelatihan/kursus tambahan untuk mencari pekerjaan? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b33" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b33" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Mengikuti Pelatihan / Kursus</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">Sebutkan bidang pelatihan/kursus yang diikuti :</label>
                                                <div class="section-field textarea">
                                                    <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="bidangPelatihan"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Sertifikat Kompetensi Khusus untuk Melamar Pekerjaan</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B34. Apakah Anda memerlukan sertifikat kompetensi khusus untuk melamar pekerjaan? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b34" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b34" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Membutuhkan Sertifikat Kompetensi Khusus untuk Melamar Pekerjaan</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">Sebutkan sertifikat kompetensi yang dibutuhkan :</label>
                                                <div class="section-field textarea">
                                                    <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="sertifikat"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Syarat Utama Melamar Pekerjaan</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B35. Apakah ijazah politeknik Anda menjadi syarat utama dalam melamar pekerjaan? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b35" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b35" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Memerlukan Dokumen Utama selain ijazah</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">Sebutkan dokumen utama yang menjadi syarat melamar pekerjaan :</label>
                                                <div class="section-field textarea">
                                                    <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="dokumenUtama"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B36. Apakah saat ini Anda BERWIRAUSAHA? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b36" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b36" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Anda Berwirausaha</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B37. Apa bidang/sektor usaha yang Anda lakukan saat ini?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Pertanian/peternakan/perikanan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Pertambangan dan penggalian
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Industri Pengolahan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Listrik, air, dan gas
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="5" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Konstruksi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="6" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Perdagangan, hotel, dan restoran
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="7" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Pengangkutan dan komunikasi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="8" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Keuangan, real estate, dan jasa perusahaan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="9" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Jasa-jasa
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="10" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b37Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B38. Apa produk/jasa utama yang dihasilkan oleh usaha Anda?</label>
                                                <div class="section-field textarea">
                                                    <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="b38"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B39. Sejak kapan Anda menjalankan usaha ini? </label>
                                                <input type='text' class="form-control datetimepicker" name="b39" id='datetimepicker4' />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B40. Berapa orang yang terlibat dalam menjalankan usaha ini (selain Anda)? </label>
                                            <input id="name" type="text" class="form-control" name="b40">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B41. Berapa omzet usaha Anda per bulan? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b41" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    < 5jt </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b41" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    5 - 10jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b41" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    10 - 20jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b41" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    20 - 30jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b41" value="5" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    > 30jt
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B42. Berapa besar pendapatan bersih Anda per bulan dari usaha ini?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b42" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    < 5jt </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b42" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    5 - 10jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b42" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    10 - 20jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b42" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    20 - 30jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b42" value="5" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    > 30jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b42" value="6" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b42Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B43. Menurut pendapat Anda, bagaimanakah kesesuaian bidang pendidikan yang dipelajari di politeknik dengan kebutuhan bidang usaha Anda saat ini? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b43" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Sangat sesuai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b43" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Sesuai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b43" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Kurang sesuai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b43" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Tidak sesuai
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Tidak Berwirausaha</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B44. Apakah saat ini Anda melanjutkan pendidikan/menempuh pelatihan? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b44" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b44" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Melanjutkan Pendidikan/ Menempuh Pendidikan</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B45. Apa pendidikan/pelatihan yang sedang Anda tempuh?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b45" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Diploma
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b45" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Sarjana
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b45" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Pasca Sarjana
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b45" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Pendidikan profesi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b45" value="5" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Sertifikasi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b45" value="6" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b45Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B46. Sebutkan program studi/keahlian dalam pendidikan/pelatihan yang Anda ikuti saat ini! </label>
                                            <input id="name" type="text" class="form-control" name="b46">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B47. Sebutkan nama perguruan tinggi/ lembaga pelatihan tempat Anda melanjutkan studi!</label>
                                            <input id="name" type="text" class="form-control" name="b47">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B48. Apa alasan Anda melanjutkan pendidikan/ mengikuti pelatihan tersebut?</label>
                                                <div class="section-field textarea">
                                                    <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="b48"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Status Saat ini </h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B49. Apakah saat ini Anda TIDAK bekerja/berwirausaha/melanjutkan pendidikan? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b49" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Saat ini saya TIDAK bekerja/berwirausaha/ melanjutkan pendidikan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b49" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Saat ini saya bekerja/berwirausaha/ melanjutkan pendidikan
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika saat ini tidak bekerja/berwirausaha/melanjutkan pendidikan</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B50. Sejak lulus dari politeknik, apakah Anda PERNAH bekerja/berwirausaha? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b50" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya, Pernah Bekerja
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b50" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Ya, pernah berwirausaha
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b50" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Ya, Pernah Bekerja</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B51a. Nama Pekerjaan </label>
                                                <div class="section-field textarea">
                                                    <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="b51a"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B51b. Waktu Mulai</label>
                                                <input type='text' class="form-control datetimepicker" name="b51b" id='datetimepicker4' />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B51c. Waktu Selesai</label>
                                                <input type='text' class="form-control datetimepicker" name="b51c" id='datetimepicker4' />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B52. Apa penyebab Anda keluar dari tempat kerja terakhir? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Pemutusan hubungan kerja
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Gaji tidak sesuai harapan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Posisi tidak sesuai harapan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Konflik di tempat kerja
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="5" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Prospek pengembangan karir tidak jelas
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="6" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Jenis pekerjaan tidak sesuai keahlian
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="7" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Lokasi perusahaan jauh dari tempat tinggal
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="8" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Melanjutkan studi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="9" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b52Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B53. Mengapa saat ini Anda tidak membuka usaha sendiri/berwirausaha?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b53" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Tidak ada keterampilan untuk memulai usaha
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b53" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak ada modal
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b53" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Tidak ada ide jenis usaha yang akan dilakukan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b53" value="4" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b53Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Ya, Pernah Berwirausaha</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B54. Bila sebelumnya Anda mengelola usaha sendiri, mengapa tidak berlanjut?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b54" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Modal habis
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b54" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Bahan baku sulit diperoleh
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b54" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Tidak ada SDM pendukung
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b54" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Pemasaran sulit
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b54" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Salah pengelolaan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b54" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Ditipu mitra usaha
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b54" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Tidak mampu bersaing dengan usaha sejenis
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b54" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b54Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Tidak Pernah Bekerja/Berwirausaha/Melanjutkan Pendidikan</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B55. Bila Anda belum pernah bekerja/berwirausaha hingga saat ini, apa penyebabnya? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b55" value="1" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Kualifikasi yang dimiliki tidak sesuai dengan lowongan kerja yang ada
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b55" value="2" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Kendala/kondisi fisik
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b55" value="3" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Tidak ada lowongan kerja yang tersedia
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b55" value="4" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Bertanggung jawab untuk mengurus keluarga
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b55" value="5" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Kurang akses informasi lowongan pekerjaan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b55" value="6" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Tekanan sosial/adat
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b55" value="7" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Lowongan yang tersedia lokasinya terlalu jauh
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b55" value="8" id="flexRadioDefault7">
                                                <div class="col-4">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-control" name="b55Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <style>
                                        .likert {
                                            margin-top: 0.4rem;
                                        }

                                        .likert li {
                                            float: left;
                                            list-style-type: none;
                                        }

                                        .likert li input {
                                            margin-left: 13pt;
                                            margin-right: 10pt;

                                        }
                                    </style>

                                    <h4 class="mb-20">C. Kuesioner Keterkaitan Pendidikan dan Dunia Kerja/Usaha - Tingkat Kepuasan</h4>
                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C1a. Kompetensi bidang ilmu utama</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c1a" value="1" /></li>
                                                <li><input type="radio" name="c1a" value="2" /></li>
                                                <li><input type="radio" name="c1a" value="3" /></li>
                                                <li><input type="radio" name="c1a" value="4" /></li>
                                                <li><input type="radio" name="c1a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C2a. Kompetensi bidang ilmu lainnya: </label>
                                            <input id="name" type="text" class="form-control" name="c2ainput">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C2a. Kompetensi bidang ilmu lainnya: </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c2a" value="1" /></li>
                                                <li><input type="radio" name="c2a" value="2" /></li>
                                                <li><input type="radio" name="c2a" value="3" /></li>
                                                <li><input type="radio" name="c2a" value="4" /></li>
                                                <li><input type="radio" name="c2a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C3a. Kemampuan bahasa inggris </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c3a" value="1" /></li>
                                                <li><input type="radio" name="c3a" value="2" /></li>
                                                <li><input type="radio" name="c3a" value="3" /></li>
                                                <li><input type="radio" name="c3a" value="4" /></li>
                                                <li><input type="radio" name="c3a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C4a. Kompetensi bahasa asing lainnya: </label>
                                            <input id="name" type="text" class="form-control" name="c4ainput">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C4a. Kompetensi bahasa asing lainnya: </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c4a" value="1" /></li>
                                                <li><input type="radio" name="c4a" value="2" /></li>
                                                <li><input type="radio" name="c4a" value="3" /></li>
                                                <li><input type="radio" name="c4a" value="4" /></li>
                                                <li><input type="radio" name="c4a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C5a. Kemampuan Komputer Dasar</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c5a" value="1" /></li>
                                                <li><input type="radio" name="c5a" value="2" /></li>
                                                <li><input type="radio" name="c5a" value="3" /></li>
                                                <li><input type="radio" name="c5a" value="4" /></li>
                                                <li><input type="radio" name="c5a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C6a. Kemampuan Komputer Sesuai bidang Keahlian </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c6a" value="1" /></li>
                                                <li><input type="radio" name="c6a" value="2" /></li>
                                                <li><input type="radio" name="c6a" value="3" /></li>
                                                <li><input type="radio" name="c6a" value="4" /></li>
                                                <li><input type="radio" name="c6a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C7a. Kemampuan Presentasi</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c7a" value="1" /></li>
                                                <li><input type="radio" name="c7a" value="2" /></li>
                                                <li><input type="radio" name="c7a" value="3" /></li>
                                                <li><input type="radio" name="c7a" value="4" /></li>
                                                <li><input type="radio" name="c7a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C8a. Kemampuan Menyusun Laporan</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c8a" value="1" /></li>
                                                <li><input type="radio" name="c8a" value="2" /></li>
                                                <li><input type="radio" name="c8a" value="3" /></li>
                                                <li><input type="radio" name="c8a" value="4" /></li>
                                                <li><input type="radio" name="c8a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C9a. Kemampuan Komunikasi</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c9a" value="1" /></li>
                                                <li><input type="radio" name="c9a" value="2" /></li>
                                                <li><input type="radio" name="c9a" value="3" /></li>
                                                <li><input type="radio" name="c9a" value="4" /></li>
                                                <li><input type="radio" name="c9a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C10a. Kepemimpinan</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c10" value="1" /></li>
                                                <li><input type="radio" name="c10" value="2" /></li>
                                                <li><input type="radio" name="c10" value="3" /></li>
                                                <li><input type="radio" name="c10" value="4" /></li>
                                                <li><input type="radio" name="c10" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C11a. Integritas</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c11a" value="1" /></li>
                                                <li><input type="radio" name="c11a" value="2" /></li>
                                                <li><input type="radio" name="c11a" value="3" /></li>
                                                <li><input type="radio" name="c11a" value="4" /></li>
                                                <li><input type="radio" name="c11a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C12a. Kemampuan Adaptasi</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c12a" value="1" /></li>
                                                <li><input type="radio" name="c12a" value="2" /></li>
                                                <li><input type="radio" name="c12a" value="3" /></li>
                                                <li><input type="radio" name="c12a" value="4" /></li>
                                                <li><input type="radio" name="c12a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C13a. Kemandirian</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c13a" value="1" /></li>
                                                <li><input type="radio" name="c13a" value="2" /></li>
                                                <li><input type="radio" name="c13a" value="3" /></li>
                                                <li><input type="radio" name="c13a" value="4" /></li>
                                                <li><input type="radio" name="c13a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C14a. Kemampuan Bekerja di bawah tekanan</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c14a" value="1" /></li>
                                                <li><input type="radio" name="c14a" value="2" /></li>
                                                <li><input type="radio" name="c14a" value="3" /></li>
                                                <li><input type="radio" name="c14a" value="4" /></li>
                                                <li><input type="radio" name="c14a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C15a. Manajemen Waktu</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c15a" value="1" /></li>
                                                <li><input type="radio" name="c15a" value="2" /></li>
                                                <li><input type="radio" name="c15a" value="3" /></li>
                                                <li><input type="radio" name="c15a" value="4" /></li>
                                                <li><input type="radio" name="c15a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C16a. Inisiatif</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c16a" value="1" /></li>
                                                <li><input type="radio" name="c16a" value="2" /></li>
                                                <li><input type="radio" name="c16a" value="3" /></li>
                                                <li><input type="radio" name="c16a" value="4" /></li>
                                                <li><input type="radio" name="c16a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C17a. Kreativitas</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c17a" value="1" /></li>
                                                <li><input type="radio" name="c17a" value="2" /></li>
                                                <li><input type="radio" name="c17a" value="3" /></li>
                                                <li><input type="radio" name="c17a" value="4" /></li>
                                                <li><input type="radio" name="c17a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C18a. Motivasi</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c18a" value="1" /></li>
                                                <li><input type="radio" name="c18a" value="2" /></li>
                                                <li><input type="radio" name="c18a" value="3" /></li>
                                                <li><input type="radio" name="c18a" value="4" /></li>
                                                <li><input type="radio" name="c18a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C19a. Kedisiplinan</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c19a" value="1" /></li>
                                                <li><input type="radio" name="c19a" value="2" /></li>
                                                <li><input type="radio" name="c19a" value="3" /></li>
                                                <li><input type="radio" name="c19a" value="4" /></li>
                                                <li><input type="radio" name="c19a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C20a. Kemampuan bekerjasama</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c20a" value="1" /></li>
                                                <li><input type="radio" name="c20a" value="2" /></li>
                                                <li><input type="radio" name="c20a" value="3" /></li>
                                                <li><input type="radio" name="c20a" value="4" /></li>
                                                <li><input type="radio" name="c20a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C21a. Pengembangan Diri</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c21a" value="1" /></li>
                                                <li><input type="radio" name="c21a" value="2" /></li>
                                                <li><input type="radio" name="c21a" value="3" /></li>
                                                <li><input type="radio" name="c21a" value="4" /></li>
                                                <li><input type="radio" name="c21a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C22a. Kemampuan Menyelesaikan Masalah</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c22a" value="1" /></li>
                                                <li><input type="radio" name="c22a" value="2" /></li>
                                                <li><input type="radio" name="c22a" value="3" /></li>
                                                <li><input type="radio" name="c22a" value="4" /></li>
                                                <li><input type="radio" name="c22a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C23a. Lainnya, Sebutkan Komponen Kompetensi</label>
                                            <input id="name" type="text" class="form-control" name="c23ainput">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C23a. Lainnya, Sesuai komponen diatas </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c23a" value="1" /></li>
                                                <li><input type="radio" name="c23a" value="2" /></li>
                                                <li><input type="radio" name="c23a" value="3" /></li>
                                                <li><input type="radio" name="c23a" value="4" /></li>
                                                <li><input type="radio" name="c23a" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">C. Kuesioner Keterkaitan Pendidikan dan Dunia Kerja/Usaha - Tingkat Kepentingan</h4>
                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C1b. Kompetensi bidang ilmu utama</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c1b" value="1" /></li>
                                                <li><input type="radio" name="c1b" value="2" /></li>
                                                <li><input type="radio" name="c1b" value="3" /></li>
                                                <li><input type="radio" name="c1b" value="4" /></li>
                                                <li><input type="radio" name="c1b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C2b. Kompetensi bidang ilmu lainnya: </label>
                                            <input id="name" type="text" class="form-control" name="c2binput">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C2b. Kompetensi bidang ilmu lainnya: </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c2b" value="1" /></li>
                                                <li><input type="radio" name="c2b" value="2" /></li>
                                                <li><input type="radio" name="c2b" value="3" /></li>
                                                <li><input type="radio" name="c2b" value="4" /></li>
                                                <li><input type="radio" name="c2b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C3b. Kemampuan bahasa inggris </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c3b" value="1" /></li>
                                                <li><input type="radio" name="c3b" value="2" /></li>
                                                <li><input type="radio" name="c3b" value="3" /></li>
                                                <li><input type="radio" name="c3b" value="4" /></li>
                                                <li><input type="radio" name="c3b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C4b. Kompetensi bahasa asing lainnya: </label>
                                            <input id="name" type="text" class="form-control" name="c4binput">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C4b. Kompetensi bahasa asing lainnya: </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c4b" value="1" /></li>
                                                <li><input type="radio" name="c4b" value="2" /></li>
                                                <li><input type="radio" name="c4b" value="3" /></li>
                                                <li><input type="radio" name="c4b" value="4" /></li>
                                                <li><input type="radio" name="c4b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C5b. Kemampuan Komputer Dasar</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c5b" value="1" /></li>
                                                <li><input type="radio" name="c5b" value="2" /></li>
                                                <li><input type="radio" name="c5b" value="3" /></li>
                                                <li><input type="radio" name="c5b" value="4" /></li>
                                                <li><input type="radio" name="c5b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C6b. Kemampuan Komputer Sesuai bidang Keahlian </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c6b" value="1" /></li>
                                                <li><input type="radio" name="c6b" value="2" /></li>
                                                <li><input type="radio" name="c6b" value="3" /></li>
                                                <li><input type="radio" name="c6b" value="4" /></li>
                                                <li><input type="radio" name="c6b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C7b. Kemampuan Presentasi</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c7b" value="1" /></li>
                                                <li><input type="radio" name="c7b" value="2" /></li>
                                                <li><input type="radio" name="c7b" value="3" /></li>
                                                <li><input type="radio" name="c7b" value="4" /></li>
                                                <li><input type="radio" name="c7b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C8b. Kemampuan Menyusun Laporan</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c8b" value="1" /></li>
                                                <li><input type="radio" name="c8b" value="2" /></li>
                                                <li><input type="radio" name="c8b" value="3" /></li>
                                                <li><input type="radio" name="c8b" value="4" /></li>
                                                <li><input type="radio" name="c8b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C9b. Kemampuan Komunikasi</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c9b" value="1" /></li>
                                                <li><input type="radio" name="c9b" value="2" /></li>
                                                <li><input type="radio" name="c9b" value="3" /></li>
                                                <li><input type="radio" name="c9b" value="4" /></li>
                                                <li><input type="radio" name="c9b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C10b. Kepemimpinan</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c10b" value="1" /></li>
                                                <li><input type="radio" name="c10b" value="2" /></li>
                                                <li><input type="radio" name="c10b" value="3" /></li>
                                                <li><input type="radio" name="c10b" value="4" /></li>
                                                <li><input type="radio" name="c10b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C11b. Integritas</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c11b" value="1" /></li>
                                                <li><input type="radio" name="c11b" value="2" /></li>
                                                <li><input type="radio" name="c11b" value="3" /></li>
                                                <li><input type="radio" name="c11b" value="4" /></li>
                                                <li><input type="radio" name="c11b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C12b. Kemampuan Adaptasi</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c12b" value="1" /></li>
                                                <li><input type="radio" name="c12b" value="2" /></li>
                                                <li><input type="radio" name="c12b" value="3" /></li>
                                                <li><input type="radio" name="c12b" value="4" /></li>
                                                <li><input type="radio" name="c12b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C13b. Kemandirian</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c13b" value="1" /></li>
                                                <li><input type="radio" name="c13b" value="2" /></li>
                                                <li><input type="radio" name="c13b" value="3" /></li>
                                                <li><input type="radio" name="c13b" value="4" /></li>
                                                <li><input type="radio" name="c13b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C14b. Kemampuan Bekerja di bawah tekanan</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c14b" value="1" /></li>
                                                <li><input type="radio" name="c14b" value="2" /></li>
                                                <li><input type="radio" name="c14b" value="3" /></li>
                                                <li><input type="radio" name="c14b" value="4" /></li>
                                                <li><input type="radio" name="c14b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C15b. Manajemen Waktu</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c15b" value="1" /></li>
                                                <li><input type="radio" name="c15b" value="2" /></li>
                                                <li><input type="radio" name="c15b" value="3" /></li>
                                                <li><input type="radio" name="c15b" value="4" /></li>
                                                <li><input type="radio" name="c15b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C16b. Inisiatif</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c16b" value="1" /></li>
                                                <li><input type="radio" name="c16b" value="2" /></li>
                                                <li><input type="radio" name="c16b" value="3" /></li>
                                                <li><input type="radio" name="c16b" value="4" /></li>
                                                <li><input type="radio" name="c16b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C17b. Kreativitas</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c17b" value="1" /></li>
                                                <li><input type="radio" name="c17b" value="2" /></li>
                                                <li><input type="radio" name="c17b" value="3" /></li>
                                                <li><input type="radio" name="c17b" value="4" /></li>
                                                <li><input type="radio" name="c17b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C18b. Motivasi</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c18b" value="1" /></li>
                                                <li><input type="radio" name="c18b" value="2" /></li>
                                                <li><input type="radio" name="c18b" value="3" /></li>
                                                <li><input type="radio" name="c18b" value="4" /></li>
                                                <li><input type="radio" name="c18b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C19b. Kedisiplinan</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c19b" value="1" /></li>
                                                <li><input type="radio" name="c19b" value="2" /></li>
                                                <li><input type="radio" name="c19b" value="3" /></li>
                                                <li><input type="radio" name="c19b" value="4" /></li>
                                                <li><input type="radio" name="c19b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C20b. Kemampuan bekerjasama</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c20b" value="1" /></li>
                                                <li><input type="radio" name="c20b" value="2" /></li>
                                                <li><input type="radio" name="c20b" value="3" /></li>
                                                <li><input type="radio" name="c20b" value="4" /></li>
                                                <li><input type="radio" name="c20b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C21b. Pengembangan Diri</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c21b" value="1" /></li>
                                                <li><input type="radio" name="c21b" value="2" /></li>
                                                <li><input type="radio" name="c21b" value="3" /></li>
                                                <li><input type="radio" name="c21b" value="4" /></li>
                                                <li><input type="radio" name="c21b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C22b. Kemampuan Menyelesaikan Masalah</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c22b" value="1" /></li>
                                                <li><input type="radio" name="c22b" value="2" /></li>
                                                <li><input type="radio" name="c22b" value="3" /></li>
                                                <li><input type="radio" name="c22b" value="4" /></li>
                                                <li><input type="radio" name="c22b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C23b. Lainnya, Sebutkan Komponen Kompetensi</label>
                                            <input id="name" type="text" class="form-control" name="c23binput">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C23b. Lainnya, Sesuai komponen diatas </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c23b" value="1" /></li>
                                                <li><input type="radio" name="c23b" value="2" /></li>
                                                <li><input type="radio" name="c23b" value="3" /></li>
                                                <li><input type="radio" name="c23b" value="4" /></li>
                                                <li><input type="radio" name="c23b" value="5" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">D. Saran/Pendapat</h4>
                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">Menurut Anda hal/aspek apa di politeknik yang paling membutuhkan perbaikan dan sebutkan saran perbaikan </label>
                                                <div class="section-field textarea">
                                                    <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="saran"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    <div class="section-field submit-button">
                                        <button id="submit" type="submit" class="button"> Submit </button>
                                    </div>


                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <footer class="footer page-section-pt black-bg">
            <div class="container">
                <div class="footer-widget mt-20">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <p class="mt-15"> &copy;Copyright <span id="copyright">
                                    <script>
                                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                                    </script>
                                </span> <a href="#"> Webster </a> All Rights Reserved </p>
                        </div>
                        <div class="col-lg-6 col-md-6 text-left text-md-right">
                            <div class="social-icons color-hover mt-10">
                                <ul>
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i> </a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i> </a></li>
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
    <script src="/assets/kuesioner/js/jquery-3.4.1.min.js"></script>

    <!-- plugins-jquery -->
    <script src="/assets/kuesioner/js/plugins-jquery.js"></script>

    <!-- plugin_path -->
    <script>
        var plugin_path = '/assets/kuesioner/js/';
    </script>

    <!-- Google recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- custom -->
    <script src="/assets/kuesioner/js/custom.js"></script>



</body>

</html>