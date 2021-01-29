--TEST--
Module API: wasm_module_name

--FILE--
<?php

$engine = wasm_engine_new();
$store = wasm_store_new($engine);
$wasm = wat2wasm('(module $test)');
$module = wasm_module_new($store, $wasm);
var_dump(wasm_module_name($module));

?>
--EXPECTF--
string(4) "test"
