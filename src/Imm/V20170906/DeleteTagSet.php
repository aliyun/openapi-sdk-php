<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * Api DeleteTagSet
 *
 * @method string getLazyMode()
 * @method string getProject()
 * @method string getSetId()
 * @method string getCheckEmpty()
 */
class DeleteTagSet extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';

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
