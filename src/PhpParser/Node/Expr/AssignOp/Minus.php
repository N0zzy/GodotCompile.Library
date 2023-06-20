<?php 

namespace GLPchp\Compile\PhpParser\Node\Expr\AssignOp;

use GLPchp\Compile\PhpParser\Node\Expr\AssignOp;

class Minus extends AssignOp
{
    public function getType() : string {
        return 'Expr_AssignOp_Minus';
    }
}
