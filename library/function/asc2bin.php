<?PHP

// $Id$


/**
 * �ַ���ת������
 * 
 * @param string $str
 * @return string
 */
function asc2bin ($str) 
{ 
    $data = '';        
    $len = strlen($str); 
    for ($i=0; $i<$len; $i++) 
    {
        $data .= sprintf("%02x",ord(substr($str,$i,1))); 
    }        
    return pack('H*', $data); 
}