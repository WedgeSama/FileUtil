<?php
/*
 * This file is part of the ws-libraries package.
 *
 * (c) Benjamin Georgeault <github@wedgesama.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WS\Libraries\FileUtil\Tests;

use WS\Libraries\FileUtil\MimeType;

/**
 * MimeTypeTest
 *
 * @author Benjamin Georgeault <github@wedgesama.fr>
 */
class MimeTypeTest extends \PHPUnit_Framework_TestCase
{
    public function provideDefaultMimeType()
    {
        return array(
            array('foo.bar'),
            array('bar.foo'),
            array('/home/user/toto.tata'),
            array('C:\\css\\style.not_css_ext'),
        );
    }

    /**
     * @dataProvider provideDefaultMimeType
     */
    public function testDefaultMimeType($file)
    {
        $this->assertSame(MimeType::DEFAULT_MIME_TYPE, MimeType::guessMimeType($file));
    }

    public function provideMimeType()
    {
        return array(
            array('styles.css', 'text/css'),
            array('scripts.js', 'application/javascript'),
            array('/root/rm-all.sh', 'application/x-sh'),
            array('C:\\programs\\wtf.exe', 'application/x-msdownload'),
        );
    }

    /**
     * @dataProvider provideMimeType
     */
    public function testMimeType($file, $mimeType)
    {
        $this->assertSame($mimeType, MimeType::guessMimeType($file));
    }
}
