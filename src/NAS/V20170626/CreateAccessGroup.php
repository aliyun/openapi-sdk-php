<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateAccessGroup
 *
 * @method string getDescription()
 * @method string getAccessGroupType()
 * @method string getAccessGroupName()
 */
class CreateAccessGroup extends RpcRequest
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
    public $action = 'CreateAccessGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'nas';

    /**
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
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
     * @deprecated deprecated since version 2.0, Use withAccessGroupType() instead.
     *
     * @param string $accessGroupType
     *
     * @return $this
     */
    public function setAccessGroupType($accessGroupType)
    {
        return $this->withAccessGroupType($accessGroupType);
    }

    /**
     * @param string $accessGroupType
     *
     * @return $this
     */
    public function withAccessGroupType($accessGroupType)
    {
        $this->data['AccessGroupType'] = $accessGroupType;
        $this->options['query']['AccessGroupType'] = $accessGroupType;

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
