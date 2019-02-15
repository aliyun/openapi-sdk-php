<?php

namespace AlibabaCloud;

use Composer\Script\Event;

/**
 * Class Release
 *
 * @package AlibabaCloud\Client
 */
class Release
{
    /**
     * @param Event $event
     */
    public static function release(Event $event)
    {
        $arguments = $event->getArguments();
        if (count($arguments) <= 1) {
            die('Missing ChangeLog');
        }
        self::updateChangelogFile($arguments[0], $arguments[1]);
        self::changeVersionInCode($arguments[0]);
    }

    /**
     * @return string
     */
    private static function getCodeFile()
    {
        return __DIR__ . '/Constants.php';
    }

    /**
     * @return string
     */
    private static function getChangeLogFile()
    {
        return __DIR__ . '/../CHANGELOG.md';
    }

    /**
     * @return string
     */
    private static function getCodeContent()
    {
        return file_get_contents(self::getCodeFile());
    }

    /**
     * @return string
     */
    private static function getChangeLogContent()
    {
        return file_get_contents(self::getChangeLogFile());
    }

    /**
     * @param $version
     */
    private static function changeVersionInCode($version)
    {
        $content = preg_replace(
            "/ALIBABA_CLOUD_SDK_VERSION\', \'(.*)\');/",
            "const VERSION = '" . $version . "';",
            self::getCodeContent()
        );

        file_put_contents(self::getCodeFile(), $content);
    }

    /**
     * @param $version
     * @param $changeLog
     */
    private static function updateChangelogFile($version, $changeLog)
    {
        $content = preg_replace(
            '/# CHANGELOG/',
            '# CHANGELOG'
            . PHP_EOL
            . PHP_EOL
            . "## $version - " . date('Y-m-d')
            . self::log($changeLog),
            self::getChangeLogContent()
        );

        file_put_contents(self::getChangeLogFile(), $content);
    }

    /**
     * @param $changeLog
     *
     * @return string
     */
    private static function log($changeLog)
    {
        $logs   = explode('|', $changeLog);
        $string = PHP_EOL;
        foreach ($logs as $log) {
            if ($log) {
                $string .= "- $log." . PHP_EOL;
            }
        }

        return $string;
    }
}
