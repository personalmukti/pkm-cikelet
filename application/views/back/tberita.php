        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Semua Berita</h1>
            <p class="mb-4">Semua postingan berita yang telah di posting.</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Berita</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="10%">Tanggal</th>
                                    <th width="20%">Judul</th>
                                    <th width="25%">Isi</th>
                                    <th width="15%">Gambar</th>
                                    <th width="10%">Penulis</th>
                                    <th width="15%" class="text-center"><i class="fa fa-cog" aria-hidden="true"></i></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="10%">Tanggal</th>
                                    <th width="20%">Judul</th>
                                    <th width="25%">Isi</th>
                                    <th width="15%">Gambar</th>
                                    <th width="10%">Penulis</th>
                                    <th width="15%" class="text-center"><i class="fa fa-cog" aria-hidden="true"></i></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $no = 1;
                                function limit_words($string, $word_limit)
                                {
                                    $words = explode(" ", $string);
                                    return implode(" ", array_splice($words, 0, $word_limit));
                                }

                                foreach ($berita->result_array() as $i) : ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $i['berita_tanggal']; ?></td>
                                        <td><?= $i['berita_judul']; ?></td>
                                        <td><?= limit_words($i['berita_isi'], 10); ?></td>
                                        <td><img class="imgtable" src="<?php echo base_url() . 'assets/images/' . $i['berita_image']; ?>" alt="<?php echo $i['berita_judul']; ?>"></td>
                                        <td><?= $i['poster']; ?></td>
                                        <td class="text-center">
                                            <!-- <a class="btn btn-primary btn-xs"><i class="fa fa-book" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning btn-xs"><i class="fa fa-edit" aria-hidden="true"></i></a> -->
                                            <a class="btn btn-danger btn-xs" href="<?= base_url('BackendControl/delete/' . $i['berita_id']) ?>"><i class="fa fa-eraser" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                <?php $no++;
                                endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->