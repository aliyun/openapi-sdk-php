<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ImportSwagger
 *
 * @method string getDataFormat()
 * @method string getData()
 * @method string getGroupId()
 * @method string getOverwrite()
 */
class ImportSwagger extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudAPI';

    /**
     * @var string
     */
    public $version = '2016-07-14';

    /**
     * @var string
     */
    public $action = 'ImportSwagger';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'apigateway';

    /**
     * @param string $dataFormat
     *
     * @return $this
     */
    public function withDataFormat($dataFormat)
    {
        $this->data['DataFormat'] = $dataFormat;
        $this->options['query']['DataFormat'] = $dataFormat;

        return $this;
    }

    /**
     * @param string $data
     *
     * @return $this
     */
    public function withData($data)
    {
        $this->data['Data'] = $data;
        $this->options['query']['Data'] = $data;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $overwrite
     *
     * @return $this
     */
    public function withOverwrite($overwrite)
    {
        $this->data['Overwrite'] = $overwrite;
        $this->options['query']['Overwrite'] = $overwrite;

        return $this;
    }
}
