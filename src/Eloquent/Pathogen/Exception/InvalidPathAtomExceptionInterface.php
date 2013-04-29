<?php

/*
 * This file is part of the Pathogen package.
 *
 * Copyright © 2013 Erin Millard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eloquent\Pathogen\Exception;

/**
 * An invalid path atom was supplied.
 */
interface InvalidPathAtomExceptionInterface
{
	/**
     * Returns the invalid path atom.
     *
     * @return string
     */
    public function atom();

    /**
     * @return string
     */
    public function reason();
}
