<nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
    <div class="container">
        <a style="font-size: 30px" class="page-scroll oleo-font navbar-brand" href="http://localhost/ukkmiaa2/auth/#home">Maria's Laundry</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav text-center">
                <a class="text-light nav-item nav-link page-scroll" href="http://localhost/ukkmiaa2/auth/#tentang">Tentang</a>
                <a class="nav-link" href="<?= base_url()?>Cek_status">Cek Status Pesanan</a>
            </div>
        </div>
    </div>
</nav>

<section>
<div class="jumbotron jumbotron-fluid bg-white">
<form action="<?= base_url() ?>Cek_status">
    <div class="container">
        <div class="row my-5">
            <div class="col-md-10">
                <input type="text" nama="kode_invoice" class="form-control" placeholder="Silahkan masukkan kode invoice anda!">
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Cek Laundry</button>
            </div>
        </div>
    </div>
</form>

<div class="container">
    <table class="table table-bordered table-striped mb-5">
        <thead>
            <tr>
                <th class="text-center">Nama Member</th>
                <th class="text-center">Tanggal Masuk</th>
                <th class="text-center">total</th>
                <th class="text-center">Status</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data)) {
                foreach ($data as $row) { ?>
                    <tr>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->tgl ?></td>
                        <td><?= "Rp." . number_format($row->total_bayar, 0, '.', '.') ?></td>
                        <td><?= $row->status ?></td>
                    </tr>
                <?php }
            } else { ?>
                <tr>
                    <td colspan="5" class="bg-danger text-warning">Data tidak tersedia</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</section>

<section id="testimoni" class="testimoni bg-primary">
    <div class="container">
     </div>
</section>

<footer class="bg-dark text-white">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6 my-3">
                <h3 class="oleo-font">Maria's Laundry</h3>
                <div class="row">
                    <div class="col-lg">
                        <span>Copyright &#169; <script type='text/javascript'>
                                var creditsyear = new Date();
                                document.write(creditsyear.getFullYear());
                            </script> <a expr:href='data:blog.homepageUrl'>
                                <data:blog.title />
                            </a>. All rights reserved.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 my-3">
                <h4>Kontak Kami</h4>
                <div class="row text-left my-2">
                    <div class="col-lg-4"><i class="fab fa-fw fa-whatsapp"></i> Hub. WhatsApp</div>
                    <div class="col-lg-5"><a class="text-white" target="_blank" href="https://api.whatsapp.com/send?phone=+6281222334545">+62 812 4763 0142</a></div>
                </div>
                <div class="row my-2 ml-0">
                    <div class="col-xs-1 mr-2"><a class="text-white" target="_blank" href="https://twitter.com"><i class="fab fa-fw fa-twitter"></i></a></div>
                    <div class="col-xs-1 mx-2"><a class="text-white" target="_blank" href="https://facebook.com"><i class="fab fa-fw fa-facebook"></i></a></div>
                    <div class="col-xs-1 mx-2"><a class="text-white" target="_blank" href="https://instagram.com"><i class="fab fa-fw fa-instagram"></i></a></div>
                    <div class="col-xs-1 mx-2"><a class="text-white" target="_blank" href="https://linkedin.com"><i class="fab fa-fw fa-linkedin-in"></i></a></div>
                    <div class="col-xs-1 mx-2"><a class="text-white" target="_blank" href="https://pinterest.com"><i class="fab fa-fw fa-pinterest"></i></a></div>
                </div>
                <div class="row text-left my-2">
                    <div class="col-lg-4">
                        <i class="fas fa-fw fa-map-marker-alt"></i> Alamat
                    </div>
                    <div class="col-lg-8">Jl. Beteng Sidomekar, Semboro, Jember Jawa Timur</div>
                </div>

            </div>
        </div>
    </div>
</footer>