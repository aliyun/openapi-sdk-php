<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * Api InnerDiskQueryByParamForConsole
 *
 * @method string getFuzzyDiskName()
 * @method string getResourceOwnerId()
 * @method string getIzNo()
 * @method string getPrePayEcsInstanceIds()
 * @method string getAutoSnapshotPolicyId()
 * @method string getChannel()
 * @method string getOperator()
 * @method string getExcludeStatus()
 * @method string getDiskName()
 * @method string getDeleteAutoSnapshot()
 * @method string getDiskCategory()
 * @method string getPageSize()
 * @method string getSnapshotNo()
 * @method string getDeleteWithInstance()
 * @method string getProxyId()
 * @method string getPostPayEcsInstanceIds()
 * @method string getEcsInstanceId()
 * @method string getEnableAutoSnapshot()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getActive()
 * @method string getImageNo()
 * @method string getCreateTimeFrom()
 * @method string getEnableAutomatedSnapshotPolicy()
 * @method string getPortable()
 * @method string getOwnerId()
 * @method string getDiskType()
 * @method string getToken()
 * @method string getTags()
 * @method string getAsync()
 * @method string getInstanceIds()
 * @method string getPageNo()
 * @method string getCreateTimeTo()
 * @method string getStatus()
 */
class InnerDiskQueryByParamForConsole extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $fuzzyDiskName
     *
     * @return $this
     */
    public function withFuzzyDiskName($fuzzyDiskName)
    {
        $this->data['FuzzyDiskName'] = $fuzzyDiskName;
        $this->options['query']['fuzzyDiskName'] = $fuzzyDiskName;

        return $this;
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
     * @param string $izNo
     *
     * @return $this
     */
    public function withIzNo($izNo)
    {
        $this->data['IzNo'] = $izNo;
        $this->options['query']['izNo'] = $izNo;

        return $this;
    }

    /**
     * @param string $prePayEcsInstanceIds
     *
     * @return $this
     */
    public function withPrePayEcsInstanceIds($prePayEcsInstanceIds)
    {
        $this->data['PrePayEcsInstanceIds'] = $prePayEcsInstanceIds;
        $this->options['query']['prePayEcsInstanceIds'] = $prePayEcsInstanceIds;

        return $this;
    }

    /**
     * @param string $autoSnapshotPolicyId
     *
     * @return $this
     */
    public function withAutoSnapshotPolicyId($autoSnapshotPolicyId)
    {
        $this->data['AutoSnapshotPolicyId'] = $autoSnapshotPolicyId;
        $this->options['query']['autoSnapshotPolicyId'] = $autoSnapshotPolicyId;

        return $this;
    }

    /**
     * @param string $channel
     *
     * @return $this
     */
    public function withChannel($channel)
    {
        $this->data['Channel'] = $channel;
        $this->options['query']['channel'] = $channel;

        return $this;
    }

    /**
     * @param string $operator
     *
     * @return $this
     */
    public function withOperator($operator)
    {
        $this->data['Operator'] = $operator;
        $this->options['query']['operator'] = $operator;

        return $this;
    }

    /**
     * @param string $excludeStatus
     *
     * @return $this
     */
    public function withExcludeStatus($excludeStatus)
    {
        $this->data['ExcludeStatus'] = $excludeStatus;
        $this->options['query']['excludeStatus'] = $excludeStatus;

        return $this;
    }

    /**
     * @param string $diskName
     *
     * @return $this
     */
    public function withDiskName($diskName)
    {
        $this->data['DiskName'] = $diskName;
        $this->options['query']['diskName'] = $diskName;

        return $this;
    }

    /**
     * @param string $deleteAutoSnapshot
     *
     * @return $this
     */
    public function withDeleteAutoSnapshot($deleteAutoSnapshot)
    {
        $this->data['DeleteAutoSnapshot'] = $deleteAutoSnapshot;
        $this->options['query']['deleteAutoSnapshot'] = $deleteAutoSnapshot;

        return $this;
    }

    /**
     * @param string $diskCategory
     *
     * @return $this
     */
    public function withDiskCategory($diskCategory)
    {
        $this->data['DiskCategory'] = $diskCategory;
        $this->options['query']['diskCategory'] = $diskCategory;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $snapshotNo
     *
     * @return $this
     */
    public function withSnapshotNo($snapshotNo)
    {
        $this->data['SnapshotNo'] = $snapshotNo;
        $this->options['query']['snapshotNo'] = $snapshotNo;

        return $this;
    }

    /**
     * @param string $deleteWithInstance
     *
     * @return $this
     */
    public function withDeleteWithInstance($deleteWithInstance)
    {
        $this->data['DeleteWithInstance'] = $deleteWithInstance;
        $this->options['query']['deleteWithInstance'] = $deleteWithInstance;

        return $this;
    }

    /**
     * @param string $proxyId
     *
     * @return $this
     */
    public function withProxyId($proxyId)
    {
        $this->data['ProxyId'] = $proxyId;
        $this->options['query']['proxyId'] = $proxyId;

        return $this;
    }

    /**
     * @param string $postPayEcsInstanceIds
     *
     * @return $this
     */
    public function withPostPayEcsInstanceIds($postPayEcsInstanceIds)
    {
        $this->data['PostPayEcsInstanceIds'] = $postPayEcsInstanceIds;
        $this->options['query']['postPayEcsInstanceIds'] = $postPayEcsInstanceIds;

        return $this;
    }

    /**
     * @param string $ecsInstanceId
     *
     * @return $this
     */
    public function withEcsInstanceId($ecsInstanceId)
    {
        $this->data['EcsInstanceId'] = $ecsInstanceId;
        $this->options['query']['ecsInstanceId'] = $ecsInstanceId;

        return $this;
    }

    /**
     * @param string $enableAutoSnapshot
     *
     * @return $this
     */
    public function withEnableAutoSnapshot($enableAutoSnapshot)
    {
        $this->data['EnableAutoSnapshot'] = $enableAutoSnapshot;
        $this->options['query']['enableAutoSnapshot'] = $enableAutoSnapshot;

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
     * @param string $active
     *
     * @return $this
     */
    public function withActive($active)
    {
        $this->data['Active'] = $active;
        $this->options['query']['active'] = $active;

        return $this;
    }

    /**
     * @param string $imageNo
     *
     * @return $this
     */
    public function withImageNo($imageNo)
    {
        $this->data['ImageNo'] = $imageNo;
        $this->options['query']['imageNo'] = $imageNo;

        return $this;
    }

    /**
     * @param string $createTimeFrom
     *
     * @return $this
     */
    public function withCreateTimeFrom($createTimeFrom)
    {
        $this->data['CreateTimeFrom'] = $createTimeFrom;
        $this->options['query']['createTimeFrom'] = $createTimeFrom;

        return $this;
    }

    /**
     * @param string $enableAutomatedSnapshotPolicy
     *
     * @return $this
     */
    public function withEnableAutomatedSnapshotPolicy($enableAutomatedSnapshotPolicy)
    {
        $this->data['EnableAutomatedSnapshotPolicy'] = $enableAutomatedSnapshotPolicy;
        $this->options['query']['enableAutomatedSnapshotPolicy'] = $enableAutomatedSnapshotPolicy;

        return $this;
    }

    /**
     * @param string $portable
     *
     * @return $this
     */
    public function withPortable($portable)
    {
        $this->data['Portable'] = $portable;
        $this->options['query']['portable'] = $portable;

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
     * @param string $diskType
     *
     * @return $this
     */
    public function withDiskType($diskType)
    {
        $this->data['DiskType'] = $diskType;
        $this->options['query']['diskType'] = $diskType;

        return $this;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function withToken($token)
    {
        $this->data['Token'] = $token;
        $this->options['query']['token'] = $token;

        return $this;
    }

    /**
     * @param string $tags
     *
     * @return $this
     */
    public function withTags($tags)
    {
        $this->data['Tags'] = $tags;
        $this->options['query']['tags'] = $tags;

        return $this;
    }

    /**
     * @param string $async
     *
     * @return $this
     */
    public function withAsync($async)
    {
        $this->data['Async'] = $async;
        $this->options['query']['async'] = $async;

        return $this;
    }

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function withInstanceIds($instanceIds)
    {
        $this->data['InstanceIds'] = $instanceIds;
        $this->options['query']['instanceIds'] = $instanceIds;

        return $this;
    }

    /**
     * @param string $pageNo
     *
     * @return $this
     */
    public function withPageNo($pageNo)
    {
        $this->data['PageNo'] = $pageNo;
        $this->options['query']['pageNo'] = $pageNo;

        return $this;
    }

    /**
     * @param string $createTimeTo
     *
     * @return $this
     */
    public function withCreateTimeTo($createTimeTo)
    {
        $this->data['CreateTimeTo'] = $createTimeTo;
        $this->options['query']['createTimeTo'] = $createTimeTo;

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
        $this->options['query']['status'] = $status;

        return $this;
    }
}
