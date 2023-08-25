<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
            <div class="card-body p-0">
                <!-- Fungsi Alert -->
                <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('pesan') ?>"></div>
                
                <!-- Form Daftar Akun -->
                <div class="row">                   
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Form Daftar Akun</h1>
                            </div>

                            <form method="post" action="<?php echo base_url('registrasi/index') ?>"class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Nama Anda" name="nama">

                                    <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>')?>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Username Anda" name="username">
                                        <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>')?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password_1">
                                            <?php echo form_error('password_1', '<div class="text-danger small ml-2">', '</div>')?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Ulangi Password" name="password_2">
                                    </div>
                                </div>
                                    <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="No Telepon Anda" name="nomer_tlp">
                                        <?php echo form_error('nomer_tlp', '<div class="text-danger small ml-2">', '</div>')?>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Anda" name="email">
                                        <?php echo form_error('email', '<div class="text-danger small ml-2">', '</div>')?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
                            </form>
                            <hr>

                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth/login') ?>">Sudah Punya Akun? Silahkan Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>