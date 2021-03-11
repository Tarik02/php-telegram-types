<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PhotoSizeCollectionCollection
 *
 * @method PhotoSizeCollectionCollection push(\Tarik02\Telegram\Collections\PhotoSizeCollection $item)
 * @method \Tarik02\Telegram\Collections\PhotoSizeCollection get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Collections\PhotoSizeCollection> getIterator()
 *
 * @method static PhotoSizeCollectionCollection make()
 * @method static PhotoSizeCollectionCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Collections\PhotoSizeCollection
 */
final class PhotoSizeCollectionCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Collections\PhotoSizeCollection
     */
    public static function makeItem(): \Tarik02\Telegram\Collections\PhotoSizeCollection
    {
        return \Tarik02\Telegram\Collections\PhotoSizeCollection::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Collections\PhotoSizeCollection
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Collections\PhotoSizeCollection
    {
        return \Tarik02\Telegram\Collections\PhotoSizeCollection::fromPayload($payload);
    }
}