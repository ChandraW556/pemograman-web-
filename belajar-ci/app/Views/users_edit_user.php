<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Collapsible sidebar using Bootstrap 4</title>
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="http://belajar-ci.test/css/style.css">
        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Bootstrap Animated Sidebar</h3>
                </div>
                <ul class="list-unstyled components">
                    <p>Welcome</p>
                    <li>
                        <a href="<?= base_url('admin/users/index')?>">Home</a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url('admin/users/user')?>">List User</a>
                    </li>
                </ul>
            </nav>
        
            <!-- Page Content Holder -->
            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="navbar-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <h2>Edit Users</h2>
                            <form action="<?= base_url('admin/users/update'); ?>" method="POST">
                                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                <div class="form-grup">
                                    <label for="name">Nama</label>
                                    <br>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama"
                                    value="<?= $user['name'] ?>">
                                    <br>
                                </div>
                                <div class="form-grup">
                                    <label for="email">Email</label>
                                    <br>
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Email"
                                    value="<?= $user['email'] ?>">
                                    <br>
                                </div>
                                 <div class="form-grup">
                                    <label for="contact">Nomor Contact</label>
                                    <br>
                                    <input type="text" name="contact_no" class="form-control" id="contact_no" placeholder="Masukkan Nomor Contact"
                                    value="<?= $user['contact_no'] ?>">
                                    <br>
                                </div>
                                <div class="form-grup">
                                    <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                                    <a href="<?= base_url('admin/users/user')?>" class="btn btn-danger">Close</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                    $(this).toggleClass('active');
                });
            });
        </script>
    </body>
</html>