--TEST--
Test uv_stop ends loop execution
--SKIPIF--
<?php if (!extension_loaded("ffi")) print "skip"; ?>
--FILE--
<?php
require 'vendor/autoload.php';

$loop = uv_default_loop();
$timer = uv_timer_init();

$i = 0;
uv_timer_start($timer, 10, 10, function($timer) use (&$i) {
    echo "count: {$i}" . PHP_EOL;
    $i++;

    if ($i > 3) {
        uv_stop();
    }
});

uv_run();

echo "finished" . PHP_EOL;
--EXPECT--
count: 0
count: 1
count: 2
count: 3
finished
