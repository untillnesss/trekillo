<nav class="navbar navbar-expand navbar-light navbar-orange">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link text-white">
                Selamat Datang di Halaman Login Administrator <?php if (!empty($site_name)) {
                                                                    echo $site_name;
                                                                } ?>
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                John Pierce
                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">I got your message bro</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Nora Silvester
                                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">The subject goes here</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>

<div class="container">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Selamat Datang
            <small> di Halaman Login Administrator <?php if (!empty($site_name)) {
                                                        echo $site_name;
                                                    } ?></small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="callout callout-info">
            <h4>Informasi</h4>
            <p>
                Selamat datang di Halaman Login Aplikasi Computer Based-Test. Untuk memulai silahkan melakukan
                proses Login dengan menggunakan username dan password yang sudah dimiliki.
            </p>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <!-- Horizontal Form -->
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Login Operator</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php echo form_open('welcome/login', 'id="form-login" class="form-horizontal"') ?>
                    <div class="box-body">
                        <div id="form-pesan">
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Username</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8" style="margin-bottom: 10px; display: flex; justify-content: flex-start;">
                                <div id="gchap"></div>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" id="btn-login" class="btn btn-info pull-right">Login</button>
                    </div><!-- /.box-footer -->
                    </form>
                </div><!-- /.box -->
                <div class="col-md-3"></div>
            </div>
    </section><!-- /.content -->
</div>

<div class="modal" id="modal-proses" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                Data Sedang diproses...
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
    let gchap;
    var onloadCallback = function() {
        gchap =
            grecaptcha.render('gchap', {
                'sitekey': '6LfwH6YZAAAAAKJDW9B51NeACPfGXewFNtyFmlSR',
            });
    };
    $(function() {

        $('#username').focus();

        $('#btn-login').click(function() {
            $('#form-login').submit();
        });

        $('#form-login').submit(function() {
            if (grecaptcha.getResponse(gchap) == '' || grecaptcha.getResponse(gchap) == null) {
                Swal.fire({
                    toast: true,
                    timer: 2000,
                    showConfirmButton: false,
                    title: 'Captcha harus diisi.',
                    icon: 'warning'
                })
                return false;
            }
            $("#modal-proses").modal('show');
            $.ajax({
                url: "<?php echo site_url(); ?>/manager/welcome/login",
                type: "POST",
                data: $('#form-login').serialize(),
                cache: false,
                success: function(respon) {
                    var obj = $.parseJSON(respon);
                    if (obj.status == 1) {
                        window.open("<?php echo site_url(); ?>/manager/dashboard", "_self");
                    } else {
                        $('#form-pesan').html(pesan_err(obj.error));
                        $("#modal-proses").modal('hide');
                    }
                }
            });

            return false;
        });
    });
</script>