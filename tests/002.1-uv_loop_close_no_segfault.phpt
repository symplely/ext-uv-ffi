--TEST--
No Segmentation fault after uv_loop_close
--SKIPIF--
<?php if (!extension_loaded("ffi")) print "skip"; ?>
--FILE--
<?php
require 'vendor/autoload.php';

$loop = uv_loop_new();
echo 'ok';
uv_loop_close($loop);

--EXPECTF--
ok
