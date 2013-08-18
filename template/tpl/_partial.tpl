Hello, how are you?<br>
include var >>>> <?php echo $this->var?> <<<<< <br>
Else text...<br>
Array implementation:<br>
<?php 
    foreach ($this->arr as $ar) {
        if (is_array($ar)) {
            var_dump($ar);
        } else {
            echo $ar;
        }
        echo "<br>";
    }
?>
<br>
End of array implementation

