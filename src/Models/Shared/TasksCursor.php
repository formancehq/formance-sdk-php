<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


/** TasksCursor - OK */
class TasksCursor
{
    /**
     *
     * @var TasksCursorCursor $cursor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cursor')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\TasksCursorCursor')]
    public TasksCursorCursor $cursor;

    /**
     * @param  TasksCursorCursor  $cursor
     * @phpstan-pure
     */
    public function __construct(TasksCursorCursor $cursor)
    {
        $this->cursor = $cursor;
    }
}