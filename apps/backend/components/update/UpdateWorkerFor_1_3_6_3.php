<?php defined('MW_PATH') || exit('No direct script access allowed');

/**
 * UpdateWorkerFor_1_3_6_3
 *
 * @package MailWizz EMA
 * @author Serban George Cristian <cristian.serban@mailwizz.com>
 * @link http://www.mailwizz.com/
 * @copyright 2013-2016 MailWizz EMA (http://www.mailwizz.com)
 * @license http://www.mailwizz.com/license/
 * @since 1.3.6.3
 */

class UpdateWorkerFor_1_3_6_3 extends UpdateWorkerAbstract
{
    public function run()
    {
        // run the sql from file
        $this->runQueriesFromSqlFile('1.3.6.3');
        
        // enable the tour extension
        if (Yii::app()->extensionsManager->enableExtension('tour')) {
            Yii::app()->extensionsManager->getExtensionInstance('tour')->setOption('enabled', 'yes');
        }
    }
}
