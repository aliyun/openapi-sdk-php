<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListVideoAudios
 *
 * @method string getVideoUri()
 * @method string getMarker()
 * @method string getProject()
 * @method string getSetId()
 */
class ListVideoAudios extends RpcRequest
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
    public $action = 'ListVideoAudios';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @param string $videoUri
     *
     * @return $this
     */
    public function withVideoUri($videoUri)
    {
        $this->data['VideoUri'] = $videoUri;
        $this->options['query']['VideoUri'] = $videoUri;

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
     * @param string $setId
     *
     * @return $this
     */
    public function withSetId($setId)
    {
        $this->data['SetId'] = $setId;
        $this->options['query']['SetId'] = $setId;

        return $this;
    }
}
