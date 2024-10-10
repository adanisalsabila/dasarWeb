<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" type ="text/css" href="postest.css"/>
    <script>
        // $(document).ready(function(){
//   $("button").click(function(){
//     $("p").hide();
//   });
// });
    </script>

</head>
<body>
    <h2> Data Siswa </h2>
    <table>
        <tr>
            <th> Nama </th>
            <th> Umur </th>
            <th> Kelas </th>
            <th> Alamat </th>
</tr>
<?php
$siswa = array (
    array("Adani", 5, 3, "Bangil"),
    array("Fabian", 6, 3, "Malang"),
    array("Roy", 7, 3, "Batu"),
    array("Soultan", 6, 3, "Kalimantan"),
);
$total_umur = 0;

for ($i = 0; $i < count($siswa); $i++) {

echo "<tr>";
echo "<td>". $siswa[0][0] . "</td>";
echo "<td>". $siswa[0][1] . "</td>";
echo "<td>". $siswa[0][2] . "</td>";
echo "<td>". $siswa[0][3] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>". $siswa[1][0] . "</td>";
echo "<td>". $siswa[1][1] . "</td>";
echo "<td>". $siswa[1][2] . "</td>";
echo "<td>". $siswa[1][3] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>". $siswa[2][0] . "</td>";
echo "<td>". $siswa[2][1] . "</td>";
echo "<td>". $siswa[2][2] . "</td>";
echo "<td>". $siswa[2][3] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>". $siswa[3][0] . "</td>";
echo "<td>". $siswa[3][1] . "</td>";
echo "<td>". $siswa[3][2] . "</td>";
echo "<td>". $siswa[3][3] . "</td>";
echo "</tr>";


$total_umur += $siswa[$i][1];
    }

    $average_age = $total_umur / count($siswa); 

    echo "<tr>"; 
    echo "<td colspan='4'>Rata-rata Umur: " . $average_age . "</td>"; 
    echo "</tr>";
    ?>
</table>
</body>
</html>