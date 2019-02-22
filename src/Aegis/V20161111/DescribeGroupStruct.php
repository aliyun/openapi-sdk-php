<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeGroupStruct
 *
 * @method string getSourceIp()
 * @method string getTagIdList()
 * @method string getRemark()
 */
class DescribeGroupStruct extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'DescribeGroupStruct';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
