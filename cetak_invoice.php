<?php 
ob_start();
use Dompdf\Dompdf;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<title>Output PDF</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>

<style>
#logo
{
	position: absolute;
	margin-left: 5%;
	margin-top: 5%;
	width: 30%;
}

#head
{
	font-family: monospace;
	font-size: 11px;
	float: right;
	text-align: right;
	margin-right: 5%;
}

#hr{
	width: 90%;
	margin-top: 11%;
}

#sub-head
{
	font-family: monospace;
	font-size: 11px;
	float: right;
	margin-right: 5%;
	text-align: left;
	width: 40%;
}

#content
{
	font-family: monospace;
	font-size: 11px;
	float: center;
	margin-left: 5%;
}

table.border, th.border, td.border, tr.border
{
    font-family: monospace;
	font-size: 11px;
    border: 1px solid black;
	border-collapse: collapse;
}

td.total
{
    font-family: monospace;
	font-size: 11px;
    border: 1px solid black;
	border-collapse: collapse;
	width: 23.8%;
}

td.total-all, tr.total-all, table.total-all
{
    font-family: monospace;
	font-size: 11px;
    border: 1px solid black;
	border-collapse: collapse;
	margin-top:-4px;
}

table.rek 
{
	font-family: monospace;
	font-size: 11px;
    border: 1px solid black;
	border-collapse: collapse;
	float: left;
}

table.ttd
{
	font-family: monospace;
	font-size: 11px;
	float: right;
	width: 40%;
	text-align: center;
	margin-right: -45%;
}

</style>

<body>
	<div>
		<img id="logo" src="http://localhost/test-dompdf/img/logo.jpg"><br>
	</div>

	<div id="head">
		<b>INVOICE</b><br>
		18 Office Park Building, 12th Floor Unit A & H<br>
		Jalan TB Simatupang Nomor 18 RT. 002 RW. 001<br>
		Kebagusan, Pasar Minggu<br>
		Telp: 021-28675365<br>
		E-mail: companymultipay@gmail.com<br>
	</div>
	
		<hr id="hr">
	
		<div id="sub-head">
			<table>
				<tbody><tr>
					<td width="30%">Invoice ID</td>
					<td width="70%">: MS6102200586</td>
				</tr>
				<tr>
					<td width="30%">Date</td>
					<td width="70%">: 04/10/2022
					</td>
				</tr>
				<tr>
					<td width="30%">Subyek</td>
					<td width="70%">: Mrs. Sunu Trihatmaji Denpasar 04 - 07 Oktober 2022</td>				
				</tr>
				</tbody>
			</table>
		</div>

			<br><br><br>

		<div id="content">
		<h4>Tiket Pesawat</h4>
			<table class="border" width="635px">
				<tr class="border">
					<th class="border" width="1%">No</th>
					<th class="border" width="25%">Nama Penumpang</th>
					<th class="border" width="24%">Rute</th>
					<th class="border" width="25%">Tanggal</th>
					<th class="border" width="25%">Subtotal</th>
				</tr>			
			<tbody>
				<tr>
					<td class="border"><center>1</center></td>
					<td class="border">Restyana Ardyan Puspitasari</td>
					<td class="border"><center>CGK - DPS </center></td>
					<td class="border"><center>05/10/2022</center></td>
					<td class="border"><center>Rp. 1.401.730</center></td>
				</tr>		
				<tr>
					<td class="border"><center>2</center></td>
					<td class="border">Yuke Sri Rahayu</td>
					<td class="border"><center>CGK - DPS</center></td>
					<td class="border"><center>05/10/2022</center></td>
					<td class="border"><center>Rp. 1.401.730</center></td>
				</tr>
			</tbody>
		</table>

		<b><table width="635px"	style="margin-top:-3px; margin-left: 0.4%">
			<tr>
				<td colspan="4"></td>
				<td class="total"> <center>Rp. 2.803.460</center></td>
			</tr>
		</table>

			<br>

		<table width="309px" style="margin-left: 78%" class="total-all">
			<tr>
				<td class="total-all" width="52%">Tiket Pesawat</td>
				<td class="total-all"><center>Rp. 2.803.460</center></td>
			</tr>
			<tr>
				<td class="total-all" style="color:red">Total Pembayaran</td>
				<td class="total-all"><center>Rp. 2.803.460</center></td>
			</tr>
		</table></b>
			<br><br><br>

		<table class="rek" width="350px">
			<tr>
				<td colspan="3">Bank Transfer</td>
			</tr>
			<tr>
				<td width="6%">Mandiri</td>
				<td width="10%">: 115-00-07768270</td>
				<td width="12%">PT. Dua Garis Mandiri</td>
			</tr>
			<tr>
				<td width="6%">BCA</td>
				<td width="10%">: 6281138208</td>
				<td width="12%">Mochamad Takwin</td>
			</tr>
			<tr>
				<td width="6%">BRI</td>
				<td width="10%">: 044201004997508</td>
				<td width="12%">Mochamad Takwin</td>
			</tr>
			<tr>
				<td width="6%">BNI</td>
				<td width="10%">: 0838114529</td>
				<td width="12%">Mochamad Takwin</td>
			</tr>
		</table>
		
		<table class="ttd">
			<tr>
				<td>Received<br><br><br><br></td>
				<td>Prepared<br><br><br><br></td>
			</tr>
			<tr>
				<td>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
				<td>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
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