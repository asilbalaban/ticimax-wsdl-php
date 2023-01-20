<?php
/**
 * File for class TicimaxStructTeknikDetayOzellik
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructTeknikDetayOzellik originally named TeknikDetayOzellik
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructTeknikDetayOzellik extends TicimaxWsdlClass
{
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
     * The Sira
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $Sira;
    /**
     * The Tanim
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Tanim;
    /**
     * Constructor method for TeknikDetayOzellik
     * @see parent::__construct()
     * @param int $_grupID
     * @param int $_iD
     * @param int $_sira
     * @param string $_tanim
     * @return TicimaxStructTeknikDetayOzellik
     */
    public function __construct($_grupID = NULL,$_iD = NULL,$_sira = NULL,$_tanim = NULL)
    {
        parent::__construct(array('GrupID'=>$_grupID,'ID'=>$_iD,'Sira'=>$_sira,'Tanim'=>$_tanim),false);
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
     * Get Sira value
     * @return int|null
     */
    public function getSira()
    {
        return $this->Sira;
    }
    /**
     * Set Sira value
     * @param int $_sira the Sira
     * @return int
     */
    public function setSira($_sira)
    {
        return ($this->Sira = $_sira);
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
     * @return TicimaxStructTeknikDetayOzellik
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