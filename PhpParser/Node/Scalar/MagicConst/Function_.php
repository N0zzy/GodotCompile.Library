<?php 

namespace GLPchp\Compile\PhpParser\Node\Scalar\MagicConst;

use GLPchp\Compile\PhpParser\Node\Scalar\MagicConst;

class Function_ extends MagicConst
{
    public function getName() : string {
        return '__FUNCTION__';
    }
    
    public function getType() : string {
        return 'Scalar_MagicConst_Function';
    }
}
