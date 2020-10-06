<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <?php
    function LuasSegitiga($alas, $tinggi)
    {
        return 0.5 * $alas * $tinggi;
    }
    $a = [10, 20, 30, 40, 50];
    $t = [20, 40, 60, 80, 100];
    ?>
    Tabel Luas Segitiga
    <table width='800' border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Alas</th>
                <th>Tinggi</th>
                <th>Hasil </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><?php echo $a[0]; ?></td>
                <td><?php echo $t[0]; ?></td>
                <td><?php echo LuasSegitiga($a[0], $t[0]); ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td><?php echo $a[1]; ?></td>
                <td><?php echo $t[1]; ?></td>
                <td><?php echo LuasSegitiga($a[1], $t[1]); ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td><?php echo $a[2]; ?></td>
                <td><?php echo $t[2]; ?></td>
                <td><?php echo LuasSegitiga($a[2], $t[2]); ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td><?php echo $a[3]; ?></td>
                <td><?php echo $t[3]; ?></td>
                <td><?php echo LuasSegitiga($a[3], $t[3]); ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td><?php echo $a[4]; ?></td>
                <td><?php echo $t[4]; ?></td>
                <td><?php echo LuasSegitiga($a[4], $t[4]); ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>