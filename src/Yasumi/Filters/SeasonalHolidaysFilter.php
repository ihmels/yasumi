<?php

declare(strict_types=1);
/*
 * This file is part of the Yasumi package.
 *
 * Copyright (c) 2015 - 2023 AzuyaLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Sacha Telgenhof <me at sachatelgenhof dot com>
 */

namespace Yasumi\Filters;

use Yasumi\Holiday;

/**
 * OfficialHolidaysFilter is a class that returns all holidays that are considered seasonal of any given holiday
 * provider.
 *
 * Example usage:
 * $holidays = Yasumi::create('Netherlands', 2015);
 * $seasonal = new SeasonalHolidaysFilter($holidays->getIterator());
 */
class SeasonalHolidaysFilter extends AbstractFilter
{
    public function accept(): bool
    {
        return Holiday::TYPE_SEASON === $this->getInnerIterator()->current()->getType();
    }
}
