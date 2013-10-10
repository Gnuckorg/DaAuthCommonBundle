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
 * ApiTokenNotFoundException is thrown if an API token has not been sent 
 * in the request.
 *
 * @author Thomas Prelot
 */
class ApiTokenNotFoundException extends AuthenticationException
{
    /**
     * {@inheritDoc}
     */
    public function getMessageKey()
    {
        return 'API token not found.';
    }
}
