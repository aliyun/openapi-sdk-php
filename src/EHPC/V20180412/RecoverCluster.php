<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api RecoverCluster
 *
 * @method string getImageId()
 * @method string getOsTag()
 * @method string getClientVersion()
 * @method string getAccountType()
 * @method string getSchedulerType()
 * @method string getClusterId()
 * @method string getImageOwnerAlias()
 */
class RecoverCluster extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

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
     * @param string $clientVersion
     *
     * @return $this
     */
    public function withClientVersion($clientVersion)
    {
        $this->data['ClientVersion'] = $clientVersion;
        $this->options['query']['ClientVersion'] = $clientVersion;

        return $this;
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
