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
 * UserManagerInterface is the interface that a class
 * should implement to be used as a user manager.
 *
 * @author Thomas Prelot
 */
interface UserManagerInterface
{
    /**
     * Retrieve a user from its current access token.
	 *
     * @param string $accessToken The access token.
     *
     * @return UserInterface The user.
     *
     * @throws \Da\AuthCommonBundle\Exception\InvalidAccessTokenException If no user corresponds to the API token.
     */
    function retrieveUserFromAccessToken($accessToken);
}
