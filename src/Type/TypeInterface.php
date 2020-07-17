<?php
declare(strict_types=1);

namespace Zakirullin\TypedAccessor\Type;

interface TypeInterface
{
    /**
     * @param mixed $value
     */
    public function __construct($value);

    /**
     * @return mixed
     */
    public function __invoke();
}