<?php

$VERSION = "0.9.0+dev";
$BUILD = "repository";
$HOST = @$_SERVER['HTTP_HOST'];
if (strpos($HOST, ":") !== false) {
  $HOST = substr($HOST, 0, strpos($HOST, ":"));
}