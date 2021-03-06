--TEST--
swoole_coroutine: coro parallel2
--SKIPIF--
<?php require  __DIR__ . "/../include/skipif.inc"; ?>
--FILE--
<?php
go(function () {
    echo "co[1] start\n";     
    co::sleep(2.0);
    echo "co[1] exit\n";
});

go(function () {
    echo "co[2] start\n";
    co::sleep(1.0);
    echo "co[2] exit\n";
});   
echo "end\n";
?>
--EXPECT--
co[1] start
co[2] start
end
co[2] exit
co[1] exit
