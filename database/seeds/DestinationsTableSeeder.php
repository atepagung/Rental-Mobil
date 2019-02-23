<?php

use Illuminate\Database\Seeder;
use App\Destination;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dess = [
        	'1' => ['BANDUNG', 'BANDUNG BARAT', 'BEKASI', 'BOGOR', 'CIAMIS', 'CIANJUR', 'CIREBON', 'GARUT', 'INDRAMAYU', 'KARAWANG', 'KUNINGAN', 'MAJALENGKA', 'PANGANDARAN', 'PURWAKARTA', 'SUBANG', 'SUKABUMI', 'SUMEDANG', 'TASIKMALAYA', 'KOTA BANDUNG', 'KOTA BANJAR', 'KOTA BEKASI', 'KOTA BOGOR', 'KOTA CIMAHI', 'KOTA CIREBON', 'KOTA DEPOK', 'KOTA SUKABUMI', 'KOTA TASIKMALAYA', 'CIKARANG'],
        	'2' => ['JAKARTA PUSAT', 'JAKARTA BARAT', 'JAKARTA TIMUR', 'JAKARTA SELATAN', 'JAKARTA UTARA'],
        	'3' => ['LEBAK', 'PANDEGLANG', 'SERANG', 'KOTA CILEGON', 'KOTA SERANG', 'KOTA TANGGERANG', 'KOTA TANGGERANG SELATAN', 'ANYER'],
        	'4' => ['BANJARNEGARA', 'BANYUMAS', 'BATANG', 'BLORA', 'BOYOLALI', 'BREBES', 'CILACAP', 'DEMAK', 'GROBONGAN', 'JEPARA', 'KARANGANYAR', 'KEBUMEN', 'KENDAL', 'KLATEN', 'KUDUS', 'MAGELANG', 'PATI', 'PEKALONGAN', 'PEMALANG', 'PURBALINGGA', 'PURWOREJO', 'REMBANG', 'UNGARAN', 'SRAGEN', 'SUKOHARJO', 'SLAWI', 'TEMANGGUNG', 'WONOGIRI', 'WONOSOBO', 'KOTA MAGELANG', 'KOTA PEKALONGAN', 'KOTA SALATIGA', 'KOTA SEMARANG', 'KOTA SURAKARTA', 'KOTA TEGAL', 'JOGJAKARTA'],
        	'5' => ['BANGKALAN', 'BANYUWANGI', 'BLITAR', 'BOJONEGORO', 'BONDOWOSO', 'GRESIK', 'JEMBER', 'JOMBANG', 'KEDIRI', 'LAMONGAN', 'LUMAJANG', 'MADIUN', 'MAGETAN', 'MALANG', 'MOJOKERTO', 'NGANJUK', 'NGAWI', 'PACITAN', 'PAMEKASAN', 'PASURUAN', 'PONOROGO', 'PROBOLINGGO', 'SAMPANG', 'SIDOARJO', 'SITUBONDO', 'SUMENEP', 'TRENGGALEK', 'TUBAN', 'TULUNGAGUNG', 'KOTA BATU', 'KOTA BLITAR', 'KOTA KEDIRI', 'KOTA MADIUN', 'KOTA MALANG', 'KOTA MOJOKERTO', 'KOTA PASURUAN', 'KOTA PROBOLINGGO', 'KOTA SURABAYA'],
        	'6' => ['BADUNG', 'BANGLI', 'BULELENG', 'GIANYAR', 'JEMBRANA', 'KARANGASEM', 'KLUNGKUNG', 'TABANAN', 'KOTA DENPASAR'],
        	'7' => ['BIMA', 'DOMPU', 'LOMBOK BARAT', 'LOMBOK TENGAH', 'LOMBOK TIMUR', 'LOMBOK UTARA', 'SUMBAWA', 'SUMBAWA BARAT', 'KOTA BIMA', 'KOTA MATARAM'],
        	'8' => ['LAMPUNG BARAT', 'LAMPUNG SELATAN', 'LAMPUNG TENGAH', 'LAMPUNG TIMUR', 'LAMPUNG UTARA', 'MESUJI', 'PESAWARAN', 'PRINGSEWU', 'TANGGAMUS', 'TULANG BAWANG', 'TULANG BAWANG BARAT', 'WAY KANAN', 'BANDAR LAMPUNG', 'KOTA METRO'],
        	'9' => ['BANYUASIN', 'EMPAT LAWANG', 'LAHAT', 'MUARA ENIM', 'MUSI BANYUASIN', 'MUSI RAWAS', 'MUSI RAWAS UTARA', 'OGAN ILIR', 'OGAN KOMERING ILIR', 'OGAN KOMERING ULU', 'OGAN KOMERING ULU SELATAN', 'OGAN KOMERING ULU TIMUR', 'PENUKANG ABAB LEMATANG ILIR', 'KOTA LUBUKLINGGAU', 'KOTA PAGAR ALAM', 'KOTA PALEMBANG', 'KOTA PRABUMULIH'],
        	'10' => ['AGAM', 'DHARMASRAYA', 'KEPULAUAN MENTAWAI', 'LIMA PULUH KOTA', 'PADANG PARIAMAN', 'PASAMAN', 'PASAMAN BARAT', 'PESISIR SELATAN', 'SIJUNJUNG', 'SOLOK', 'SOLOK SELATAN', 'TANAH DATAR', 'KOTA BUKITTINGI', 'KOTA PADANG', 'KOTA PADANGPANJANG', 'KOTA PARIAMAN', 'KOTA PAYAKUMBUH', 'KOTA SAWAHLUNTO', 'KOTA SOLOK'],
        	'11' => ['SAHAN', 'BATU BARA', 'DAIRI', 'DELI SERDANG', 'HUMBANG HASUNDUTAN', 'KARO', 'LABUHANBATU', 'LABUHANBATU SELATAN', 'LABUHANBATU UTARA', 'LANGKAT', 'MANDAILING NATAL', 'NIAS', 'NIAS BARAT', 'NIAS SELATAN', 'NIAS UTARA', 'PADANG LAWAS', 'PADANG LAWAS UTARA', 'PAKPAK BHARAT', 'SAMOSIR', 'SERDANG BEDAGAI', 'SIMALUNGUN', 'TAPANULI SELATAN', 'TAPANULI TENGAH', 'TAPANULI UTARA', 'TOBA SAMOSIR', 'KOTA BINJAI', 'KOTA GUNUNGSITOLI', 'KOTA MEDAN', 'KOTA PADANGSIDEMPUAN', 'KOTA PEMATANGSIANTAR', 'KOTA SIBOLGA', 'KOTA TANJUNGBALAI', 'KOTA TEBING TINGGI'],
        	'12' => ['ACEH BARAT', 'ACEH BARAT DAYA', 'ACEH BESAR', 'ACEH JAYA', 'ACEH SELATAN', 'ACEH SINGKIL', 'ACEH TAMIANG', 'ACEH TENGAH', 'ACEH TENGGARA', 'ACEH TIMUR', 'ACEH UTARA', 'BENER MERIAH', 'BIREUEN', 'GAYO LUES', 'NAGAN RAYA', 'PIDIE', 'PIDIE JAYA', 'SIMEULUE', 'KOTA BANDA ACEH', 'KOTA LANGSA', 'KOTA LHOKSEUMAWE', 'KOTA SABANG', 'KOTA SUBULUSSALAM']
        ];

        foreach ($dess as $prov => $places) {
        	foreach ($places as $place) {
	        	$destination = new Destination;
	        	$destination->city = $place;
	        	$destination->province_id = $prov;
	        	$destination->save();
        	}
        }
    }
}