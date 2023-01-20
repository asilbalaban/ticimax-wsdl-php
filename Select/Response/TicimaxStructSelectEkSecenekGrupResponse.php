<?php
/**
 * File for class TicimaxStructSelectEkSecenekGrupResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectEkSecenekGrupResponse originally named SelectEkSecenekGrupResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectEkSecenekGrupResponse extends TicimaxWsdlClass
{
    /**
     * The SelectEkSecenekGrupResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfEkSecenekGrup
     */
    public $SelectEkSecenekGrupResult;
    /**
     * Constructor method for SelectEkSecenekGrupResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfEkSecenekGrup $_selectEkSecenekGrupResult
     * @return TicimaxStructSelectEkSecenekGrupResponse
     */
    public function __construct($_selectEkSecenekGrupResult = NULL)
    {
        parent::__construct(array('SelectEkSecenekGrupResult'=>($_selectEkSecenekGrupResult instanceof TicimaxStructArrayOfEkSecenekGrup)?$_selectEkSecenekGrupResult:new TicimaxStructArrayOfEkSecenekGrup($_selectEkSecenekGrupResult)),false);
    }
    /**
     * Get SelectEkSecenekGrupResult value
     * @return TicimaxStructArrayOfEkSecenekGrup|null
     */
    public function getSelectEkSecenekGrupResult()
    {
        return $this->SelectEkSecenekGrupResult;
    }
    /**
     * Set SelectEkSecenekGrupResult value
     * @param TicimaxStructArrayOfEkSecenekGrup $_selectEkSecenekGrupResult the SelectEkSecenekGrupResult
     * @return TicimaxStructArrayOfEkSecenekGrup
     */
    public function setSelectEkSecenekGrupResult($_selectEkSecenekGrupResult)
    {
        return ($this->SelectEkSecenekGrupResult = $_selectEkSecenekGrupResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectEkSecenekGrupResponse
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
