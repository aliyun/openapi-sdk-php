<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDeploymentSets
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getNetworkType()
 * @method string getDeploymentSetName()
 * @method string getOwnerId()
 * @method string getPageNumber()
 * @method string getDeploymentSetIds()
 * @method string getGranularity()
 * @method string getDomain()
 * @method string getPageSize()
 * @method string getStrategy()
 */
class DescribeDeploymentSets extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'DescribeDeploymentSets';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
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
     * @deprecated deprecated since version 2.0, Use withNetworkType() instead.
     *
     * @param string $networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        return $this->withNetworkType($networkType);
    }

    /**
     * @param string $networkType
     *
     * @return $this
     */
    public function withNetworkType($networkType)
    {
        $this->data['NetworkType'] = $networkType;
        $this->options['query']['NetworkType'] = $networkType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDeploymentSetName() instead.
     *
     * @param string $deploymentSetName
     *
     * @return $this
     */
    public function setDeploymentSetName($deploymentSetName)
    {
        return $this->withDeploymentSetName($deploymentSetName);
    }

    /**
     * @param string $deploymentSetName
     *
     * @return $this
     */
    public function withDeploymentSetName($deploymentSetName)
    {
        $this->data['DeploymentSetName'] = $deploymentSetName;
        $this->options['query']['DeploymentSetName'] = $deploymentSetName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDeploymentSetIds() instead.
     *
     * @param string $deploymentSetIds
     *
     * @return $this
     */
    public function setDeploymentSetIds($deploymentSetIds)
    {
        return $this->withDeploymentSetIds($deploymentSetIds);
    }

    /**
     * @param string $deploymentSetIds
     *
     * @return $this
     */
    public function withDeploymentSetIds($deploymentSetIds)
    {
        $this->data['DeploymentSetIds'] = $deploymentSetIds;
        $this->options['query']['DeploymentSetIds'] = $deploymentSetIds;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withGranularity() instead.
     *
     * @param string $granularity
     *
     * @return $this
     */
    public function setGranularity($granularity)
    {
        return $this->withGranularity($granularity);
    }

    /**
     * @param string $granularity
     *
     * @return $this
     */
    public function withGranularity($granularity)
    {
        $this->data['Granularity'] = $granularity;
        $this->options['query']['Granularity'] = $granularity;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomain() instead.
     *
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        return $this->withDomain($domain);
    }

    /**
     * @param string $domain
     *
     * @return $this
     */
    public function withDomain($domain)
    {
        $this->data['Domain'] = $domain;
        $this->options['query']['Domain'] = $domain;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStrategy() instead.
     *
     * @param string $strategy
     *
     * @return $this
     */
    public function setStrategy($strategy)
    {
        return $this->withStrategy($strategy);
    }

    /**
     * @param string $strategy
     *
     * @return $this
     */
    public function withStrategy($strategy)
    {
        $this->data['Strategy'] = $strategy;
        $this->options['query']['Strategy'] = $strategy;

        return $this;
    }
}
