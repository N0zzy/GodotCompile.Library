<?php 

namespace GLPchp\Compile\PhpParser\Node\Expr\Cast;

use GLPchp\Compile\PhpParser\Node\Expr\Cast;

class Bool_ extends Cast
{
    public function getType() : string {
        return 'Expr_Cast_Bool';
    }
}
