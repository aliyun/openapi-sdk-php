<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryCategories
 *
 * @method string getShowChildrens()
 * @method string getParentCategoryId()
 */
class QueryCategories extends RpcRequest
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
    public $action = 'QueryCategories';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @param string $showChildrens
     *
     * @return $this
     */
    public function withShowChildrens($showChildrens)
    {
        $this->data['ShowChildrens'] = $showChildrens;
        $this->options['query']['ShowChildrens'] = $showChildrens;

        return $this;
    }

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
}
