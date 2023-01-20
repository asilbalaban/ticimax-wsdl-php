<?php
/**
 * File for class TicimaxStructVaryasyonOzellik
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructVaryasyonOzellik originally named VaryasyonOzellik
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructVaryasyonOzellik extends TicimaxWsdlClass
{
    /**
     * The Deger
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Deger;
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
     * The XmlKod
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $XmlKod;
    /**
     * Constructor method for VaryasyonOzellik
     * @see parent::__construct()
     * @param string $_deger
     * @param string $_tanim
     * @param TicimaxEnumBLEnums_VaryasyonTuru $_tur
     * @param string $_xmlKod
     * @return TicimaxStructVaryasyonOzellik
     */
    public function __construct($_deger = NULL,$_tanim = NULL,$_tur = NULL,$_xmlKod = NULL)
    {
        parent::__construct(array('Deger'=>$_deger,'Tanim'=>$_tanim,'Tur'=>$_tur,'XmlKod'=>$_xmlKod),false);
    }
    /**
     * Get Deger value
     * @return string|null
     */
    public function getDeger()
    {
        return $this->Deger;
    }
    /**
     * Set Deger value
     * @param string $_deger the Deger
     * @return string
     */
    public function setDeger($_deger)
    {
        return ($this->Deger = $_deger);
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
     * Get XmlKod value
     * @return string|null
     */
    public function getXmlKod()
    {
        return $this->XmlKod;
    }
    /**
     * Set XmlKod value
     * @param string $_xmlKod the XmlKod
     * @return string
     */
    public function setXmlKod($_xmlKod)
    {
        return ($this->XmlKod = $_xmlKod);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructVaryasyonOzellik
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
