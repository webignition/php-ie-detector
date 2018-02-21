<?php

namespace webignition\Tests\IEDetector;

use webignition\IEDetector\IEDetector;

class IEDetectorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider userAgentStringDataProvider
     *
     * @param string $userAgentString
     * @param bool $expectedIsIE6
     * @param bool $expectedIsIE7
     * @param bool $expectedIsIE8
     */
    public function testIsIE($userAgentString, $expectedIsIE6, $expectedIsIE7, $expectedIsIE8)
    {
        $this->assertEquals($expectedIsIE6, IEDetector::isIE6($userAgentString));
        $this->assertEquals($expectedIsIE7, IEDetector::isIE7($userAgentString));
        $this->assertEquals($expectedIsIE8, IEDetector::isIE8($userAgentString));
    }

    /**
     * @return array
     */
    public function userAgentStringDataProvider()
    {
        return [
            'IE6.0 NT5.0' => [
                'userAgentString' => 'Mozilla/4.0 (MSIE 6.0; Windows NT 5.0)',
                'expectedIsIE6' => true,
                'expectedIsIE7' => false,
                'expectedIsIE8' => false,
            ],
            'IE6.0 98' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 6.0b; Windows 98)',
                'expectedIsIE6' => true,
                'expectedIsIE7' => false,
                'expectedIsIE8' => false,
            ],
            'IE6.01 Vista' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 6.01; Windows NT 6.0)',
                'expectedIsIE6' => true,
                'expectedIsIE7' => false,
                'expectedIsIE8' => false,
            ],
            'IE6.1 XP' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 6.1; Windows XP)',
                'expectedIsIE6' => true,
                'expectedIsIE7' => false,
                'expectedIsIE8' => false,
            ],
            'IE7.0 XPSP"' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)',
                'expectedIsIE6' => false,
                'expectedIsIE7' => true,
                'expectedIsIE8' => false,
            ],
            'IE7.0 Vista' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0)',
                'expectedIsIE6' => false,
                'expectedIsIE7' => true,
                'expectedIsIE8' => false,
            ],
            'IE8.0 Vista' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0)',
                'expectedIsIE6' => false,
                'expectedIsIE7' => false,
                'expectedIsIE8' => true,
            ],
            'IE8.0 7' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)',
                'expectedIsIE6' => false,
                'expectedIsIE7' => false,
                'expectedIsIE8' => true,
            ],
            'Opera 9.50' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux x86_64; en) Opera 9.50',
                'expectedIsIE6' => false,
                'expectedIsIE7' => false,
                'expectedIsIE8' => false,
            ],
            'Opera 11.01' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; de) Opera 11.01',
                'expectedIsIE6' => false,
                'expectedIsIE7' => false,
                'expectedIsIE8' => false,
            ],
        ];
    }
}
