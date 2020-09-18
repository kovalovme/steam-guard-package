<?php

require __DIR__ . '/vendor/autoload.php';

use SteamTotp\SteamTotp;

echo SteamTotp::getAuthCode('');