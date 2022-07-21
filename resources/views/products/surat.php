<?php


// membaca data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_identitas = $_POST['no_identitas'];
$organisasi = $_POST['organisasi'];
$alamat = $_POST['alamat'];
$kontak = $_POST['kontak'];
$detail_info_diminta = $_POST['detail_info_diminta'];
$tujuan_penggunaan = $_POST['tujuan_penggunaan'];
$cara_memperoleh_info = $_POST['cara_memperoleh_info'];
$cara_mendapat_salinan = $POST['cara_mendapat_salinan'];
$date = $_POST['date'];
// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("form_permohonan.rtf");
// isi dokumen dinyatakan dalam bentuk string
$document = str_replace("#id", $id, $document);
$document = str_replace("#nama", $nama, $document);
$document = str_replace("#no_identitas", $no_identitas, $document);
$document = str_replace("#organisasi", $organisasi, $document);
$document = str_replace("#alamat", $alamat, $document);
$document = str_replace("#kontak", $kontak, $document);
$document = str_replace("#detail_info_diminta", $detail_info_diminta, $document);
$document = str_replace("#tujuan_penggunaan", $tujuan_penggunaan, $document);
$document = str_replace("#cara_memperoleh_info", $cara_memperoleh_info, $document);
$document = str_replace("#cara_mendapat_salinan", $cara_mendapat_salinan, $document);
$document = str_replace("#date", $date, $document);

// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=form_permohonan.doc");
header("Content-length: ".strlen($document));
echo $document;
?>
