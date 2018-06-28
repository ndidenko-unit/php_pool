<?php
    class Tyrion extends Lannister {
        public function sleepWith($hero) {
            if ($hero instanceof Cersei) {
                echo 'Not even if I\'m drunk !' . "\n";
            }
            else if ($hero instanceof Jaime) {
                echo 'Not even if I\'m drunk !' . "\n";
            }
            else if ($hero instanceof Sansa) {
                echo 'Let\'s do this.' . "\n";
            }
        }
    }
?>
