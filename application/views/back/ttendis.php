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
                    <div class="col-12 text-right">
                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#inputmodal">
                            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Tendis
                            </button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto Profil</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th class="text-center"><i class="fa fa-cog" aria-hidden="true"></i></th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto Profil</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th class="text-center"><i class="fa fa-cog" aria-hidden="true"></i></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    
                                    foreach ($tendis->result_array() as $i) : ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td align="center"><img class="imgtable" src="<?php echo base_url().'assets/medicative/img/personil/'.$i['tendis_foto'];?>" alt="<?php echo $i['tendis_nama'];?>"></td>
                                        <td><?= $i['tendis_nama']; ?></td>
                                        <td><?= $i['tendis_jabatan'];?></td>
                                        <td class="text-center">
                                            <a class="btn btn-success btn-xs"><i class="fa fa-book" aria-hidden="true"></i></a>
                                            <a class="btn btn-warning btn-xs"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            <a class="btn btn-danger btn-xs" href="<?= base_url('backendcontrol/rmtendis/'.$i['id']) ?>"><i class="fa fa-eraser" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    <?php $no++; endforeach ?>
                                </tbody>
                            </table>
                        </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>