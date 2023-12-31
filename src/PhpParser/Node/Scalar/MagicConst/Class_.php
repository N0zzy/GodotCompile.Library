<?php 

namespace GLPchp\Compile\PhpParser\Node\Scalar\MagicConst;

use GLPchp\Compile\PhpParser\Node\Scalar\MagicConst;

class Class_ extends MagicConst
{
    public function getName() : string {
        return '__CLASS__';
    }
    
    public function getType() : string {
        return 'Scalar_MagicConst_Class';
    }
}
