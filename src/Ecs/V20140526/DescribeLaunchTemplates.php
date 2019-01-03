<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeLaunchTemplates
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
class DescribeLaunchTemplates extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'DescribeLaunchTemplates';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use getLaunchTemplateName() instead.
     *
     * @return array
     */
    public function getLaunchTemplateNames()
    {
        return $this->getLaunchTemplateName();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLaunchTemplateName() instead.
     *
     * @param array $launchTemplateNames
     *
     * @return $this
     */
    public function setLaunchTemplateNames(array $launchTemplateNames)
    {
        return $this->withLaunchTemplateName($launchTemplateNames);
    }

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
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
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
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getTemplateTag() instead.
     *
     * @return array
     */
    public function getTemplateTags()
    {
        return $this->getTemplateTag();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTemplateTag() instead.
     *
     * @param array $templateTags
     *
     * @return $this
     */
    public function setTemplateTags(array $templateTags)
    {
        return $this->withTemplateTag($templateTags);
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
     * @deprecated deprecated since version 2.0, Use getLaunchTemplateId() instead.
     *
     * @return array
     */
    public function getLaunchTemplateIds()
    {
        return $this->getLaunchTemplateId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLaunchTemplateId() instead.
     *
     * @param array $launchTemplateIds
     *
     * @return $this
     */
    public function setLaunchTemplateIds(array $launchTemplateIds)
    {
        return $this->withLaunchTemplateId($launchTemplateIds);
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
     * @deprecated deprecated since version 2.0, Use withTemplateResourceGroupId() instead.
     *
     * @param string $templateResourceGroupId
     *
     * @return $this
     */
    public function setTemplateResourceGroupId($templateResourceGroupId)
    {
        return $this->withTemplateResourceGroupId($templateResourceGroupId);
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
}
