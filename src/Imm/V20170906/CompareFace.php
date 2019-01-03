<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CompareFace
 *
 * @method string getSrcUriB()
 * @method string getSrcUriA()
 * @method string getProject()
 */
class CompareFace extends RpcRequest
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
    public $action = 'CompareFace';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withSrcUriB() instead.
     *
     * @param string $srcUriB
     *
     * @return $this
     */
    public function setSrcUriB($srcUriB)
    {
        return $this->withSrcUriB($srcUriB);
    }

    /**
     * @param string $srcUriB
     *
     * @return $this
     */
    public function withSrcUriB($srcUriB)
    {
        $this->data['SrcUriB'] = $srcUriB;
        $this->options['query']['SrcUriB'] = $srcUriB;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSrcUriA() instead.
     *
     * @param string $srcUriA
     *
     * @return $this
     */
    public function setSrcUriA($srcUriA)
    {
        return $this->withSrcUriA($srcUriA);
    }

    /**
     * @param string $srcUriA
     *
     * @return $this
     */
    public function withSrcUriA($srcUriA)
    {
        $this->data['SrcUriA'] = $srcUriA;
        $this->options['query']['SrcUriA'] = $srcUriA;

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
}
