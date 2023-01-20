<?php
/**
 * File for class TicimaxStructSelectUrunKategoriResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectUrunKategoriResponse originally named SelectUrunKategoriResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectUrunKategoriResponse extends TicimaxWsdlClass
{
    /**
     * The SelectUrunKategoriResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfUrunKategori
     */
    public $SelectUrunKategoriResult;
    /**
     * Constructor method for SelectUrunKategoriResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfUrunKategori $_selectUrunKategoriResult
     * @return TicimaxStructSelectUrunKategoriResponse
     */
    public function __construct($_selectUrunKategoriResult = NULL)
    {
        parent::__construct(array('SelectUrunKategoriResult'=>($_selectUrunKategoriResult instanceof TicimaxStructArrayOfUrunKategori)?$_selectUrunKategoriResult:new TicimaxStructArrayOfUrunKategori($_selectUrunKategoriResult)),false);
    }
    /**
     * Get SelectUrunKategoriResult value
     * @return TicimaxStructArrayOfUrunKategori|null
     */
    public function getSelectUrunKategoriResult()
    {
        return $this->SelectUrunKategoriResult;
    }
    /**
     * Set SelectUrunKategoriResult value
     * @param TicimaxStructArrayOfUrunKategori $_selectUrunKategoriResult the SelectUrunKategoriResult
     * @return TicimaxStructArrayOfUrunKategori
     */
    public function setSelectUrunKategoriResult($_selectUrunKategoriResult)
    {
        return ($this->SelectUrunKategoriResult = $_selectUrunKategoriResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectUrunKategoriResponse
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
