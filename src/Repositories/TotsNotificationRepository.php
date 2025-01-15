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
}
