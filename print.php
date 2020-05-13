<?php
require_once __DIR__ . '/vendor/autoload.php';

require_once "controller/PimpinanController.php";
$result = new PimpinanController;
$result = $result->getAllTransaksi();

$mpdf = new \Mpdf\Mpdf();

$html = '<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Laporan Transaksi</h1>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No Transaksi</th>
            <th>KTP</th>
            <th>Nama</th>
            <th>Id Scooter</th>
            <th>Warna</th>
            <th>Biaya</th>
            <th>Waktu Mulai</th>
            <th>Waktu Selesai</th>
        </tr>';

        foreach ($result as $key => $row) {
            $html .= '<tr>
                <td> ' . $row->getNoTransaksi() . ' </td>
                <td> ' . $row->getKTP() . ' </td>
                <td> ' . $row->getNama() . ' </td>
                <td> ' . $row->getIdScooter() . ' </td>
                <td> ' . $row->getWarna() . ' </td>
                <td> ' . $row->getBiaya() . ' </td>
                <td> ' . $row->getMulai() . ' </td>
                <td> ' . $row->getSelesai() . ' </td>
                </tr>';
        }

$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();

?>
