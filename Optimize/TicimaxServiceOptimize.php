<?php
/**
 * File for class TicimaxServiceOptimize
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
/**
 * This class stands for TicimaxServiceOptimize originally named Optimize
 * @package Ticimax
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2019-07-25
 */
class TicimaxServiceOptimize extends TicimaxWsdlClass
{
    /**
     * Method to call the operation originally named OptimizeUrun
     * @uses TicimaxWsdlClass::getSoapClient()
     * @uses TicimaxWsdlClass::setResult()
     * @uses TicimaxWsdlClass::saveLastError()
     * @param TicimaxStructOptimizeUrun $_ticimaxStructOptimizeUrun
     * @return TicimaxStructOptimizeUrunResponse
     */
    public function OptimizeUrun(TicimaxStructOptimizeUrun $_ticimaxStructOptimizeUrun)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->OptimizeUrun($_ticimaxStructOptimizeUrun));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see TicimaxWsdlClass::getResult()
     * @return TicimaxStructOptimizeUrunResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
