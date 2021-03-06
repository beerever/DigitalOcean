<?php

/**
 * This file is part of the DigitalOcean library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DigitalOcean\SSHKeys;

/**
 * SSHKeysActions class.
 *
 * @author Antoine Corcy <contact@sbin.dk>
 */
class SSHKeysActions
{
    /**
     * Available actions.
     *
     * @var string
     */
    const ACTION_ADD     = 'new';
    const ACTION_EDIT    = 'edit';
    const ACTION_DESTROY = 'destroy';
}
