<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row homepage text-white">
        <div class="col-6 left-side">
            <div class="text">
                <h1>Pilihanmu,<br>Masa depan<br>Sekolahmu!</h1>
                <h5 class="text-secondary">Memudahkanmu dalam pemilihan dengan proses yang<br>
                    efisien, aman, dan rahasia.</h5>
                <button type="button" class="btn btn-purple mt-4">Pilih Sekarang</button>
            </div>
        </div>
        <div class="col-6 right-side d-sm-none d-lg-block">
            <img src="img/homepage_pict.svg" class="img-fluid" alt="...">
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        if ($(window).width() >= 992) {
            $('.btn-purple').addClass('btn-lg');
        } else {
            $('.btn-purple').removeClass('btn-lg');
        }
    })
</script>
<?= $this->endSection(); ?>