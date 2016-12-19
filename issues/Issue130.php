<?php

namespace Tonic;

/**
 *
 * @uri /issue130/{id}
 */
class Issue130 extends ApiResource {

    /**
     * @method GET
     */
    function handle($id)
    {
        return $id;
    }

}