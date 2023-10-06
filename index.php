<html>
<head> 
    <title>Biodata Mahasiswa  </title>
</head>
<body>
    <h1> Tugas Mandiri 2 </h1>
    <table width = 500 border="1">
    <td colspan="3" bgcolor= white> <h2> <center> Biodata Mahasiswa </h2></center></td> 
<?php
            $data = array(
                array("NIM", 17220834),
                array("Nama", "Bintang Nugroho Adi Saputra"),
                array("Program Studi", "Teknologi Informasi"),
                array("Kelas", "17.3A.25"),
                array("Kampus", "UBSI Cengkareng"),
            );

            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1] . "</td>";
                echo "</tr>";
            }
            ?>  
</table>
<p> Klik <a href="index1.php">disini</a> untuk halaman selanjutnya.</p> 
</body>
</html>