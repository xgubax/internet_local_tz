<?php

namespace ChessApp\Listener;

use ChessDomain\Notifier\Event;
use ChessDomain\Notifier\ListenerInterface;

class AnyFigureListener implements ListenerInterface
{
    public function handle(Event $event)
    {
        echo 'Added figure to the board.', PHP_EOL;
    }
}
