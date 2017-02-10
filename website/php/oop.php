<?php
class test{
    public static $kaassoort;
    public $kaas;
    public function __construct($username){
        $this->username = $username;
    }
    public function getcheese(){
        return $this->kaas;
    }

    static function setKaas($kaas){
        self::$kaassoort = $kaas;
    }
    static function getKaas(){
        return self::$kaassoort;
    }
}
$test = new test();
echo $test->getcheese();
test::setKaas("Oudekaas");
echo test::getKaas();
 ?>
