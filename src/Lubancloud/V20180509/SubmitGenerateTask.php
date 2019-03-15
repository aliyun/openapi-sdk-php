<?php

namespace AlibabaCloud\Lubancloud\V20180509;

use AlibabaCloud\Rpc;

/**
 * @method string getImageCount()
 * @method $this withImageCount($value)
 * @method string getActionPoint()
 * @method $this withActionPoint($value)
 * @method string getLogoImagePath()
 * @method $this withLogoImagePath($value)
 * @method string getType()
 * @method $this withType($value)
 * @method array getMajorImagePath()
 * @method string getWidth()
 * @method $this withWidth($value)
 * @method array getCopyWrite()
 * @method array getPropertyId()
 * @method string getHeight()
 * @method $this withHeight($value)
 */
class SubmitGenerateTask extends Rpc
{
    public $product = 'lubancloud';

    public $version = '2018-05-09';

    public $method = 'POST';

    public $serviceCode = 'luban';

    /**
     * @param array $majorImagePath
     *
     * @return $this
     */
    public function withMajorImagePath(array $majorImagePath)
    {
        $this->data['MajorImagePath'] = $majorImagePath;
        foreach ($majorImagePath as $i => $iValue) {
            $this->options['query']['MajorImagePath.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $copyWrite
     *
     * @return $this
     */
    public function withCopyWrite(array $copyWrite)
    {
        $this->data['CopyWrite'] = $copyWrite;
        foreach ($copyWrite as $i => $iValue) {
            $this->options['query']['CopyWrite.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $propertyId
     *
     * @return $this
     */
    public function withPropertyId(array $propertyId)
    {
        $this->data['PropertyId'] = $propertyId;
        foreach ($propertyId as $i => $iValue) {
            $this->options['query']['PropertyId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
