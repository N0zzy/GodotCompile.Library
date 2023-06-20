<?php 

namespace GLPchp\Compile\PhpParser\Node\Scalar\MagicConst;

use GLPchp\Compile\PhpParser\Node\Scalar\MagicConst;

class File extends MagicConst
{
    public function getName() : string {
        return '__FILE__';
    }
    
    public function getType() : string {
        return 'Scalar_MagicConst_File';
    }
}
