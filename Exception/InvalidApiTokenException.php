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
 * InvalidApiTokenException is thrown if a Client cannot be found by its API token.
 *
 * @author Thomas Prelot
 */
class InvalidApiTokenException extends AuthenticationException
{
    /**
     * {@inheritDoc}
     */
    public function getMessageKey()
    {
        return 'Invalid API token.';
    }
}
