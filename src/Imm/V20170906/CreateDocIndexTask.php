<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * Api CreateDocIndexTask
 *
 * @method string getCustomKey1()
 * @method string getSet()
 * @method string getCustomKey5()
 * @method string getCustomKey4()
 * @method string getCustomKey3()
 * @method string getCustomKey2()
 * @method string getProject()
 * @method string getCustomKey6()
 * @method string getContentType()
 * @method string getName()
 * @method string getSrcUri()
 * @method string getUniqueId()
 */
class CreateDocIndexTask extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';

    /**
     * @param string $customKey1
     *
     * @return $this
     */
    public function withCustomKey1($customKey1)
    {
        $this->data['CustomKey1'] = $customKey1;
        $this->options['query']['CustomKey1'] = $customKey1;

        return $this;
    }

    /**
     * @param string $set
     *
     * @return $this
     */
    public function withSet($set)
    {
        $this->data['Set'] = $set;
        $this->options['query']['Set'] = $set;

        return $this;
    }

    /**
     * @param string $customKey5
     *
     * @return $this
     */
    public function withCustomKey5($customKey5)
    {
        $this->data['CustomKey5'] = $customKey5;
        $this->options['query']['CustomKey5'] = $customKey5;

        return $this;
    }

    /**
     * @param string $customKey4
     *
     * @return $this
     */
    public function withCustomKey4($customKey4)
    {
        $this->data['CustomKey4'] = $customKey4;
        $this->options['query']['CustomKey4'] = $customKey4;

        return $this;
    }

    /**
     * @param string $customKey3
     *
     * @return $this
     */
    public function withCustomKey3($customKey3)
    {
        $this->data['CustomKey3'] = $customKey3;
        $this->options['query']['CustomKey3'] = $customKey3;

        return $this;
    }

    /**
     * @param string $customKey2
     *
     * @return $this
     */
    public function withCustomKey2($customKey2)
    {
        $this->data['CustomKey2'] = $customKey2;
        $this->options['query']['CustomKey2'] = $customKey2;

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
     * @param string $customKey6
     *
     * @return $this
     */
    public function withCustomKey6($customKey6)
    {
        $this->data['CustomKey6'] = $customKey6;
        $this->options['query']['CustomKey6'] = $customKey6;

        return $this;
    }

    /**
     * @param string $contentType
     *
     * @return $this
     */
    public function withContentType($contentType)
    {
        $this->data['ContentType'] = $contentType;
        $this->options['query']['ContentType'] = $contentType;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $srcUri
     *
     * @return $this
     */
    public function withSrcUri($srcUri)
    {
        $this->data['SrcUri'] = $srcUri;
        $this->options['query']['SrcUri'] = $srcUri;

        return $this;
    }

    /**
     * @param string $uniqueId
     *
     * @return $this
     */
    public function withUniqueId($uniqueId)
    {
        $this->data['UniqueId'] = $uniqueId;
        $this->options['query']['UniqueId'] = $uniqueId;

        return $this;
    }
}
