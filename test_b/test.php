<?php

$json = '{"jsonrpc": "2.0", "method": "subtract", "params": [42, 23], "id": 1}';

$data = json_decode($json, true);

assert(count(array_keys($data)) == 4);
assert(count($data) == 4);
assert(sizeof($data) == 4);

$batch = '[
        {"jsonrpc": "2.0", "method": "sum", "params": [1,2,4], "id": "1"},
        {"jsonrpc": "2.0", "method": "notify_hello", "params": [7]},
        {"jsonrpc": "2.0", "method": "subtract", "params": [42,23], "id": "2"},
        {"foo": "boo"},
        {"jsonrpc": "2.0", "method": "foo.get", "params": {"name": "myself"}, "id": "5"},
        {"jsonrpc": "2.0", "method": "get_data", "id": "9"} 
    ]';

$data = json_decode($batch, true);

assert(count(array_keys($data)) == 6);
assert(count($data) == 6);
assert(sizeof($data) == 6);
