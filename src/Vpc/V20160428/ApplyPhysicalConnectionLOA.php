<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeerLocation()
 * @method $this withPeerLocation($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getLineType()
 * @method $this withLineType($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getConstructionTime()
 * @method $this withConstructionTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCompanyName()
 * @method $this withCompanyName($value)
 * @method string getSi()
 * @method $this withSi($value)
 * @method array getPMInfo()
 */
class ApplyPhysicalConnectionLOA extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';

    /**
     * @param array $pMInfo
     *
     * @return $this
     */
    public function withPMInfo(array $pMInfo)
    {
        $this->data['PMInfo'] = $pMInfo;
        foreach ($pMInfo as $i => $iValue) {
            $this->options['query']['PMInfo.' . ($i + 1) . '.PMCertificateNo'] = $pMInfo[$i]['PMCertificateNo'];
            $this->options['query']['PMInfo.' . ($i + 1) . '.PMName'] = $pMInfo[$i]['PMName'];
            $this->options['query']['PMInfo.' . ($i + 1) . '.PMCertificateType'] = $pMInfo[$i]['PMCertificateType'];
            $this->options['query']['PMInfo.' . ($i + 1) . '.PMContactInfo'] = $pMInfo[$i]['PMContactInfo'];
            $this->options['query']['PMInfo.' . ($i + 1) . '.PMGender'] = $pMInfo[$i]['PMGender'];
        }

        return $this;
    }
}
