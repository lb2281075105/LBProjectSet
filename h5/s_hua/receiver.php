<?php
/**
 * 便利店模块订阅器
 */
defined('IN_IA') or exit('Access Denied');

class S_huaModuleReceiver extends WeModuleReceiver {
	public function receive() {
		global $_W;
		$type = $this->message['type'];
		
		$s = '==== message ==== '.PHP_EOL;
		foreach ($this->message as $k => $v){
			$s .= "{$k} : {$v}" . PHP_EOL;
		}
		
		echo $s;
	}
}