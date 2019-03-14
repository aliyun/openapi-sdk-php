<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * Api ListVideos
 *
 * @method string getMarker()
 * @method string getProject()
 * @method string getSetId()
 * @method string getCreateTimeStart()
 */
class ListVideos extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

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
