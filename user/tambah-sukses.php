<?php
    session_start();

    require 'functions.php';

    if(!isset($_SESSION["login"])) {
        header("Location: ../login");
        exit;
    }        

    include ('../view/header.php');  
?>

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="homepage">
                    <div class="text-center">
                        <h2>Selamat</h2>
                        <p>
                            Data telah berhasil disimpan :]
                            <br /><a href="../user">Kembali</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include('../view/footer.php'); 
?>