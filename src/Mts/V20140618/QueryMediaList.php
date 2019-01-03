<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryMediaList
 *
 * @method string getResourceOwnerId()
 * @method string getIncludeSummaryList()
 * @method string getResourceOwnerAccount()
 * @method string getIncludeSnapshotList()
 * @method string getOwnerAccount()
 * @method string getMediaIds()
 * @method string getOwnerId()
 * @method string getIncludePlayList()
 * @method string getIncludeMediaInfo()
 */
class QueryMediaList extends RpcRequest
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
    public $action = 'QueryMediaList';

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
     * @deprecated deprecated since version 2.0, Use withIncludeSummaryList() instead.
     *
     * @param string $includeSummaryList
     *
     * @return $this
     */
    public function setIncludeSummaryList($includeSummaryList)
    {
        return $this->withIncludeSummaryList($includeSummaryList);
    }

    /**
     * @param string $includeSummaryList
     *
     * @return $this
     */
    public function withIncludeSummaryList($includeSummaryList)
    {
        $this->data['IncludeSummaryList'] = $includeSummaryList;
        $this->options['query']['IncludeSummaryList'] = $includeSummaryList;

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
     * @deprecated deprecated since version 2.0, Use withIncludeSnapshotList() instead.
     *
     * @param string $includeSnapshotList
     *
     * @return $this
     */
    public function setIncludeSnapshotList($includeSnapshotList)
    {
        return $this->withIncludeSnapshotList($includeSnapshotList);
    }

    /**
     * @param string $includeSnapshotList
     *
     * @return $this
     */
    public function withIncludeSnapshotList($includeSnapshotList)
    {
        $this->data['IncludeSnapshotList'] = $includeSnapshotList;
        $this->options['query']['IncludeSnapshotList'] = $includeSnapshotList;

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
     * @deprecated deprecated since version 2.0, Use withMediaIds() instead.
     *
     * @param string $mediaIds
     *
     * @return $this
     */
    public function setMediaIds($mediaIds)
    {
        return $this->withMediaIds($mediaIds);
    }

    /**
     * @param string $mediaIds
     *
     * @return $this
     */
    public function withMediaIds($mediaIds)
    {
        $this->data['MediaIds'] = $mediaIds;
        $this->options['query']['MediaIds'] = $mediaIds;

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
     * @deprecated deprecated since version 2.0, Use withIncludePlayList() instead.
     *
     * @param string $includePlayList
     *
     * @return $this
     */
    public function setIncludePlayList($includePlayList)
    {
        return $this->withIncludePlayList($includePlayList);
    }

    /**
     * @param string $includePlayList
     *
     * @return $this
     */
    public function withIncludePlayList($includePlayList)
    {
        $this->data['IncludePlayList'] = $includePlayList;
        $this->options['query']['IncludePlayList'] = $includePlayList;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIncludeMediaInfo() instead.
     *
     * @param string $includeMediaInfo
     *
     * @return $this
     */
    public function setIncludeMediaInfo($includeMediaInfo)
    {
        return $this->withIncludeMediaInfo($includeMediaInfo);
    }

    /**
     * @param string $includeMediaInfo
     *
     * @return $this
     */
    public function withIncludeMediaInfo($includeMediaInfo)
    {
        $this->data['IncludeMediaInfo'] = $includeMediaInfo;
        $this->options['query']['IncludeMediaInfo'] = $includeMediaInfo;

        return $this;
    }
}
