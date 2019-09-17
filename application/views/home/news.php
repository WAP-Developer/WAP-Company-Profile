<!-- Content -->
<div class="container">
    <!-- Pesan Presiden  -->
    <div class="col-12">
        <div class="row justify-content-center">
            <h3 class="title-berita pb-2 animated fadeIn">Berita & Kegiatan</h3>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-6 mt-4" data-aos="fade-up">
            <div class="card box-news" style="width: 18rem;">
                <img src="<?= base_url('assets/img/mmmm.jpg'); ?>" alt="..." class="card-img-top" height="150px">
                <div class="card-body">
                    <h5 class="card-title">Lorem ipsum dolor sit amet, elit aaa.</h5>
                    <div class="tanggal-berita-big">
                        <i class="fas fa-calendar-alt"></i> 12 September 2019
                    </div>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="#" class="btn btn-success btn-lengkap">Selengkapnya >></a>
                </div>
            </div>
        </div>
        <div class="vertical-line"></div>
        <div class="col-6">
            <?php for ($i = 1; $i <= 4; $i++) { ?>
                <div class="box-vertical-news" data-aos="fade-left">
                    <div class="row">
                        <div class="col-4">
                            <div class="crop">
                                <img src="<?= base_url('assets/img/bisnis.jpg'); ?>" alt="" height="110px">
                            </div>
                        </div>
                        <div class="col-8 pt-3 pb-3">
                            <a href="#" class="title-litle-news">
                                Orci varius natoque penatibus et magnis dis parturient montes.
                            </a>
                            <div class="tanggal-berita">
                                <i class="fas fa-calendar-alt"></i> 12 September 2019
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>

    <hr>
    <hr class="hr-short">

    <?php for ($i = 1; $i <= 2; $i++) { ?>
        <div class="row mt-5" data-aos="fade-up">
            <div class="col-6">
                <div class="row justify-content-end mr-4">
                    <div class="big-news-cover">
                        <img src="<?= base_url('assets/img/bisnis.jpg'); ?>" alt="" class="big-news">
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="row">
                    <a href="#" class="big-title-news mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </a>
                </div>
                <div class="row">
                    <div class="tanggal-berita">
                        <i class="fas fa-calendar-alt"></i> 12 September 2019
                    </div>
                </div>
                <div class="row">
                    <div class="big-news-des">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lorem ante, pulvinar sed tincidunt eu, tristique vitae dolor. In hac habitasse platea dictumst. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="row justify-content-center pt-4 pb-3">
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Sebelumnya</a>
                </li>
                <li class="page-item active"><a class="page-link" href="<?= base_url('news'); ?>">1</a></li>
                <li class="page-item" aria-current="page">
                    <a class="page-link" href="<?= base_url('news/page/2'); ?>">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Selanjutnya</a>
                </li>
            </ul>
        </nav>
    </div>
</div>