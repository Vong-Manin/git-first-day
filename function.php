<?php
function dd($req){
    echo '<pre>';
    die(var_dump($req));
    echo '</pre>';

}
dd(['hello', 'world']);
?>