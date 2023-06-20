<?php 

namespace GLPchp\Compile\PhpParser\Node\Scalar\MagicConst;

use GLPchp\Compile\PhpParser\Node\Scalar\MagicConst;

class Namespace_ extends MagicConst
{
    public function getName() : string {
        return '__NAMESPACE__';
    }
    
    public function getType() : string {
        return 'Scalar_MagicConst_Namespace';
    }
}
