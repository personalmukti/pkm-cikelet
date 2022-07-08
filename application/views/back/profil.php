<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <h4>Kelola Profil</h4>
                </nav>
            </div>
        </div>
        <?php foreach ($akun->result_array() as $p) : ?>
        
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3"><?= $p['username']; ?></h5>
                        <p class="text-muted mb-1">Administrator</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="<?= base_url(); ?>backendcontrol/updprofil" method="POST">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" placeholder="Masukan Username">
                                        <small id="usernameHelp" class="form-text text-muted">Tidak boleh mengandung spasi. Boleh menggunakan underscore "_".</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp"  placeholder="Password" minlength="8">
                                        <small id="passwordHelp" class="form-text text-muted">Minimal 8 karakter, dan gabungan huruf, angka, dan karakter khusus.</small>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>`
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</section>