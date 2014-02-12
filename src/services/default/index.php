<?php
$messages = array();
$messages[] = "on se connait ?";
$messages[] = "?";
$messages[] = "va te faire foutre";
$messages[] = "cette fois c'est fini";
$messages[] = "n'insiste pas";
$messages[] = "ouais c'est ca";
$messages[] = "comment ca ?";
$messages[] = "c'est ton nouveau numero ?";
$messages[] = "kevin ?";
$messages[] = "c'est une blague ?";
$messages[] = "laisse tomber";
$messages[] = "lol";
$messages[] = "ca va toi ? Bisou";
$messages[] = "ce soir je peux pas";
$messages[] = "ok";

// bonus //
$messages[] = "Wesh tes con ou cest comment ? Tes sur que tu parle a la bonne personne ??";
//$messages[] = "Heiin ok";
$messages[] = "De quoii ?";
$messages[] = "Lol quoii ?";

echo $messages[array_rand($messages)];
