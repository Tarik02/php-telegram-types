<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class Dice
 *
 * This object represents an animated emoji that displays a random value.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#dice
 */
class Dice implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Emoji on which the dice throw animation is based
     *
     * @return string
     */
    public function emoji(): string
    {
        return $this->payload['emoji'];
    }

    /**
     * Emoji on which the dice throw animation is based
     *
     * @param string $emoji
     * @return self
     */
    public function withEmoji(string $emoji): self
    {
        $payload = $this->payload;
        $payload['emoji'] = $emoji;
        return new self($payload);
    }

    /**
     * Value of the dice, 1-6 for “<img alt="🎲" src="//telegram.org/img/emoji/40/F09F8EB2.png" height="20" width="20" />”, “<img alt="🎯" src="//telegram.org/img/emoji/40/F09F8EAF.png" height="20" width="20" />” and “<img alt="🎳" src="//telegram.org/img/emoji/40/F09F8EB3.png" height="20" width="20" />” base emoji, 1-5 for “<img alt="🏀" src="//telegram.org/img/emoji/40/F09F8F80.png" height="20" width="20" />” and “<img alt="⚽" src="//telegram.org/img/emoji/40/E29ABD.png" height="20" width="20" />” base emoji, 1-64 for “<img alt="🎰" src="//telegram.org/img/emoji/40/F09F8EB0.png" height="20" width="20" />” base emoji
     *
     * @return int
     */
    public function value(): int
    {
        return $this->payload['value'];
    }

    /**
     * Value of the dice, 1-6 for “<img alt="🎲" src="//telegram.org/img/emoji/40/F09F8EB2.png" height="20" width="20" />”, “<img alt="🎯" src="//telegram.org/img/emoji/40/F09F8EAF.png" height="20" width="20" />” and “<img alt="🎳" src="//telegram.org/img/emoji/40/F09F8EB3.png" height="20" width="20" />” base emoji, 1-5 for “<img alt="🏀" src="//telegram.org/img/emoji/40/F09F8F80.png" height="20" width="20" />” and “<img alt="⚽" src="//telegram.org/img/emoji/40/E29ABD.png" height="20" width="20" />” base emoji, 1-64 for “<img alt="🎰" src="//telegram.org/img/emoji/40/F09F8EB0.png" height="20" width="20" />” base emoji
     *
     * @param int $value
     * @return self
     */
    public function withValue(int $value): self
    {
        $payload = $this->payload;
        $payload['value'] = $value;
        return new self($payload);
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
        return new self([]);
    }

    /**
     * @return \Tarik02\Telegram\Collections\DiceCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\DiceCollection
    {
        return \Tarik02\Telegram\Collections\DiceCollection::make();
    }

    /**
     * @param array $payload
     * @return self
     */
    public static function fromPayload(array $payload): self
    {
        return new self($payload);
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
