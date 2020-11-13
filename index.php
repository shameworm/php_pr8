<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Таблица размеров обуви</title>
</head>
<body>
<table border="1">
    <caption><h3>Матрица 5 на 10</h3></caption>
    <tr>
        <th> </th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
        <th>7</th>
        <th>8</th>
        <th>9</th>
        <th>10</th>
    </tr>
    <?php
    $n = array(0,0,0,0,0,0,0,0,0,0);
    $numbers = array($n,$n,$n,$n,$n);
    $index = 1;

    for($i = 0; $i < count($numbers); $i++){
        echo "<tr><td><b>".$index++."</b></td>";
    for($j = 0; $j < count($numbers[$i]); $j++){
        $numbers[$i][$j] = rand(0,9);
        echo "<td>".$numbers[$i][$j]."</td>";
    }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>