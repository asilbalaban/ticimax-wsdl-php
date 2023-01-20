<?php
/**
 * File for class TicimaxStructWebServisResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructWebServisResponse originally named WebServisResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd2}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructWebServisResponse extends TicimaxWsdlClass
{
    /**
     * The ErrorMessage
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $ErrorMessage;
    /**
     * The IsError
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $IsError;
    /**
     * Constructor method for WebServisResponse
     * @see parent::__construct()
     * @param string $_errorMessage
     * @param boolean $_isError
     * @return TicimaxStructWebServisResponse
     */
    public function __construct($_errorMessage = NULL,$_isError = NULL)
    {
        parent::__construct(array('ErrorMessage'=>$_errorMessage,'IsError'=>$_isError),false);
    }
    /**
     * Get ErrorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }
    /**
     * Set ErrorMessage value
     * @param string $_errorMessage the ErrorMessage
     * @return string
     */
    public function setErrorMessage($_errorMessage)
    {
        return ($this->ErrorMessage = $_errorMessage);
    }
    /**
     * Get IsError value
     * @return boolean|null
     */
    public function getIsError()
    {
        return $this->IsError;
    }
    /**
     * Set IsError value
     * @param boolean $_isError the IsError
     * @return boolean
     */
    public function setIsError($_isError)
    {
        return ($this->IsError = $_isError);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructWebServisResponse
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
