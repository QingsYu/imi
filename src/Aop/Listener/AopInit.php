<?php

declare(strict_types=1);

namespace Imi\Aop\Listener;

use Imi\Aop\AopAnnotationLoader;
use Imi\Bean\Annotation\Listener;
use Imi\Event\EventParam;
use Imi\Event\IEventListener;

/**
 * @Listener(eventName="IMI.LOAD_RUNTIME_INFO")
 */
class AopInit implements IEventListener
{
    /**
     * 事件处理方法.
     *
     * @param EventParam $e
     *
     * @return void
     */
    public function handle(EventParam $e)
    {
        AopAnnotationLoader::load(null, false);
    }
}
