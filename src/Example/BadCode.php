<?php
namespace App\Example;
class BadCode {
    public function foo_bar($param) {
        if ($param == 'foo') print("foo\n");
        if ($param == 'bar') {
            if (time() > 1) {
                if (is_string('fooBar')) {
                    if (is_numeric(123)) {
                        if (15 / 3 == 5) {
                            if(is_null(null)) {
                                return true;
                            }
                        }
                    }
                }
            }
        }
        return false;
    }

    function run() {
        if (random_int(1, 3) == 2) error_log('this should not happen');
    }



}
