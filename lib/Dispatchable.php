<?php

namespace Ttshop\Event;

interface Dispatchable
{
    public function onDispatch(EventArgument $arg);
}
