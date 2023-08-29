<?php
$a = 2;
$b = 2;

$a_list = [1,2,3];
$b_list = [3,4,5];

$callback = function($a_list, $b_list) {
    if (count($a_list) != count($b_list)) {
        return false;
    }

    return true;
};

// equalAssertion($a, $b);
equalAssertion($a_list, $b_list, $callback);

function equalAssertion($a,$b, $callback = null){
    $equality = $callback == null? $a == $b: $callback($a, $b);
    echo("Comparing ".implode(",", $a)." and " .implode(",", $b) ."..." . ($equality ? "They are equal." : "Error, they are NOT equal.")). PHP_EOL;
    // 等しくない場合はクラッシュします。
    assert($equality, "アサーションエラー!");
    return true;

}
