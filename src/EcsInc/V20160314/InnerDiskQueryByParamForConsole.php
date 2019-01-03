<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerDiskQueryByParamForConsole
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
class InnerDiskQueryByParamForConsole extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EcsInc';

    /**
     * @var string
     */
    public $version = '2016-03-14';

    /**
     * @var string
     */
    public $action = 'InnerDiskQueryByParamForConsole';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @deprecated deprecated since version 2.0, Use withFuzzyDiskName() instead.
     *
     * @param string $fuzzyDiskName
     *
     * @return $this
     */
    public function setfuzzyDiskName($fuzzyDiskName)
    {
        return $this->withFuzzyDiskName($fuzzyDiskName);
    }

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
     * @deprecated deprecated since version 2.0, Use withIzNo() instead.
     *
     * @param string $izNo
     *
     * @return $this
     */
    public function setizNo($izNo)
    {
        return $this->withIzNo($izNo);
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
     * @deprecated deprecated since version 2.0, Use withPrePayEcsInstanceIds() instead.
     *
     * @param string $prePayEcsInstanceIds
     *
     * @return $this
     */
    public function setprePayEcsInstanceIds($prePayEcsInstanceIds)
    {
        return $this->withPrePayEcsInstanceIds($prePayEcsInstanceIds);
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
     * @deprecated deprecated since version 2.0, Use withAutoSnapshotPolicyId() instead.
     *
     * @param string $autoSnapshotPolicyId
     *
     * @return $this
     */
    public function setautoSnapshotPolicyId($autoSnapshotPolicyId)
    {
        return $this->withAutoSnapshotPolicyId($autoSnapshotPolicyId);
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
     * @deprecated deprecated since version 2.0, Use withChannel() instead.
     *
     * @param string $channel
     *
     * @return $this
     */
    public function setchannel($channel)
    {
        return $this->withChannel($channel);
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
     * @deprecated deprecated since version 2.0, Use withOperator() instead.
     *
     * @param string $operator
     *
     * @return $this
     */
    public function setoperator($operator)
    {
        return $this->withOperator($operator);
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
     * @deprecated deprecated since version 2.0, Use withExcludeStatus() instead.
     *
     * @param string $excludeStatus
     *
     * @return $this
     */
    public function setexcludeStatus($excludeStatus)
    {
        return $this->withExcludeStatus($excludeStatus);
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
     * @deprecated deprecated since version 2.0, Use withDiskName() instead.
     *
     * @param string $diskName
     *
     * @return $this
     */
    public function setdiskName($diskName)
    {
        return $this->withDiskName($diskName);
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
     * @deprecated deprecated since version 2.0, Use withDeleteAutoSnapshot() instead.
     *
     * @param string $deleteAutoSnapshot
     *
     * @return $this
     */
    public function setdeleteAutoSnapshot($deleteAutoSnapshot)
    {
        return $this->withDeleteAutoSnapshot($deleteAutoSnapshot);
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
     * @deprecated deprecated since version 2.0, Use withDiskCategory() instead.
     *
     * @param string $diskCategory
     *
     * @return $this
     */
    public function setdiskCategory($diskCategory)
    {
        return $this->withDiskCategory($diskCategory);
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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setpageSize($pageSize)
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
        $this->options['query']['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSnapshotNo() instead.
     *
     * @param string $snapshotNo
     *
     * @return $this
     */
    public function setsnapshotNo($snapshotNo)
    {
        return $this->withSnapshotNo($snapshotNo);
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
     * @deprecated deprecated since version 2.0, Use withDeleteWithInstance() instead.
     *
     * @param string $deleteWithInstance
     *
     * @return $this
     */
    public function setdeleteWithInstance($deleteWithInstance)
    {
        return $this->withDeleteWithInstance($deleteWithInstance);
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
     * @deprecated deprecated since version 2.0, Use withProxyId() instead.
     *
     * @param string $proxyId
     *
     * @return $this
     */
    public function setproxyId($proxyId)
    {
        return $this->withProxyId($proxyId);
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
     * @deprecated deprecated since version 2.0, Use withPostPayEcsInstanceIds() instead.
     *
     * @param string $postPayEcsInstanceIds
     *
     * @return $this
     */
    public function setpostPayEcsInstanceIds($postPayEcsInstanceIds)
    {
        return $this->withPostPayEcsInstanceIds($postPayEcsInstanceIds);
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
     * @deprecated deprecated since version 2.0, Use withEcsInstanceId() instead.
     *
     * @param string $ecsInstanceId
     *
     * @return $this
     */
    public function setecsInstanceId($ecsInstanceId)
    {
        return $this->withEcsInstanceId($ecsInstanceId);
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
     * @deprecated deprecated since version 2.0, Use withEnableAutoSnapshot() instead.
     *
     * @param string $enableAutoSnapshot
     *
     * @return $this
     */
    public function setenableAutoSnapshot($enableAutoSnapshot)
    {
        return $this->withEnableAutoSnapshot($enableAutoSnapshot);
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
     * @deprecated deprecated since version 2.0, Use withActive() instead.
     *
     * @param string $active
     *
     * @return $this
     */
    public function setactive($active)
    {
        return $this->withActive($active);
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
     * @deprecated deprecated since version 2.0, Use withImageNo() instead.
     *
     * @param string $imageNo
     *
     * @return $this
     */
    public function setimageNo($imageNo)
    {
        return $this->withImageNo($imageNo);
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
     * @deprecated deprecated since version 2.0, Use withCreateTimeFrom() instead.
     *
     * @param string $createTimeFrom
     *
     * @return $this
     */
    public function setcreateTimeFrom($createTimeFrom)
    {
        return $this->withCreateTimeFrom($createTimeFrom);
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
     * @deprecated deprecated since version 2.0, Use withEnableAutomatedSnapshotPolicy() instead.
     *
     * @param string $enableAutomatedSnapshotPolicy
     *
     * @return $this
     */
    public function setenableAutomatedSnapshotPolicy($enableAutomatedSnapshotPolicy)
    {
        return $this->withEnableAutomatedSnapshotPolicy($enableAutomatedSnapshotPolicy);
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
     * @deprecated deprecated since version 2.0, Use withPortable() instead.
     *
     * @param string $portable
     *
     * @return $this
     */
    public function setportable($portable)
    {
        return $this->withPortable($portable);
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
     * @deprecated deprecated since version 2.0, Use withDiskType() instead.
     *
     * @param string $diskType
     *
     * @return $this
     */
    public function setdiskType($diskType)
    {
        return $this->withDiskType($diskType);
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
     * @deprecated deprecated since version 2.0, Use withToken() instead.
     *
     * @param string $token
     *
     * @return $this
     */
    public function settoken($token)
    {
        return $this->withToken($token);
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
     * @deprecated deprecated since version 2.0, Use withTags() instead.
     *
     * @param string $tags
     *
     * @return $this
     */
    public function settags($tags)
    {
        return $this->withTags($tags);
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
     * @deprecated deprecated since version 2.0, Use withAsync() instead.
     *
     * @param string $async
     *
     * @return $this
     */
    public function setasync($async)
    {
        return $this->withAsync($async);
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
     * @deprecated deprecated since version 2.0, Use withInstanceIds() instead.
     *
     * @param string $instanceIds
     *
     * @return $this
     */
    public function setinstanceIds($instanceIds)
    {
        return $this->withInstanceIds($instanceIds);
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
     * @deprecated deprecated since version 2.0, Use withPageNo() instead.
     *
     * @param string $pageNo
     *
     * @return $this
     */
    public function setpageNo($pageNo)
    {
        return $this->withPageNo($pageNo);
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
     * @deprecated deprecated since version 2.0, Use withCreateTimeTo() instead.
     *
     * @param string $createTimeTo
     *
     * @return $this
     */
    public function setcreateTimeTo($createTimeTo)
    {
        return $this->withCreateTimeTo($createTimeTo);
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
     * @deprecated deprecated since version 2.0, Use withStatus() instead.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setstatus($status)
    {
        return $this->withStatus($status);
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
