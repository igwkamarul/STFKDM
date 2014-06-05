<?php
session_start();
session_destroy();
?>
<select name="caterer" id="caterer" onchange = "popup()">
 <option value="Caterer Sendiri">Caterer Sendiri</option>
 <option value="Caterer BCIC">Caterer BCIC</option>
</select>

<script type = "text/javascript">
function popup() {
var n = document.getElementById("caterer").value;
if (n == "Caterer BCIC") {alert ("Pihak kami akan menghubungi tuan/puan untuk tempahan makan")}
}
</script>
