<?php 
ob_start();
use Dompdf\Dompdf;
?>c:\xampp\htdocs\test-dompdf\E-tiket.php

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
	width: 30%;
}

#head
{
	font-family: monospace;
	font-size: 11px;
	float: right;
	text-align: right;
}

#maskapai {
	float: left; 
	font-family: serif;
	font-size: 15px;
	width: 80px;
}

#tujuan {
	float: center;
	text-align: center; 
	font-family: serif;
	font-size: 15px;
	margin-left: 24%;
	width: 250px;
}

#kode {
	float: right;
	text-align: center; 
	font-family: serif;
	margin-left: 500px;
	width: 100px;
}

table.det-penumpang 
{
	font-family: serif;
    border: 1px solid black;
	border-collapse: collapse;
	border-left: none;
	border-right: none;
	width: 709px;
}

table.penumpang, th.penumpang, td.penumpang
{
	font-family: serif;
    border: 1px solid black;
	border-collapse: collapse;
	border-left: none;
	border-right: none;
	text-align: left;
}

table.harga
{
	font-family: serif;
	border-collapse: collapse;
	border-top: none;
	text-align: left;
}

table.harga-total
{
	font-family: serif;
    border: 2px solid rgb(173, 166, 166);
	border-collapse: collapse;
	border-left: none;
	border-right: none;
}
</style>

<body>
	<div>
		<img id="logo" src="http://localhost/test-dompdf/img/logo.jpg"><br>
	</div>

	<div id="head">
		<b>E - TIKET PESAWAT</b><br>
		18 Office Park Building, 12th Floor Unit A & H<br>
		Jalan TB Simatupang Nomor 18 RT. 002 RW. 001<br>
		Kebagusan, Pasar Minggu<br>
		Telp: 021-28675365<br>
		E-mail: companymultipay@gmail.com<br>
	</div>

		<hr style="margin-top: 11%;"> <br>

	<table style="border: 1px solid black; border-collapse: collapse;">
		<tr>
			<td><b>Detail Penerbangan</b></td>
		</tr>			
	</table>
	
			<br><b>

	<table id="maskapai">
		<tr>
			<td><center><br><img src="http://localhost/test-dompdf/img/batik.jpg"></center><br></td>
		</tr>
		<tr>
			<td style="text-align: center;"><br>ID 7556<br><font style="color: gray;">Class ECO (Eco)</font></td>
		</tr>
	</table>

	<table id="tujuan">
		<tr>
			<td style="text-align: center;" colspan="3">Rabu, 09 November 2022</td><br><br>
		</tr>
		<tr>
			<td width="10px">11:40<br><br><br><br>12:50</td>
			<td width="10px"><center><img src="http://localhost/test-dompdf/img/garis.jpg"></center></td>
			<td width="270px" style="text-align: left;">Semarang (SRG)<br><font style="color: gray;">Bandar Udara Achmad Yani</font><br><br><br>
				Jakarta (HLP)<br><font style="color: gray;">Bandar Udara Halim Perdana Kusuma</font></td>
		</tr>
	</table>
	
	<table id="kode">
		<tr>
			<td><br><br><font size="4">KODE BOOKING</font></td>
		</tr>
		<tr>
			<td><font size="7">BENHNC</font></td>
		</tr>
	</table>
	
		<br><br><br><br><br><br><br><br><br><br><br>

	<table class="det-penumpang">
		<thead>
			<tr>
				<td colspan="3">Detail Penumpang</td>
			</tr>
		</thead>
	</table></b>

	<table class="penumpang" border="1">
	<thead>
		<tr style="background-color: rgb(199, 197, 197);">
			<th class="penumpang" width="40px">No</th>
			<th class="penumpang" width="300px">Nama Penumpang</th>
			<th class="penumpang" width="200px">Nomor Tiket</th>
			<th class="penumpang" width="160px">Tipe</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="penumpang" width="1%">1</td>
			<td class="penumpang">Mr. Amir Hamzah</td>
			<td class="penumpang">9902145113079</td>
			<td class="penumpang">Dewasa</td>
		</tr>
	</tbody>
	</table>

			<br><br><br>

		<table class="harga" width="100%">
			<thead>
				<tr>
					<td class="harga" width="30%" colspan="3"><b>Detail Harga</b></td>
				</tr>
			</thead>
		</table>
		
		<table class="harga-total" width="100%">
			<thead>
				<tr>
					<td>
						<ul>
							<li>Tiket untuk 1 penumpang</li>
						</ul>
					</td>
					<td width="20%" style="text-align: left;">IDR 1.210.230</td>
				</tr>
				<tr>
					<td style="text-align: right;"><font style="color: gray;"><b>Total Pembayaran</b></font></td>
					<td style="text-align: left;"><font style="color: gray;"><b>IDR 1..230</b></font></td>
				</tr>
				<tr>
					<td style="text-align: right;" colspan="2"><input type="checkbox" checked="checked">
						<b>Termasuk Tarif Dasar, Pajak, <br>dan Biaya-Biaya Tambahan</b></td>
				</tr>	
		</table>
			<br>
	<div>
		<font size="4">Catatan Penting</font><br>
		<ul>
			<li>Nama dalam KTP / Paspor harus sesuai dengan nama penumpang yang ditunjukkan di atas.</li>
			<li>Harap tiba di bandara 90 menit sebelum penerbangan untuk perjalanan domestik dan 2 jam 
			sebelum penerbangan untuk perjalanan internasional</li>
			<li>Check-in tutup 45 menit sebelum waktu keberangkatan.</li>
			<li>Harap menyesuaikan dengan kebijakan maskapai. Penumpang setuju dengan kebijakan dan aturan 
			yang ditetapkan Operator.</li>
		</ul>
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