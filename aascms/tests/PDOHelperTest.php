<?php
/**
 * User: inpu
 * Date: 25.12.13
 * Time: 21:56
 */

namespace aascms\tests\PDO;

use aascms\PDO\PDOHelper;

class PDOHelperTest extends \PHPUnit_Framework_TestCase {

    public function testPDO() {
        $pdo = PDOHelper::getPDO();
        $this->assertInstanceOf('\\PDO', $pdo);

        $stmt = $pdo->prepare("SHOW TABLES");
        $stmt->execute();
        $this->assertGreaterThan(0, count($stmt->fetchAll()));
    }

}
 