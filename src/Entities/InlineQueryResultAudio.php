<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InlineQueryResultAudio
 *
 * Represents a link to an MP3 audio file. By default, this audio file will be sent by the user. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the audio.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inlinequeryresultaudio
 */
class InlineQueryResultAudio implements \Tarik02\Telegram\Entities\InlineQueryResult
{
    /**
     * Type of the result, must be *audio*
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Type of the result, must be *audio*
     *
     * @param string $type
     * @return self
     */
    public function withType(string $type): self
    {
        $payload = $this->payload;
        $payload['type'] = $type;
        return new self($payload);
    }

    /**
     * Unique identifier for this result, 1-64 bytes
     *
     * @return string
     */
    public function id(): string
    {
        return $this->payload['id'];
    }

    /**
     * Unique identifier for this result, 1-64 bytes
     *
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $payload = $this->payload;
        $payload['id'] = $id;
        return new self($payload);
    }

    /**
     * A valid URL for the audio file
     *
     * @return string
     */
    public function audioUrl(): string
    {
        return $this->payload['audio_url'];
    }

    /**
     * A valid URL for the audio file
     *
     * @param string $audioUrl
     * @return self
     */
    public function withAudioUrl(string $audioUrl): self
    {
        $payload = $this->payload;
        $payload['audio_url'] = $audioUrl;
        return new self($payload);
    }

    /**
     * Title
     *
     * @return string
     */
    public function title(): string
    {
        return $this->payload['title'];
    }

    /**
     * Title
     *
     * @param string $title
     * @return self
     */
    public function withTitle(string $title): self
    {
        $payload = $this->payload;
        $payload['title'] = $title;
        return new self($payload);
    }

    /**
     * *Optional*. Caption, 0-1024 characters after entities parsing
     *
     * @return string|null
     */
    public function caption(): ?string
    {
        return $this->payload['caption'] ?? null;
    }

    /**
     * *Optional*. Caption, 0-1024 characters after entities parsing
     *
     * @param string|null $caption
     * @return self
     */
    public function withCaption(?string $caption): self
    {
        $payload = $this->payload;
        $payload['caption'] = $caption;
        return new self($payload);
    }

    /**
     * *Optional*. Mode for parsing entities in the audio caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     *
     * @return string|null
     */
    public function parseMode(): ?string
    {
        return $this->payload['parse_mode'] ?? null;
    }

    /**
     * *Optional*. Mode for parsing entities in the audio caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     *
     * @param string|null $parseMode
     * @return self
     */
    public function withParseMode(?string $parseMode): self
    {
        $payload = $this->payload;
        $payload['parse_mode'] = $parseMode;
        return new self($payload);
    }

    /**
     * *Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     *
     * @return \Tarik02\Telegram\Collections\MessageEntityCollection|null
     */
    public function captionEntities(): ?\Tarik02\Telegram\Collections\MessageEntityCollection
    {
        if (($this->payload['caption_entities'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Collections\MessageEntityCollection::fromPayload($this->payload['caption_entities'] ?? []);
    }

    /**
     * *Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     *
     * @param \Tarik02\Telegram\Collections\MessageEntityCollection|null $captionEntities
     * @return self
     */
    public function withCaptionEntities(?\Tarik02\Telegram\Collections\MessageEntityCollection $captionEntities): self
    {
        $payload = $this->payload;
        if ($captionEntities !== null) {
            $payload['caption_entities'] = $captionEntities->toPayload();
        } else {
            unset($payload['caption_entities']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Performer
     *
     * @return string|null
     */
    public function performer(): ?string
    {
        return $this->payload['performer'] ?? null;
    }

    /**
     * *Optional*. Performer
     *
     * @param string|null $performer
     * @return self
     */
    public function withPerformer(?string $performer): self
    {
        $payload = $this->payload;
        $payload['performer'] = $performer;
        return new self($payload);
    }

    /**
     * *Optional*. Audio duration in seconds
     *
     * @return int|null
     */
    public function audioDuration(): ?int
    {
        return $this->payload['audio_duration'] ?? null;
    }

    /**
     * *Optional*. Audio duration in seconds
     *
     * @param int|null $audioDuration
     * @return self
     */
    public function withAudioDuration(?int $audioDuration): self
    {
        $payload = $this->payload;
        $payload['audio_duration'] = $audioDuration;
        return new self($payload);
    }

    /**
     * *Optional*. [Inline keyboard](/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
     *
     * @return \Tarik02\Telegram\Entities\InlineKeyboardMarkup|null
     */
    public function replyMarkup(): ?\Tarik02\Telegram\Entities\InlineKeyboardMarkup
    {
        if (($this->payload['reply_markup'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\InlineKeyboardMarkup::fromPayload($this->payload['reply_markup']);
    }

    /**
     * *Optional*. [Inline keyboard](/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
     *
     * @param \Tarik02\Telegram\Entities\InlineKeyboardMarkup|null $replyMarkup
     * @return self
     */
    public function withReplyMarkup(?\Tarik02\Telegram\Entities\InlineKeyboardMarkup $replyMarkup): self
    {
        $payload = $this->payload;
        if ($replyMarkup !== null) {
            $payload['reply_markup'] = $replyMarkup->toPayload();
        } else {
            unset($payload['reply_markup']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Content of the message to be sent instead of the audio
     *
     * @return \Tarik02\Telegram\Entities\InputMessageContent|null
     */
    public function inputMessageContent(): ?\Tarik02\Telegram\Entities\InputMessageContent
    {
        if (($this->payload['input_message_content'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\InputMessageContent::fromPayload($this->payload['input_message_content']);
    }

    /**
     * *Optional*. Content of the message to be sent instead of the audio
     *
     * @param \Tarik02\Telegram\Entities\InputMessageContent|null $inputMessageContent
     * @return self
     */
    public function withInputMessageContent(?\Tarik02\Telegram\Entities\InputMessageContent $inputMessageContent): self
    {
        $payload = $this->payload;
        if ($inputMessageContent !== null) {
            $payload['input_message_content'] = $inputMessageContent->toPayload();
        } else {
            unset($payload['input_message_content']);
        }
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
     * @return \Tarik02\Telegram\Collections\InlineQueryResultAudioCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InlineQueryResultAudioCollection
    {
        return \Tarik02\Telegram\Collections\InlineQueryResultAudioCollection::make();
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