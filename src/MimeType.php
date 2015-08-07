<?php
/*
 * This file is part of the ws-libraries package.
 *
 * (c) Benjamin Georgeault <github@wedgesama.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WS\Libraries\FileUtil;

/**
 * MimeType
 *
 * @author Benjamin Georgeault <github@wedgesama.fr>
 */
class MimeType
{
    const DEFAULT_MIME_TYPE = 'text/plain';

    /**
     * @var array
     */
    private static $types = array(
        // Texts
        'css'   => 'text/css',
        'htm'   => 'text/html',
        'html'  => 'text/html',
        'less'  => 'text/x-less',
        'sass'  => 'text/x-sass',
        'scss'  => 'text/x-scss',
        'txt'   => 'text/plain',
        'xml'   => 'application/xml',

        // Scripts
        'js'    => 'application/javascript',
        'json'  => 'application/json',
        'php'   => 'text/plain',
        'sh'    => 'application/x-sh',

        // Documents
        'doc'   => 'application/msword',
        'docx'  => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'ods'   => 'application/vnd.oasis.opendocument.spreadsheet',
        'odt'   => 'application/vnd.oasis.opendocument.text',
        'pdf'   => 'application/pdf',
        'ppt'   => 'application/vnd.ms-powerpoint',
        'pptx'  => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
        'rtf'   => 'application/rtf',
        'xls'   => 'application/vnd.ms-excel',
        'xslx'  => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',

        // Images
        'ai'    => 'application/postscript',
        'bmp'   => 'image/bmp',
        'eps'   => 'application/postscript',
        'gif'   => 'image/gif',
        'ico'   => 'image/vnd.microsoft.icon',
        'jpe'   => 'image/jpeg',
        'jpeg'  => 'image/jpeg',
        'jpg'   => 'image/jpeg',
        'png'   => 'image/png',
        'ps'    => 'application/postscript',
        'psd'   => 'image/vnd.adobe.photoshop',
        'svg'   => 'image/svg+xml',
        'svgz'  => 'image/svg+xml',
        'tif'   => 'image/tiff',
        'tiff'  => 'image/tiff',

        // Fonts
        'eot'   => 'application/vnd.ms-fontobject',
        'otf'   => 'application/x-font-otf',
        'pcf'   => 'application/x-font-pcf',
        'psf'   => 'application/x-font-linux-psf',
        'snf'   => 'application/x-font-snf',
        'ttc'   => 'application/x-font-ttf',
        'ttf'   => 'application/x-font-ttf',
        'woff'  => 'application/font-woff',
        'woff2' => 'application/font-woff2', // Still draft @see http://www.w3.org/TR/WOFF2/

        // Packages
        'deb'   => 'application/x-debian-package',
        'dmg'   => 'application/x-apple-diskimage',
        'rpm'   => 'application/x-rpm',

        // Executable
        'exe'   => 'application/x-msdownload',
        'msi'   => 'application/x-msdownload',

        // Archives
        '7z'    => 'application/x-7z-compressed',
        'boz'   => 'application/x-bzip2',
        'bz'    => 'application/x-bzip',
        'bz2'   => 'application/x-bzip2',
        'cab'   => 'application/vnd.ms-cab-compressed',
        'rar'   => 'application/x-rar-compressed',
        'zip'   => 'application/zip',

        // Audio
        'aac'   => 'audio/x-aac',
        'flac'  => 'audio/x-flac',
        'kar'   => 'audio/midi',
        'm2a'   => 'audio/mpeg',
        'm3a'   => 'audio/mpeg',
        'm3u'   => 'audio/x-mpegurl',
        'mid'   => 'audio/midi',
        'midi'  => 'audio/midi',
        'mka'   => 'audio/x-matroska',
        'mp2'   => 'audio/mpeg',
        'mp2a'  => 'audio/mpeg',
        'mp3'   => 'audio/mpeg',
        'mp4a'  => 'audio/mp4',
        'mpga'  => 'audio/mpeg',
        'oga'   => 'audio/ogg',
        'ogg'   => 'audio/ogg',
        'rmi'   => 'audio/midi',
        'spx'   => 'audio/ogg',
        'wav'   => 'audio/x-wav',
        'weba'  => 'audio/webm',

        // Video
        '3gp'   => 'video/3gpp',
        'h264'  => 'video/h264',
        'm1v'   => 'video/mpeg',
        'm2v'   => 'video/mpeg',
        'mov'   => 'video/quicktime',
        'mp4'   => 'video/mp4',
        'mp4v'  => 'video/mp4',
        'mpg4'  => 'video/mp4',
        'mpe'   => 'video/mpeg',
        'mpeg'  => 'video/mpeg',
        'mpg'   => 'video/mpeg',
        'ogv'   => 'video/ogg',
        'qt'    => 'video/quicktime',

        // TO BE REMOVE FROM SPACE.
        'flv'   => 'video/x-flv',
        'swf'   => 'application/x-shockwave-flash',
    );

    /**
     * Guess the mime type of a file based on its extension.
     *
     * @param string $file
     *
     * @return string
     */
    public static function guessMimeType($file)
    {
        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));

        return array_key_exists($extension, self::$types)?self::$types[$extension]:self::DEFAULT_MIME_TYPE;
    }
}
