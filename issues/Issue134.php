<?php

namespace Tonic;

/**
 *
 * @uri /issue134/nocache
 */
class Issue134NoCache extends ApiResource {

    /**
     * @method GET
     * @cache 0
     */
    function handle()
    {
        return 'nocache';
    }

}

/**
 *
 * @uri /issue134/cache
 */
class Issue134Cache extends ApiResource {

    /**
     * @method GET
     * @cache 10
     */
    function handle()
    {
        return 'cache';
    }

}