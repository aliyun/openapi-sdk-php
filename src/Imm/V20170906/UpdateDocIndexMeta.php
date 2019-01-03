<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateDocIndexMeta
 *
 * @method string getCustomKey1()
 * @method string getSet()
 * @method string getCustomKey5()
 * @method string getCustomKey4()
 * @method string getCustomKey3()
 * @method string getCustomKey2()
 * @method string getProject()
 * @method string getCustomKey6()
 * @method string getName()
 * @method string getUniqueId()
 */
class UpdateDocIndexMeta extends RpcRequest
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
    public $action = 'UpdateDocIndexMeta';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withCustomKey1() instead.
     *
     * @param string $customKey1
     *
     * @return $this
     */
    public function setCustomKey1($customKey1)
    {
        return $this->withCustomKey1($customKey1);
    }

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
     * @deprecated deprecated since version 2.0, Use withSet() instead.
     *
     * @param string $set
     *
     * @return $this
     */
    public function setSet($set)
    {
        return $this->withSet($set);
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
     * @deprecated deprecated since version 2.0, Use withCustomKey5() instead.
     *
     * @param string $customKey5
     *
     * @return $this
     */
    public function setCustomKey5($customKey5)
    {
        return $this->withCustomKey5($customKey5);
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
     * @deprecated deprecated since version 2.0, Use withCustomKey4() instead.
     *
     * @param string $customKey4
     *
     * @return $this
     */
    public function setCustomKey4($customKey4)
    {
        return $this->withCustomKey4($customKey4);
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
     * @deprecated deprecated since version 2.0, Use withCustomKey3() instead.
     *
     * @param string $customKey3
     *
     * @return $this
     */
    public function setCustomKey3($customKey3)
    {
        return $this->withCustomKey3($customKey3);
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
     * @deprecated deprecated since version 2.0, Use withCustomKey2() instead.
     *
     * @param string $customKey2
     *
     * @return $this
     */
    public function setCustomKey2($customKey2)
    {
        return $this->withCustomKey2($customKey2);
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
     * @deprecated deprecated since version 2.0, Use withCustomKey6() instead.
     *
     * @param string $customKey6
     *
     * @return $this
     */
    public function setCustomKey6($customKey6)
    {
        return $this->withCustomKey6($customKey6);
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
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
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
     * @deprecated deprecated since version 2.0, Use withUniqueId() instead.
     *
     * @param string $uniqueId
     *
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        return $this->withUniqueId($uniqueId);
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
