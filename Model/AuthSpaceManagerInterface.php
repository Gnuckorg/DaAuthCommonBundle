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
 * AuthSpaceManagerInterface is the interface that a class
 * should implement to be used as an authspace manager.
 *
 * @author Thomas Prelot
 */
interface AuthSpaceManagerInterface
{
    /**
     * Find an authspace by one of its unique field.
	 *
     * @param array $criteria The criteria for the search.
     *
     * @return AuthSpaceInterface The authspace.
     */
    function findAuthSpaceBy(array $criteria);
}
