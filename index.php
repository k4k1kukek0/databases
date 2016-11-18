<?php

//include & require

include_once("config.php");

// sql = statment
$sql = "SELECT * FROM  kegiatan" ;
//untuk menggunakan query di php menggunakan mysqli_query();
$result = mysqli_query($mysqli, $sql)
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Todolist</title>
    </head>
    <body>

    <h2> TO DO LIST </h2>
    <div>
            <form  action="" method="POST">
                <label>New to do :</label>   
                    <input type="text" name="task" value="">
                    <select name ="kategori">
                        <option value="rutin">rutin</option>
                        <option value="T_rutin">tidak rutin</option>
                    </select>
                    <input type="submit" name="simpan" value="Add">
            </form>
    <table border = "1" width = "80%">
        <thead>
             <tr>
                <th>kegiatan</th>
                <th>kategori</th>
                <th>keterangan</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($baris = mysqli_fetch_assoc($result)){
                    echo "<tr>" ;
                    echo "<td>" . $baris['kegiatan_nama'] . "</td>" ;
                    echo "<td>" . $baris['kegiatan_kategori'] . "</td>" ;
                    echo "<td>" . $baris['kegiatan_keterangan'] . "</td>" ;
                    echo "<td>" ;
                    echo "</td>" ;   


                    echo "</tr>" ;

                }
            ?>
        </tbody>
    </table>
    </div>
    
    </body>
</html>

<?php
mysqli_close ($mysqli) ;

?>