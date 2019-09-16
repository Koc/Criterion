<?php

namespace Brouzie\Specificator\Subscriber;

use Brouzie\Specificator\Result\ResultBuilder;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
interface ResultBuilderLocator
{
    public function getResultBuilder(string $resultClass): ResultBuilder;
}
