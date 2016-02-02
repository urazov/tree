# tree
Tree from database tables object. View like an array.

Input array:
```php
$rows_from_database = [
    [1, null, 'Node 1'],
    [2, 1, 'Node 2'],
    [3, 2, 'Node 3'],
    [4, 2, 'Node 4'],
    [5, null, 'Node 5'],
    [6, 1, 'Node 6'],
    [7, 3, 'Node 7']
];
```
Result from console:
```php
/usr/bin/php7.0 /home/urazov/www/tree/index.php

array(2) {
  [1]=>
  array(2) {
    [2]=>
    array(2) {
      [3]=>
      array(1) {
        [7]=>
        array(0) {
        }
      }
      [4]=>
      array(0) {
      }
    }
    [6]=>
    array(0) {
    }
  }
  [5]=>
  array(0) {
  }
}

Process finished with exit code 0
```
