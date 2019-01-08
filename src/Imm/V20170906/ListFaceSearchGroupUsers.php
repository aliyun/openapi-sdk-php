<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListFaceSearchGroupUsers
 *
 * @method string getMaxKeys()
 * @method string getMarker()
 * @method string getProject()
 * @method string getGroupName()
 */
class ListFaceSearchGroupUsers extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'imm';

    /**
     * @var string
     */
    public $version = '2017-09-06';

    /**
     * @var string
     */
    public $action = 'ListFaceSearchGroupUsers';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @param string $maxKeys
     *
     * @return $this
     */
    public function withMaxKeys($maxKeys)
    {
        $this->data['MaxKeys'] = $maxKeys;
        $this->options['query']['MaxKeys'] = $maxKeys;

        return $this;
    }

    /**
     * @param string $marker
     *
     * @return $this
     */
    public function withMarker($marker)
    {
        $this->data['Marker'] = $marker;
        $this->options['query']['Marker'] = $marker;

        return $this;
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function withProject($project)
    {
        $this->data['Project'] = $project;
        $this->options['query']['Project'] = $project;

        return $this;
    }

    /**
     * @param string $groupName
     *
     * @return $this
     */
    public function withGroupName($groupName)
    {
        $this->data['GroupName'] = $groupName;
        $this->options['query']['GroupName'] = $groupName;

        return $this;
    }
}
