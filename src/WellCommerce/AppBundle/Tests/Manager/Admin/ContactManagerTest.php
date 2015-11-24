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
 * Class ContactManagerTest
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ContactManagerTest extends AbstractAdminManagerTestCase
{
    protected function get()
    {
        return $this->container->get('contact.manager.admin');
    }

    protected function getServiceClassName()
    {
        return \WellCommerce\AppBundle\Manager\Admin\ContactManager::class;
    }

    protected function getFormBuilderClassName()
    {
        return \WellCommerce\AppBundle\Form\Admin\ContactFormBuilder::class;
    }

    protected function getDataGridClassName()
    {
        return \WellCommerce\AppBundle\DataGrid\ContactDataGrid::class;
    }

    protected function getRepositoryInterfaceName()
    {
        return \WellCommerce\AppBundle\Repository\ContactRepositoryInterface::class;
    }
}
