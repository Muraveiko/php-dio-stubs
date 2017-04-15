<?php
// start php_dio.dll

die('This file is used for development purposes only.');

/**
 * Opens a file (creating it if necessary) at a lower level than the C library input/ouput stream functions allow.
 * @link http://php.net/manual/en/function.dio-open.php
 *
 * @param string $filename  The pathname of the file to open.
 * @param int $flags parameter is a bitwise-ORed value comprising flags from the following list.
 * This value must include one of O_RDONLY, O_WRONLY or O_RDWR.
 * Additionally, it may include any combination of the other flags from this list.
 * <table>
 * <tr><td>O_RDONLY</td><td> - opens the file for read access.</td></tr>
 * <tr><td>O_WRONLY</td><td> - opens the file for write access.</td></tr>
 * <tr><td>O_RDWR</td><td> - opens the file for both reading and writing.</td></tr>
 * <tr><td>O_CREAT</td><td> - creates the file, if it doesn&#039;t already exist.</td></tr>
 * <tr><td>O_EXCL</td><td> - if both O_CREAT and O_EXCL  are set and the file already exists, dio_open() will fail.</td></tr>
 * <tr><td>O_TRUNC</td><td> - if the file exists and is opened for write access, the file will be truncated to zero length.</td></tr>
 * <tr><td>O_APPEND</td><td> - write operations write data at the end of the file.</td></tr>
 * <tr><td>O_NONBLOCK</td><td> - sets non blocking mode. </td></tr>
 * <tr><td>O_NOCTTY</td><td> - prevent the OS from assigning the opened file as the process&#039;s controlling terminal when opening a TTY device file.</td></tr>
 * </table>
 * @param int $mode <p>If flags contains O_CREAT, mode will set the permissions of the file (creation permissions).
 * mode is required for correct operation when O_CREAT is specified in flags and is ignored otherwise.
 * </p>
 * <p>
 * The actual permissions assigned to the created file will be affected by the process's umask setting as per usual.
 * </p>
 *
 * @see  dio_close() - Closes the file descriptor given by fd
 *
 * @return resource|boolean   A file descriptor or FALSE on error.
 */
function dio_open($filename , $flags , $mode = 0){}

/**
 * Reads bytes from a file descriptor
 *
 * @see dio_write() - Writes data to fd with optional truncation at length
 * @link http://php.net/manual/en/function.dio-read.php
 *
 * @param resource $fd The file descriptor returned by dio_open().
 * @param int $len The number of bytes to read. If not specified, dio_read() reads 1K sized block.
 *
 * @return string The bytes read from fd.
 */
function dio_read ( $fd, $len = 1024  ){}


/**
 *  Writes data to fd with optional truncation at length
 *
 * @param resource $fd  The file descriptor returned by dio_open()
 * @param string $data  The written data.
 * @param int $len The length of data to write in bytes. If not specified, the
function writes all the data to the specified file.
 *
 * @return int Returns the number of bytes written
 *
 * @see dio_read() - Reads bytes from a file descriptor
 * @link http://php.net/manual/en/function.dio-write.php
 */
function dio_write($fd,$data,$len=0){}


/**
 * Closes the file descriptor given by fd
 *
 * @param resource $fd The file descriptor returned by dio_open().
 * @return  voi No value is returned.
 */
function dio_close($fd){}

/**
 * Performs a c library fcntl on fd
 * <p></p>
 * <p>The dio_fcntl() function performs the operation specified by cmd on the file descriptor fd. Some commands require additional arguments args to be supplied.</p>
 *
 * @link http://php.net/manual/en/function.dio-fcntl.php
 *
 * @param resource $fd The file descriptor returned by dio_open().
 * @param int $cmd
 * @param mixed $args   is an associative array, when cmd is F_SETLK or F_SETLLW
 *
 * @return mixed Returns the result of the C call.
 */
function dio_fcntl( resource $fd , int $cmd , mixed $args = null ){}


/**
 * Seeks to pos on fd from whence
 * <p></p>
 * <p>The function dio_seek() is used to change the file position of the given file descriptor.</p>
 * @link http://php.net/manual/en/function.dio-seek.php
 *
 * @param resource $fd The file descriptor returned by dio_open().
 * @param int $pos The new position.
 * @param int $whence Specifies how the position pos should be interpreted
 * <table>
 * <tr><td>SEEK_SET </td><td>specifies that pos is specified from the beginning of the file.</td></tr>
 * <tr><td>SEEK_CUR</td><td>Specifies that pos is a count of characters from the current file position. This count may be positive or negative.</td></tr>
 * <tr><td>SEEK_END </td><td>Specifies that pos is a count of characters from the end of the file. A negative count specifies a position within the current extent of the file; a positive count specifies a position past the current end. If you set the position past the current end, and actually write data, you will extend the file with zeros up to that position.</td></tr>
 * </table>
 *
 * @return void  В документации разночтение . Заявлено что целое, но неописано и используется как void.
 */
function  dio_seek ($fd ,$pos ,$whence = SEEK_SET  ){}


/**
 * Gets stat information about the file descriptor fd
 * @link http://php.net/manual/en/function.dio-stat.php
 *
 * @param resource $fd
 *
 * @return array
 */
function dio_stat ( $fd ){}

/**
 * Sets terminal attributes and baud rate for a serial port
 * @link http://php.net/manual/en/function.dio-tcsetattr.php
 *
 * @param resource $fd The file descriptor returned by dio_open().
 * @param array $options
 *
 * @deprecated  if not supported use exec('mode com1: baud=9600 data=8 stop=1 parity=n xon=on') or exec('stty -F /dev/ttyS0 4800 raw');
 *
 * @return void  В документации разночтение . Заявлено что bool, но описано  как void.
 */
function dio_tcsetattr ( $fd , $options ){}


/**
 * Truncates file descriptor fd to offset bytes
 *
 * @link http://php.net/manual/en/function.dio-truncate.php
 *
 * @param resource $fd The file descriptor returned by dio_open().
 * @param int $offset The offset in bytes.
 *
 * @deprecated  This function is not implemented on Windows platforms.
 *
 * @return bool success or not
 */
function dio_truncate ( resource $fd , int $offset ){}
