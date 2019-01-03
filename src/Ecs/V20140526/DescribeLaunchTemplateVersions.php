<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeLaunchTemplateVersions
 *
 * @method string getLaunchTemplateName()
 * @method string getMaxVersion()
 * @method string getResourceOwnerId()
 * @method string getDefaultVersion()
 * @method string getMinVersion()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getLaunchTemplateId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getLaunchTemplateVersion()
 * @method string getDetailFlag()
 */
class DescribeLaunchTemplateVersions extends RpcRequest
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
    public $action = 'DescribeLaunchTemplateVersions';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withLaunchTemplateName() instead.
     *
     * @param string $launchTemplateName
     *
     * @return $this
     */
    public function setLaunchTemplateName($launchTemplateName)
    {
        return $this->withLaunchTemplateName($launchTemplateName);
    }

    /**
     * @param string $launchTemplateName
     *
     * @return $this
     */
    public function withLaunchTemplateName($launchTemplateName)
    {
        $this->data['LaunchTemplateName'] = $launchTemplateName;
        $this->options['query']['LaunchTemplateName'] = $launchTemplateName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMaxVersion() instead.
     *
     * @param string $maxVersion
     *
     * @return $this
     */
    public function setMaxVersion($maxVersion)
    {
        return $this->withMaxVersion($maxVersion);
    }

    /**
     * @param string $maxVersion
     *
     * @return $this
     */
    public function withMaxVersion($maxVersion)
    {
        $this->data['MaxVersion'] = $maxVersion;
        $this->options['query']['MaxVersion'] = $maxVersion;

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
     * @deprecated deprecated since version 2.0, Use withDefaultVersion() instead.
     *
     * @param string $defaultVersion
     *
     * @return $this
     */
    public function setDefaultVersion($defaultVersion)
    {
        return $this->withDefaultVersion($defaultVersion);
    }

    /**
     * @param string $defaultVersion
     *
     * @return $this
     */
    public function withDefaultVersion($defaultVersion)
    {
        $this->data['DefaultVersion'] = $defaultVersion;
        $this->options['query']['DefaultVersion'] = $defaultVersion;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMinVersion() instead.
     *
     * @param string $minVersion
     *
     * @return $this
     */
    public function setMinVersion($minVersion)
    {
        return $this->withMinVersion($minVersion);
    }

    /**
     * @param string $minVersion
     *
     * @return $this
     */
    public function withMinVersion($minVersion)
    {
        $this->data['MinVersion'] = $minVersion;
        $this->options['query']['MinVersion'] = $minVersion;

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
     * @deprecated deprecated since version 2.0, Use withLaunchTemplateId() instead.
     *
     * @param string $launchTemplateId
     *
     * @return $this
     */
    public function setLaunchTemplateId($launchTemplateId)
    {
        return $this->withLaunchTemplateId($launchTemplateId);
    }

    /**
     * @param string $launchTemplateId
     *
     * @return $this
     */
    public function withLaunchTemplateId($launchTemplateId)
    {
        $this->data['LaunchTemplateId'] = $launchTemplateId;
        $this->options['query']['LaunchTemplateId'] = $launchTemplateId;

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
     * @deprecated deprecated since version 2.0, Use getLaunchTemplateVersion() instead.
     *
     * @return array
     */
    public function getLaunchTemplateVersions()
    {
        return $this->getLaunchTemplateVersion();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLaunchTemplateVersion() instead.
     *
     * @param array $launchTemplateVersions
     *
     * @return $this
     */
    public function setLaunchTemplateVersions(array $launchTemplateVersions)
    {
        return $this->withLaunchTemplateVersion($launchTemplateVersions);
    }

    /**
     * @param array $launchTemplateVersion
     *
     * @return $this
     */
    public function withLaunchTemplateVersion(array $launchTemplateVersion)
    {
        $this->data['LaunchTemplateVersion'] = $launchTemplateVersion;
        foreach ($launchTemplateVersion as $i => $iValue) {
            $this->options['query']['LaunchTemplateVersion.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDetailFlag() instead.
     *
     * @param string $detailFlag
     *
     * @return $this
     */
    public function setDetailFlag($detailFlag)
    {
        return $this->withDetailFlag($detailFlag);
    }

    /**
     * @param string $detailFlag
     *
     * @return $this
     */
    public function withDetailFlag($detailFlag)
    {
        $this->data['DetailFlag'] = $detailFlag;
        $this->options['query']['DetailFlag'] = $detailFlag;

        return $this;
    }
}
