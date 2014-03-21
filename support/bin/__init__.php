<?php

/* - (Initialize) ---------------------------------- */
class __init__
{

    /**
     * 1. Get a URL, route it to a controller and let
     *     the controller deal with it from that
     *     moment onward.
     */
    public function __construct()
    {
        __init__::setController();
    }

}

?>