<?php
/**
 * File for class TicimaxStructStokAdediGuncelleResponse
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxStructStokAdediGuncelleResponse originally named StokAdediGuncelleResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://lorisparfum.com/Servis/UrunServis.svc?xsd=xsd0}
 * @package Ticimax
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxStructStokAdediGuncelleResponse extends TicimaxWsdlClass
{
    /**
     * The StokAdediGuncelleResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $StokAdediGuncelleResult;
    /**
     * Constructor method for StokAdediGuncelleResponse
     * @see parent::__construct()
     * @param int $_stokAdediGuncelleResult
     * @return TicimaxStructStokAdediGuncelleResponse
     */
    public function __construct($_stokAdediGuncelleResult = NULL)
    {
        parent::__construct(array('StokAdediGuncelleResult'=>$_stokAdediGuncelleResult),false);
    }
    /**
     * Get StokAdediGuncelleResult value
     * @return int|null
     */
    public function getStokAdediGuncelleResult()
    {
        return $this->StokAdediGuncelleResult;
    }
    /**
     * Set StokAdediGuncelleResult value
     * @param int $_stokAdediGuncelleResult the StokAdediGuncelleResult
     * @return int
     */
    public function setStokAdediGuncelleResult($_stokAdediGuncelleResult)
    {
        return ($this->StokAdediGuncelleResult = $_stokAdediGuncelleResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see TicimaxWsdlClass::__set_state()
     * @uses TicimaxWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return TicimaxStructStokAdediGuncelleResponse
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
