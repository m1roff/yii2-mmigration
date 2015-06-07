<?php
/**
 * Helper for default migration of Yii2
 *
 * @author Jasur Mirkhamidov <mirkhamidov.jasur@sgmail.com>
 * @copyright 2015, Jasur Mirkhamidov
 * @license GPL2.0
 * @version 0.1.0
 * @link https://github.com/mirkhamidov/yii2-mmigration
 */

namespace miroff\db;

use yii\db\Migration;

class MMigration extends Migration
{
    /**
     * @var string An alias to choose sub-migrations
     * @access protected
     */
    protected $inPath;

    /**
     * @var Array An array of sub-migrations (just file-class names)
     * @access protected
     */
    protected $subMigrations;

    const SUBUP   = 'up';
    const SUBDOWN = 'down';

    protected function upSub($aliasOfPath, &$migrationsList)
    {
        $this->runSubMigrate(self::SUBUP, $aliasOfPath, $migrationsList);
    }

    protected function downSub($aliasOfPath, &$migrationsList)
    {
        $this->runSubMigrate(self::SUBDOWN, $aliasOfPath, $migrationsList);
    }

    /**
     * Run Sub Migration
     * @access private
     * @param string $type
     * @param string $aliasOfPath
     * @param Array $migrationsList
     * 
     */
    private function runSubMigrate($type, $aliasOfPath, &$migrationsList)
    {

    }
}