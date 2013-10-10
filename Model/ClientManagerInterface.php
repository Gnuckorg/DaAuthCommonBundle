<?php

/**
 * This file is part of the Da Project.
 *
 * (c) Thomas Prelot <tprelot@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Da\AuthCommonBundle\Model;

/**
 * ClientManagerInterface is the interface that a class
 * should implement to be used as a client manager.
 *
 * @author Thomas Prelot
 */
interface ClientManagerInterface
{
    /**
     * Retrieve a client from its API token.
	 *
     * @param string $apiToken The API token.
     *
     * @return ClientInterface The client.
     *
     * @throws \Da\AuthCommonBundle\Exception\InvalidApiTokenException If no client corresponds to the API token.
     */
    function retrieveClientFromApiToken($apiToken);
}
