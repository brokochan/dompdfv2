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
.table-collapse {
    border-collapse: collapse;
}
.border {
    border: 1px solid black;
}
</style>

<body>

    <table width="100%">
        <tr>
            <td>Tiket Pesawat</td>
        </tr>
    </table>
    <table width="100%" class="table-collapse border">
        <tr>
            <th class="border" width="1%">No</th>
            <th class="border">Nama Penumpang</th>
            <th class="border">Rute</th>
            <th class="border">Tanggal</th>
            <th class="border">Sub Total</th>
        </tr>
        <tr>
            <td class="border">1.</td>
            <td class="border">Restyana Ardyan Puspitasari</td>
            <td class="border">CGK - DPS</td>
            <td class="border">05/10/2022</td>
            <td class="border">Rp. 1.401.730</td>
        </tr>
        <tr>
            <td class="border">2.</td>
            <td class="border">Restyana Ardyan Puspitasari</td>
            <td class="border">CGK - DPS</td>
            <td class="border">05/10/2022</td>
            <td class="border">Rp. 1.401.730</td>
        </tr>
    </table>
    <table width="100%" class="table-collapse" style="margin-top:-1px;">
        <tr>
            <td colspan="4"></td>
            <td class="border" width="24.2%">Rp. 12.430.388</td>
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