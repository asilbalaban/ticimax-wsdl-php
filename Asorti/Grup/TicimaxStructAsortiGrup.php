<?php
/**
 * File for class TicimaxStructAsortiGrup
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructAsortiGrup originally named AsortiGrup
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructAsortiGrup extends TicimaxWsdlClass
{
    /**
     * The EkSecenekTipi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $EkSecenekTipi;
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
     * Constructor method for AsortiGrup
     * @see parent::__construct()
     * @param string $_ekSecenekTipi
     * @param int $_iD
     * @param string $_tanim
     * @return TicimaxStructAsortiGrup
     */
    public function __construct($_ekSecenekTipi = NULL,$_iD = NULL,$_tanim = NULL)
    {
        parent::__construct(array('EkSecenekTipi'=>$_ekSecenekTipi,'ID'=>$_iD,'Tanim'=>$_tanim),false);
    }
    /**
     * Get EkSecenekTipi value
     * @return string|null
     */
    public function getEkSecenekTipi()
    {
        return $this->EkSecenekTipi;
    }
    /**
     * Set EkSecenekTipi value
     * @param string $_ekSecenekTipi the EkSecenekTipi
     * @return string
     */
    public function setEkSecenekTipi($_ekSecenekTipi)
    {
        return ($this->EkSecenekTipi = $_ekSecenekTipi);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructAsortiGrup
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
