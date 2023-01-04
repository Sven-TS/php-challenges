<?php

require_once "ChangeDetectionCache.php";
require_once "Client.php";

$cacheData = array_fill(0, 2_000_000, md5('abc'));

$changeDetectionCache = new ChangeDetectionCache(new Client());
$changeDetectionCache->updateCache('KJFAH8238', $cacheData);