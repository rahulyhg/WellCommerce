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

namespace WellCommerce\AppBundle\Tests\DataGrid;

use WellCommerce\CoreBundle\Test\DataGrid\AbstractDataGridTestCase;

/**
 * Class PageDataGridTest
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class PageDataGridTest extends AbstractDataGridTestCase
{
    protected function get()
    {
        return $this->container->get('page.datagrid')->getInstance();
    }

    protected function getColumns()
    {
        return ['id', 'name', 'hierarchy', 'publish'];
    }
}
