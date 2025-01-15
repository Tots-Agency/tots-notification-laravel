<?php

namespace Tots\Notification\Repositories;

use Tots\Notification\Models\TotsNotification;

class TotsNotificationRepository
{
    public function getLast($userId)
    {
        return TotsNotification::where('user_id', $userId)
        ->orderBy('created_at', 'desc')
        ->first();
    }

    public function create($userId, $type, $title, $caption)
    {
        $item = new TotsNotification();
        $item->user_id = $userId;
        $item->type = $type;
        $item->title = $title;
        $item->caption = $caption;
        $item->save();
        return $item;
    }
}
