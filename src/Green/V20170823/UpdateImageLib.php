<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateImageLib
 *
 * @method string getSourceIp()
 * @method string getName()
 * @method string getBizTypes()
 * @method string getId()
 * @method string getCategory()
 * @method string getScene()
 */
class UpdateImageLib extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Green';

    /**
     * @var string
     */
    public $version = '2017-08-23';

    /**
     * @var string
     */
    public $action = 'UpdateImageLib';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $bizTypes
     *
     * @return $this
     */
    public function withBizTypes($bizTypes)
    {
        $this->data['BizTypes'] = $bizTypes;
        $this->options['query']['BizTypes'] = $bizTypes;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function withId($id)
    {
        $this->data['Id'] = $id;
        $this->options['query']['Id'] = $id;

        return $this;
    }

    /**
     * @param string $category
     *
     * @return $this
     */
    public function withCategory($category)
    {
        $this->data['Category'] = $category;
        $this->options['query']['Category'] = $category;

        return $this;
    }

    /**
     * @param string $scene
     *
     * @return $this
     */
    public function withScene($scene)
    {
        $this->data['Scene'] = $scene;
        $this->options['query']['Scene'] = $scene;

        return $this;
    }
}
