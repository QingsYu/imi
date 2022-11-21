<?php

declare(strict_types=1);

namespace Imi\Server\Http\Message\Proxy;

use Imi\RequestContextProxy\Annotation\RequestContextProxy;
use Imi\RequestContextProxy\BaseRequestContextProxy;

/**
 * @RequestContextProxy(class="Imi\Server\Http\Message\Contract\IHttpResponse", name="response")
 *
 * @method        \Imi\Server\Http\Message\Contract\IHttpResponse redirect(string $url, int $status = 302)
 * @method static \Imi\Server\Http\Message\Contract\IHttpResponse redirect(string $url, int $status = 302)
 * @method        \Imi\Server\Http\Message\Contract\IHttpResponse send()
 * @method static \Imi\Server\Http\Message\Contract\IHttpResponse send()
 * @method        \Imi\Server\Http\Message\Contract\IHttpResponse sendFile(string $filename, ?string $contentType = NULL, ?string $outputFileName = NULL, int $offset = 0, int $length = 0)
 * @method static \Imi\Server\Http\Message\Contract\IHttpResponse sendFile(string $filename, ?string $contentType = NULL, ?string $outputFileName = NULL, int $offset = 0, int $length = 0)
 * @method        bool                                            isHeaderWritable()
 * @method static bool                                            isHeaderWritable()
 * @method        bool                                            isBodyWritable()
 * @method static bool                                            isBodyWritable()
 * @method        \Imi\Util\Http\Contract\IResponse               setStatus(int $code, string $reasonPhrase = '')
 * @method static \Imi\Util\Http\Contract\IResponse               setStatus(int $code, string $reasonPhrase = '')
 * @method        \Imi\Util\Http\Contract\IResponse               withCookie(string $key, string $value, int $expire = 0, string $path = '/', string $domain = '', bool $secure = false, bool $httponly = false)
 * @method static \Imi\Util\Http\Contract\IResponse               withCookie(string $key, string $value, int $expire = 0, string $path = '/', string $domain = '', bool $secure = false, bool $httponly = false)
 * @method        \Imi\Util\Http\Contract\IResponse               setCookie(string $key, string $value, int $expire = 0, string $path = '/', string $domain = '', bool $secure = false, bool $httponly = false)
 * @method static \Imi\Util\Http\Contract\IResponse               setCookie(string $key, string $value, int $expire = 0, string $path = '/', string $domain = '', bool $secure = false, bool $httponly = false)
 * @method        array                                           getCookieParams()
 * @method static array                                           getCookieParams()
 * @method        mixed                                           getCookie(string $name, $default = NULL)
 * @method static mixed                                           getCookie(string $name, $default = NULL)
 * @method        array                                           getTrailers()
 * @method static array                                           getTrailers()
 * @method        bool                                            hasTrailer(string $name)
 * @method static bool                                            hasTrailer(string $name)
 * @method        string|null                                     getTrailer(string $name)
 * @method static string|null                                     getTrailer(string $name)
 * @method        \Imi\Util\Http\Contract\IResponse               withTrailer(string $name, string $value)
 * @method static \Imi\Util\Http\Contract\IResponse               withTrailer(string $name, string $value)
 * @method        \Imi\Util\Http\Contract\IResponse               setTrailer(string $name, string $value)
 * @method static \Imi\Util\Http\Contract\IResponse               setTrailer(string $name, string $value)
 * @method        int                                             getStatusCode()
 * @method static int                                             getStatusCode()
 * @method        \Psr\Http\Message\ResponseInterface             withStatus($code, $reasonPhrase = '')
 * @method static \Psr\Http\Message\ResponseInterface             withStatus($code, $reasonPhrase = '')
 * @method        string                                          getReasonPhrase()
 * @method static string                                          getReasonPhrase()
 * @method        string                                          getProtocolVersion()
 * @method static string                                          getProtocolVersion()
 * @method        \Psr\Http\Message\MessageInterface              withProtocolVersion($version)
 * @method static \Psr\Http\Message\MessageInterface              withProtocolVersion($version)
 * @method        string[][]                                      getHeaders()
 * @method static string[][]                                      getHeaders()
 * @method        bool                                            hasHeader($name)
 * @method static bool                                            hasHeader($name)
 * @method        string[]                                        getHeader($name)
 * @method static string[]                                        getHeader($name)
 * @method        string                                          getHeaderLine($name)
 * @method static string                                          getHeaderLine($name)
 * @method        \Psr\Http\Message\MessageInterface              withHeader($name, $value)
 * @method static \Psr\Http\Message\MessageInterface              withHeader($name, $value)
 * @method        \Psr\Http\Message\MessageInterface              withAddedHeader($name, $value)
 * @method static \Psr\Http\Message\MessageInterface              withAddedHeader($name, $value)
 * @method        \Psr\Http\Message\MessageInterface              withoutHeader($name)
 * @method static \Psr\Http\Message\MessageInterface              withoutHeader($name)
 * @method        \Psr\Http\Message\StreamInterface               getBody()
 * @method static \Psr\Http\Message\StreamInterface               getBody()
 * @method        \Psr\Http\Message\MessageInterface              withBody(\Psr\Http\Message\StreamInterface $body)
 * @method static \Psr\Http\Message\MessageInterface              withBody(\Psr\Http\Message\StreamInterface $body)
 * @method        \Imi\Util\Http\Contract\IMessage                setProtocolVersion(string $version)
 * @method static \Imi\Util\Http\Contract\IMessage                setProtocolVersion(string $version)
 * @method        \Imi\Util\Http\Contract\IMessage                setHeader(string $name, $value)
 * @method static \Imi\Util\Http\Contract\IMessage                setHeader(string $name, $value)
 * @method        \Imi\Util\Http\Contract\IMessage                addHeader(string $name, $value)
 * @method static \Imi\Util\Http\Contract\IMessage                addHeader(string $name, $value)
 * @method        \Imi\Util\Http\Contract\IMessage                removeHeader(string $name)
 * @method static \Imi\Util\Http\Contract\IMessage                removeHeader(string $name)
 * @method        \Imi\Util\Http\Contract\IMessage                setBody(\Psr\Http\Message\StreamInterface $body)
 * @method static \Imi\Util\Http\Contract\IMessage                setBody(\Psr\Http\Message\StreamInterface $body)
 */
class ResponseProxy extends BaseRequestContextProxy
{
}
