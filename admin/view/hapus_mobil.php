<?php
$db = new mobil;
    if(isset($_GET['id'])){
        $db->deleteMobil($_GET['id']);
        echo '<script>window.location = "?page=tabel_mobil";</script>';
        if(file_exists('../assets/mobil/'.$_GET['id'])){
            unlink('../assets/mobil/'.$_GET['id']);
        }
    }else{
        echo '<script>window.location = "?page=tabel_mobil";</script>'; 
    }
?>