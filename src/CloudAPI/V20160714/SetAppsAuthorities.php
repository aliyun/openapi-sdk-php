<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetAppsAuthorities
 *
 * @method string getAuthVaildTime()
 * @method string getStageName()
 * @method string getAppIds()
 * @method string getSecurityToken()
 * @method string getGroupId()
 * @method string getDescription()
 * @method string getApiId()
 * @method string getAuthValidTime()
 */
class SetAppsAuthorities extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudAPI';

    /**
     * @var string
     */
    public $version = '2016-07-14';

    /**
     * @var string
     */
    public $action = 'SetAppsAuthorities';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'apigateway';

    /**
     * @param string $authVaildTime
     *
     * @return $this
     */
    public function withAuthVaildTime($authVaildTime)
    {
        $this->data['AuthVaildTime'] = $authVaildTime;
        $this->options['query']['AuthVaildTime'] = $authVaildTime;

        return $this;
    }

    /**
     * @param string $stageName
     *
     * @return $this
     */
    public function withStageName($stageName)
    {
        $this->data['StageName'] = $stageName;
        $this->options['query']['StageName'] = $stageName;

        return $this;
    }

    /**
     * @param string $appIds
     *
     * @return $this
     */
    public function withAppIds($appIds)
    {
        $this->data['AppIds'] = $appIds;
        $this->options['query']['AppIds'] = $appIds;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $apiId
     *
     * @return $this
     */
    public function withApiId($apiId)
    {
        $this->data['ApiId'] = $apiId;
        $this->options['query']['ApiId'] = $apiId;

        return $this;
    }

    /**
     * @param string $authValidTime
     *
     * @return $this
     */
    public function withAuthValidTime($authValidTime)
    {
        $this->data['AuthValidTime'] = $authValidTime;
        $this->options['query']['AuthValidTime'] = $authValidTime;

        return $this;
    }
}
