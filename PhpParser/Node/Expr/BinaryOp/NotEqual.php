<?php 

namespace GLPchp\Compile\PhpParser\Node\Expr\BinaryOp;

use GLPchp\Compile\PhpParser\Node\Expr\BinaryOp;

class NotEqual extends BinaryOp
{
    public function getOperatorSigil() : string {
        return '!=';
    }
    
    public function getType() : string {
        return 'Expr_BinaryOp_NotEqual';
    }
}
