<?php namespace App\Kernel;

use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;

class VarDumper
{

    /**
     * Dump a value with elegance.
     *
     * @param  mixed $value
     */
    public function dump($value)
    {
        if (class_exists(CliDumper::class)) {
            $dumper = 'cli' === PHP_SAPI ? new CliDumper : new HtmlVarDumper;

            $dumper->dump((new VarCloner)->cloneVar($value));

            unset($dumper);
        } else {
            var_dump($value);
        }

        unset($value);
    }
}
