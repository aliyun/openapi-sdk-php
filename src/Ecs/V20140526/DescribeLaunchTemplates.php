<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api DescribeLaunchTemplates
 *
 * @method array getLaunchTemplateName()
 * @method string getResourceOwnerId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method array getTemplateTag()
 * @method array getLaunchTemplateId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getTemplateResourceGroupId()
 * @method string getOwnerId()
 */
class DescribeLaunchTemplates extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $launchTemplateName
     *
     * @return $this
     */
    public function withLaunchTemplateName(array $launchTemplateName)
    {
        $this->data['LaunchTemplateName'] = $launchTemplateName;
        foreach ($launchTemplateName as $i => $iValue) {
            $this->options['query']['LaunchTemplateName.' . ($i + 1)] = $iValue;
        }

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
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

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
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param array $templateTag
     *
     * @return $this
     */
    public function withTemplateTag(array $templateTag)
    {
        $this->data['TemplateTag'] = $templateTag;
        foreach ($templateTag as $i => $iValue) {
            $this->options['query']['TemplateTag.' . ($i + 1) . '.Key'] = $templateTag[$i]['Key'];
            $this->options['query']['TemplateTag.' . ($i + 1) . '.Value'] = $templateTag[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param array $launchTemplateId
     *
     * @return $this
     */
    public function withLaunchTemplateId(array $launchTemplateId)
    {
        $this->data['LaunchTemplateId'] = $launchTemplateId;
        foreach ($launchTemplateId as $i => $iValue) {
            $this->options['query']['LaunchTemplateId.' . ($i + 1)] = $iValue;
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
     * @param string $templateResourceGroupId
     *
     * @return $this
     */
    public function withTemplateResourceGroupId($templateResourceGroupId)
    {
        $this->data['TemplateResourceGroupId'] = $templateResourceGroupId;
        $this->options['query']['TemplateResourceGroupId'] = $templateResourceGroupId;

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
}
