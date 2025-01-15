<?php

namespace Tots\Notification\Http\Controllers;

use Illuminate\Http\Request;
use Tots\Notification\Models\TotsNotification;
use Illuminate\Routing\Controller as BaseController;
use Tots\Notification\Http\Resources\TotsNotificationResource;
use Tots\Notification\Repositories\TotsNotificationRepository;

class TotsNotificationController extends BaseController
{
    protected TotsNotificationRepository $repository;

    public function __construct(TotsNotificationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function list(Request $request)
    {
        $notifications = $this->repository->getLasts($request->user()->id);
        return response()->json(TotsNotificationResource::collection($notifications));
    }
}