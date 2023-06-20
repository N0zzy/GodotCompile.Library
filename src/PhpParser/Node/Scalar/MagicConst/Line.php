<?php 

namespace GLPchp\Compile\PhpParser\Node\Scalar\MagicConst;

use GLPchp\Compile\PhpParser\Node\Scalar\MagicConst;

class Line extends MagicConst
{
    public function getName() : string {
        return '__LINE__';
    }
    
    public function getType() : string {
        return 'Scalar_MagicConst_Line';
    }
}
