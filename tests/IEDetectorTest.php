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
     * @param bool $expectedIsIE9
     */
    public function testIsIE($userAgentString, $expectedIsIE6, $expectedIsIE7, $expectedIsIE8, $expectedIsIE9)
    {
        $this->assertEquals($expectedIsIE6, IEDetector::isIE6($userAgentString));
        $this->assertEquals($expectedIsIE7, IEDetector::isIE7($userAgentString));
        $this->assertEquals($expectedIsIE8, IEDetector::isIE8($userAgentString));
        $this->assertEquals($expectedIsIE9, IEDetector::isIE9($userAgentString));
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
                'expectedIsIE9' => false,
            ],
            'IE6.0 98' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 6.0b; Windows 98)',
                'expectedIsIE6' => true,
                'expectedIsIE7' => false,
                'expectedIsIE8' => false,
                'expectedIsIE9' => false,
            ],
            'IE6.01 Vista' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 6.01; Windows NT 6.0)',
                'expectedIsIE6' => true,
                'expectedIsIE7' => false,
                'expectedIsIE8' => false,
                'expectedIsIE9' => false,
            ],
            'IE6.1 XP' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 6.1; Windows XP)',
                'expectedIsIE6' => true,
                'expectedIsIE7' => false,
                'expectedIsIE8' => false,
                'expectedIsIE9' => false,
            ],
            'IE7.0 XPSP"' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)',
                'expectedIsIE6' => false,
                'expectedIsIE7' => true,
                'expectedIsIE8' => false,
                'expectedIsIE9' => false,
            ],
            'IE7.0 Vista' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0)',
                'expectedIsIE6' => false,
                'expectedIsIE7' => true,
                'expectedIsIE8' => false,
                'expectedIsIE9' => false,
            ],
            //
            'IE8.0 in IE 6.0 compatability mode' => [
                'userAgentString' =>
                    'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; Mozilla/4.0 '
                    .'(compatible; MSIE 6.0; Windows NT 5.1; SV1) ; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; '
                    .'.NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; InfoPath.3; Tablet PC 2.0)',
                'expectedIsIE6' => false,
                'expectedIsIE7' => false,
                'expectedIsIE8' => true,
                'expectedIsIE9' => false,
            ],
            'IE8.0 Vista' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0)',
                'expectedIsIE6' => false,
                'expectedIsIE7' => false,
                'expectedIsIE8' => true,
                'expectedIsIE9' => false,
            ],
            'IE8.0 7' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)',
                'expectedIsIE6' => false,
                'expectedIsIE7' => false,
                'expectedIsIE8' => true,
                'expectedIsIE9' => false,
            ],
            'Opera 9.50' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux x86_64; en) Opera 9.50',
                'expectedIsIE6' => false,
                'expectedIsIE7' => false,
                'expectedIsIE8' => false,
                'expectedIsIE9' => false,
            ],
            'Opera 11.01' => [
                'userAgentString' => 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; de) Opera 11.01',
                'expectedIsIE6' => false,
                'expectedIsIE7' => false,
                'expectedIsIE8' => false,
                'expectedIsIE9' => false,
            ],
            'IE9' => [
                'userAgentString' => 'Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US))',
                'expectedIsIE6' => false,
                'expectedIsIE7' => false,
                'expectedIsIE8' => false,
                'expectedIsIE9' => true,
            ],
            'Opera 12.14' => [
                'userAgentString' => 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0) Opera 12.14',
                'expectedIsIE6' => false,
                'expectedIsIE7' => false,
                'expectedIsIE8' => false,
                'expectedIsIE9' => false,
            ],
        ];
    }
}
