<?php

$mot_de_passe = 'BTTadmin123';

$hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

echo $hash;