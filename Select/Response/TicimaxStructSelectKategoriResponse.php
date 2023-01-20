<?php
/**
 * File for class TicimaxStructSelectKategoriResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectKategoriResponse originally named SelectKategoriResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectKategoriResponse extends TicimaxWsdlClass
{
    /**
     * The SelectKategoriResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfKategori
     */
    public $SelectKategoriResult;
    /**
     * Constructor method for SelectKategoriResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfKategori $_selectKategoriResult
     * @return TicimaxStructSelectKategoriResponse
     */
    public function __construct($_selectKategoriResult = NULL)
    {
        parent::__construct(array('SelectKategoriResult'=>($_selectKategoriResult instanceof TicimaxStructArrayOfKategori)?$_selectKategoriResult:new TicimaxStructArrayOfKategori($_selectKategoriResult)),false);
    }
    /**
     * Get SelectKategoriResult value
     * @return TicimaxStructArrayOfKategori|null
     */
    public function getSelectKategoriResult()
    {
        return $this->SelectKategoriResult;
    }
    /**
     * Set SelectKategoriResult value
     * @param TicimaxStructArrayOfKategori $_selectKategoriResult the SelectKategoriResult
     * @return TicimaxStructArrayOfKategori
     */
    public function setSelectKategoriResult($_selectKategoriResult)
    {
        return ($this->SelectKategoriResult = $_selectKategoriResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectKategoriResponse
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
