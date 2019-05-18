<?

class Calculator 
{
    private $num1;
    private $num2;
    private $memory;

    function __construct ()
    {
        $this->num1 = NULL;
        $this->num2 = NULL;
        $this->memory = NULL;
    }

    public function setNum1 ($number1)
    {
        if (is_numeric($number1))
        {
            $this->num1 = $number1;
            return true;
        } 
        return false;
    }

    public function getNum1 ()
    {
        if ($this->num1 != NULL)
        {
            return $this->num1;
        }
        return false;
    }

    public function setNum2 ($number2)
    {
        if (is_numeric($number2))
        {
            $this->num2 = $number2;
            return true;
        }
        return false;
    }

    public function getNum2 ()
    {
        if ($this->num2 != NULL)
        {
            return $this->num2;
        }
        return false;
    }

    public function numsClear()
    {
        $this->num1 = 0;
        $this->num2 = 0;
        return true;
    }

    private function numsChecker()
    {
        if (!$this->num1)
        {
            return false;
        }

        if (!$this->num2)
        {
            return false;
        }
        return true;
    }

    public function setMemory($val)
    {
        if($val and is_numeric($val))
        {
            $this->memory = $val;
            return true;
        }
        return false;
    }

    public function getMemory ()
    {
        if ($this->memory != NULL)
        {
            return $this->memory;
        }
        return false;
    }

    public function memoryClear()
    {
        $this->memory = NULL;
        return "Cleared";
    }

    public function memoryPlus($val)
    {
        if ($this->memory and is_numeric($val))
        {
            return $this->memory += $val;
        }
        return false;
    }

    public function memoryMinus($val)
    {
        if ($this->memory and is_numeric($val))
        {
            return $this->memory -= $val;
        }
        return false;
    }

    public function sum ()
    {
        if ($this->numsChecker())
        {
            return $this->num1 + $this->num2;
        }
        return false;
    }

    public function substract ()
    {
        if ($this->numsChecker())
        {
            return $this->num1 - $this->num2;
        }
        return false;
    }

    public function multiply ()
    {
        if ($this->numsChecker())
        {
            return $this->num1 * $this->num2;
        }
        return false;
    }

    public function division ()
    {
        if ($this->num1 == 0 and $this->num2 == 0)
        {
            return false;
        }
        if ($this->numsChecker())
        {
            return $this->num1 / $this->num2;
        }
        return false;
    }

    public function numConvert ()
    {
        if ($this->num1)
        {
            return $this->num1 = $this->num1 - ($this->num1 * 2);
        }
        return false;
    }

    public function squareRoot ()
    {
        if ($this->num1 and $this->num1 > 0)
        {
            return sqrt($this->num1);
        }
        return false;
    }

    public function getPercent ($val)
    {
        if ($this->num1 and is_numeric($val))
        {
            return $this->num1 * $val / 100;
        }
        return false;
    }

    public function oneDivide ()
    {
        if ($this->num1)
        {
            return 1 / $this->num1;
        }
        return false;
    }
}