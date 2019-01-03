<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of IndexFace
 *
 * @method string getChain()
 * @method string getSrcUris()
 * @method string getProject()
 * @method string getSetId()
 * @method string getForce()
 */
class IndexFace extends RpcRequest
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
    public $action = 'IndexFace';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withChain() instead.
     *
     * @param string $chain
     *
     * @return $this
     */
    public function setChain($chain)
    {
        return $this->withChain($chain);
    }

    /**
     * @param string $chain
     *
     * @return $this
     */
    public function withChain($chain)
    {
        $this->data['Chain'] = $chain;
        $this->options['query']['Chain'] = $chain;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSrcUris() instead.
     *
     * @param string $srcUris
     *
     * @return $this
     */
    public function setSrcUris($srcUris)
    {
        return $this->withSrcUris($srcUris);
    }

    /**
     * @param string $srcUris
     *
     * @return $this
     */
    public function withSrcUris($srcUris)
    {
        $this->data['SrcUris'] = $srcUris;
        $this->options['query']['SrcUris'] = $srcUris;

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
     * @deprecated deprecated since version 2.0, Use withSetId() instead.
     *
     * @param string $setId
     *
     * @return $this
     */
    public function setSetId($setId)
    {
        return $this->withSetId($setId);
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
     * @deprecated deprecated since version 2.0, Use withForce() instead.
     *
     * @param string $force
     *
     * @return $this
     */
    public function setForce($force)
    {
        return $this->withForce($force);
    }

    /**
     * @param string $force
     *
     * @return $this
     */
    public function withForce($force)
    {
        $this->data['Force'] = $force;
        $this->options['query']['Force'] = $force;

        return $this;
    }
}
