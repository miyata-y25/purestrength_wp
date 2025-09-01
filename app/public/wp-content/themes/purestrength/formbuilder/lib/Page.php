<?php
/****************
 * ページ表示用クラス
 */

// 読み込み
require_once \Config::$set_mysmarty;

// クラスの定義
class Page {

	// 変数定義
	var $_smarty;
	var $_device;
	var $_page;

	// コンストラクタ
	function __construct($page = "") {
		$this->_smarty = new MySmarty();
		$this->_page = $page;
	}

	// アサイン
	function setAssign($name, $obj) {
		$this->_smarty->assign($name, $obj);
	}

	// HTML取得
	function getHtml($tplPath) {
		return $this->_smarty->fetch($tplPath);
	}

	// ページ表示関数
	// 引数：$tplPath テンプレートのパス
	function dispPage($tplPath) {

		$this->_smarty->display($tplPath);
	}
}
?>