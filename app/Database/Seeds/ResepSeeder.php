<?php

namespace App\Database\Seeds;

class ResepSeeder extends \CodeIgniter\Database\Seeder
{
  public function run()
  {
    $initDatas = [
      [
        "resep_nama" => "Nasi Goreng Babat",
        "resep_img" => "nasgor.png",
        "resep_bahan" =>
        "2 sdm minyak sayur\n2 butir bawang merah, iris tipis\n2 siung bawang putih, iris tipis\n150 g babat rebus, iris tipis panjang\n400 g nasi putih\n1 batang daun bawang, iris kasar\n4 sdm kecap manis\nHaluskan:\n2 buah cabai merah besar, buang bijinya, rebus\n2 buah cabai rawit merah\n2 butir bawang merah\n1 siung bawang putih\n1/2 sdt terasi goreng\n1 sdt garam\nPelengkap:\n2 sdm bawang merah goreng\nAcar timun",
        "resep_cara" => "Tumis bawang merah dan bawang putih hingga layu.\nMasukkan Bumbu Halus, aduk hingga matang dan harum.\nTambahkan babat, aduk hingga rata.\nMasukkan nasi, daun bawang dan kecap manis.\nAduk hingga rata dan agak kering.\nAngkat, Sajikan hangat dengan Pelengkapnya."
      ],
    ];
    $this->db->table('reseps')->insertBatch($initDatas);
  }
}
