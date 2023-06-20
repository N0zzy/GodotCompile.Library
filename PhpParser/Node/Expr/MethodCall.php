<?php 

namespace GLPchp\Compile\PhpParser\Node\Expr;

use GLPchp\Compile\PhpParser\Node\Arg;
use GLPchp\Compile\PhpParser\Node\Expr;
use GLPchp\Compile\PhpParser\Node\Identifier;
use GLPchp\Compile\PhpParser\Node\VariadicPlaceholder;

class MethodCall extends CallLike
{
    /** @var Expr Variable holding object */
    public $var;
    /** @var Identifier|Expr Method name */
    public $name;
    /** @var array<Arg|VariadicPlaceholder> Arguments */
    public $args;

    /**
     * Constructs a function call node.
     *
     * @param Expr                           $var        Variable holding object
     * @param string|Identifier|Expr         $name       Method name
     * @param array<Arg|VariadicPlaceholder> $args       Arguments
     * @param array                          $attributes Additional attributes
     */
    public function __construct(Expr $var, $name, array $args = [], array $attributes = []) {
        $this->attributes = $attributes;
        $this->var = $var;
        $this->name = \is_string($name) ? new Identifier($name) : $name;
        $this->args = $args;
    }

    public function getSubNodeNames() : array {
        return ['var', 'name', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_MethodCall';
    }

    public function getRawArgs(): array {
        return $this->args;
    }
}
