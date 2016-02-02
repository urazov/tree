<?php

/**
 * node_id parent_id title
 * 1 null Node 1
 * 2 1 Node 2
 * 3 2 Node 3
 * 4 2 Node 4
 * 5 null Node 5
 */

/**
 * Reading table from database and fill array
 * Result array looks like:
 */

$rows_from_database = [
    [1, null, 'Node 1'],
    [2, 1, 'Node 2'],
    [3, 2, 'Node 3'],
    [4, 2, 'Node 4'],
    [5, null, 'Node 5'],
    [6, 1, 'Node 6'],
    [7, 3, 'Node 7']
];

foreach($rows_from_database as $key => $row){
    is_null($row[1]) ? $idx = 0 : $idx = $row[1];
    $data[$idx][] = $row[0];
}

/**
 * $data = [
 *  0 => [1, 5]
 *  1 => [2, 6]
 *  2 => [3, 4]
 *  3 => [7]
 * ]
 */
$result = array();

function tree($data, $i = 0, &$result = array())
{
    $result[$i] = [];

    if(array_key_exists($i, $data)){
        foreach($data[$i] as $value){
            tree($data, $value, $result[$i]);
        }
    }
}

tree($data, 0, $result);

var_dump($result[0]);