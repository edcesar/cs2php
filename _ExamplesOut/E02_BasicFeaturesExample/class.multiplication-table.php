<?php
/*
Generated with CS2PHP
*/
namespace Lang\Php\Examples\BasicFeaturesExample {
    class MultiplicationTable {
        public static function show_multiplication_table($maxCol, $maxRow) {
            echo '<table>' . PHP_EOL;
            for($rowIdx = 1; $rowIdx <= $maxRow; $rowIdx++)
                {
                    echo '<tr>' . PHP_EOL;
                    for($ColIdx = 1; $ColIdx <= $maxCol; $ColIdx++)
                        echo '<td>' . ($rowIdx * $ColIdx) . '</td>' . PHP_EOL;
                    echo '</tr>' . PHP_EOL;
                }
            echo '</table>' . PHP_EOL;
        }
    }
}
?>