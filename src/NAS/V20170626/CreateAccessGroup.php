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
