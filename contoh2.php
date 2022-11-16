<?php 
ob_start();
use Dompdf\Dompdf;
?>

<!DOCTYPE html>
<html>

<head>
    <title>INVOICE</title>
</head>
<style>
@page {
    margin: 20px 40px 35px 40px;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

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

.table-collapse {
    border-collapse: collapse;
}

.bg-grey {
    background-color: rgb(200, 200, 200);
}

.border {
    border-top: 1px solid black;
    border-bottom: 1px solid black;
    padding: 4px;
}

.border-top {
    border-top: 1px solid black;
    padding: 4px;
}

.border-bottom {
    border-bottom: 1px solid black;
    padding: 4px;
}

.border-2 {
    border: 2px solid grey;
}

.grid-header {
    position: fixed;
    top: -25px;
    left: -50px;
    right: -50px;
    height: 15px;
}

.grid-footer {
    position: fixed;
    bottom: -35px;
    left: -50px;
    right: -50px;
    height: 15px;
}

.footer1 {
    background-color: #99ccff;
    border: 1px solid #99ccff;
    opacity: 0.6;
    padding: unset;
}

.footer2 {
    background-color: #ff99ff;
    border: 1px solid #ff99ff;
    opacity: 0.6;
    padding: unset;
}

.footer3 {
    background-color: #ffbf80;
    border: 1px solid #ffbf80;
    opacity: 0.6;
    padding: unset;
}
</style>

<body>

    <div class="grid-header">
        <table width="100%" class="table-collapse">
            <tr>
                <td width="30%" class="footer1">&nbsp;</td>
                <td width="40%" class="footer2">&nbsp;</td>
                <td width="30%" class="footer3">&nbsp;</td>
            </tr>
        </table>
    </div>
    <div class="grid-footer">
        <table width="100%" class="table-collapse">
            <tr>
                <td width="30%" class="footer1">&nbsp;</td>
                <td width="40%" class="footer2">&nbsp;</td>
                <td width="30%" class="footer3">&nbsp;</td>
            </tr>
        </table>
    </div>

    <table width="100%" border="0">
        <tr>
            <td width="50%">
                <img src="http://localhost/dompdfv2/img/logo.jpg" width="55%">
            </td>
            <td width="50%" align="right">
                <span style="font-size:18px;font-weight:bold;line-height:2;">E-TIKET PESAWAT</span> <br>
                <span style="font-size:12px;line-height:1.5;">
                    18 Office Park Building, 12th Floor Unit A & H <br>
                    Jalan TB Simatupang Nomor 18 RT. 002 RW. 001 <br>
                    Kebagusan, Pasar Minggu <br>
                    Telp: 021-28675365 <br>
                    e-mail: companymultipay@gmail.com
                </span>
            </td>
        </tr>
    </table>
    <hr style="margin:unset;">
    <div class="font-size:2px;">&nbsp;</div>
    <table border="1" class="table-collapse">
        <tr>
            <td>Detail Penerbangan</td>
        </tr>
    </table>
    <br>
    <table width="100%" border="0">
        <tr>
            <td width="23%" align="center" style="padding:40px 12px 0 0;">
                <img src="http://localhost/dompdfv2/img/batikair.jpg" width="150px"> <br><br>
                <span><b>ID 7556</b></span> <br>
                <span style="font-size:12px;color:grey;">Class ECO (Eco)</span>
            </td>
            <td width="55%">
                <span style="font-size:15px;">Rabu, 09 November 2022</span>
                <div class="font-size:2px;">&nbsp;</div>
                <table width="100%" border="0">
                    <tr>
                        <td width="15%" valign="top">11:40</td>
                        <td width="1px" rowspan="3" valign="top">
                            <img src="http://localhost/dompdfv2/img/sampai.jpg" width="20px" height="100px">
                        </td>
                        <td width="85%" style="padding-left:5px;" valign="top">
                            Semarang (SRG) <br>
                            <span style="color:grey;">Bandar Udara Achmad Yani</span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td valign="top">12:50</td>
                        <td style="padding-left:5px;" valign="top">
                            Jakarta (HLP) <br>
                            <span style="color:grey;">Bandar Udara Halim Perdana Kusuma</span>
                        </td>
                    </tr>
                </table>
            </td>
            <td width="23%" align="center" style="padding:40px 12px 0 12px;">
                <span style="font-size:15px;">KODE BOOKING</span>
                <div style="padding:4px;"></div>
                <span style="font-size:34px;font-weight:bold;">BENHNC</span>
            </td>
        </tr>
    </table>
    <br>
    <table width="100%">
        <thead>
            <tr>
                <td class="border-top"><b>Detail Penumpang</b></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border bg-grey">
                    <table width="100%">
                        <tr>
                            <td width="10%"><b>No</b></td>
                            <td width="30%"><b>Nama</b></td>
                            <td width="30%"><b>Nomor Tiket</b></td>
                            <td width="20%"><b>Tipe</b></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="border-bottom">
                    <table width="100%">
                        <tr>
                            <td width="10%">1.</td>
                            <td width="30%">Mr. Amir Hamzah</td>
                            <td width="30%">9902145113079</td>
                            <td width="20%">Dewasa</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    Detail Harga
    <hr>
    <table width="100%" border="0">
        <tr>
            <td width="50%" valign="top">
                <ul style="margin:unset;">
                    <li style="margin-left:-20px;">
                        <span style="font-size:18px;">Tiket untuk 1 Penumpang</span>
                    </li>
                </ul>
            </td>
            <td width="50%" align="right">
                <table width="100%" border="0">
                    <tr>
                        <td width="60%"></td>
                        <td width="40%" align="right">IDR 1.210.230</td>
                    </tr>
                    <tr>
                        <td align="right">
                            <span style="font-size:18px;font-weight:bold;color:rgb(100,100,100);">Total
                                Pembayaran</span>
                        </td>
                        <td align="right">
                            <span style="font-size:18px;font-weight:bold;color:rgb(100,100,100);">IDR 1.210.230</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-left: 40px;">
                            <table width="100%">
                                <tr>
                                    <td width="1px" valign="top">
                                        <img src="http://localhost/dompdfv2/img/check.jpg" width="24px">
                                    </td>
                                    <td valign="top" style="padding-left:4px;">
                                        <i><b>Termasuk Tarif Dasar, Pajak, dan Biaya-Biaya Tambahan</b></i>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <div class="border-2"></div>
    <br>
    <br>
    <br>
    <table>
        <tr>
            <td width="5%" align="center">
                <img src="http://localhost/dompdfv2/img/icon-info.jpg" width="24px">
            </td>
            <td width="70%">
                <span style="font-size:20px;font-weight:bold;">Catatan Penting</span>
            </td>
        </tr>
        <tr>
            <td valign="top" align="center">
                <ul style="margin:unset;">
                    <li style="margin-left:-8px;">
                        <span style="font-size:18px;"></span>
                    </li>
                </ul>
            </td>
            <td valign="top" style="padding-left:8px;">
                <span style="font-size:15px;color:color:rgb(100,100,100);">
                    Nama dalam KTP/ Paspor harus sesuai dengan nama penumpang yang ditunjukkan di atas.
                </span>
            </td>
        </tr>
        <tr>
            <td valign="top" align="center">
                <ul style="margin:unset;">
                    <li style="margin-left:-8px;">
                        <span style="font-size:18px;"></span>
                    </li>
                </ul>
            </td>
            <td valign="top" style="padding-left:8px;">
                <span style="font-size:15px;color:color:rgb(100,100,100);">
                    Harap tiba di bandara 90 menit sebelum penerbangan untuk perjalanan domestik dan 2 jam sebelum
                    penerbangan untuk perjalanan internasional
                </span>
            </td>
        </tr>
        <tr>
            <td valign="top" align="center">
                <ul style="margin:unset;">
                    <li style="margin-left:-8px;">
                        <span style="font-size:18px;"></span>
                    </li>
                </ul>
            </td>
            <td valign="top" style="padding-left:8px;">
                <span style="font-size:15px;color:color:rgb(100,100,100);">
                    Check-in tutup 45 menit sebelum waktu keberangkatan.
                </span>
            </td>
        </tr>
        <tr>
            <td valign="top" align="center">
                <ul style="margin:unset;">
                    <li style="margin-left:-8px;">
                        <span style="font-size:18px;"></span>
                    </li>
                </ul>
            </td>
            <td valign="top" style="padding-left:8px;">
                <span style="font-size:15px;color:color:rgb(100,100,100);">
                    Harap menyesuaikan dengan kebijakan maskapai. Penumpang setuju dengan kebijakan dan aturan yang
                    ditetapkan Operator.
                </span>
            </td>
        </tr>
    </table>

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