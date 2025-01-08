<?php

namespace Webpacks\Blog\Listeners;

use Webpacks\Blog\Events\BlogEvent;

class BlogEventListener
{
    public function handle(BlogEvent $event)
    {
        // Handle the event logic
        \Log::info('Event handled with data: ' . $event->data);
    }
}
