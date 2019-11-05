<?php
class Tower extends Builing {
    // 属性
    private $builtYear;
    //　コンストラクタ
    function __construct($name, $height, $bultYear) {
        barent::__construct($name ,$height); // chu them  --> ::
        $this->builtYear = $builtYear;
    }
    // あくせっさめそっど
    function setBuiltYear($Year) {
        $this->builtYear = $Year;
    }
    function  getBuiltyear() {
        return $this->builtYear;
    }
    //メソッド
    function getProfile(){
        $profile = "{$thisname}の高さは {$this->height} m、{$this->builtYear}年に開業しました";
        return $profile;
    }
}
?>