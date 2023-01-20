<?php
/**
 * File for class TicimaxStructEkSecenekGrup
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructEkSecenekGrup originally named EkSecenekGrup
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructEkSecenekGrup extends TicimaxWsdlClass
{
    /**
     * The Degerler
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfEkSecenekDeger
     */
    public $Degerler;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $ID;
    /**
     * The Tanim
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Tanim;
    /**
     * The Tur
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var TicimaxEnumBLEnums_VaryasyonTuru
     */
    public $Tur;
    /**
     * Constructor method for EkSecenekGrup
     * @see parent::__construct()
     * @param TicimaxStructArrayOfEkSecenekDeger $_degerler
     * @param int $_iD
     * @param string $_tanim
     * @param TicimaxEnumBLEnums_VaryasyonTuru $_tur
     * @return TicimaxStructEkSecenekGrup
     */
    public function __construct($_degerler = NULL,$_iD = NULL,$_tanim = NULL,$_tur = NULL)
    {
        parent::__construct(array('Degerler'=>($_degerler instanceof TicimaxStructArrayOfEkSecenekDeger)?$_degerler:new TicimaxStructArrayOfEkSecenekDeger($_degerler),'ID'=>$_iD,'Tanim'=>$_tanim,'Tur'=>$_tur),false);
    }
    /**
     * Get Degerler value
     * @return TicimaxStructArrayOfEkSecenekDeger|null
     */
    public function getDegerler()
    {
        return $this->Degerler;
    }
    /**
     * Set Degerler value
     * @param TicimaxStructArrayOfEkSecenekDeger $_degerler the Degerler
     * @return TicimaxStructArrayOfEkSecenekDeger
     */
    public function setDegerler($_degerler)
    {
        return ($this->Degerler = $_degerler);
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $_iD the ID
     * @return int
     */
    public function setID($_iD)
    {
        return ($this->ID = $_iD);
    }
    /**
     * Get Tanim value
     * @return string|null
     */
    public function getTanim()
    {
        return $this->Tanim;
    }
    /**
     * Set Tanim value
     * @param string $_tanim the Tanim
     * @return string
     */
    public function setTanim($_tanim)
    {
        return ($this->Tanim = $_tanim);
    }
    /**
     * Get Tur value
     * @return TicimaxEnumBLEnums_VaryasyonTuru|null
     */
    public function getTur()
    {
        return $this->Tur;
    }
    /**
     * Set Tur value
     * @uses TicimaxEnumBLEnums_VaryasyonTuru::valueIsValid()
     * @param TicimaxEnumBLEnums_VaryasyonTuru $_tur the Tur
     * @return TicimaxEnumBLEnums_VaryasyonTuru
     */
    public function setTur($_tur)
    {
        if(!TicimaxEnumBLEnums_VaryasyonTuru::valueIsValid($_tur))
        {
            return false;
        }
        return ($this->Tur = $_tur);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructEkSecenekGrup
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
