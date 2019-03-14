<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * Api QueryCategories
 *
 * @method string getShowChildrens()
 * @method string getParentCategoryId()
 */
class QueryCategories extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

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
