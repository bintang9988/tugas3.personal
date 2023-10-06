<html>
<head>
    <title>Nilai Mahasiswa </title>
</head>
<body> 
<table width = 500 border="1">
    <td colspan="5" bgcolor= white> <h2> <center> Nilai Mahasiswa </h2></center></td>
    <?php
            $data = array(
                array("Mata kuliah",'Nilai UTS','Nilai UAS','Nilai Tugas','Nilai Absen'),
                array("Web Programming",'90','80','89','100'),
                array("Struktur Data", '76','89','98','100'),
                array("Sistem Basis Data", '89','98','76','80'),
            );

            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1]. "</td>";
                echo "<td>" . $row[2]. "</td>";
                echo "<td>" . $row[3]. "</td>";
                echo "<td>" . $row[4]. "</td>";
                echo "</tr>";
            }
            ?>  
<p> Klik <a href="index.php">disini</a> untuk kembali ke halaman sebelumnya.</p>

</table>
</body>
</html>