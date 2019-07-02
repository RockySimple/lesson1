<html>
<body>

<?php

//echo ($_GET['a'] + $_GET['b']);
 include 'form.html';
print_r($_POST);

echo '<table>';
$count = 1;

for($i = 0; $i < $_POST['rows']; $i++){
    echo '<tr>';
        for($j = 0; $j < $_POST['columns'];$j++){
            echo '<td>'.$count.'</td>';
            $count++;
        }
    echo '</tr>';
}
echo '</table>';
?>
</body>
</html>