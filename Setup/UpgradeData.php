<?php
/**
 * Created by PhpStorm.
 * User: Igor
 * Date: 08.12.2016
 * Time: 22:12
 */

namespace Byjuno\ByjunoCore\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
/**
 * @codeCoverageIgnore
 */
class UpgradeData implements UpgradeDataInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if(!$context->getVersion()) {
            //no previous version found, installation, InstallSchema was just executed
            //be careful, since everything below is true for installation !
        }

        if (version_compare($context->getVersion(), '1.0.1') < 0) {
            //code to upgrade to 1.0.1
            //no changes
        }
        if (version_compare($context->getVersion(), '1.0.2') < 0) {
            //code to upgrade to 1.0.2
            //no changes
        }
        if (version_compare($context->getVersion(), '1.0.3') < 0) {
            //code to upgrade to 1.0.3
            //no changes
        }
        if (version_compare($context->getVersion(), '1.0.4') < 0) {
            //code to upgrade to 1.0.4
            //no changes
        }
        if (version_compare($context->getVersion(), '1.0.5') < 0) {
            //code to upgrade to 1.0.5
            //no changes
        }
        if (version_compare($context->getVersion(), '1.0.6') < 0) {
            //code to upgrade to 1.0.6
            //no changes
        }
        if (version_compare($context->getVersion(), '1.0.7') < 0) {
            //code to upgrade to 1.0.7
            //no changes
        }
        if (version_compare($context->getVersion(), '1.0.8') < 0) {
            //code to upgrade to 1.0.8
            //no changes
        }
        if (version_compare($context->getVersion(), '1.0.9') < 0) {
            //code to upgrade to 1.0.9
            //no changes
        }
        if (version_compare($context->getVersion(), '1.1.0') < 0) {
            //code to upgrade to 1.1.0
            //no changes
        }
        if (version_compare($context->getVersion(), '1.1.1') < 0) {
            //code to upgrade to 1.1.1
            //no changes
        }
        if (version_compare($context->getVersion(), '1.1.2') < 0) {
            //code to upgrade to 1.1.2
            //no changes
        }
        if (version_compare($context->getVersion(), '1.2.0') < 0) {
            //code to upgrade to 1.2.0
            //no changes
        }


        $setup->endSetup();
    }
}