<?php 

namespace GLPchp\Compile\PhpParser;

use System\Console;

final class Logger
{
    public static function warnLn($msg)
    {
        Console::WriteLine("[Warning] " . $msg);
    }
}