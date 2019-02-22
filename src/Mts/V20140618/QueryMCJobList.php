<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryMCJobList
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getNextPageToken()
 * @method string getStartOfJobCreatedTimeRange()
 * @method string getOwnerAccount()
 * @method string getMaximumPageSize()
 * @method string getOwnerId()
 * @method string getPipelineId()
 * @method string getJobIds()
 * @method string getState()
 * @method string getEndOfJobCreatedTimeRange()
 */
class QueryMCJobList extends RpcRequest
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
    public $action = 'QueryMCJobList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'mts';

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

    /**
     * @param string $jobIds
     *
     * @return $this
     */
    public function withJobIds($jobIds)
    {
        $this->data['JobIds'] = $jobIds;
        $this->options['query']['JobIds'] = $jobIds;

        return $this;
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
}
