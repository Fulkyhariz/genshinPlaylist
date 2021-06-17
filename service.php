<?php
include "koneksi.php";

switch ($_GET['action'])
{

    case 'save':

        $judul = $_POST['judul'];
        $album = $_POST['album'];
        if ($album == "The Wind and The Star Traveler"){
            $cover = "cover/cover1.png";
        }else if ($album == "City of Winds and Idylls"){
            $cover = "cover/cover2.png";
        }else if ($album == "Jade Moon Upon a Sea of Clouds"){
            $cover = "cover/cover3.png";
        }else if ($album == "The Stellar Moments"){
            $cover = "cover/cover4.png";
        }else if ($album == "Vortex of Legends"){
            $cover = "cover/cover5.png";
        }
        $artist = $_POST['artist'];

        $query = pg_query($koneksi, "INSERT INTO playlist(cover, judul, album, artist) VALUES('$cover', '$judul', '$album', '$artist')");
        if ($query){
            echo "Simpan Data Berhasil";
        }else{
            echo "Simpan Data Gagal :" . pg_error_result($query);
        }
    break;

    case 'edit':
        $idlist = $_POST['idlist'];
        $judul = $_POST['judul'];
        $album = $_POST["album"];
        $artist = $_POST['artist'];
        if ($album =="The Wind and The Star Traveler"){
            $cover = "cover/cover1.png";
        }else if ($album == "City of Winds and Idylls"){
            $cover = "cover/cover2.png";
        }else if ($album == "Jade Moon Upon a Sea of Clouds"){
            $cover = "cover/cover3.png";
        }else if ($album == "The Stellar Moments"){
            $cover = "cover/cover4.png";
        }else if ($album == "Vortex of Legends"){
            $cover = "cover/cover5.png";
        }
        $query = pg_query($koneksi, "UPDATE playlist SET judul='$judul', album='$album', artist='$artist', cover='$cover' WHERE id=$idlist");
        if ($query){
            echo "Edit Data Berhasil";
        }else{
            echo "Edit Data Gagal :" . pg_error_result($query);
        }
    break;

    case 'delete':

        $idlist = $_POST['idlist'];
        $query = pg_query($koneksi, "DELETE FROM playlist WHERE id=$idlist");
        if ($query){
            echo "Hapus Data Berhasil";
        }else{
            echo "Hapus Data Gagal :" . pg_error_result($query);
        }
    break;
}
?>
