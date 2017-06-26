<?php

declare(strict_types=1);

namespace FlixTech\SchemaRegistryApi\Model\Schema;

use Assert\Assert;

final class SchemaId
{
    /**
     * @var int
     */
    private $id;

    public static function create(int $id): SchemaId
    {
        Assert::that($id)->greaterThan(0);

        return new self($id);
    }

    protected function __construct(int $id)
    {
        $this->id = $id;
    }

    public function value(): int
    {
        return $this->id;
    }

    public function __toString(): string
    {
        return (string) $this->id;
    }

    public function equals(SchemaId $other): bool
    {
        return $this->id === $other->id;
    }
}
