<?php
/**
 * File for class TicimaxStructUrunKartiEtiket
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructUrunKartiEtiket originally named UrunKartiEtiket
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructUrunKartiEtiket extends TicimaxWsdlClass
{
    /**
     * The EtiketID
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $EtiketID;
    /**
     * Constructor method for UrunKartiEtiket
     * @see parent::__construct()
     * @param int $_etiketID
     * @return TicimaxStructUrunKartiEtiket
     */
    public function __construct($_etiketID = NULL)
    {
        parent::__construct(array('EtiketID'=>$_etiketID),false);
    }
    /**
     * Get EtiketID value
     * @return int|null
     */
    public function getEtiketID()
    {
        return $this->EtiketID;
    }
    /**
     * Set EtiketID value
     * @param int $_etiketID the EtiketID
     * @return int
     */
    public function setEtiketID($_etiketID)
    {
        return ($this->EtiketID = $_etiketID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructUrunKartiEtiket
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
