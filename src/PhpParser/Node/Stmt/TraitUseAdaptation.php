<?php 

namespace GLPchp\Compile\PhpParser\Node\Stmt;

use GLPchp\Compile\PhpParser\Node;

abstract class TraitUseAdaptation extends Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
