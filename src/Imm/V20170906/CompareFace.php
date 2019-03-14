<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * Api CompareFace
 *
 * @method string getSrcUriB()
 * @method string getSrcUriA()
 * @method string getProject()
 */
class CompareFace extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';

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
