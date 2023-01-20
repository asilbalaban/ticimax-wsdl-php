<?php
/**
 * File for class TicimaxStructAsortiMiktar
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructAsortiMiktar originally named AsortiMiktar
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructAsortiMiktar extends TicimaxWsdlClass
{
    /**
     * The Adet
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $Adet;
    /**
     * The EkSecenekTanim
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $EkSecenekTanim;
    /**
     * The GrupID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $GrupID;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $ID;
    /**
     * Constructor method for AsortiMiktar
     * @see parent::__construct()
     * @param int $_adet
     * @param string $_ekSecenekTanim
     * @param int $_grupID
     * @param int $_iD
     * @return TicimaxStructAsortiMiktar
     */
    public function __construct($_adet = NULL,$_ekSecenekTanim = NULL,$_grupID = NULL,$_iD = NULL)
    {
        parent::__construct(array('Adet'=>$_adet,'EkSecenekTanim'=>$_ekSecenekTanim,'GrupID'=>$_grupID,'ID'=>$_iD),false);
    }
    /**
     * Get Adet value
     * @return int|null
     */
    public function getAdet()
    {
        return $this->Adet;
    }
    /**
     * Set Adet value
     * @param int $_adet the Adet
     * @return int
     */
    public function setAdet($_adet)
    {
        return ($this->Adet = $_adet);
    }
    /**
     * Get EkSecenekTanim value
     * @return string|null
     */
    public function getEkSecenekTanim()
    {
        return $this->EkSecenekTanim;
    }
    /**
     * Set EkSecenekTanim value
     * @param string $_ekSecenekTanim the EkSecenekTanim
     * @return string
     */
    public function setEkSecenekTanim($_ekSecenekTanim)
    {
        return ($this->EkSecenekTanim = $_ekSecenekTanim);
    }
    /**
     * Get GrupID value
     * @return int|null
     */
    public function getGrupID()
    {
        return $this->GrupID;
    }
    /**
     * Set GrupID value
     * @param int $_grupID the GrupID
     * @return int
     */
    public function setGrupID($_grupID)
    {
        return ($this->GrupID = $_grupID);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructAsortiMiktar
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
