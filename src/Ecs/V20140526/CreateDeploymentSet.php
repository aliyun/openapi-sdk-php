<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateDeploymentSet
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getDeploymentSetName()
 * @method string getOwnerId()
 * @method string getOnUnableToRedeployFailedInstance()
 * @method string getGranularity()
 * @method string getDomain()
 * @method string getStrategy()
 */
class CreateDeploymentSet extends RpcRequest
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
    public $action = 'CreateDeploymentSet';

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
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

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
     * @deprecated deprecated since version 2.0, Use withOnUnableToRedeployFailedInstance() instead.
     *
     * @param string $onUnableToRedeployFailedInstance
     *
     * @return $this
     */
    public function setOnUnableToRedeployFailedInstance($onUnableToRedeployFailedInstance)
    {
        return $this->withOnUnableToRedeployFailedInstance($onUnableToRedeployFailedInstance);
    }

    /**
     * @param string $onUnableToRedeployFailedInstance
     *
     * @return $this
     */
    public function withOnUnableToRedeployFailedInstance($onUnableToRedeployFailedInstance)
    {
        $this->data['OnUnableToRedeployFailedInstance'] = $onUnableToRedeployFailedInstance;
        $this->options['query']['OnUnableToRedeployFailedInstance'] = $onUnableToRedeployFailedInstance;

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
