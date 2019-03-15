<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIsSupportIoOptimized()
 * @method $this withIsSupportIoOptimized($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getIsSupportCloudinit()
 * @method $this withIsSupportCloudinit($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getArchitecture()
 * @method $this withArchitecture($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getShowExpired()
 * @method $this withShowExpired($value)
 * @method string getOSType()
 * @method $this withOSType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getFilter()
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeImages extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $tag[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $tag[$i]['Key'];
        }

        return $this;
    }

    /**
     * @param array $filter
     *
     * @return $this
     */
    public function withFilter(array $filter)
    {
        $this->data['Filter'] = $filter;
        foreach ($filter as $i => $iValue) {
            $this->options['query']['Filter.' . ($i + 1) . '.Value'] = $filter[$i]['Value'];
            $this->options['query']['Filter.' . ($i + 1) . '.Key'] = $filter[$i]['Key'];
        }

        return $this;
    }
}
