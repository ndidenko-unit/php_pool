<?php
    class Jaime extends Lannister {
        public function sleepWith($hero) {
            if ($hero instanceof Cersei) {
                echo 'With pleasure, but only in a tower in Winterfell, then.' . "\n";
            }
            else if ($hero instanceof Tyrion) {
                echo 'Not even if I\'m drunk !' . "\n";
            }
            else if ($hero instanceof Sansa) {
                echo 'Let\'s do this.' . "\n";
            }
        }
    }
?>