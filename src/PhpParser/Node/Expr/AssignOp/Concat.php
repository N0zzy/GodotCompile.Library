<?php 

namespace GLPchp\Compile\PhpParser\Node\Expr\AssignOp;

use GLPchp\Compile\PhpParser\Node\Expr\AssignOp;

class Concat extends AssignOp
{
    public function getType() : string {
        return 'Expr_AssignOp_Concat';
    }
}
