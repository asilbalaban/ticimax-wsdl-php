<?php
/**
 * File for class TicimaxStructSaveEtiketResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructSaveEtiketResponse originally named SaveEtiketResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructSaveEtiketResponse extends TicimaxWsdlClass
{
    /**
     * The SaveEtiketResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $SaveEtiketResult;
    /**
     * Constructor method for SaveEtiketResponse
     * @see parent::__construct()
     * @param int $_saveEtiketResult
     * @return TicimaxStructSaveEtiketResponse
     */
    public function __construct($_saveEtiketResult = NULL)
    {
        parent::__construct(array('SaveEtiketResult'=>$_saveEtiketResult),false);
    }
    /**
     * Get SaveEtiketResult value
     * @return int|null
     */
    public function getSaveEtiketResult()
    {
        return $this->SaveEtiketResult;
    }
    /**
     * Set SaveEtiketResult value
     * @param int $_saveEtiketResult the SaveEtiketResult
     * @return int
     */
    public function setSaveEtiketResult($_saveEtiketResult)
    {
        return ($this->SaveEtiketResult = $_saveEtiketResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructSaveEtiketResponse
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
