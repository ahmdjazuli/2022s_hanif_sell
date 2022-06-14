<?php
mysqli_query($kon, "UPDATE tanam INNER JOIN flashsale ON tanam.idtanam = flashsale.idtanam SET cekflash = 0, harga = hargaawal WHERE CURDATE() < waktu");
?>