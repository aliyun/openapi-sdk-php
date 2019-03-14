<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeGroupStruct
 *
 * @method string getSourceIp()
 * @method string getTagIdList()
 * @method string getRemark()
 */
class DescribeGroupStruct extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

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
     * @param string $tagIdList
     *
     * @return $this
     */
    public function withTagIdList($tagIdList)
    {
        $this->data['TagIdList'] = $tagIdList;
        $this->options['query']['tagIdList'] = $tagIdList;

        return $this;
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function withRemark($remark)
    {
        $this->data['Remark'] = $remark;
        $this->options['query']['remark'] = $remark;

        return $this;
    }
}
