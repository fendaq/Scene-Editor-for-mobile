<?PHP

// $Id$


/**
 * ����Ŀ¼��, PHP 5�����Ѿ�֧�� recursive ���ô˺���
 * /p/a/t/h/n
 * 
 * @param string $dir
 * @param int $mode
 * @return boolean
 * 
 */
function mkdir_r($dir, $mode = 0755)
{
	return is_dir($dir) || ( mkdir_r(dirname($dir), $mode) && @mkdir($dir, $mode) );
}
