<?php

/*
 * Analysis class for playbook website
 * stores SWOT information
 * 11/8/20
 * @author Roldan Barbante
 * @version 1.0
 */


class Section6
{
    //Declare instance variables
    private $_answerID;
    private $_f1;
    private $_f2;
    private $_f3;
    private $_f3t;
    private $_f4;
    private $_f5;
    private $_f6;
    private $_f7;
    private $_f8;
    private $_f9;
    private $_f10;
    private $_f11;
    private $_f12;
    private $_f13;
    private $_f14;
    private $_f15;
    private $_f16;
    private $_f17;
    private $_f18;
    private $_f19;
    private $_f20;
    private $_f21;
    private $_f22;
    private $_f23;
    private $_f24;
    private $_f25;
    private $_f26;
    private $_f27;
    private $_f28;
    private $_f29;
    private $_f30;
    private $_f31;
    private $_f32;
    private $_f33;
    private $_f34;
    private $_f35;
    private $_f36;
    private $_f37;
    private $_f38;
    private $_f39;
    private $_f40;
    private $_f41;
    private $_f42;
    private $_f43;
    private $_f44;
    private $_f45;
    private $_f46;
    private $_f47a;
    private $_f47b;
    private $_f47c;
    private $_f47d;







    private $_userId;

    // constructor

    function __construct($f1, $f2, $f3, $f3t, $f4, $f5, $f6, $f7, $f8, $f9, $f10, $f11,
                         $f12, $f13, $f14, $f15, $f16, $f17, $f18, $f19, $f20, $f21, $f22,
                         $f23, $f24, $f25, $f26, $f27, $f28, $f29, $f30, $f31, $f32, $f33, $f34,
                         $f35, $f36, $f37, $f38, $f39, $f40, $f41, $f42, $f43, $f44, $f45, $f46,
                         $f47a, $f47b, $f47c, $f47d, $userId)
    {
        $this->_f1 = $f1;
        $this->_f2 = $f2;
        $this->_f3 = $f3;
        $this->_f3t = $f3t;
        $this->_f4 = $f4;
        $this->_f5 = $f5;
        $this->_f6 = $f6;
        $this->_f7 = $f7;
        $this->_f8 = $f8;
        $this->_f9 = $f9;
        $this->_f10 = $f10;
        $this->_f11 = $f11;
        $this->_f12 = $f12;
        $this->_f13 = $f13;
        $this->_f14 = $f14;
        $this->_f15 = $f15;
        $this->_f16 = $f16;
        $this->_f17 = $f17;
        $this->_f18 = $f18;
        $this->_f19 = $f19;
        $this->_f20 = $f20;
        $this->_f21 = $f21;
        $this->_f22 = $f22;
        $this->_f23 = $f23;
        $this->_f24 = $f24;
        $this->_f25 = $f25;
        $this->_f26 = $f26;
        $this->_f27 = $f27;
        $this->_f28 = $f28;
        $this->_f29 = $f29;
        $this->_f30 = $f30;
        $this->_f31 = $f31;
        $this->_f32 = $f32;
        $this->_f33 = $f33;
        $this->_f34 = $f34;
        $this->_f35 = $f35;
        $this->_f36 = $f36;
        $this->_f37 = $f37;
        $this->_f38 = $f38;
        $this->_f39 = $f39;
        $this->_f40 = $f40;
        $this->_f41 = $f41;
        $this->_f42 = $f42;
        $this->_f43 = $f43;
        $this->_f44 = $f44;
        $this->_f45 = $f45;
        $this->_f46 = $f46;
        $this->_f47a = $f47a;
        $this->_f47b = $f47b;
        $this->_f47c = $f47c;
        $this->_f47d = $f47d;

        $this->_userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getAnswerID()
    {
        return $this->_answerID;
    }

    /**
     * @param mixed $answerID
     */
    public function setAnswerID($answerID)
    {
        $this->_answerID = $answerID;
    }

    /**
     * @return mixed
     */
    public function getF1()
    {
        return $this->_f1;
    }

    /**
     * @param mixed $f1
     */
    public function setF1($f1)
    {
        $this->_f1 = $f1;
    }

    /**
     * @return mixed
     */
    public function getF2()
    {
        return $this->_f2;
    }

    /**
     * @param mixed $f2
     */
    public function setF2($f2)
    {
        $this->_f2 = $f2;
    }

    /**
     * @return mixed
     */
    public function getF3()
    {
        return $this->_f3;
    }

    /**
     * @param mixed $f3
     */
    public function setF3($f3)
    {
        $this->_f3 = $f3;
    }

    /**
     * @return mixed
     */
    public function getF3t()
    {
        return $this->_f3t;
    }

    /**
     * @param mixed $f3t
     */
    public function setF3t($f3t)
    {
        $this->_f3t = $f3t;
    }

    /**
     * @return mixed
     */
    public function getF4()
    {
        return $this->_f4;
    }

    /**
     * @param mixed $f4
     */
    public function setF4($f4)
    {
        $this->_f4 = $f4;
    }

    /**
     * @return mixed
     */
    public function getF5()
    {
        return $this->_f5;
    }

    /**
     * @param mixed $f5
     */
    public function setF5($f5)
    {
        $this->_f5 = $f5;
    }

    /**
     * @return mixed
     */
    public function getF6()
    {
        return $this->_f6;
    }

    /**
     * @param mixed $f6
     */
    public function setF6($f6)
    {
        $this->_f6 = $f6;
    }

    /**
     * @return mixed
     */
    public function getF7()
    {
        return $this->_f7;
    }

    /**
     * @param mixed $f7
     */
    public function setF7($f7)
    {
        $this->_f7 = $f7;
    }

    /**
     * @return mixed
     */
    public function getF8()
    {
        return $this->_f8;
    }

    /**
     * @param mixed $f8
     */
    public function setF8($f8)
    {
        $this->_f8 = $f8;
    }

    /**
     * @return mixed
     */
    public function getF9()
    {
        return $this->_f9;
    }

    /**
     * @param mixed $f9
     */
    public function setF9($f9)
    {
        $this->_f9 = $f9;
    }

    /**
     * @return mixed
     */
    public function getF10()
    {
        return $this->_f10;
    }

    /**
     * @param mixed $f10
     */
    public function setF10($f10)
    {
        $this->_f10 = $f10;
    }

    /**
     * @return mixed
     */
    public function getF11()
    {
        return $this->_f11;
    }

    /**
     * @param mixed $f11
     */
    public function setF11($f11)
    {
        $this->_f11 = $f11;
    }

    /**
     * @return mixed
     */
    public function getF12()
    {
        return $this->_f12;
    }

    /**
     * @param mixed $f12
     */
    public function setF12($f12)
    {
        $this->_f12 = $f12;
    }

    /**
     * @return mixed
     */
    public function getF13()
    {
        return $this->_f13;
    }

    /**
     * @param mixed $f13
     */
    public function setF13($f13)
    {
        $this->_f13 = $f13;
    }

    /**
     * @return mixed
     */
    public function getF14()
    {
        return $this->_f14;
    }

    /**
     * @param mixed $f14
     */
    public function setF14($f14)
    {
        $this->_f14 = $f14;
    }

    /**
     * @return mixed
     */
    public function getF15()
    {
        return $this->_f15;
    }

    /**
     * @param mixed $f15
     */
    public function setF15($f15)
    {
        $this->_f15 = $f15;
    }

    /**
     * @return mixed
     */
    public function getF16()
    {
        return $this->_f16;
    }

    /**
     * @param mixed $f16
     */
    public function setF16($f16)
    {
        $this->_f16 = $f16;
    }

    /**
     * @return mixed
     */
    public function getF17()
    {
        return $this->_f17;
    }

    /**
     * @param mixed $f17
     */
    public function setF17($f17)
    {
        $this->_f17 = $f17;
    }

    /**
     * @return mixed
     */
    public function getF18()
    {
        return $this->_f18;
    }

    /**
     * @param mixed $f18
     */
    public function setF18($f18)
    {
        $this->_f18 = $f18;
    }

    /**
     * @return mixed
     */
    public function getF19()
    {
        return $this->_f19;
    }

    /**
     * @param mixed $f19
     */
    public function setF19($f19)
    {
        $this->_f19 = $f19;
    }

    /**
     * @return mixed
     */
    public function getF20()
    {
        return $this->_f20;
    }

    /**
     * @param mixed $f20
     */
    public function setF20($f20)
    {
        $this->_f20 = $f20;
    }

    /**
     * @return mixed
     */
    public function getF21()
    {
        return $this->_f21;
    }

    /**
     * @param mixed $f21
     */
    public function setF21($f21)
    {
        $this->_f21 = $f21;
    }

    /**
     * @return mixed
     */
    public function getF22()
    {
        return $this->_f22;
    }

    /**
     * @param mixed $f22
     */
    public function setF22($f22)
    {
        $this->_f22 = $f22;
    }

    /**
     * @return mixed
     */
    public function getF23()
    {
        return $this->_f23;
    }

    /**
     * @param mixed $f23
     */
    public function setF23($f23)
    {
        $this->_f23 = $f23;
    }

    /**
     * @return mixed
     */
    public function getF24()
    {
        return $this->_f24;
    }

    /**
     * @param mixed $f24
     */
    public function setF24($f24)
    {
        $this->_f24 = $f24;
    }

    /**
     * @return mixed
     */
    public function getF25()
    {
        return $this->_f25;
    }

    /**
     * @param mixed $f25
     */
    public function setF25($f25)
    {
        $this->_f25 = $f25;
    }

    /**
     * @return mixed
     */
    public function getF26()
    {
        return $this->_f26;
    }

    /**
     * @param mixed $f26
     */
    public function setF26($f26)
    {
        $this->_f26 = $f26;
    }

    /**
     * @return mixed
     */
    public function getF27()
    {
        return $this->_f27;
    }

    /**
     * @param mixed $f27
     */
    public function setF27($f27)
    {
        $this->_f27 = $f27;
    }

    /**
     * @return mixed
     */
    public function getF28()
    {
        return $this->_f28;
    }

    /**
     * @param mixed $f28
     */
    public function setF28($f28)
    {
        $this->_f28 = $f28;
    }

    /**
     * @return mixed
     */
    public function getF29()
    {
        return $this->_f29;
    }

    /**
     * @param mixed $f29
     */
    public function setF29($f29)
    {
        $this->_f29 = $f29;
    }

    /**
     * @return mixed
     */
    public function getF30()
    {
        return $this->_f30;
    }

    /**
     * @param mixed $f30
     */
    public function setF30($f30)
    {
        $this->_f30 = $f30;
    }

    /**
     * @return mixed
     */
    public function getF31()
    {
        return $this->_f31;
    }

    /**
     * @param mixed $f31
     */
    public function setF31($f31)
    {
        $this->_f31 = $f31;
    }

    /**
     * @return mixed
     */
    public function getF32()
    {
        return $this->_f32;
    }

    /**
     * @param mixed $f32
     */
    public function setF32($f32)
    {
        $this->_f32 = $f32;
    }

    /**
     * @return mixed
     */
    public function getF33()
    {
        return $this->_f33;
    }

    /**
     * @param mixed $f33
     */
    public function setF33($f33)
    {
        $this->_f33 = $f33;
    }

    /**
     * @return mixed
     */
    public function getF34()
    {
        return $this->_f34;
    }

    /**
     * @param mixed $f34
     */
    public function setF34($f34)
    {
        $this->_f34 = $f34;
    }

    /**
     * @return mixed
     */
    public function getF35()
    {
        return $this->_f35;
    }

    /**
     * @param mixed $f35
     */
    public function setF35($f35)
    {
        $this->_f35 = $f35;
    }

    /**
     * @return mixed
     */
    public function getF36()
    {
        return $this->_f36;
    }

    /**
     * @param mixed $f36
     */
    public function setF36($f36)
    {
        $this->_f36 = $f36;
    }

    /**
     * @return mixed
     */
    public function getF37()
    {
        return $this->_f37;
    }

    /**
     * @param mixed $f37
     */
    public function setF37($f37)
    {
        $this->_f37 = $f37;
    }

    /**
     * @return mixed
     */
    public function getF38()
    {
        return $this->_f38;
    }

    /**
     * @param mixed $f38
     */
    public function setF38($f38)
    {
        $this->_f38 = $f38;
    }

    /**
     * @return mixed
     */
    public function getF39()
    {
        return $this->_f39;
    }

    /**
     * @param mixed $f39
     */
    public function setF39($f39)
    {
        $this->_f39 = $f39;
    }

    /**
     * @return mixed
     */
    public function getF40()
    {
        return $this->_f40;
    }

    /**
     * @param mixed $f40
     */
    public function setF40($f40)
    {
        $this->_f40 = $f40;
    }

    /**
     * @return mixed
     */
    public function getF41()
    {
        return $this->_f41;
    }

    /**
     * @param mixed $f41
     */
    public function setF41($f41)
    {
        $this->_f41 = $f41;
    }

    /**
     * @return mixed
     */
    public function getF42()
    {
        return $this->_f42;
    }

    /**
     * @param mixed $f42
     */
    public function setF42($f42)
    {
        $this->_f42 = $f42;
    }

    /**
     * @return mixed
     */
    public function getF43()
    {
        return $this->_f43;
    }

    /**
     * @param mixed $f43
     */
    public function setF43($f43)
    {
        $this->_f43 = $f43;
    }

    /**
     * @return mixed
     */
    public function getF44()
    {
        return $this->_f44;
    }

    /**
     * @param mixed $f44
     */
    public function setF44($f44)
    {
        $this->_f44 = $f44;
    }

    /**
     * @return mixed
     */
    public function getF45()
    {
        return $this->_f45;
    }

    /**
     * @param mixed $f45
     */
    public function setF45($f45)
    {
        $this->_f45 = $f45;
    }

    /**
     * @return mixed
     */
    public function getF46()
    {
        return $this->_f46;
    }

    /**
     * @param mixed $f46
     */
    public function setF46($f46)
    {
        $this->_f46 = $f46;
    }

    /**
     * @return mixed
     */
    public function getF47a()
    {
        return $this->_f47a;
    }

    /**
     * @param mixed $f47a
     */
    public function setF47a($f47a)
    {
        $this->_f47a = $f47a;
    }

    /**
     * @return mixed
     */
    public function getF47b()
    {
        return $this->_f47b;
    }

    /**
     * @param mixed $f47b
     */
    public function setF47b($f47b)
    {
        $this->_f47b = $f47b;
    }

    /**
     * @return mixed
     */
    public function getF47c()
    {
        return $this->_f47c;
    }

    /**
     * @param mixed $f47c
     */
    public function setF47c($f47c)
    {
        $this->_f47c = $f47c;
    }

    /**
     * @return mixed
     */
    public function getF47d()
    {
        return $this->_f47d;
    }

    /**
     * @param mixed $f47d
     */
    public function setF47d($f47d)
    {
        $this->_f47d = $f47d;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->_userId = $userId;
    }
}