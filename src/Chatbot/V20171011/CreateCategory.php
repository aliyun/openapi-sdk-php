<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * Api CreateCategory
 *
 * @method string getParentCategoryId()
 * @method string getName()
 */
class CreateCategory extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

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
