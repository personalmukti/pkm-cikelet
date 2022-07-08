        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Tenaga Medis</h1>
            <p class="mb-4">Data tenaga medis yang ada di UPT Puskesmas Cikelet.</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tendis</h6>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <?php foreach ($tendis->result_array() as $k) : ?>
                                <form action="<?= base_url(); ?>backendcontrol/updtendis/<?= $k['id']; ?>" method="POST" enctype="multipart/form-data">
                                    
                                    
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="namaHelp" placeholder="Nama Lengkap" value="<?= $k['tendis_nama']; ?>">
                                        <small id="namaHelp" class="form-text text-muted">Boleh mencantumkan gelar akademik.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan">Password</label>
                                        <input type="text" class="form-control" id="jabatan" name="jabatan" aria-describedby="jabatanHelp" placeholder="Jabatan" value="<?= $k['tendis_jabatan']; ?>">
                                        <small id="jabatanHelp" class="form-text text-muted">Jabatan di Puskesmas.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto">Foto Profil</label>
                                        <input type="file" class="form-control-file" id="foto" name="foto">
                                    </div>
                                    
                                    <hr>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-2"><input type="reset" class="btn btn-warning form-control" name="reset" value="Reset"></div>
                                            <div class="col-2"><input type="submit" class="btn btn-success form-control" name="submit" value="Update"></div>
                                        </div>
                                    </div>
                                </form>
                            <?php endforeach ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Modal -->
        <div class="modal fade" id="inputmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah data Tenaga Medis</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah data Tenaga Medis</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <?php foreach ($tendis->result_array() as $i) : ?>
                            
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="namaHelp" placeholder="Nama Lengkap" value="<?= $i['tendis_nama']; ?>">
                                <small id="namaHelp" class="form-text text-muted">Boleh mencantumkan gelar akademik.</small>
                            </div>
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan" aria-describedby="jabatanHelp" placeholder="Jabatan" value="<?= $i['tendis_jabatan']; ?>">
                                <small id="jabatanHelp" class="form-text text-muted">Jabatan di Puskesmas.</small>
                            </div>
                            <div class="form-group">
                                <label for="foto">Ganti Foto Profil</label>
                                <input type="file" class="form-control-file" id="foto">
                            </div>
                            <?php endforeach ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>