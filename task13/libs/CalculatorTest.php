<?php

include "Calculator.php";

class CalcTest extends PHPUnit_Framework_TestCase 
{

	/** Tests For SetNum1 **/
	public function testSetNum1_Int()
	{
		$calc = new Calculator;
		$this->assertEquals(true, $calc->setNum1(200));
	}

	public function testSetNum1_Float()
	{
		$calc = new Calculator;
		$this->assertEquals(true, $calc->setNum1(12.23));
	}

	public function testSetNum1_String()
	{
		$calc = new Calculator;
		$this->assertEquals(false, $calc->setNum1('hello'));
	}

	public function testSetNum1_Array()
	{
		$calc = new Calculator;
		$this->assertEquals(false, $calc->setNum1([23, 'some', 'test', false]));
	}

	public function testSetNum1_Null()
	{
		$calc = new Calculator;
		$this->assertEquals(false, $calc->setNum1(null));
	}

	/** Tests For SetNum1 **/

	public function testSetNum2_Int()
	{
		$calc = new Calculator;
		$this->assertEquals(true, $calc->setNum2(200));
	}

	public function testSetNum2_Float()
	{
		$calc = new Calculator;
		$this->assertEquals(true, $calc->setNum2(12.23));
	}

	public function testSetNum2_String()
	{
		$calc = new Calculator;
		$this->assertEquals(false, $calc->setNum2('hello'));
	}

	public function testSetNum2_Array()
	{
		$calc = new Calculator;
		$this->assertEquals(false, $calc->setNum2([23, 'some', 'test', false]));
	}

	public function testSetNum2_Null()
	{
		$calc = new Calculator;
		$this->assertEquals(false, $calc->setNum2(null));
	}

	/** Tests For SetMemory **/

	public function testSetMemory_Int()
	{
		$calc = new Calculator;
		$this->assertEquals(true, $calc->setMemory(200));
	}

	public function testSetMemory_Float()
	{
		$calc = new Calculator;
		$this->assertEquals(true, $calc->setMemory(12.23));
	}

	public function testSetMemory_String()
	{
		$calc = new Calculator;
		$this->assertEquals(false, $calc->setMemory('hello'));
	}

	public function testSetMemory_Array()
	{
		$calc = new Calculator;
		$this->assertEquals(false, $calc->setMemory([23, 'some', 'test', false]));
	}

	public function testSetMemory_Null()
	{
		$calc = new Calculator;
		$this->assertEquals(false, $calc->setMemory(null));
	}

	/** Tests For MemoryPlus **/
	public function testMemoryPlus_noMemory()
	{
		$calc = new Calculator;
		$this->assertEquals(false, $calc->memoryPlus(200));
	}

	public function testMemoryPlus_Int()
	{
		$calc = new Calculator;
		$calc->setMemory(100);
		$this->assertEquals(125, $calc->memoryPlus(25));
	}

	public function testMemoryPlus_Float()
	{
		$calc = new Calculator;
		$calc->setMemory(100);
		$this->assertEquals(100.34, $calc->memoryPlus(0.34));
	}

	public function testMemoryPlus_String()
	{
		$calc = new Calculator;
		$calc->setMemory(100);
		$this->assertEquals(false, $calc->memoryPlus('I am string!'));
	}

	public function testMemoryPlus_Array()
	{
		$calc = new Calculator;
		$calc->setMemory(100);
		$this->assertEquals(false, $calc->memoryPlus([23, 'some', 'test', false]));
	}

	public function testMemoryPlus_Null()
	{
		$calc = new Calculator;
		$calc->setMemory(100);
		$this->assertEquals(false, $calc->memoryPlus(null));
	}

	/** Tests For MemoryMinus **/
	public function testMemoryMinus_noMemory()
	{
		$calc = new Calculator;
		$this->assertEquals(false, $calc->memoryMinus(200));
	}

	public function testMemoryMinus_Int()
	{
		$calc = new Calculator;
		$calc->setMemory(100);
		$this->assertEquals(75, $calc->memoryMinus(25));
	}

	public function testMemoryMinus_Float()
	{
		$calc = new Calculator;
		$calc->setMemory(100);
		$this->assertEquals(99.66, $calc->memoryMinus(0.34));
	}

	public function testMemoryMinus_String()
	{
		$calc = new Calculator;
		$calc->setMemory(100);
		$this->assertEquals(false, $calc->memoryMinus('I am string!'));
	}

	public function testMemoryMinus_Array()
	{
		$calc = new Calculator;
		$calc->setMemory(100);
		$this->assertEquals(false, $calc->memoryMinus([23, 'some', 'test', false]));
	}

	public function testMemoryMinus_Null()
	{
		$calc = new Calculator;
		$calc->setMemory(100);
		$this->assertEquals(false, $calc->memoryMinus(null));
	}

	/** Tests For sum **/
	public function testSum_Pos()
	{
		$calc = new Calculator;
		$calc->setNum1(10);
		$calc->setNum2(20);
		$this->assertEquals(30, $calc->sum());
	}

	public function testSum_Neg()
	{
		$calc = new Calculator;
		$calc->setNum1(-10);
		$calc->setNum2(-20);
		$this->assertEquals(-30, $calc->sum());
	}

	public function testSum_PosNeg()
	{
		$calc = new Calculator;
		$calc->setNum1(-10);
		$calc->setNum2(20);
		$this->assertEquals(10, $calc->sum());
	}

	public function testSum_IntFloat()
	{
		$calc = new Calculator;
		$calc->setNum1(10);
		$calc->setNum2(15.23);
		$this->assertEquals(25.23, $calc->sum());
	}

	public function testSum_FloatPos()
	{
		$calc = new Calculator;
		$calc->setNum1(10.12);
		$calc->setNum2(15.23);
		$this->assertEquals(25.35, $calc->sum());
	}

	public function testSum_FloatNeg()
	{
		$calc = new Calculator;
		$calc->setNum1(-10.12);
		$calc->setNum2(-15.23);
		$this->assertEquals(-25.35, $calc->sum());
	}

	public function testSum_FloatPosNeg()
	{
		$calc = new Calculator;
		$calc->setNum1(-10.12);
		$calc->setNum2(15.23);
		$this->assertEquals(5.11, $calc->sum());
	}

	/** Tests For substract **/
	public function testSubstract_Pos()
	{
		$calc = new Calculator;
		$calc->setNum1(10);
		$calc->setNum2(20);
		$this->assertEquals(-10, $calc->substract());
	}

	public function testSubstract_Neg()
	{
		$calc = new Calculator;
		$calc->setNum1(-10);
		$calc->setNum2(-20);
		$this->assertEquals(10, $calc->substract());
	}

	public function testSubstract_PosNeg()
	{
		$calc = new Calculator;
		$calc->setNum1(-10);
		$calc->setNum2(20);
		$this->assertEquals(-30, $calc->substract());
	}

	public function testSubstract_IntFloat()
	{
		$calc = new Calculator;
		$calc->setNum1(20);
		$calc->setNum2(15.23);
		$this->assertEquals(4.77, $calc->substract());
	}

	public function testSubstract_FloatPos()
	{
		$calc = new Calculator;
		$calc->setNum1(10.12);
		$calc->setNum2(15.23);
		$this->assertEquals(-5.11, $calc->substract());
	}

	public function testSubstract_FloatNeg()
	{
		$calc = new Calculator;
		$calc->setNum1(-10.12);
		$calc->setNum2(-15.23);
		$this->assertEquals(5.11, $calc->substract());
	}

	public function testSubstract_FloatPosNeg()
	{
		$calc = new Calculator;
		$calc->setNum1(-10.12);
		$calc->setNum2(15.23);
		$this->assertEquals(-25.35, $calc->substract());
	}

	/** Tests For multiply **/
	public function testMultiply_Pos()
	{
		$calc = new Calculator;
		$calc->setNum1(10);
		$calc->setNum2(20);
		$this->assertEquals(200, $calc->multiply());
	}

	public function testMultiply_Neg()
	{
		$calc = new Calculator;
		$calc->setNum1(-10);
		$calc->setNum2(-20);
		$this->assertEquals(200, $calc->multiply());
	}

	public function testMultiply_PosNeg()
	{
		$calc = new Calculator;
		$calc->setNum1(-10);
		$calc->setNum2(20);
		$this->assertEquals(-200, $calc->multiply());
	}

	public function testMultiply_IntFloat()
	{
		$calc = new Calculator;
		$calc->setNum1(10);
		$calc->setNum2(15.23);
		$this->assertEquals(152.3, $calc->multiply());
	}

	public function testMultiply_FloatPos()
	{
		$calc = new Calculator;
		$calc->setNum1(10.12);
		$calc->setNum2(15.23);
		$this->assertEquals(154.1276, $calc->multiply());
	}

	public function testMultiply_FloatNeg()
	{
		$calc = new Calculator;
		$calc->setNum1(-10.12);
		$calc->setNum2(-15.23);
		$this->assertEquals(154.1276, $calc->multiply());
	}

	public function testMultiply_FloatPosNeg()
	{
		$calc = new Calculator;
		$calc->setNum1(-10.12);
		$calc->setNum2(15.23);
		$this->assertEquals(-154.1276, $calc->multiply());
	}

	    /** Tests For division **/
    public function testDivision_Pos()
    {
        $calc = new Calculator;
        $calc->setNum1(100);
        $calc->setNum2(20);
        $this->assertEquals(5, $calc->division());
    }

    public function testDivision_Neg()
    {
        $calc = new Calculator;
        $calc->setNum1(-100);
        $calc->setNum2(-20);
        $this->assertEquals(5, $calc->division());
    }

    public function testDivision_PosNeg()
    {
        $calc = new Calculator;
        $calc->setNum1(-100);
        $calc->setNum2(20);
        $this->assertEquals(-5, $calc->division());
    }

    public function testDivision_IntFload()
    {
        $calc = new Calculator;
        $calc->setNum1(1523);
        $calc->setNum2(15.23);
        $this->assertEquals(100, $calc->division());
    }

    public function testDivision_FloatPos()
    {
        $calc = new Calculator;
        $calc->setNum1(152.3);
        $calc->setNum2(15.23);
        $this->assertEquals(10, $calc->division());
    }

    public function testDivision_FloatNeg()
    {
        $calc = new Calculator;
        $calc->setNum1(-152.3);
        $calc->setNum2(-15.23);
        $this->assertEquals(10, $calc->division());
    }

    public function testDivision_FloatPosNeg()
    {
        $calc = new Calculator;
        $calc->setNum1(-152.3);
        $calc->setNum2(15.23);
        $this->assertEquals(-10, $calc->division());
    }

    public function testDivision_Zero()
    {
        $calc = new Calculator;
        $calc->setNum1(10);
        $calc->setNum2(0);
        $this->assertEquals(false, $calc->division());
    }

    /** Tests for numConvert **/
    public function testNumConvert_Pos()
    {
        $calc = new Calculator;
        $calc->setNum1(25);
        $this->assertEquals(-25, $calc->numConvert());
    }

    public function testNumConvert_Neg()
    {
        $calc = new Calculator;
        $calc->setNum1(-25);
        $this->assertEquals(25, $calc->numConvert());
    }

    public function testNumConvert_Large()
    {
        $calc = new Calculator;
        $calc->setNum1(99999999);
        $this->assertEquals(-99999999, $calc->numConvert());
    }

    public function testNumConvert_FloatPos()
    {
        $calc = new Calculator;
        $calc->setNum1(25.23);
        $this->assertEquals(-25.23, $calc->numConvert());
    }

    public function testNumConvert_FloatNeg()
    {
        $calc = new Calculator;
        $calc->setNum1(-25.23);
        $this->assertEquals(25.23, $calc->numConvert());
    }

    /** Tests for Square Root **/
    public function testSquareRoot_Pos()
    {
        $calc = new Calculator;
        $calc->setNum1(9);
        $this->assertEquals(3, $calc->squareRoot());
    }

    public function testSquareRoot_Neg()
    {
        $calc = new Calculator;
        $calc->setNum1(-9);
        $this->assertEquals(false, $calc->squareRoot());
    }

    /** Test For GetPersent **/
    public function testGetPersent_Int()
	{
		$calc = new Calculator;
		$calc->setNum1(100);
		$this->assertEquals(25, $calc->getPercent(25));
	}

	public function testGetPersent_Float()
	{
		$calc = new Calculator;
		$calc->setNum1(100.25);
		$this->assertEquals(25.0625, $calc->getPercent(25));
	}

	public function testGetPersent_String()
	{
		$calc = new Calculator;
		$calc->setNum1(100);
		$this->assertEquals(false, $calc->getPercent('hello'));
	}

	public function testGetPersent_Array()
	{
		$calc = new Calculator;
		$calc->setNum1(100);
		$this->assertEquals(false, $calc->getPercent([23, 'some', 'test', false]));
	}

	public function testGetPersent_Null()
	{
		$calc = new Calculator;
		$calc->setNum1(100);
		$this->assertEquals(false, $calc->getPercent(null));
	}

	/** Tests For oneDivide **/
	public function testOneDivide_Int()
	{
		$calc = new Calculator;
		$calc->setNum1(10);
		$this->assertEquals(0.1, $calc->oneDivide());
	}

	public function testOneDivide_Float()
	{
		$calc = new Calculator;
		$calc->setNum1(2.5);
		$this->assertEquals(0.4, $calc->oneDivide());
	}
}
