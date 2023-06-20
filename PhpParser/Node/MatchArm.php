<?php 

namespace GLPchp\Compile\PhpParser\Node;

use GLPchp\Compile\PhpParser\Node;
use GLPchp\Compile\PhpParser\NodeAbstract;

class MatchArm extends NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;

    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, Node\Expr $body, array $attributes = []) {
        $this->conds = $conds;
        $this->body = $body;
        $this->attributes = $attributes;
    }

    public function getSubNodeNames() : array {
        return ['conds', 'body'];
    }

    public function getType() : string {
        return 'MatchArm';
    }
}
