<?php 

namespace GLPchp\Compile\PhpParser\Node\Stmt;

use GLPchp\Compile\PhpParser\Node\Identifier;
use GLPchp\Compile\PhpParser\Node\Stmt;

class Goto_ extends Stmt
{
    /** @var Identifier Name of label to jump to */
    public $name;

    /**
     * Constructs a goto node.
     *
     * @param string|Identifier $name       Name of label to jump to
     * @param array             $attributes Additional attributes
     */
    public function __construct($name, array $attributes = []) {
        $this->attributes = $attributes;
        $this->name = \is_string($name) ? new Identifier($name) : $name;
    }

    public function getSubNodeNames() : array {
        return ['name'];
    }
    
    public function getType() : string {
        return 'Stmt_Goto';
    }
}
