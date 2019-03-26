<?

class Calculator 
{
    private $num1;
    private $num2;

    function __construct ()
    {
        $this->num1 = NULL;
        $this->num2 = NULL;
    }

    function setNum1 ($number1)
    {
        if (is_numeric($number1))
        {
            $this->num1 = $number1;
            return true;
        } else {
            echo ERR_NAN;
            return false;
        }
    }

    function getNum1 ()
    {
        if ($this -> num1 != NULL)
        {
            return $this -> num1;
        }
        echo ERR_NUM1;
        return false;
    }

    function setNum2 ($number2)
    {
        if (is_numeric($number2))
        {
            $this->num2 = $number2;
            return true;
        } else {
            echo ERR_NAN;
            return false;
        }
    }

    function getNum2 ()
    {
        if ($this -> num2 != NULL)
        {
            return $this -> num2;
        }
        echo ERR_NUM2;
        return false;
    }

    function sum ()
    {
        
        if (!$this -> num1)
        {
            echo ERR_NUM1;
            return false;
        }

        if (!$this -> num2)
        {
            echo ERR_NUM2;
            return false;
        }

        return $this -> num1 + $this -> num2;
    }

    function substraction ()
    {
        if (!$this -> num1)
        {
            echo ERR_NUM1;
            return false;
        }

        if (!$this -> num2)
        {
            echo ERR_NUM2;
            return false;
        }

        return $this -> num1 - $this -> num2;
    }
}