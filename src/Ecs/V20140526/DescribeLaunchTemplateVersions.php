<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api DescribeLaunchTemplateVersions
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
class DescribeLaunchTemplateVersions extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
