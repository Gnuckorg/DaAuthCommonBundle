<?php

namespace Da\AuthCommonBundle\Security;

/**
 * The interface that a class should implements to be
 * used as an authorization refresher.
 *
 * @author Thomas Prelot <tprelot@gmail.com>
 */
interface AuthorizationRefresherInterface
{
    /**
     * Refresh the authorization of the user.
     */
    function refresh();
}