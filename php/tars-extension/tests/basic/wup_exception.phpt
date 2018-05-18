--TEST--
basic: wup exception

--SKIPIF--
<?php require __DIR__ . "/../include/skipif.inc"; ?>
--INI--
assert.active=1
assert.warning=1
assert.bail=0
assert.quiet_eval=0

--FILE--
<?php
require_once __DIR__ . "/../include/config.inc";

try {
    $e = new TARS_Exception('test exception by yong', 12);
    throw $e;
} catch(Exception $e) {
    assert($e->getMessage(),"test exception by yong");
    assert($e->getCode(),12);
}

?>

--EXPECT--