<?php 
ob_start();
use Dompdf\Dompdf;
function spasi($spasi)
{
    for ($i=0; $i <= $spasi; $i++) { 
        echo "&nbsp;";
    }
}
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

.text-grey {
    color: rgb(100, 100, 100);
}

.text-red {
    color: red;
}

.border {
    border: 1px solid black;
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

.p-4 {
    padding: 4px;
    ;
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
                <span style="font-size:18px;font-weight:bold;line-height:2;">INVOICE</span> <br>
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

    <table border="0" width="40%" align="right" class="text-grey table-collapse" style="font-size:14px;">
        <tr>
            <td width="50%">Invoice ID</td>
            <td width="5%">:</td>
            <td width="40%">MS6102200586</td>
        </tr>
        <tr>
            <td>Date</td>
            <td>:</td>
            <td>04/10/2022</td>
        </tr>
        <tr>
            <td valign="top">Subyek</td>
            <td valign="top">:</td>
            <td valign="top"><span style="line-height:1.3;">Mrs. Sunu Trihatmaji Denpasar 04 - 07 Oktober 2022</span>
            </td>
        </tr>
    </table>
    <br>
    <div class="containter" style="margin:0 8px 0 8px;">
        <span class="text-grey">Tiket Pesawat</span> <br>
        <div style="height:4px;"></div>
        <table width="100%" style="font-size:14px;" class="table-collapse">
            <thead>
                <tr>
                    <th class="border p-4" width="3%">No</th>
                    <th class="border p-4" width="30%">Nama Penumpang</th>
                    <th class="border p-4" width="20%">Rute</th>
                    <th class="border p-4" width="20%">Tanggal</th>
                    <th class="border p-4" width="20%">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border p-4 text-grey" align="center">1</td>
                    <td class="border p-4 text-grey">Restyana Ardyan Puspitasari</td>
                    <td class="border p-4 text-grey" align="center">CGK - DPS</td>
                    <td class="border p-4 text-grey" align="center">05/10/2022</td>
                    <td class="border p-4 text-grey" align="center">
                        <table width="100%" class="table-collapse">
                            <tr>
                                <td width="10%">Rp.</td>
                                <td align="right">1.401.730</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="border p-4 text-grey" align="center">2</td>
                    <td class="border p-4 text-grey">Restyana Ardyan Puspitasari</td>
                    <td class="border p-4 text-grey" align="center">DPS - CGK</td>
                    <td class="border p-4 text-grey" align="center">06/10/2022</td>
                    <td class="border p-4 text-grey" align="center">
                        <table width="100%" class="table-collapse">
                            <tr>
                                <td width="10%">Rp.</td>
                                <td align="right">1.401.730</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="border p-4 text-grey" align="center">3</td>
                    <td class="border p-4 text-grey">Yuke Sri Rahayu</td>
                    <td class="border p-4 text-grey" align="center">CGK - DPS</td>
                    <td class="border p-4 text-grey" align="center">06/10/2022</td>
                    <td class="border p-4 text-grey" align="center">
                        <table width="100%" class="table-collapse">
                            <tr>
                                <td width="10%">Rp.</td>
                                <td align="right">1.957.300</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="border p-4 text-grey" align="center">4</td>
                    <td class="border p-4 text-grey">Yuke Sri Rahayu</td>
                    <td class="border p-4 text-grey" align="center">DPS - CGK</td>
                    <td class="border p-4 text-grey" align="center">06/10/2022</td>
                    <td class="border p-4 text-grey" align="center">
                        <table width="100%" class="table-collapse">
                            <tr>
                                <td width="10%">Rp.</td>
                                <td align="right">1.957.300</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="border p-4 text-grey" align="center">5</td>
                    <td class="border p-4 text-grey">Sri Wulandari</td>
                    <td class="border p-4 text-grey" align="center">CGK - DPS</td>
                    <td class="border p-4 text-grey" align="center">05/10/2022</td>
                    <td class="border p-4 text-grey" align="center">
                        <table width="100%" class="table-collapse">
                            <tr>
                                <td width="10%">Rp.</td>
                                <td align="right">1.401.730</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="border p-4 text-grey" align="center">6</td>
                    <td class="border p-4 text-grey">Sri Wulandari</td>
                    <td class="border p-4 text-grey" align="center">DPS - CGK</td>
                    <td class="border p-4 text-grey" align="center">06/10/2022</td>
                    <td class="border p-4 text-grey" align="center">
                        <table width="100%" class="table-collapse">
                            <tr>
                                <td width="10%">Rp.</td>
                                <td align="right">1.957.300</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="border p-4 text-grey" align="center">7</td>
                    <td class="border p-4 text-grey">Yuana Rochma Astuti</td>
                    <td class="border p-4 text-grey" align="center">CGK - DPS</td>
                    <td class="border p-4 text-grey" align="center">05/10/2022</td>
                    <td class="border p-4 text-grey" align="center">
                        <table width="100%" class="table-collapse">
                            <tr>
                                <td width="10%">Rp.</td>
                                <td align="right">1.401.730</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="border p-4 text-grey" align="center">8</td>
                    <td class="border p-4 text-grey">Yuana Rochma Astuti</td>
                    <td class="border p-4 text-grey" align="center">DPS - CGK</td>
                    <td class="border p-4 text-grey" align="center">06/10/2022</td>
                    <td class="border p-4 text-grey" align="center">
                        <table width="100%" class="table-collapse">
                            <tr>
                                <td width="10%">Rp.</td>
                                <td align="right">1.957.300</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <td colspan="4"></td>
                <td class="border" style="padding: 0 4px 0 4px" align="center">
                    <table width="100%" class="table-collapse">
                        <tr>
                            <td width="10%"><b>Rp.</b></td>
                            <td align="right"><b>12.430.388</b></td>
                        </tr>
                    </table>
                </td>
            </tfoot>
        </table>
        <br>
        <table width="100%" style="font-size:14px;" class="table-collapse">
            <tbody>
                <tr>
                    <td width="3%">&nbsp;</td>
                    <td width="32%">&nbsp;</td>
                    <td width="20%">&nbsp;</td>
                    <td width="20%" class="border" style="padding: 0 4px 0 4px"><b>Tiket Pesawat</b></td>
                    <td width="19.8%" class="border" style="padding: 0 4px 0 4px" align="center">
                        <table width="100%" class="table-collapse">
                            <tr>
                                <td width="10%"><b>Rp.</b></td>
                                <td align="right"><b>12.430.388</b></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="border" style="padding: 0 4px 0 4px"><b><span class="text-red">Total Pembayaran</span></b></td>
                    <td class="border text-grey" style="padding: 0 4px 0 4px" align="center">
                        <table width="100%" class="table-collapse">
                            <tr>
                                <td width="10%"><span class="text-red">Rp.</span></td>
                                <td align="right"><span class="text-red"><b>12.430.388</b></span></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <table width="100%" style="font-size:14px;" class="table-collapse text-grey">
            <tr>
                <td width="50%" style="border: 2px solid grey;">
                    <span style="padding-left:3px;">Bank Transfer</span>
                    <table>
                        <tr>
                            <td width="20%">Mandiri</td>
                            <td width="5%">:</td>
                            <td width="30%">115-00-07768270</td>
                            <td width="30%" style="padding-left:14px;">PT. Dua Garis Mandiri</td>
                        </tr>
                        <tr>
                            <td>BCA</td>
                            <td>:</td>
                            <td>6281138208</td>
                            <td style="padding-left:14px;">Mochamad Takwin</td>
                        </tr>
                        <tr>
                            <td>BRI</td>
                            <td>:</td>
                            <td>044201004997508</td>
                            <td style="padding-left:14px;">Mochamad Takwin</td>
                        </tr>
                        <tr>
                            <td>BNI</td>
                            <td>:</td>
                            <td>0838114529</td>
                            <td style="padding-left:14px;">Mochamad Takwin</td>
                        </tr>
                    </table>
                </td>
                <td width="50%" align="center" class="text-grey">
                    <table width="75%" border="0" align="right" style="margin-right:10px;">
                        <tr>
                            <td width="50%" align="center">
                                Received <br><br><br><br><br>
                                ( <?php echo spasi(20); ?> )
                            </td>
                            <td width="50%" align="center">
                                Prepared <br><br><br><br><br>
                                ( <?php echo spasi(5); ?> Putri <?php echo spasi(5); ?> )
                            </td>
                        </tr>
                    </table>
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