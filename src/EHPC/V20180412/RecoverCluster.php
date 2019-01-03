<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RecoverCluster
 *
 * @method string getImageId()
 * @method string getOsTag()
 * @method string getAccountType()
 * @method string getSchedulerType()
 * @method string getClusterId()
 * @method string getImageOwnerAlias()
 */
class RecoverCluster extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'RecoverCluster';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withImageId() instead.
     *
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        return $this->withImageId($imageId);
    }

    /**
     * @param string $imageId
     *
     * @return $this
     */
    public function withImageId($imageId)
    {
        $this->data['ImageId'] = $imageId;
        $this->options['query']['ImageId'] = $imageId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOsTag() instead.
     *
     * @param string $osTag
     *
     * @return $this
     */
    public function setOsTag($osTag)
    {
        return $this->withOsTag($osTag);
    }

    /**
     * @param string $osTag
     *
     * @return $this
     */
    public function withOsTag($osTag)
    {
        $this->data['OsTag'] = $osTag;
        $this->options['query']['OsTag'] = $osTag;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAccountType() instead.
     *
     * @param string $accountType
     *
     * @return $this
     */
    public function setAccountType($accountType)
    {
        return $this->withAccountType($accountType);
    }

    /**
     * @param string $accountType
     *
     * @return $this
     */
    public function withAccountType($accountType)
    {
        $this->data['AccountType'] = $accountType;
        $this->options['query']['AccountType'] = $accountType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSchedulerType() instead.
     *
     * @param string $schedulerType
     *
     * @return $this
     */
    public function setSchedulerType($schedulerType)
    {
        return $this->withSchedulerType($schedulerType);
    }

    /**
     * @param string $schedulerType
     *
     * @return $this
     */
    public function withSchedulerType($schedulerType)
    {
        $this->data['SchedulerType'] = $schedulerType;
        $this->options['query']['SchedulerType'] = $schedulerType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClusterId() instead.
     *
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        return $this->withClusterId($clusterId);
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->options['query']['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageOwnerAlias() instead.
     *
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function setImageOwnerAlias($imageOwnerAlias)
    {
        return $this->withImageOwnerAlias($imageOwnerAlias);
    }

    /**
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function withImageOwnerAlias($imageOwnerAlias)
    {
        $this->data['ImageOwnerAlias'] = $imageOwnerAlias;
        $this->options['query']['ImageOwnerAlias'] = $imageOwnerAlias;

        return $this;
    }
}
