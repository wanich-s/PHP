<?php declare(strict_types=1);
    use PHPUnit\Framework\TestCase;    
    use App\Calculator;

class CalculatorTest extends TestCase {
        public function testAdd() {
            $calculator = new Calculator;
            $result = $calculator->add(20, 5);
            $this->assertEquals(25, $result);
        }
    }
?>