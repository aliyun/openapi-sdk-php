<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Rpc;

/**
 * @method array getFilter()
 * @method string getSearchTerm()
 * @method $this withSearchTerm($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeProducts extends Rpc
{
    public $product = 'Market';

    public $version = '2015-11-01';

    public $method = 'POST';

    /**
     * @param array $filter
     *
     * @return $this
     */
    public function withFilter(array $filter)
    {
        $this->data['Filter'] = $filter;
        foreach ($filter as $i => $iValue) {
            $this->options['query']['Filter.' . ($i + 1) . '.Value'] = $filter[$i]['Value'];
            $this->options['query']['Filter.' . ($i + 1) . '.Key'] = $filter[$i]['Key'];
        }

        return $this;
    }
}
