<?php
/*
`	Buat halaman untuk menghitung luas segitiga dimana inputan berasal
	dari kode program
	Luas Segitiga
	alas = 10 
	tinggi = 20
	Luas = 100
*/
?>

<!DOCTYPE html>
<html>

<head>
    <title>Fungsi LuasSegitiga Kompleks </title>
</head>

<body>
    Table Luas Segitiga
    <table width="800px" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Alas</th>
                <th>Tinggi</th>
                <th>Hasil</th>
            </tr>
        </thead>
        <tbody>
            <?php
            function luassegitiga($alas, $tinggi)
            {
                return $alas * $tinggi * 0.5;
            }

            $data = [[10, 20], [25, 40], [30, 24]];
            for ($i = 0; $i < count($data); $i++) {
                $a = $data[$i][0];
                $t = $data[$i][1];

            ?>
                <tr>
                    <td><?php echo $i + 1 ?></td>
                    <td><?php echo $a ?></td>
                    <td><?php echo $t ?></td>
                    <td> <?php echo LuasSegitiga($a, $t) ?> </td>
                </tr>
            <?php
            }
            echo "</tr>";

            ?>


        </tbody>
    </table>
</body>

</html>