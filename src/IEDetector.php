<?php

namespace webignition\IEDetector;

class IEDetector
{
    /**
     * @param string $userAgentString
     *
     * @return bool
     */
    public static function isIE9($userAgentString)
    {
        if (!preg_match('/msie 9\.[0-9]+/i', $userAgentString)) {
            return false;
        }

        if (preg_match('/opera/i', $userAgentString)) {
            return false;
        }

        return true;
    }

    /**
     * @param string $userAgentString
     *
     * @return bool
     */
    public static function isIE8($userAgentString)
    {
        if (!preg_match('/msie 8\.[0-9]+/i', $userAgentString)) {
            return false;
        }

        if (preg_match('/opera/i', $userAgentString)) {
            return false;
        }

        return true;
    }

    /**
     * @param string $userAgentString
     *
     * @return bool
     */
    public static function isIE7($userAgentString)
    {
        if (!preg_match('/msie 7\.[0-9]+/i', $userAgentString)) {
            return false;
        }

        return true;
    }

    /**
     * @param string $userAgentString
     *
     * @return bool
     */
    public static function isIE6($userAgentString)
    {
        if (!preg_match('/msie 6\.[0-9]+/i', $userAgentString)) {
            return false;
        }

        if (preg_match('/opera/i', $userAgentString)) {
            return false;
        }

        if (preg_match('/msie 8.[0-9]+/i', $userAgentString)) {
            return false;
        }

        return true;
    }
}
