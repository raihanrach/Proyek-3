<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">

            <div class="profile-main" align="center">
                <img src="assets/img/bahan/masjid.png" class="" alt="Avatar">
                <h2 class="name"><strong>Ketakmiran Masjid</strong></h2>
                <h4 class="online-status status-available">Raya An-Nur Polinema</h4>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h3 align="left"><strong>Foto Kegiatan</strong></h3>
                    <!-- TASKS -->
                    <div class="panel">
                        <!-- PANEL SCROLLING -->

                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/img/bahan/') . $foto_kegiatan['image']; ?>" class="img-fluid rounded-start" alt="foto kegiatan 1">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PANEL SCROLLING -->
                    </div>
                    <!-- END TASKS -->
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3 align="left"><strong>Kontak Kami</strong></h3>
                        <!-- TASKS -->
                        <div class="panel">
                            <div class="panel-body">
                                <input class="form-control input-lg" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Nama anda" type="text">
                                <br>
                                <input class="form-control input-lg" placeholder="Email anda" type="text">
                                <br>
                                <textarea class="form-control input-lg" placeholder="Kritik dan Saran anda" rows="4"></textarea>
                                <br>

                                <button type="button" class="btn btn-primary btn-block">Kirim</button>
                            </div>
                            <div class="panel-body">
                                <i class="fas fa-calendar"></i>
                                <span class="h4"><strong>Hubungi Kami</strong> </span> <br>
                            </div>
                        </div>
                        <!-- END TASKS -->
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>

<!-- END MAIN -->