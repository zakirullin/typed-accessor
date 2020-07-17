<?php
declare(strict_types=1);

namespace Zakirullin\TypedAccessor\Type;

use function is_int;
use function is_string;

/**
 * @psalm-immutable
 */
final class Str implements TypeInterface
{
    /**
     * @var mixed
     */
    private $value;

    /**
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @psalm-pure
     *
     * @return string|null
     */
    public function __invoke(): ?string
    {
        if (is_string($this->value)) {
            return $this->value;
        }

        if (is_int($this->value)) {
            return (string) $this->value;
        }

        return null;
    }
}