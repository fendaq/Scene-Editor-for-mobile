<?php
// $Id$
/*
* ���˲����ϵĴ���
*/


class Util_Badwords
{

	/**
	 * function description
	 * 
	 * @param
	 * @return void
	 */
	 function check($word)
	{
		foreach(self::$s_badwords as $bad) {
			if(strpos($word, $bad) !== FALSE) return true;
		}
		return false;
	}

	/**
	 * function description
	 * 
	 * @param
	 * @return void
	 */
	 function replace(&$str, $replace_str = '***')
	{
		str_replace(self::$s_badwords, $replace_str, $str);
		return $str;
	}



static $s_badwords = array(
	"���ֹ�",
	"����",
	"ë��",
	"�ܶ���",
	"������",
	"������",
	"��Сƽ",
	"������",
	"����",
	"��ˮ��",
	"����",
	"̨��",
	"�̹��ֶ�",
	"����",
	"����",
	"���־",
	"������",
	"���ϲ�",
	"�찲��",
	"�˵�",
	"������",
	"��������",
	"�൳",
	"ר��",
	"���Ԫ",
	"���F��",
	"���ض���",
	"̨�����",
	"�½�����",
	"�¼ұ�",
	"٪��֮��",
	"ɫ��",
	"��ɫ",
	"��ɫ",
	"AV",
	"����",
	"��Ű��",
	"��ë",
	"����",
	"�ڽ�",
	"����Ƭ",
	"��Ů",
	"С��Ӱ",
	"Ӧ��",
	"fuck",
	"�ҽ�",
	"18��",
	"͵��",
	"����",
	"�԰�"		
);

}
