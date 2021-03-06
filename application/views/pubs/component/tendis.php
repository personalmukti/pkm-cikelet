    <section class="inner-bg over-layer-black" style="background-image: url('<?php echo base_url(); ?>assets/medicative/img/bg/4.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="mini-title inner-style-2">
                        <h3>Tenaga Medis PKM Cikelet</h3>
                        <p><a href="<?php echo base_url(); ?>">Home</a> <span class="fa fa-angle-right"></span> <a href="<?php echo base_url(); ?>tenaga-medis">Tenaga Medis</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team start -->
    <section class="team-area">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="team-carousel">
                        <!-- Loop data tendis di sini -->
                        <?php foreach ($tendis->result_array() as $k) : ?>
                        <div class="item">
                            <div class="team-item-2">
                                <img src="<?php echo base_url(); ?>assets/medicative/img/personil/<?= $k['tendis_foto']; ?>" width="380" height="300" alt="">
                                <div class="team-content">
                                    <h5><?= $k['tendis_nama']; ?></h5>
                                    <h6><?= $k['tendis_jabatan']; ?></h6>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                        <!-- End Loop -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team end -->
