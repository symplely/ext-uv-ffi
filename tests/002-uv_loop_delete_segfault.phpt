--TEST--
Segmentation fault after uv_loop_delete, only on Linux - is deprecated since 1.0
--SKIPIF--
<?php if (!extension_loaded("ffi") || \PHP_OS === 'Linux') print "skip"; ?>
--FILE--
<?php
require 'vendor/autoload.php';

$loop = uv_loop_new();
echo 'ok';
uv_loop_delete($loop);
--EXPECTF--
ok
