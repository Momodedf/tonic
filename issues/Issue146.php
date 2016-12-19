<?php

namespace Tonic;

/**
 *
 * @uri /issue146
 */
class Issue146 extends ApiResource {

    /**
     * @method GET
     */
    function handle()
    {
        return $this->request->xAuthentication;
    }

}