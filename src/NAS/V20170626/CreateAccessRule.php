<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateAccessRule
 *
 * @method string getRWAccessType()
 * @method string getSourceCidrIp()
 * @method string getUserAccessType()
 * @method string getPriority()
 * @method string getAccessGroupName()
 */
class CreateAccessRule extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'NAS';

    /**
     * @var string
     */
    public $version = '2017-06-26';

    /**
     * @var string
     */
    public $action = 'CreateAccessRule';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'nas';

    /**
     * @deprecated deprecated since version 2.0, Use withRWAccessType() instead.
     *
     * @param string $rWAccessType
     *
     * @return $this
     */
    public function setRWAccessType($rWAccessType)
    {
        return $this->withRWAccessType($rWAccessType);
    }

    /**
     * @param string $rWAccessType
     *
     * @return $this
     */
    public function withRWAccessType($rWAccessType)
    {
        $this->data['RWAccessType'] = $rWAccessType;
        $this->options['query']['RWAccessType'] = $rWAccessType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceCidrIp() instead.
     *
     * @param string $sourceCidrIp
     *
     * @return $this
     */
    public function setSourceCidrIp($sourceCidrIp)
    {
        return $this->withSourceCidrIp($sourceCidrIp);
    }

    /**
     * @param string $sourceCidrIp
     *
     * @return $this
     */
    public function withSourceCidrIp($sourceCidrIp)
    {
        $this->data['SourceCidrIp'] = $sourceCidrIp;
        $this->options['query']['SourceCidrIp'] = $sourceCidrIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserAccessType() instead.
     *
     * @param string $userAccessType
     *
     * @return $this
     */
    public function setUserAccessType($userAccessType)
    {
        return $this->withUserAccessType($userAccessType);
    }

    /**
     * @param string $userAccessType
     *
     * @return $this
     */
    public function withUserAccessType($userAccessType)
    {
        $this->data['UserAccessType'] = $userAccessType;
        $this->options['query']['UserAccessType'] = $userAccessType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPriority() instead.
     *
     * @param string $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        return $this->withPriority($priority);
    }

    /**
     * @param string $priority
     *
     * @return $this
     */
    public function withPriority($priority)
    {
        $this->data['Priority'] = $priority;
        $this->options['query']['Priority'] = $priority;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAccessGroupName() instead.
     *
     * @param string $accessGroupName
     *
     * @return $this
     */
    public function setAccessGroupName($accessGroupName)
    {
        return $this->withAccessGroupName($accessGroupName);
    }

    /**
     * @param string $accessGroupName
     *
     * @return $this
     */
    public function withAccessGroupName($accessGroupName)
    {
        $this->data['AccessGroupName'] = $accessGroupName;
        $this->options['query']['AccessGroupName'] = $accessGroupName;

        return $this;
    }
}
