<?php
/**
 * File for class TicimaxStructUrunOdemeSecenek
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUrunOdemeSecenek originally named UrunOdemeSecenek
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUrunOdemeSecenek extends TicimaxWsdlClass
{
    /**
     * The BankaAdi
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $BankaAdi;
    /**
     * The BankaID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $BankaID;
    /**
     * The Taksitler
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfUrunOdemeSecenekTaksit
     */
    public $Taksitler;
    /**
     * Constructor method for UrunOdemeSecenek
     * @see parent::__construct()
     * @param string $_bankaAdi
     * @param int $_bankaID
     * @param TicimaxStructArrayOfUrunOdemeSecenekTaksit $_taksitler
     * @return TicimaxStructUrunOdemeSecenek
     */
    public function __construct($_bankaAdi = NULL,$_bankaID = NULL,$_taksitler = NULL)
    {
        parent::__construct(array('BankaAdi'=>$_bankaAdi,'BankaID'=>$_bankaID,'Taksitler'=>($_taksitler instanceof TicimaxStructArrayOfUrunOdemeSecenekTaksit)?$_taksitler:new TicimaxStructArrayOfUrunOdemeSecenekTaksit($_taksitler)),false);
    }
    /**
     * Get BankaAdi value
     * @return string|null
     */
    public function getBankaAdi()
    {
        return $this->BankaAdi;
    }
    /**
     * Set BankaAdi value
     * @param string $_bankaAdi the BankaAdi
     * @return string
     */
    public function setBankaAdi($_bankaAdi)
    {
        return ($this->BankaAdi = $_bankaAdi);
    }
    /**
     * Get BankaID value
     * @return int|null
     */
    public function getBankaID()
    {
        return $this->BankaID;
    }
    /**
     * Set BankaID value
     * @param int $_bankaID the BankaID
     * @return int
     */
    public function setBankaID($_bankaID)
    {
        return ($this->BankaID = $_bankaID);
    }
    /**
     * Get Taksitler value
     * @return TicimaxStructArrayOfUrunOdemeSecenekTaksit|null
     */
    public function getTaksitler()
    {
        return $this->Taksitler;
    }
    /**
     * Set Taksitler value
     * @param TicimaxStructArrayOfUrunOdemeSecenekTaksit $_taksitler the Taksitler
     * @return TicimaxStructArrayOfUrunOdemeSecenekTaksit
     */
    public function setTaksitler($_taksitler)
    {
        return ($this->Taksitler = $_taksitler);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUrunOdemeSecenek
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
