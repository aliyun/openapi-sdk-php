<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListImages
 *
 * @method string getMarker()
 * @method string getProject()
 * @method string getSetId()
 * @method string getCreateTimeStart()
 */
class ListImages extends RpcRequest
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
    public $action = 'ListImages';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

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

    /**
     * @param string $createTimeStart
     *
     * @return $this
     */
    public function withCreateTimeStart($createTimeStart)
    {
        $this->data['CreateTimeStart'] = $createTimeStart;
        $this->options['query']['CreateTimeStart'] = $createTimeStart;

        return $this;
    }
}
