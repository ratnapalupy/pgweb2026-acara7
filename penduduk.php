
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penduduk Kabupaten Blitar</title>
</head>
<body>

    <h2>Data Penduduk Kabupaten Blitar</h2>

    <?php
    $penduduk = [
        ["Bakung", 111.24, 28961],
        ["Wonotirto", 164.54, 40569],
        ["Panggungrejo", 119.04, 44509],
        ["Wates", 68.76, 31576],
        ["Binangun", 76.79, 47688],
        ["Sutojayan", 44.20, 52787],
        ["Kademangan", 105.28, 72476],
        ["Kanigoro", 55.55, 81916],
        ["Talun", 49.78, 67171],
        ["Selopuro", 39.29, 45802],
        ["Kesamben", 56.96, 54925],
        ["Selorejo", 52.23, 40084],
        ["Doko", 70.95, 42417],
        ["Wlingi", 66.36, 55494],
        ["Gandusari", 88.23, 76591],
        ["Garum", 54.56, 69768],
        ["Nglegok", 92.56, 76736],
        ["Sanankulon", 33.33, 57810],
        ["Ponggok", 103.83, 113986],
        ["Srengat", 53.98, 70462],
        ["Wonodadi", 40.35, 51379],
        ["Udanawu", 40.98, 45262]
    ];
    ?>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Kecamatan</th>
            <th>Luas (km²)</th>
            <th>Jumlah Penduduk (jiwa)</th>
        </tr>

        <?php
        $no = 1;

        foreach ($penduduk as $data) {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . htmlspecialchars($data[0]) . "</td>";
            echo "<td>" . number_format($data[1], 2, ',', '.') . "</td>";
            echo "<td>" . number_format($data[2], 0, ',', '.') . "</td>";
            echo "</tr>";

            $no++;
        }
        ?>
    </table>

    <p>
        Sumber: BPS Kabupaten Blitar.
    </p>

</body>
</html>
