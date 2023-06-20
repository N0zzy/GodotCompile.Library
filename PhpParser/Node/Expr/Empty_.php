<?php 

namespace GLPchp\Compile\PhpParser\Node\Expr;

use GLPchp\Compile\PhpParser\Node\Expr;

class Empty_ extends Expr
{
    /** @var Expr Expression */
    public $expr;

    /**
     * Constructs an empty() node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(Expr $expr, array $attributes = []) {
        $this->attributes = $attributes;
        $this->expr = $expr;
    }

    public function getSubNodeNames() : array {
        return ['expr'];
    }
    
    public function getType() : string {
        return 'Expr_Empty';
    }
}
