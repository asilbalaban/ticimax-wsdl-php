<?php
/**
 * File for class TicimaxStructTedarikci
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructTedarikci originally named Tedarikci
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructTedarikci extends TicimaxWsdlClass
{
    /**
     * The Aktif
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $Aktif;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $ID;
    /**
     * The Mail
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Mail;
    /**
     * The Not
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Not;
    /**
     * The Tanim
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Tanim;
    /**
     * Constructor method for Tedarikci
     * @see parent::__construct()
     * @param boolean $_aktif
     * @param int $_iD
     * @param string $_mail
     * @param string $_not
     * @param string $_tanim
     * @return TicimaxStructTedarikci
     */
    public function __construct($_aktif = NULL,$_iD = NULL,$_mail = NULL,$_not = NULL,$_tanim = NULL)
    {
        parent::__construct(array('Aktif'=>$_aktif,'ID'=>$_iD,'Mail'=>$_mail,'Not'=>$_not,'Tanim'=>$_tanim),false);
    }
    /**
     * Get Aktif value
     * @return boolean|null
     */
    public function getAktif()
    {
        return $this->Aktif;
    }
    /**
     * Set Aktif value
     * @param boolean $_aktif the Aktif
     * @return boolean
     */
    public function setAktif($_aktif)
    {
        return ($this->Aktif = $_aktif);
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
     * Get Mail value
     * @return string|null
     */
    public function getMail()
    {
        return $this->Mail;
    }
    /**
     * Set Mail value
     * @param string $_mail the Mail
     * @return string
     */
    public function setMail($_mail)
    {
        return ($this->Mail = $_mail);
    }
    /**
     * Get Not value
     * @return string|null
     */
    public function getNot()
    {
        return $this->Not;
    }
    /**
     * Set Not value
     * @param string $_not the Not
     * @return string
     */
    public function setNot($_not)
    {
        return ($this->Not = $_not);
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
     * @return TicimaxStructTedarikci
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
