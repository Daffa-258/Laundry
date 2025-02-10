<?php 
    session_start();
    
    require 'functions.php';

    if(!isset($_SESSION["login"])) {
        header("Location: ../login");
        exit;
    }

    if(isset($_POST['tambah'])){
        if(tambah($_POST) > 0) {
            header("Location: tambah-sukses.php");
        } 
        else {
            header("Location: tambah-gagal.php");
        }
    }

    include ('../view/header.php');
?>

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">                            
                <div class="panel panel-default">
                    <div class="panel-heading">Tambah Data User</div>
                    <div class="panel-body">                                    
                        <form class="form-horizontal" role="form" action="" method="post">
                        
                            <div class="form-group">
                                <label class="control-label col-sm-2">Username :</label>
                                <div class="col-sm-10">
                                <input type="hidden" name="id" value="<?= $enter["id"]; ?>">
                                    <input type="text" class="form-control" name="username" placeholder="Ihya" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Password:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="password" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Nama :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" placeholder="Ahmad Ihya">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Email :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email" placeholder="ihyaserang@gmail.com" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary" name="tambah" value="Tambah" type="submit">Tambah</button>
                                <a href="javascript:window.history.go(-1);" class="btn btn-primary">Kembali</a>
                            </div>
                        </form>                                    
                    </div>
                </div>                                                            
            </div>
        </div>
    </div>
</div>
            
<?php
    include('../view/footer.php');
?>