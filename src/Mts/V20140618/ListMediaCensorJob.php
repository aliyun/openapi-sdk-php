<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListMediaCensorJob
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getNextPageToken()
 * @method string getStartOfJobCreatedTimeRange()
 * @method string getOwnerAccount()
 * @method string getMaximumPageSize()
 * @method string getState()
 * @method string getOwnerId()
 * @method string getEndOfJobCreatedTimeRange()
 * @method string getPipelineId()
 */
class ListMediaCensorJob extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Mts';

    /**
     * @var string
     */
    public $version = '2014-06-18';

    /**
     * @var string
     */
    public $action = 'ListMediaCensorJob';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'mts';

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
     * @deprecated deprecated since version 2.0, Use withNextPageToken() instead.
     *
     * @param string $nextPageToken
     *
     * @return $this
     */
    public function setNextPageToken($nextPageToken)
    {
        return $this->withNextPageToken($nextPageToken);
    }

    /**
     * @param string $nextPageToken
     *
     * @return $this
     */
    public function withNextPageToken($nextPageToken)
    {
        $this->data['NextPageToken'] = $nextPageToken;
        $this->options['query']['NextPageToken'] = $nextPageToken;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartOfJobCreatedTimeRange() instead.
     *
     * @param string $startOfJobCreatedTimeRange
     *
     * @return $this
     */
    public function setStartOfJobCreatedTimeRange($startOfJobCreatedTimeRange)
    {
        return $this->withStartOfJobCreatedTimeRange($startOfJobCreatedTimeRange);
    }

    /**
     * @param string $startOfJobCreatedTimeRange
     *
     * @return $this
     */
    public function withStartOfJobCreatedTimeRange($startOfJobCreatedTimeRange)
    {
        $this->data['StartOfJobCreatedTimeRange'] = $startOfJobCreatedTimeRange;
        $this->options['query']['StartOfJobCreatedTimeRange'] = $startOfJobCreatedTimeRange;

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
     * @deprecated deprecated since version 2.0, Use withMaximumPageSize() instead.
     *
     * @param string $maximumPageSize
     *
     * @return $this
     */
    public function setMaximumPageSize($maximumPageSize)
    {
        return $this->withMaximumPageSize($maximumPageSize);
    }

    /**
     * @param string $maximumPageSize
     *
     * @return $this
     */
    public function withMaximumPageSize($maximumPageSize)
    {
        $this->data['MaximumPageSize'] = $maximumPageSize;
        $this->options['query']['MaximumPageSize'] = $maximumPageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withState() instead.
     *
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        return $this->withState($state);
    }

    /**
     * @param string $state
     *
     * @return $this
     */
    public function withState($state)
    {
        $this->data['State'] = $state;
        $this->options['query']['State'] = $state;

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
     * @deprecated deprecated since version 2.0, Use withEndOfJobCreatedTimeRange() instead.
     *
     * @param string $endOfJobCreatedTimeRange
     *
     * @return $this
     */
    public function setEndOfJobCreatedTimeRange($endOfJobCreatedTimeRange)
    {
        return $this->withEndOfJobCreatedTimeRange($endOfJobCreatedTimeRange);
    }

    /**
     * @param string $endOfJobCreatedTimeRange
     *
     * @return $this
     */
    public function withEndOfJobCreatedTimeRange($endOfJobCreatedTimeRange)
    {
        $this->data['EndOfJobCreatedTimeRange'] = $endOfJobCreatedTimeRange;
        $this->options['query']['EndOfJobCreatedTimeRange'] = $endOfJobCreatedTimeRange;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPipelineId() instead.
     *
     * @param string $pipelineId
     *
     * @return $this
     */
    public function setPipelineId($pipelineId)
    {
        return $this->withPipelineId($pipelineId);
    }

    /**
     * @param string $pipelineId
     *
     * @return $this
     */
    public function withPipelineId($pipelineId)
    {
        $this->data['PipelineId'] = $pipelineId;
        $this->options['query']['PipelineId'] = $pipelineId;

        return $this;
    }
}
