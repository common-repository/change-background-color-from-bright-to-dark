<?php
/**
* Plugin Name: Change background color from bright to dark
* Plugin URI: https://wordtune.me
* Description: Install an avtivate this Plugin and your website background color will change from bright to dark in 24 hour
* Author: WordTune
* Author URI: https://wordtune.me
* Version:           1.0
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
**/

function cbcfbtd() {
    ?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
var now = new Date();
var hours = now.getHours();

document.bgColor="#000000";

if (hours > 4 && hours < 6){
document.write ('<body style="background-color:#e7d8f7">');
}

else if (hours > 5 && hours < 7){
document.write ('<body style="background-color:#ffea00">');
}

else if (hours > 6 && hours < 8){
document.write ('<body style="background-color:#ffdd00">');
}

else if (hours > 7 && hours < 9){
document.write ('<body style="background-color:#ffd000">');
}

else if (hours > 8 && hours < 10){
document.write ('<body style="background-color:#ffc300">');
}
else if (hours > 9 && hours < 11){
document.write ('<body style="background-color:#ffb700;">');
}

else if (hours > 10 && hours < 12){
document.write ('<body style="background-color:#ffaa00;">');
}

else if (hours > 11 && hours < 13){
document.write ('<body style="background-color:#ffa200;">');
}


else if (hours > 12 && hours < 14){
document.write ('<body style="background-color:#ff9500;">');
}


else if (hours > 13 && hours < 15){
document.write ('<body style="background-color:#ff8800;">');
}


else if (hours > 14 && hours < 16){
document.write ('<body style="background-color:#ff7b00;">');
}


else if (hours > 15 && hours < 17){
document.write ('<body style="background-color:#e85d04;">');
}

else if (hours > 16 && hours < 18){
document.write ('<body style="background-color:#FD1B27;">');
}


else if (hours > 17 && hours < 19){
document.write ('<body style="background-color:#AF0026;">');
}


else if (hours > 18 && hours < 20){
document.write ('<body style="background-color:#9d0208;">');
}

else if (hours > 19 && hours < 21){
document.write ('<body style="background-color:#720026;">');
}

else if (hours > 20 && hours < 22){
document.write ('<body style="background-color:#370617;">');
}

else if (hours > 21 && hours < 23){
document.write ('<body style="background-color:#03071e;">');
}


else if (hours > 22 && hours < 24){
document.write ('<body style="background-color:#3a365b;">');
}


else if (hours > 24 && hours < 1){
document.write ('<body style="background-color:#343a40;">');
}


else if (hours > 1 && hours < 2){
document.write ('<body style="background-color:#495057;">');
}


else if (hours > 2 && hours < 3){
document.write ('<body style="background-color:#6c757d;">');
}


else if (hours > 3 || hours < 4){
document.write ('<body style="background-color:#adb5bd;">');
}





else {
document.write ('<body style="background-color:#000000">');
}
</script>
</html>


    <?php
}
add_action('wp_head', 'cbcfbtd');
?>
