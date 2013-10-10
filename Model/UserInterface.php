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

interface UserInterface
{
    /**
     * Get the username of the user.
     *
     * @return string
     */
    public function getUsername();

    /**
     * Set the username of the user.
     *
     * @param string $username The username.
     *
     * @return UserInterface This.
     */
    public function setUsername($username);

    /**
     * Get the email of the user.
     *
     * @return string
     */
    public function getEmail();

    /**
     * Set the email of the user.
     *
     * @param string $email The email.
     *
     * @return UserInterface This.
     */
    public function setEmail($email);

    /**
     * Get the authspace of the user.
     *
     * @return AuthSpaceInterface The authspace.
     */
    public function getAuthSpace();

    /**
     * Set the authspace of the user.
     *
     * @param AuthSpaceInterface $authspace The authspace.
     *
     * @return UserInterface This.
     */
    public function setAuthSpace(AuthSpaceInterface $authSpace);

    /**
     * Get the raw data of the user.
     *
     * @return string The raw data.
     */
    public function getRaw();

    /**
     * Set the raw data of the user.
     *
     * @param string $raw The raw data.
     *
     * @return UserInterface This.
     */
    public function setRaw($raw);

    /**
     * Get the interpreted raw data of the user.
     *
     * @return array The raw data.
     */
    public function getRawData();

    /**
     * Set the interpreted raw data of the user.
     *
     * @param array $raw The raw data.
     *
     * @return UserInterface This.
     */
    public function setRawData(array $raw);
}
