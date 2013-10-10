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

interface AuthSpaceInterface
{
    /**
     * Get the code of the authspace.
     *
     * @return string The code of the authspace.
     */
    function getCode();

    /**
     * Set the code of the authspace.
     *
     * @param string $code The code of the authspace.
     *
     * @return AuthSpaceInterface This.
     */
    function setCode($code);

    /**
     * Get the name of the authspace.
     *
     * @return string The name of the authspace.
     */
    function getName();

    /**
     * Set the name of the authspace.
     *
     * @param string $name The name of the authspace.
     *
     * @return AuthSpaceInterface This.
     */
    function setName($name);
}
