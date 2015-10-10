<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 * 
 * $Id$
 */


	/**
	 * Smarty strimwidth modifier plugin,
	 * ���ַ�����ȡ��������ȡ
	 *
	 * ��Ҫ��ǰ���� mb_internal_encoding("UTF-8") �� mb_internal_encoding("GBK")
	 *
	 *
	 * Type:     modifier<br>
	 * Name:     strimwidth<br>
	 * Purpose:  Smary �Դ��� truncate ֻ֧��Ӣ�İ�ǣ��������޸İ汾��ȥ����$break_word��middle�����������,
	 *           �޸�֧��ȫ�Ǹ���UTF�������ַ�
	 *           ��������Ҫ�������ַ���ȿ���.
	 *           ����Ǵ���UTF-8����Ҫ��ǰ���� mb_internal_encoding("UTF-8") .
	 * @author   liut < Eagle.L at gmail dot com >
	 * @param string $string
	 * @param integer $length ��Ҫ��������Ŀ��
	 * @param string $etc
	 * @return string
	 */
	function smarty_modifier_strimwidth($string, $start = 0, $width = 80, $etc = '��')
	{
		if ($width == 0) {
	        return '';
		}
		return mb_strimwidth($string, $start, $width, $etc);
/*
		$strlen = mb_strlen($string);

	    if ($strlen > $length || mb_strwidth($string) > $length) {
	        $length -= mb_strwidth($etc);
			$str     = "";
			$count   = 0;
			for ($i = 0; $i < $strlen; $i ++) {
				$curr = mb_substr($string, $i, 1);
				$str .= $curr;
				$count ++;
				if (mb_strwidth($curr) == 2){
					$count ++;
				}
				if ($count >= $length){
					break;
				}
			}
			return $str.$etc;

	    } else {
	        return $string;
	    }
		*/
	}
 

/* vim: set expandtab: */

?>
