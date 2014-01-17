<?php
/**
 * User: inpu
 * Date: 25.12.13
 * Time: 21:56
 */

namespace bc\tests\pdo;

use bc\pdo\PDOHelper;

class PDOHelperTest extends \PHPUnit_Framework_TestCase {

    public function testPDO() {
        $pdo = PDOHelper::getPDO();
        $this->assertInstanceOf('\\pdo', $pdo);

        $stmt = $pdo->prepare("SHOW TABLES");
        $stmt->execute();
        $this->assertGreaterThan(0, count($stmt->fetchAll()));
    }

}
 