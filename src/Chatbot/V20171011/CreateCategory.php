<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateCategory
 *
 * @method string getParentCategoryId()
 * @method string getName()
 */
class CreateCategory extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Chatbot';

    /**
     * @var string
     */
    public $version = '2017-10-11';

    /**
     * @var string
     */
    public $action = 'CreateCategory';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @param string $parentCategoryId
     *
     * @return $this
     */
    public function withParentCategoryId($parentCategoryId)
    {
        $this->data['ParentCategoryId'] = $parentCategoryId;
        $this->options['query']['ParentCategoryId'] = $parentCategoryId;

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
}
