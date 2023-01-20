<?php
/**
 * File for class TicimaxStructSelectTeknikDetayOzellikResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSelectTeknikDetayOzellikResponse originally named SelectTeknikDetayOzellikResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSelectTeknikDetayOzellikResponse extends TicimaxWsdlClass
{
    /**
     * The SelectTeknikDetayOzellikResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var TicimaxStructArrayOfTeknikDetayOzellik
     */
    public $SelectTeknikDetayOzellikResult;
    /**
     * Constructor method for SelectTeknikDetayOzellikResponse
     * @see parent::__construct()
     * @param TicimaxStructArrayOfTeknikDetayOzellik $_selectTeknikDetayOzellikResult
     * @return TicimaxStructSelectTeknikDetayOzellikResponse
     */
    public function __construct($_selectTeknikDetayOzellikResult = NULL)
    {
        parent::__construct(array('SelectTeknikDetayOzellikResult'=>($_selectTeknikDetayOzellikResult instanceof TicimaxStructArrayOfTeknikDetayOzellik)?$_selectTeknikDetayOzellikResult:new TicimaxStructArrayOfTeknikDetayOzellik($_selectTeknikDetayOzellikResult)),false);
    }
    /**
     * Get SelectTeknikDetayOzellikResult value
     * @return TicimaxStructArrayOfTeknikDetayOzellik|null
     */
    public function getSelectTeknikDetayOzellikResult()
    {
        return $this->SelectTeknikDetayOzellikResult;
    }
    /**
     * Set SelectTeknikDetayOzellikResult value
     * @param TicimaxStructArrayOfTeknikDetayOzellik $_selectTeknikDetayOzellikResult the SelectTeknikDetayOzellikResult
     * @return TicimaxStructArrayOfTeknikDetayOzellik
     */
    public function setSelectTeknikDetayOzellikResult($_selectTeknikDetayOzellikResult)
    {
        return ($this->SelectTeknikDetayOzellikResult = $_selectTeknikDetayOzellikResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSelectTeknikDetayOzellikResponse
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
