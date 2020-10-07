<h2>Form tambah data baru</h2>    
<form>
    nama: <input type="text" name="nm"> 
    <input type="submit" name="sub" value="simpan data baru!"> 
    <input type="submit" name="sub" value="kembali ke daftar data"> 
    <?php
    //user baru melihat halaman ini baris di bawah tidak dieksekusi
        if(isset($_GET['sub'])){ //isset untuk mengidentifikasi si user dimana, fungsi get untuk di halaman ini
            if($_GET['sub']=='kembali ke daftar data'){ //jika ingin kembali dan tidak menambah data
                header("location:tampil_data.php"); 
            } //jika user menekan data baru tapi kosong maka tidak ada eksekusi data baris dr 12-18, maka yg d eskekusi baris ke 21
            else{
              if(strlen($_GET['nm'])){    
                include "koneksi.php";
                mysqli_query($kon,"INSERT INTO `mahasiswa` (`nama`) VALUES ('".$_GET['nm']."')");
                echo "<br>Data <b>'".$_GET['nm']."'</b> telah dimasukan ke database"; //kasih statement konfirmasi
                echo "<br>silahkan klik tombol kembali ke daftar data untuk melihat hasilnya";
                //header("location:tampil_data.php");
              }
              else{
                  echo "Agar data tersimpan, nama tidak boleh kosong :)";
              }    
             }
        }
    ?>
</form>