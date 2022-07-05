<!-- blog start -->
    <section class="blog-area bg-f8">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2>Portal <span class="color-defult">Berita</span></h2>
                        <div class="line-border-center bg-defult"></div>
                        <p>Informasi seputar artikel kesehatan, program pemerintah, dan program Puskesmas Cikelet.</p>
                    </div>
                </div>
            </div>
            <!-- Blog Section Begin -->
            <section class="blog-section spad">
                <div class="container-fluid">
                    <div class="row">
                        <div class="container">
                        <?php
                            
                            foreach ($berita->result_array() as $i) :
                                $id=$i['berita_id'];
                                $judul=$i['berita_judul'];
                                $image=$i['berita_image'];
                                $isi=$i['berita_isi'];
                                $tgl=$i['berita_tanggal'];
                                $poster=$i['poster'];
                        ?>
                        <div class="col-lg-12">
                            <div class="single-blog-item blog-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div style="margin: 25px !important;">
                                            <img src="<?php echo base_url().'assets/images/'.$image;?>" alt="<?php echo $judul;?>" width="100%" height="100%">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="blog-text" style="margin: 25px !important;">
                                            <span class="blog-time"><?php echo $tgl;?></span>
                                            <h3><?php echo $judul;?></h3>
                                            <div class="text-justify"><p><?php echo $isi;?>
                                            <br><hr>
                                            <div class="text-center"><h6>Posted by : <?php echo $poster;?></h6></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Blog Section End -->
            <br>

        </div>
    </section>
    <!-- blog end -->