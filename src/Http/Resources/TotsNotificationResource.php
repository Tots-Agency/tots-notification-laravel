<?php

namespace Tots\Notification\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TotsNotificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'type' => $this->type,
            'item_id' => $this->item_id,
            'data' => $this->data,
            'title' => $this->title,
            'caption' => $this->caption,
            'is_read' => $this->is_read,
            'is_email' => $this->is_email,
            'created_at' => $this->created_at
        ];
    }
}
