<?php

class CryptTest extends  PHPUnit_Framework_TestCase
{
    public function testEncrypt()
    {
        echo __DIR__;
        $string = md5(time());
        $encode = Crypt::encrypt($string);

        $decode = Crypt::decrypt($encode);

        $this->assertTrue($string === $decode);
    }
}