<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteFaceSet
 *
 * @method string getLazyMode()
 * @method string getProject()
 * @method string getSetId()
 * @method string getCheckEmpty()
 */
class DeleteFaceSet extends RpcRequest
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
    public $action = 'DeleteFaceSet';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withLazyMode() instead.
     *
     * @param string $lazyMode
     *
     * @return $this
     */
    public function setLazyMode($lazyMode)
    {
        return $this->withLazyMode($lazyMode);
    }

    /**
     * @param string $lazyMode
     *
     * @return $this
     */
    public function withLazyMode($lazyMode)
    {
        $this->data['LazyMode'] = $lazyMode;
        $this->options['query']['LazyMode'] = $lazyMode;

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
     * @deprecated deprecated since version 2.0, Use withCheckEmpty() instead.
     *
     * @param string $checkEmpty
     *
     * @return $this
     */
    public function setCheckEmpty($checkEmpty)
    {
        return $this->withCheckEmpty($checkEmpty);
    }

    /**
     * @param string $checkEmpty
     *
     * @return $this
     */
    public function withCheckEmpty($checkEmpty)
    {
        $this->data['CheckEmpty'] = $checkEmpty;
        $this->options['query']['CheckEmpty'] = $checkEmpty;

        return $this;
    }
}
