<?php

function printR(...$obj) {
    foreach ($obj as $arr) {
        echo "<pre>"; print_r($arr); echo "</pre>";
    }
}
?>