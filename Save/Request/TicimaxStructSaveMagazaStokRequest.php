<?php
/**
 * File for class TicimaxStructSaveMagazaStokRequest
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveMagazaStokRequest originally named SaveMagazaStokRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveMagazaStokRequest extends TicimaxWsdlClass
{
    /**
     * The MagazaStokList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfWebMagazaStok
     */
    public $MagazaStokList;
    /**
     * Constructor method for SaveMagazaStokRequest
     * @see parent::__construct()
     * @param TicimaxStructArrayOfWebMagazaStok $_magazaStokList
     * @return TicimaxStructSaveMagazaStokRequest
     */
    public function __construct($_magazaStokList = NULL)
    {
        parent::__construct(array('MagazaStokList'=>($_magazaStokList instanceof TicimaxStructArrayOfWebMagazaStok)?$_magazaStokList:new TicimaxStructArrayOfWebMagazaStok($_magazaStokList)),false);
    }
    /**
     * Get MagazaStokList value
     * @return TicimaxStructArrayOfWebMagazaStok|null
     */
    public function getMagazaStokList()
    {
        return $this->MagazaStokList;
    }
    /**
     * Set MagazaStokList value
     * @param TicimaxStructArrayOfWebMagazaStok $_magazaStokList the MagazaStokList
     * @return TicimaxStructArrayOfWebMagazaStok
     */
    public function setMagazaStokList($_magazaStokList)
    {
        return ($this->MagazaStokList = $_magazaStokList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveMagazaStokRequest
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
