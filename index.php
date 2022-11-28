<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Тег table</title>
    <style>
        table {
            width: 25%; 
            background: white; /
            color: black; 
        }

        th {
            background: red;
            padding: 5px; 
        }

        td {
            background: yellow; 
            padding: 5px; 
        }
    </style>
</head>
<body>
<?php
$lines = file('read.txt');
$f=0;
$i=0;
foreach ($lines as $k => $v) {
$pv[$k]=explode(",",$v);
$i++;
$f=0;
while($f<4)
{

$array[$i][$f]=$pv[$k][$f];

$f++;
}    
}


?>
<table>
    <tr>
        <th>Автор</th>
        <th>Название</th>
        <th>Страницы</th>
    </tr>
    <?php
    for ($i = 1; $i <= 4; $i++) {
	
        echo "<tr>";
        for ($z = 0; $z < 3; $z++) {
            echo "<td>" . $array[$i][$z]. "</td>";
        }
        echo "</tr>";
		
		
	}
    
    ?>
</table>
</body>
</html>