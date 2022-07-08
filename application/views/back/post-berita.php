					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
					    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
					</div>

					<!-- Content Row -->
					<div class="row">
					    <div class="col-lg-12">
					        <div class="ibox ">
					            <div class="ibox-title">
					                <h5>Post Berita</h5>
					            </div>
					            <div class="ibox-content">
					                <div class="row">
					                    <div class="col-lg-12">
					                        <form action="<?php echo base_url() . 'BackendControl/publish' ?>" method="post" enctype="multipart/form-data">
					                            <div class="col-md-12">
					                                <input type="text" name="judul" class="form-control" placeholder="Judul berita" required /><br>
					                            </div>
					                            <div class="col-md-12">
					                                <textarea id="ckeditor" name="berita" class="form-control" required></textarea><br>
					                            </div>
					                            <div class="col-md-12">
					                                <input type="file" name="filefoto" required><br>
					                            </div>
					                            <hr>
					                            <button class="btn btn-primary btn-lg" type="submit">Post Berita</button>
					                        </form>
					                    </div>

					                </div>
					            </div>
					        </div>
					    </div>
					</div>