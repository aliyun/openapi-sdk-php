<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListImageJobs
 *
 * @method string getMaxKeys()
 * @method string getMarker()
 * @method string getProject()
 * @method string getJobType()
 */
class ListImageJobs extends RpcRequest
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
    public $action = 'ListImageJobs';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withMaxKeys() instead.
     *
     * @param string $maxKeys
     *
     * @return $this
     */
    public function setMaxKeys($maxKeys)
    {
        return $this->withMaxKeys($maxKeys);
    }

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
     * @deprecated deprecated since version 2.0, Use withMarker() instead.
     *
     * @param string $marker
     *
     * @return $this
     */
    public function setMarker($marker)
    {
        return $this->withMarker($marker);
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
     * @deprecated deprecated since version 2.0, Use withProject() instead.
     *
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        return $this->withProject($project);
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
     * @deprecated deprecated since version 2.0, Use withJobType() instead.
     *
     * @param string $jobType
     *
     * @return $this
     */
    public function setJobType($jobType)
    {
        return $this->withJobType($jobType);
    }

    /**
     * @param string $jobType
     *
     * @return $this
     */
    public function withJobType($jobType)
    {
        $this->data['JobType'] = $jobType;
        $this->options['query']['JobType'] = $jobType;

        return $this;
    }
}
