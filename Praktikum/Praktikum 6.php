<?php
   echo "Halo, selamat datang di dunia PHP!" . "<br>";

   $nama = "Putri";
   $umur = 20;

   // Menampilkan nilai variabel
   echo "Nama: " . $nama . "<br>";
   echo "Umur: " . $umur . " tahun<br>";

   //define("NAMA_KONSTANTA", nilai);

   define("SITE_NAME", "unsika.ac.id");
   
   define("VERSION", "1.0");
   
   echo "Selamat datang di " . SITE_NAME . "<br>";

   echo "Versi Sistem: " . VERSION . "<br>";
   
   $nama = "Salina";
   echo "Nama saya adalah ". $nama . "<br>"; 

   $umur = 21;
   echo "Umur saya:". $umur. "tahun" . "<br>";

   $berat = 55.5;
   echo "Berat badan saya:". $berat ."kg" . "<br>";
   
   $isLogin = true;
   
   $buah = ["apel", "jeruk", "mangga"];
   echo $buah[1] . "<br>";

   class Mahasiswa {
       public $nama;
       public function sapa() {
           return "Halo, saya $this->nama";
       }
   }
   $mhs = new Mahasiswa();
   $mhs->nama = "Herawati";
   echo $mhs->sapa() . "<br>";

   $data = null;
   var_dump($data);

?>
