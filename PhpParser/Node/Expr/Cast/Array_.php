<?php 

namespace PhpParser\Node\Expr\Cast;

use PhpParser\Node\Expr\Cast;

class Array_ extends Cast
{
    public function getType() : string {
        return 'Expr_Cast_Array';
    }
}
