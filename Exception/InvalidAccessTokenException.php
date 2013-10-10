<?php

/**
 * This file is part of the Da Project.
 *
 * (c) Thomas Prelot <tprelot@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Da\AuthCommonBundle\Exception;

use Symfony\Component\Security\Core\Exception\AuthenticationException;

/**
 * InvalidAccessTokenException is thrown if a User cannot be found by its access token (oauth).
 *
 * @author Thomas Prelot
 */
class InvalidAccessTokenException extends AuthenticationException
{
    /**
     * {@inheritDoc}
     */
    public function getMessageKey()
    {
        return 'Invalid access token (oauth).';
    }
}
