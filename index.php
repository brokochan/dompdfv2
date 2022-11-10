<?php 
ob_start();
use Dompdf\Dompdf;
?>

<!DOCTYPE html>
<html>

<head>
    <title>FORMULIR KEPEGAWAIAN</title>
</head>
<style>
@page { margin: 20px 61px 35px 61px; }
.garis {
    border-top: 1px solid black;
    border-bottom: 2px solid black;
    margin-top: -8px;
    font-size: 1px;
}

.isi {
    padding-left: 4px !important;
}

.container {
    margin: 0 12px 0 12px;
}

.kop-text {
    margin-left: -40px;
}
</style>

<body>

    <table width="100%" border="0">
        <tr>
            <td width="10%">
                <img src="http://localhost/dompdfv2/img/logo_jabar.jpg" alt="logo" width="120px">
            </td>
            <td align="center">
                <div class="kop-text">
                    <div style="font-size:18px;font-weight:bold;">PEMERINTAH DAERAH PROVINSI JAWA BARAT</div>
                    <div style="font-size:25px;font-weight:bold;">BADAN PENDAPATAN DAERAH</div>
                    <div style="font-size:16px;font-weight:bold;">PUSAT PENGELOLAAN PENDAPATAN DAERAH PROVINSI</div>
                    <div style="font-size:16px;font-weight:bold;">WILAYAH KOTA BANJAR</div>
                    <div style="font-size:12px;">Jl. Gerilya Pamongkoran Telp. (0286) 744627, Fax. (0265) 744627, 744738
                    </div>
                    <div style="font-size:12px;">Kota Banjar 46311</div>
                </div>
            </td>
        </tr>
    </table>
    <div class="garis">&nbsp;</div><br>
    <div class="container">

        <table width="100%" border="0">
            <tr>
                <td align="center"><b>BIODATA PEGAWAI</b></td>
            </tr>
        </table>
        <br>
        <table width="100%" border="0">
            <tr>
                <td width="40%"><b>NIK</b></td>
                <td width="1px">:</td>
                <td width="60%" class="isi">198106132009012005</td>
            </tr>
            <tr>
                <td><b>NAMA</b></td>
                <td>:</td>
                <td class="isi">KURNIA BEKTI RAHAYU, S.Kom</td>
            </tr>
            <tr>
                <td><b>JENIS KELAMIN</b></td>
                <td>:</td>
                <td class="isi">Perempuan</td>
            </tr>
            <tr>
                <td><b>AGAMA</b></td>
                <td>:</td>
                <td class="isi">Islam</td>
            </tr>
            <tr>
                <td><b>TEMPAT LAHIR</b></td>
                <td>:</td>
                <td class="isi">Semarang</td>
            </tr>
            <tr>
                <td><b>TANGGAL LAHIR</b></td>
                <td>:</td>
                <td class="isi">13 Juni 1981</td>
            </tr>
            <tr>
                <td><b>JABATAN</b></td>
                <td>:</td>
                <td class="isi">Kasubag Kepegawaian</td>
            </tr>
            <tr>
                <td><b>PENDIDIKAN</b></td>
                <td>:</td>
                <td class="isi">S1</td>
            </tr>
            <tr>
                <td><b>STATUS</b></td>
                <td>:</td>
                <td class="isi">AAktif</td>
            </tr>
            <tr>
                <td><b>NO HP</b></td>
                <td>:</td>
                <td class="isi">081912196183</td>
            </tr>
            <tr>
                <td><b>EMAIL</b></td>
                <td>:</td>
                <td class="isi">siapajaboleh@yakin.com</td>
            </tr>
            <tr>
                <td><b>ALAMAT LENGKAP</b></td>
                <td>:</td>
                <td class="isi">Jl. Papandayan No. 15 Semarang</td>
            </tr>
            <tr>
                <td valign="top"><b>FOTO</b></td>
                <td valign="top">:</td>
                <td class="isi">
                    <img src="http://localhost/dompdfv2/img/cahayu.jpg" alt="logo" width="180px">
                </td>
            </tr>
        </table>

        <br>
        <br>
        <br>

        <table width="100%" border="0">
            <tr>
                <td width="50%"></td>
                <td width="50%" align="center">
                    Camat Mananih <br>
                    Kota Banjar,
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <b><u>Drs. Yudi Wibowo, SE</u> <br>
                        NIP. 19661104 199403 1 008</b>
                </td>
            </tr>
        </table>
    </div>

</body>

</html>

<?php
$html = ob_get_clean();
require 'vendor/autoload.php';
$dompdf = new Dompdf(array('enable_remote' => true));
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream('sikts.pdf',array('Attachment' => 0));
?>