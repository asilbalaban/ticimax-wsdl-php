<?php
/**
 * File for class TicimaxStructIlgiliUrun
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructIlgiliUrun originally named IlgiliUrun
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructIlgiliUrun extends TicimaxWsdlClass
{
    /**
     * The IlgiliUrunKartiID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $IlgiliUrunKartiID;
    /**
     * The UrunKartiID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $UrunKartiID;
    /**
     * Constructor method for IlgiliUrun
     * @see parent::__construct()
     * @param int $_ilgiliUrunKartiID
     * @param int $_urunKartiID
     * @return TicimaxStructIlgiliUrun
     */
    public function __construct($_ilgiliUrunKartiID = NULL,$_urunKartiID = NULL)
    {
        parent::__construct(array('IlgiliUrunKartiID'=>$_ilgiliUrunKartiID,'UrunKartiID'=>$_urunKartiID),false);
    }
    /**
     * Get IlgiliUrunKartiID value
     * @return int|null
     */
    public function getIlgiliUrunKartiID()
    {
        return $this->IlgiliUrunKartiID;
    }
    /**
     * Set IlgiliUrunKartiID value
     * @param int $_ilgiliUrunKartiID the IlgiliUrunKartiID
     * @return int
     */
    public function setIlgiliUrunKartiID($_ilgiliUrunKartiID)
    {
        return ($this->IlgiliUrunKartiID = $_ilgiliUrunKartiID);
    }
    /**
     * Get UrunKartiID value
     * @return int|null
     */
    public function getUrunKartiID()
    {
        return $this->UrunKartiID;
    }
    /**
     * Set UrunKartiID value
     * @param int $_urunKartiID the UrunKartiID
     * @return int
     */
    public function setUrunKartiID($_urunKartiID)
    {
        return ($this->UrunKartiID = $_urunKartiID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructIlgiliUrun
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
