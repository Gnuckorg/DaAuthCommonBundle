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

interface ClientInterface
{
    /**
     * Get the API token of the client.
     *
     * @return string The API token.
     */
    function getApiToken();

    /**
     * Set the API token of the client.
     *
     * @param string $apiKey The API token.
     *
     * @return ClientInterface This.
     */
    function setApiToken($apiToken);

    /**
     * Get the name of the client.
     *
     * @return string The name of the client.
     */
    function getName();

    /**
     * Set the name of the client.
     *
     * @param string $name The name of the client.
     *
     * @return ClientInterface This.
     */
    function setName($name);

    /**
     * Get the authorized scope of the client.
     *
     * @return string The scope.
     */
    function getScope();

    /**
     * Set the authorized scope of the client.
     *
     * @param string $scope The scope.
     *
     * @return ClientInterface This.
     */
    function setScope($scope);

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
     * @return ClientInterface This.
     */
    public function setAuthSpace(AuthSpaceInterface $authSpace);
}
