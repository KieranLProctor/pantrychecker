<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index(): Response
    {
        $notifications = User::find(Auth::User()->id)->getAllNotifications;

        return view('notifications.index', ['notifications' => $notifications]);
    }

    public function create(): Response
    {
        //
    }

    public function store(Request $request): Response
    {
        //
    }

    public function show(Notification $notification): Response
    {
        //
    }

    public function edit(Notification $notification): Response
    {
        //
    }

    public function update(Request $request, Notification $notification): Response
    {
        //
    }

    public function destroy(Notification $notification): Response
    {
        //
    }
}
