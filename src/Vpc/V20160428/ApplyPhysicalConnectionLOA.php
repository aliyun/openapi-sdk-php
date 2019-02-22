<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ApplyPhysicalConnectionLOA
 *
 * @method string getResourceOwnerId()
 * @method string getPeerLocation()
 * @method string getClientToken()
 * @method string getResourceOwnerAccount()
 * @method string getBandwidth()
 * @method string getLineType()
 * @method string getOwnerAccount()
 * @method string getConstructionTime()
 * @method string getOwnerId()
 * @method string getLineOperator()
 * @method string getInstanceId()
 * @method string getCompanyName()
 * @method string getSi()
 * @method array getPMInfo()
 */
class ApplyPhysicalConnectionLOA extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Vpc';

    /**
     * @var string
     */
    public $version = '2016-04-28';

    /**
     * @var string
     */
    public $action = 'ApplyPhysicalConnectionLOA';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $peerLocation
     *
     * @return $this
     */
    public function withPeerLocation($peerLocation)
    {
        $this->data['PeerLocation'] = $peerLocation;
        $this->options['query']['PeerLocation'] = $peerLocation;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $bandwidth
     *
     * @return $this
     */
    public function withBandwidth($bandwidth)
    {
        $this->data['Bandwidth'] = $bandwidth;
        $this->options['query']['Bandwidth'] = $bandwidth;

        return $this;
    }

    /**
     * @param string $lineType
     *
     * @return $this
     */
    public function withLineType($lineType)
    {
        $this->data['LineType'] = $lineType;
        $this->options['query']['LineType'] = $lineType;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $constructionTime
     *
     * @return $this
     */
    public function withConstructionTime($constructionTime)
    {
        $this->data['ConstructionTime'] = $constructionTime;
        $this->options['query']['ConstructionTime'] = $constructionTime;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $lineOperator
     *
     * @return $this
     */
    public function withLineOperator($lineOperator)
    {
        $this->data['LineOperator'] = $lineOperator;
        $this->options['query']['LineOperator'] = $lineOperator;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $companyName
     *
     * @return $this
     */
    public function withCompanyName($companyName)
    {
        $this->data['CompanyName'] = $companyName;
        $this->options['query']['CompanyName'] = $companyName;

        return $this;
    }

    /**
     * @param string $si
     *
     * @return $this
     */
    public function withSi($si)
    {
        $this->data['Si'] = $si;
        $this->options['query']['Si'] = $si;

        return $this;
    }

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
