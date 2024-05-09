<?php

$idgame = $_POST['id_game'];
$phone = $_POST['telepon'];
$jumlah = $_POST['jumlah'];
$bayar = $_POST['bayar'];



header("Location: https://wa.me/6285156246202?text=Halo%2C%20Infinite%20Dream%20TopUp!%0ASaya%20ingin%20topup%2C%20dengan%20%3A%0AID%20GAME%20%3A%20$idgame%0ANOMOR%20HANDPHONE%20%3A%20$phone%0AJUMLAH%20TOPUP%20%3A%20$jumlah%0AMETODE%20PEMBAYARAN%20%3A%20$bayar");