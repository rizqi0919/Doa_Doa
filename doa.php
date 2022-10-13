<?php
$data=file_get_contents("https://doa-doa-api-ahmadramadhan.fly.dev/api");
$doa=json_decode($data);
//echo "<pre>";print_r($doa);
$table = "<h3>Kumpulan Doa Sehari - Hari</h3>";

for($i=0;$i<count($doa);$i++){
    $no=$i+1;
$table .= "<table border=1>
             <tr><ol>ID {$doa[$i]->id}</ol>
                <ol>Doa = {$doa[$i]->doa}</ol>
                <ol>Ayat = {$doa[$i]->ayat}</ol>
                <ol>Latin = {$doa[$i]->latin}</ol>
                <ol>Artinya : {$doa[$i]->artinya}</ol></tr>";
    
}
$table .= "</table>";
echo $table;

?>
