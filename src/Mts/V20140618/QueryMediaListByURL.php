<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * Api QueryMediaListByURL
 *
 * @method string getResourceOwnerId()
 * @method string getIncludeSummaryList()
 * @method string getResourceOwnerAccount()
 * @method string getIncludeSnapshotList()
 * @method string getFileURLs()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getIncludePlayList()
 * @method string getIncludeMediaInfo()
 */
class QueryMediaListByURL extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

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
     * @param string $fileURLs
     *
     * @return $this
     */
    public function withFileURLs($fileURLs)
    {
        $this->data['FileURLs'] = $fileURLs;
        $this->options['query']['FileURLs'] = $fileURLs;

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
