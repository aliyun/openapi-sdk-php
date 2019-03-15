<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScheduledAction2()
 * @method string getScheduledAction1()
 * @method string getScheduledAction6()
 * @method string getScheduledAction5()
 * @method string getScheduledAction4()
 * @method string getScheduledAction3()
 * @method string getScheduledAction9()
 * @method string getScheduledAction8()
 * @method string getScheduledAction7()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScheduledTaskName20()
 * @method string getScheduledTaskName19()
 * @method string getScheduledTaskName18()
 * @method string getScheduledTaskId20()
 * @method string getScheduledTaskName13()
 * @method string getScheduledTaskName12()
 * @method string getScheduledTaskName11()
 * @method string getScheduledTaskName10()
 * @method string getScheduledTaskName17()
 * @method string getScheduledTaskName16()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getScheduledTaskName15()
 * @method string getScheduledTaskName14()
 * @method string getScheduledTaskId2()
 * @method string getScheduledTaskId1()
 * @method string getScheduledTaskId4()
 * @method string getScheduledTaskId18()
 * @method string getScheduledTaskId3()
 * @method string getScheduledTaskId19()
 * @method string getScheduledTaskId6()
 * @method string getScheduledTaskId5()
 * @method string getScheduledTaskId8()
 * @method string getScheduledTaskName9()
 * @method string getScheduledAction20()
 * @method string getScheduledTaskId7()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getScheduledTaskId12()
 * @method string getScheduledTaskName7()
 * @method string getScheduledTaskId9()
 * @method string getScheduledTaskId13()
 * @method string getScheduledTaskName8()
 * @method string getScheduledTaskId10()
 * @method string getScheduledTaskName5()
 * @method string getScheduledTaskId11()
 * @method string getScheduledTaskName6()
 * @method string getScheduledTaskId16()
 * @method string getScheduledTaskName3()
 * @method string getScheduledTaskId17()
 * @method string getScheduledTaskName4()
 * @method string getScheduledTaskId14()
 * @method string getScheduledTaskName1()
 * @method string getScheduledTaskId15()
 * @method string getScheduledTaskName2()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getScheduledAction18()
 * @method string getScheduledAction19()
 * @method string getScheduledAction16()
 * @method string getScheduledAction17()
 * @method string getScheduledAction14()
 * @method string getScheduledAction15()
 * @method string getScheduledAction12()
 * @method string getScheduledAction13()
 * @method string getScheduledAction10()
 * @method string getScheduledAction11()
 */
class DescribeScheduledTasks extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

    /**
     * @param string $scheduledAction2
     *
     * @return $this
     */
    public function withScheduledAction2($scheduledAction2)
    {
        $this->data['ScheduledAction2'] = $scheduledAction2;
        $this->options['query']['ScheduledAction.2'] = $scheduledAction2;

        return $this;
    }

    /**
     * @param string $scheduledAction1
     *
     * @return $this
     */
    public function withScheduledAction1($scheduledAction1)
    {
        $this->data['ScheduledAction1'] = $scheduledAction1;
        $this->options['query']['ScheduledAction.1'] = $scheduledAction1;

        return $this;
    }

    /**
     * @param string $scheduledAction6
     *
     * @return $this
     */
    public function withScheduledAction6($scheduledAction6)
    {
        $this->data['ScheduledAction6'] = $scheduledAction6;
        $this->options['query']['ScheduledAction.6'] = $scheduledAction6;

        return $this;
    }

    /**
     * @param string $scheduledAction5
     *
     * @return $this
     */
    public function withScheduledAction5($scheduledAction5)
    {
        $this->data['ScheduledAction5'] = $scheduledAction5;
        $this->options['query']['ScheduledAction.5'] = $scheduledAction5;

        return $this;
    }

    /**
     * @param string $scheduledAction4
     *
     * @return $this
     */
    public function withScheduledAction4($scheduledAction4)
    {
        $this->data['ScheduledAction4'] = $scheduledAction4;
        $this->options['query']['ScheduledAction.4'] = $scheduledAction4;

        return $this;
    }

    /**
     * @param string $scheduledAction3
     *
     * @return $this
     */
    public function withScheduledAction3($scheduledAction3)
    {
        $this->data['ScheduledAction3'] = $scheduledAction3;
        $this->options['query']['ScheduledAction.3'] = $scheduledAction3;

        return $this;
    }

    /**
     * @param string $scheduledAction9
     *
     * @return $this
     */
    public function withScheduledAction9($scheduledAction9)
    {
        $this->data['ScheduledAction9'] = $scheduledAction9;
        $this->options['query']['ScheduledAction.9'] = $scheduledAction9;

        return $this;
    }

    /**
     * @param string $scheduledAction8
     *
     * @return $this
     */
    public function withScheduledAction8($scheduledAction8)
    {
        $this->data['ScheduledAction8'] = $scheduledAction8;
        $this->options['query']['ScheduledAction.8'] = $scheduledAction8;

        return $this;
    }

    /**
     * @param string $scheduledAction7
     *
     * @return $this
     */
    public function withScheduledAction7($scheduledAction7)
    {
        $this->data['ScheduledAction7'] = $scheduledAction7;
        $this->options['query']['ScheduledAction.7'] = $scheduledAction7;

        return $this;
    }

    /**
     * @param string $scheduledTaskName20
     *
     * @return $this
     */
    public function withScheduledTaskName20($scheduledTaskName20)
    {
        $this->data['ScheduledTaskName20'] = $scheduledTaskName20;
        $this->options['query']['ScheduledTaskName.20'] = $scheduledTaskName20;

        return $this;
    }

    /**
     * @param string $scheduledTaskName19
     *
     * @return $this
     */
    public function withScheduledTaskName19($scheduledTaskName19)
    {
        $this->data['ScheduledTaskName19'] = $scheduledTaskName19;
        $this->options['query']['ScheduledTaskName.19'] = $scheduledTaskName19;

        return $this;
    }

    /**
     * @param string $scheduledTaskName18
     *
     * @return $this
     */
    public function withScheduledTaskName18($scheduledTaskName18)
    {
        $this->data['ScheduledTaskName18'] = $scheduledTaskName18;
        $this->options['query']['ScheduledTaskName.18'] = $scheduledTaskName18;

        return $this;
    }

    /**
     * @param string $scheduledTaskId20
     *
     * @return $this
     */
    public function withScheduledTaskId20($scheduledTaskId20)
    {
        $this->data['ScheduledTaskId20'] = $scheduledTaskId20;
        $this->options['query']['ScheduledTaskId.20'] = $scheduledTaskId20;

        return $this;
    }

    /**
     * @param string $scheduledTaskName13
     *
     * @return $this
     */
    public function withScheduledTaskName13($scheduledTaskName13)
    {
        $this->data['ScheduledTaskName13'] = $scheduledTaskName13;
        $this->options['query']['ScheduledTaskName.13'] = $scheduledTaskName13;

        return $this;
    }

    /**
     * @param string $scheduledTaskName12
     *
     * @return $this
     */
    public function withScheduledTaskName12($scheduledTaskName12)
    {
        $this->data['ScheduledTaskName12'] = $scheduledTaskName12;
        $this->options['query']['ScheduledTaskName.12'] = $scheduledTaskName12;

        return $this;
    }

    /**
     * @param string $scheduledTaskName11
     *
     * @return $this
     */
    public function withScheduledTaskName11($scheduledTaskName11)
    {
        $this->data['ScheduledTaskName11'] = $scheduledTaskName11;
        $this->options['query']['ScheduledTaskName.11'] = $scheduledTaskName11;

        return $this;
    }

    /**
     * @param string $scheduledTaskName10
     *
     * @return $this
     */
    public function withScheduledTaskName10($scheduledTaskName10)
    {
        $this->data['ScheduledTaskName10'] = $scheduledTaskName10;
        $this->options['query']['ScheduledTaskName.10'] = $scheduledTaskName10;

        return $this;
    }

    /**
     * @param string $scheduledTaskName17
     *
     * @return $this
     */
    public function withScheduledTaskName17($scheduledTaskName17)
    {
        $this->data['ScheduledTaskName17'] = $scheduledTaskName17;
        $this->options['query']['ScheduledTaskName.17'] = $scheduledTaskName17;

        return $this;
    }

    /**
     * @param string $scheduledTaskName16
     *
     * @return $this
     */
    public function withScheduledTaskName16($scheduledTaskName16)
    {
        $this->data['ScheduledTaskName16'] = $scheduledTaskName16;
        $this->options['query']['ScheduledTaskName.16'] = $scheduledTaskName16;

        return $this;
    }

    /**
     * @param string $scheduledTaskName15
     *
     * @return $this
     */
    public function withScheduledTaskName15($scheduledTaskName15)
    {
        $this->data['ScheduledTaskName15'] = $scheduledTaskName15;
        $this->options['query']['ScheduledTaskName.15'] = $scheduledTaskName15;

        return $this;
    }

    /**
     * @param string $scheduledTaskName14
     *
     * @return $this
     */
    public function withScheduledTaskName14($scheduledTaskName14)
    {
        $this->data['ScheduledTaskName14'] = $scheduledTaskName14;
        $this->options['query']['ScheduledTaskName.14'] = $scheduledTaskName14;

        return $this;
    }

    /**
     * @param string $scheduledTaskId2
     *
     * @return $this
     */
    public function withScheduledTaskId2($scheduledTaskId2)
    {
        $this->data['ScheduledTaskId2'] = $scheduledTaskId2;
        $this->options['query']['ScheduledTaskId.2'] = $scheduledTaskId2;

        return $this;
    }

    /**
     * @param string $scheduledTaskId1
     *
     * @return $this
     */
    public function withScheduledTaskId1($scheduledTaskId1)
    {
        $this->data['ScheduledTaskId1'] = $scheduledTaskId1;
        $this->options['query']['ScheduledTaskId.1'] = $scheduledTaskId1;

        return $this;
    }

    /**
     * @param string $scheduledTaskId4
     *
     * @return $this
     */
    public function withScheduledTaskId4($scheduledTaskId4)
    {
        $this->data['ScheduledTaskId4'] = $scheduledTaskId4;
        $this->options['query']['ScheduledTaskId.4'] = $scheduledTaskId4;

        return $this;
    }

    /**
     * @param string $scheduledTaskId18
     *
     * @return $this
     */
    public function withScheduledTaskId18($scheduledTaskId18)
    {
        $this->data['ScheduledTaskId18'] = $scheduledTaskId18;
        $this->options['query']['ScheduledTaskId.18'] = $scheduledTaskId18;

        return $this;
    }

    /**
     * @param string $scheduledTaskId3
     *
     * @return $this
     */
    public function withScheduledTaskId3($scheduledTaskId3)
    {
        $this->data['ScheduledTaskId3'] = $scheduledTaskId3;
        $this->options['query']['ScheduledTaskId.3'] = $scheduledTaskId3;

        return $this;
    }

    /**
     * @param string $scheduledTaskId19
     *
     * @return $this
     */
    public function withScheduledTaskId19($scheduledTaskId19)
    {
        $this->data['ScheduledTaskId19'] = $scheduledTaskId19;
        $this->options['query']['ScheduledTaskId.19'] = $scheduledTaskId19;

        return $this;
    }

    /**
     * @param string $scheduledTaskId6
     *
     * @return $this
     */
    public function withScheduledTaskId6($scheduledTaskId6)
    {
        $this->data['ScheduledTaskId6'] = $scheduledTaskId6;
        $this->options['query']['ScheduledTaskId.6'] = $scheduledTaskId6;

        return $this;
    }

    /**
     * @param string $scheduledTaskId5
     *
     * @return $this
     */
    public function withScheduledTaskId5($scheduledTaskId5)
    {
        $this->data['ScheduledTaskId5'] = $scheduledTaskId5;
        $this->options['query']['ScheduledTaskId.5'] = $scheduledTaskId5;

        return $this;
    }

    /**
     * @param string $scheduledTaskId8
     *
     * @return $this
     */
    public function withScheduledTaskId8($scheduledTaskId8)
    {
        $this->data['ScheduledTaskId8'] = $scheduledTaskId8;
        $this->options['query']['ScheduledTaskId.8'] = $scheduledTaskId8;

        return $this;
    }

    /**
     * @param string $scheduledTaskName9
     *
     * @return $this
     */
    public function withScheduledTaskName9($scheduledTaskName9)
    {
        $this->data['ScheduledTaskName9'] = $scheduledTaskName9;
        $this->options['query']['ScheduledTaskName.9'] = $scheduledTaskName9;

        return $this;
    }

    /**
     * @param string $scheduledAction20
     *
     * @return $this
     */
    public function withScheduledAction20($scheduledAction20)
    {
        $this->data['ScheduledAction20'] = $scheduledAction20;
        $this->options['query']['ScheduledAction.20'] = $scheduledAction20;

        return $this;
    }

    /**
     * @param string $scheduledTaskId7
     *
     * @return $this
     */
    public function withScheduledTaskId7($scheduledTaskId7)
    {
        $this->data['ScheduledTaskId7'] = $scheduledTaskId7;
        $this->options['query']['ScheduledTaskId.7'] = $scheduledTaskId7;

        return $this;
    }

    /**
     * @param string $scheduledTaskId12
     *
     * @return $this
     */
    public function withScheduledTaskId12($scheduledTaskId12)
    {
        $this->data['ScheduledTaskId12'] = $scheduledTaskId12;
        $this->options['query']['ScheduledTaskId.12'] = $scheduledTaskId12;

        return $this;
    }

    /**
     * @param string $scheduledTaskName7
     *
     * @return $this
     */
    public function withScheduledTaskName7($scheduledTaskName7)
    {
        $this->data['ScheduledTaskName7'] = $scheduledTaskName7;
        $this->options['query']['ScheduledTaskName.7'] = $scheduledTaskName7;

        return $this;
    }

    /**
     * @param string $scheduledTaskId9
     *
     * @return $this
     */
    public function withScheduledTaskId9($scheduledTaskId9)
    {
        $this->data['ScheduledTaskId9'] = $scheduledTaskId9;
        $this->options['query']['ScheduledTaskId.9'] = $scheduledTaskId9;

        return $this;
    }

    /**
     * @param string $scheduledTaskId13
     *
     * @return $this
     */
    public function withScheduledTaskId13($scheduledTaskId13)
    {
        $this->data['ScheduledTaskId13'] = $scheduledTaskId13;
        $this->options['query']['ScheduledTaskId.13'] = $scheduledTaskId13;

        return $this;
    }

    /**
     * @param string $scheduledTaskName8
     *
     * @return $this
     */
    public function withScheduledTaskName8($scheduledTaskName8)
    {
        $this->data['ScheduledTaskName8'] = $scheduledTaskName8;
        $this->options['query']['ScheduledTaskName.8'] = $scheduledTaskName8;

        return $this;
    }

    /**
     * @param string $scheduledTaskId10
     *
     * @return $this
     */
    public function withScheduledTaskId10($scheduledTaskId10)
    {
        $this->data['ScheduledTaskId10'] = $scheduledTaskId10;
        $this->options['query']['ScheduledTaskId.10'] = $scheduledTaskId10;

        return $this;
    }

    /**
     * @param string $scheduledTaskName5
     *
     * @return $this
     */
    public function withScheduledTaskName5($scheduledTaskName5)
    {
        $this->data['ScheduledTaskName5'] = $scheduledTaskName5;
        $this->options['query']['ScheduledTaskName.5'] = $scheduledTaskName5;

        return $this;
    }

    /**
     * @param string $scheduledTaskId11
     *
     * @return $this
     */
    public function withScheduledTaskId11($scheduledTaskId11)
    {
        $this->data['ScheduledTaskId11'] = $scheduledTaskId11;
        $this->options['query']['ScheduledTaskId.11'] = $scheduledTaskId11;

        return $this;
    }

    /**
     * @param string $scheduledTaskName6
     *
     * @return $this
     */
    public function withScheduledTaskName6($scheduledTaskName6)
    {
        $this->data['ScheduledTaskName6'] = $scheduledTaskName6;
        $this->options['query']['ScheduledTaskName.6'] = $scheduledTaskName6;

        return $this;
    }

    /**
     * @param string $scheduledTaskId16
     *
     * @return $this
     */
    public function withScheduledTaskId16($scheduledTaskId16)
    {
        $this->data['ScheduledTaskId16'] = $scheduledTaskId16;
        $this->options['query']['ScheduledTaskId.16'] = $scheduledTaskId16;

        return $this;
    }

    /**
     * @param string $scheduledTaskName3
     *
     * @return $this
     */
    public function withScheduledTaskName3($scheduledTaskName3)
    {
        $this->data['ScheduledTaskName3'] = $scheduledTaskName3;
        $this->options['query']['ScheduledTaskName.3'] = $scheduledTaskName3;

        return $this;
    }

    /**
     * @param string $scheduledTaskId17
     *
     * @return $this
     */
    public function withScheduledTaskId17($scheduledTaskId17)
    {
        $this->data['ScheduledTaskId17'] = $scheduledTaskId17;
        $this->options['query']['ScheduledTaskId.17'] = $scheduledTaskId17;

        return $this;
    }

    /**
     * @param string $scheduledTaskName4
     *
     * @return $this
     */
    public function withScheduledTaskName4($scheduledTaskName4)
    {
        $this->data['ScheduledTaskName4'] = $scheduledTaskName4;
        $this->options['query']['ScheduledTaskName.4'] = $scheduledTaskName4;

        return $this;
    }

    /**
     * @param string $scheduledTaskId14
     *
     * @return $this
     */
    public function withScheduledTaskId14($scheduledTaskId14)
    {
        $this->data['ScheduledTaskId14'] = $scheduledTaskId14;
        $this->options['query']['ScheduledTaskId.14'] = $scheduledTaskId14;

        return $this;
    }

    /**
     * @param string $scheduledTaskName1
     *
     * @return $this
     */
    public function withScheduledTaskName1($scheduledTaskName1)
    {
        $this->data['ScheduledTaskName1'] = $scheduledTaskName1;
        $this->options['query']['ScheduledTaskName.1'] = $scheduledTaskName1;

        return $this;
    }

    /**
     * @param string $scheduledTaskId15
     *
     * @return $this
     */
    public function withScheduledTaskId15($scheduledTaskId15)
    {
        $this->data['ScheduledTaskId15'] = $scheduledTaskId15;
        $this->options['query']['ScheduledTaskId.15'] = $scheduledTaskId15;

        return $this;
    }

    /**
     * @param string $scheduledTaskName2
     *
     * @return $this
     */
    public function withScheduledTaskName2($scheduledTaskName2)
    {
        $this->data['ScheduledTaskName2'] = $scheduledTaskName2;
        $this->options['query']['ScheduledTaskName.2'] = $scheduledTaskName2;

        return $this;
    }

    /**
     * @param string $scheduledAction18
     *
     * @return $this
     */
    public function withScheduledAction18($scheduledAction18)
    {
        $this->data['ScheduledAction18'] = $scheduledAction18;
        $this->options['query']['ScheduledAction.18'] = $scheduledAction18;

        return $this;
    }

    /**
     * @param string $scheduledAction19
     *
     * @return $this
     */
    public function withScheduledAction19($scheduledAction19)
    {
        $this->data['ScheduledAction19'] = $scheduledAction19;
        $this->options['query']['ScheduledAction.19'] = $scheduledAction19;

        return $this;
    }

    /**
     * @param string $scheduledAction16
     *
     * @return $this
     */
    public function withScheduledAction16($scheduledAction16)
    {
        $this->data['ScheduledAction16'] = $scheduledAction16;
        $this->options['query']['ScheduledAction.16'] = $scheduledAction16;

        return $this;
    }

    /**
     * @param string $scheduledAction17
     *
     * @return $this
     */
    public function withScheduledAction17($scheduledAction17)
    {
        $this->data['ScheduledAction17'] = $scheduledAction17;
        $this->options['query']['ScheduledAction.17'] = $scheduledAction17;

        return $this;
    }

    /**
     * @param string $scheduledAction14
     *
     * @return $this
     */
    public function withScheduledAction14($scheduledAction14)
    {
        $this->data['ScheduledAction14'] = $scheduledAction14;
        $this->options['query']['ScheduledAction.14'] = $scheduledAction14;

        return $this;
    }

    /**
     * @param string $scheduledAction15
     *
     * @return $this
     */
    public function withScheduledAction15($scheduledAction15)
    {
        $this->data['ScheduledAction15'] = $scheduledAction15;
        $this->options['query']['ScheduledAction.15'] = $scheduledAction15;

        return $this;
    }

    /**
     * @param string $scheduledAction12
     *
     * @return $this
     */
    public function withScheduledAction12($scheduledAction12)
    {
        $this->data['ScheduledAction12'] = $scheduledAction12;
        $this->options['query']['ScheduledAction.12'] = $scheduledAction12;

        return $this;
    }

    /**
     * @param string $scheduledAction13
     *
     * @return $this
     */
    public function withScheduledAction13($scheduledAction13)
    {
        $this->data['ScheduledAction13'] = $scheduledAction13;
        $this->options['query']['ScheduledAction.13'] = $scheduledAction13;

        return $this;
    }

    /**
     * @param string $scheduledAction10
     *
     * @return $this
     */
    public function withScheduledAction10($scheduledAction10)
    {
        $this->data['ScheduledAction10'] = $scheduledAction10;
        $this->options['query']['ScheduledAction.10'] = $scheduledAction10;

        return $this;
    }

    /**
     * @param string $scheduledAction11
     *
     * @return $this
     */
    public function withScheduledAction11($scheduledAction11)
    {
        $this->data['ScheduledAction11'] = $scheduledAction11;
        $this->options['query']['ScheduledAction.11'] = $scheduledAction11;

        return $this;
    }
}
