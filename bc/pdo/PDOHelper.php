<?php
/**
 * User: inpu
 * Date: 25.12.13
 * Time: 21:43
 */

namespace bc\pdo;

use bc\Config\ConfigManager;
use PDO;

class PDOHelper {

    private static $PDO = null;

    /**
     * @return \PDO
     */
    public static function getPDO() {
        if(is_null(self::$PDO)) {
            $cfg = ConfigManager::get('config/pdo.json');
            self::$PDO = new PDO(
                $cfg->get('dsn'), $cfg->get('user'), $cfg->get('password')
            );

            self::$PDO->query('SET NAMES '.$cfg->get('encoding'));

            self::$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$PDO;
    }
} 