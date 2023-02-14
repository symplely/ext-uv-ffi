--TEST--
Check for fs error
--SKIPIF--
<?php if (!extension_loaded("ffi")) print "skip"; ?>
--FILE--
<?php
require 'vendor/autoload.php';

UVFs::init(uv_default_loop(), 0, null);

--EXPECTF--
Warning: uv_fs_custom failed: %S
