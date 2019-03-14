<?php

namespace AlibabaCloud\Eci\V20180808;

use AlibabaCloud\Rpc;

/**
 * Api DescribeContainerGroups
 *
 * @method string getResourceOwnerId()
 * @method string getContainerGroupIds()
 * @method string getNextToken()
 * @method string getLimit()
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getVSwitchId()
 * @method string getContainerGroupName()
 * @method string getZoneId()
 * @method string getStatus()
 */
class DescribeContainerGroups extends Rpc
{
    public $product = 'Eci';

    public $version = '2018-08-08';

    public $method = 'POST';

    public $serviceCode = 'eci';

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
     * @param string $containerGroupIds
     *
     * @return $this
     */
    public function withContainerGroupIds($containerGroupIds)
    {
        $this->data['ContainerGroupIds'] = $containerGroupIds;
        $this->options['query']['ContainerGroupIds'] = $containerGroupIds;

        return $this;
    }

    /**
     * @param string $nextToken
     *
     * @return $this
     */
    public function withNextToken($nextToken)
    {
        $this->data['NextToken'] = $nextToken;
        $this->options['query']['NextToken'] = $nextToken;

        return $this;
    }

    /**
     * @param string $limit
     *
     * @return $this
     */
    public function withLimit($limit)
    {
        $this->data['Limit'] = $limit;
        $this->options['query']['Limit'] = $limit;

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $tag[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $tag[$i]['Value'];
        }

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
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function withVSwitchId($vSwitchId)
    {
        $this->data['VSwitchId'] = $vSwitchId;
        $this->options['query']['VSwitchId'] = $vSwitchId;

        return $this;
    }

    /**
     * @param string $containerGroupName
     *
     * @return $this
     */
    public function withContainerGroupName($containerGroupName)
    {
        $this->data['ContainerGroupName'] = $containerGroupName;
        $this->options['query']['ContainerGroupName'] = $containerGroupName;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function withZoneId($zoneId)
    {
        $this->data['ZoneId'] = $zoneId;
        $this->options['query']['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['Status'] = $status;

        return $this;
    }
}
