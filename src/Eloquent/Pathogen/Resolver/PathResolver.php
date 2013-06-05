<?php

/*
 * This file is part of the Pathogen package.
 *
 * Copyright © 2013 Erin Millard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eloquent\Pathogen\Resolver;

use Eloquent\Pathogen\AbsolutePathInterface;
use Eloquent\Pathogen\PathInterface;

/**
 * A path resolver suitable for resolving generic, Unix-style paths.
 */
class PathResolver implements PathResolverInterface
{
    /**
     * Resolve a path against a given base path.
     *
     * @param AbsolutePathInterface $basePath The base path.
     * @param PathInterface         $path     The path to resolve.
     *
     * @return AbsolutePathInterface The resolved path.
     */
    public function resolve(
        AbsolutePathInterface $basePath,
        PathInterface $path
    ) {
        if ($path instanceof AbsolutePathInterface) {
            return $path;
        }

        return $basePath->join($path);
    }
}
