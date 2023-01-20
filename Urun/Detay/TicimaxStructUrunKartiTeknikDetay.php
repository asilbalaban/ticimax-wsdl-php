<?php
/**
 * File for class TicimaxStructUrunKartiTeknikDetay
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUrunKartiTeknikDetay originally named UrunKartiTeknikDetay
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUrunKartiTeknikDetay extends TicimaxWsdlClass
{
    /**
     * The DegerID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $DegerID;
    /**
     * The OzellikID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $OzellikID;
    /**
     * Constructor method for UrunKartiTeknikDetay
     * @see parent::__construct()
     * @param int $_degerID
     * @param int $_ozellikID
     * @return TicimaxStructUrunKartiTeknikDetay
     */
    public function __construct($_degerID = NULL,$_ozellikID = NULL)
    {
        parent::__construct(array('DegerID'=>$_degerID,'OzellikID'=>$_ozellikID),false);
    }
    /**
     * Get DegerID value
     * @return int|null
     */
    public function getDegerID()
    {
        return $this->DegerID;
    }
    /**
     * Set DegerID value
     * @param int $_degerID the DegerID
     * @return int
     */
    public function setDegerID($_degerID)
    {
        return ($this->DegerID = $_degerID);
    }
    /**
     * Get OzellikID value
     * @return int|null
     */
    public function getOzellikID()
    {
        return $this->OzellikID;
    }
    /**
     * Set OzellikID value
     * @param int $_ozellikID the OzellikID
     * @return int
     */
    public function setOzellikID($_ozellikID)
    {
        return ($this->OzellikID = $_ozellikID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUrunKartiTeknikDetay
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
