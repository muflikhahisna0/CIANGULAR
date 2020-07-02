<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->

    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tables</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">

            <div class="col-xl-8 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Edit profile </h3>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <h6 class="heading-small text-muted mb-4">User information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Name</label>
                                            <input type="text" id="input-name" class="form-control" placeholder="name" name="input-name">
                                            <?= form_error('input-name', ' <small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-nim">NIM</label>
                                            <input type="text" id="input-nim" class="form-control" placeholder="NIM" name="input-nim">
                                            <?= form_error('input-nim', ' <small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Email address</label>
                                            <input type="text" id="input-email" class="form-control" placeholder="name@example.com" name="input-email">
                                            <?= form_error('input-email', ' <small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-nim">Major</label>
                                            <select type="text" id="input-nim" class="form-control" id="select-jurusan" name="select-jurusan">
                                                <?php foreach ($jurusan as $j) : ?>
                                                    <option value="<?= $j; ?>"><?= $j; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <!-- Address -->


                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->

    </div>
</div>