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

namespace WellCommerce\AppBundle\Tests\Manager\Admin;

use WellCommerce\CoreBundle\Test\Manager\Admin\AbstractAdminManagerTestCase;

/**
 * Class ClientGroupManagerTest
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ClientGroupManagerTest extends AbstractAdminManagerTestCase
{
    protected function get()
    {
        return $this->container->get('client_group.manager.admin');
    }

    protected function getServiceClassName()
    {
        return 'WellCommerce\AppBundle\Manager\Admin\ClientGroupManager';
    }

    protected function getFormBuilderClassName()
    {
        return 'WellCommerce\AppBundle\Form\Admin\ClientGroupFormBuilder';
    }

    protected function getDataGridClassName()
    {
        return 'WellCommerce\AppBundle\DataGrid\ClientGroupDataGrid';
    }

    protected function getRepositoryInterfaceName()
    {
        return 'WellCommerce\AppBundle\Repository\ClientGroupRepositoryInterface';
    }
}
