<?php

namespace Tarik02\Telegram\Collections;

use Countable;
use IteratorAggregate;
use Tarik02\Telegram\Contracts\Payloadable;

/**
 * Class Collection
 *
 * @package Tarik02\Telegram\Collections
 */
abstract class Collection implements Payloadable, Countable, IteratorAggregate
{
    /**
     * @param Payloadable $item
     * @return self
     */
    public function push(Payloadable $item): self
    {
        $payload = $this->payload;
        $payload[] = $item->toPayload();
        return new static($payload);
    }

    /**
     * @param int $index
     * @return Payloadable
     */
    public function get(int $index): Payloadable
    {
        return $this->itemFromPayload($this->payload[$index]);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return \count($this->payload);
    }

    /**
     * @return CollectionIterator
     */
    public function getIterator(): CollectionIterator
    {
        return new CollectionIterator($this);
    }

    /**
     * @return array
     */
    public function toPayload(): array
    {
        return $this->payload;
    }

    /**
     * @return self
     */
    public static function make(): self
    {
        return new static([]);
    }

    /**
     * @param array $payload
     * @return self
     */
    public static function fromPayload(array $payload): self
    {
        return new static($payload);
    }

    /**
     * @return Payloadable
     */
    abstract public static function makeItem(): Payloadable;

    /**
     * @param array $payload
     * @return Payloadable
     */
    abstract public static function itemFromPayload(array $payload): Payloadable;

    /**
     * @var array
     */
    private array $payload;

    /**
     * @param array $payload
     * @return void
     */
    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
