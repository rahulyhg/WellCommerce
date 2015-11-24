<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\AppBundle\Tests\Factory;

use WellCommerce\CoreBundle\Test\Factory\AbstractFactoryTestCase;

/**
 * Class ClientGroupFactoryTest
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ClientGroupFactoryTest extends AbstractFactoryTestCase
{
    protected function getFactoryService()
    {
        return $this->container->get('client_group.factory');
    }

    protected function getExpectedInterface()
    {
        return 'WellCommerce\AppBundle\Entity\ClientGroupInterface';
    }
}
