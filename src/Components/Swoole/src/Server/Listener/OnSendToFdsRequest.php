<?php

declare(strict_types=1);

namespace Imi\Swoole\Server\Listener;

use Imi\Bean\Annotation\Listener;
use Imi\Event\EventParam;
use Imi\Event\IEventListener;
use Imi\Swoole\Server\Server;

/**
 * 发送给指定连接-请求
 *
 * @Listener(eventName="IMI.PIPE_MESSAGE.sendToFdsRequest")
 */
class OnSendToFdsRequest implements IEventListener
{
    /**
     * 事件处理方法.
     */
    public function handle(EventParam $e): void
    {
        $eData = $e->getData();
        $data = $eData['data'];
        $result = Server::sendRaw($data['data'], $data['fds'], $data['serverName'], false);
        if ($data['needResponse'] ?? true)
        {
            Server::sendMessage('sendToFdsResponse', [
                'messageId' => $data['messageId'],
                'result'    => $result,
            ], $eData['workerId']);
        }
    }
}
