<?php
// This will generate a Notice that an array cannot be cast to a string.
$source = [1, 2, 3, 4];
$filter = [3, 4, [5], 6];
// $result = array_diff($source, $filter);

// Whereas this is fine, since the objects can cast to a string.
class S {
  public $v;

  public function __construct(string $v) {
    $this->v = $v;
  }

  public function __toString() {
    return $this->v;
  }
}

$source = [new S('a'), new S('b'), new S('c')];
$filter = [new S('b'), new S('c'), new S('d')];

$result = array_diff($source, $filter);
// print_r($result);
// $result now contains one instance of S('a');



$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result = array_diff_key($a1,$a2);
print_r($result);