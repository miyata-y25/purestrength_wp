<?php
/******************
 * フォーム系クラス
 */

class Form{
	var $_objEvent;
	var $_pageMode;
	var $_formItem;

	// コンストラクタ
	// $imgPath		画像保存パス
	function __construct() {
		mb_regex_encoding("UTF-8");

		// パラメータXSS対策
		if(isset($_GET)) {
			foreach($_GET as $key => $val) {
				$_GET[$key] = htmlspecialchars($val);
			}
		}
	}

	// 送信データ取得
	function getForm($form) {
		$arrForm = array();
		// POSTデータ
		if(isset($form)) {
			foreach($form as $key => $val) {
				if( is_array($val) ) {
					$arrForm[$key] = $this->getForm($val);
				}
				else {
					$arrForm[$key] = htmlspecialchars(stripslashes($val));
				}
			}
		}

		return $arrForm;
	}

	// フォーム追加
	// $name フォーム名
	// $name_kana フォーム名（日本語）
	// $arrCheck チェック内容
	function addParam($name, $name_kana, $arrCheck, $count = 1) {
		$this->_formItem[] = array('name' => $name, 'name_kana' => $name_kana, 'check' => $arrCheck, 'count' => $count);
	}

	// 入力チェック
	function getFormCheck(&$arrForm) {
		$arrErr = array();
		foreach($this->_formItem as $chkVal) {
			$name = $chkVal['name'];
			for($i = 0; $i < count($chkVal['check']); $i++) {
				switch($chkVal['check'][$i]) {
					case 'require':
						// 必須
						$isErr = FALSE;
						if( $chkVal['count'] > 1 ) {
							for( $y = 0; $y < $chkVal['count']; $y++ ) {
								if( !isset($arrForm[$name][$y]) || !$this->isRequire($arrForm[$name][$y]) ) {
									$isErr = TRUE;
								}
							}
						}
						else {
							if(!isset($arrForm[$name]) || !$this->isRequire($arrForm[$name])) {
								$isErr = TRUE;
							}
						}
						if( $isErr ) {
							$arrErr[$name]['error_message'] = $this->createErrorTag($chkVal['name_kana']."を入力してください。");
							$arrErr[$name]['error_class'] = \Service\Constans::$error_class;
						}
						break;
					case 'hirakana':
						// カタカナ
						if(!$this->isHirakana($arrForm[$name][0]) or !$this->isHirakana($arrForm[$name][1])) {
							$arrErr[$name]['error_message'] = $this->createErrorTag($chkVal['name_kana']."は正しい形式（全角かな）で入力してください。");
							$arrErr[$name]['error_class'] = \Service\Constans::$error_class;
						}
						break;
					case 'kana':
						// カタカナ
						if(!$this->isKana($arrForm[$name])) {
							$arrErr[$name]['error_message'] = $this->createErrorTag($chkVal['name_kana']."は正しい形式（全角カナ）で入力してください。");
							$arrErr[$name]['error_class'] = \Service\Constans::$error_class;
						}
						break;
					case 'mail':
						// メールアドレス
						if(!$this->isMail($arrForm[$name])) {
							$arrErr[$name]['error_message'] = $this->createErrorTag($chkVal['name_kana']."は正しい形式で入力してください。");
							$arrErr[$name]['error_class'] = \Service\Constans::$error_class;
						}
						break;
					case 'tel':
						// 電話番号
						if(!$this->isTel($arrForm[$name])) {
							$arrErr[$name]['error_message'] = $this->createErrorTag($chkVal['name_kana']."は正しい形式（入力例：012-345-6789 ）で入力してください。");
							$arrErr[$name]['error_class'] = \Service\Constans::$error_class;
						}
						break;
					case 'zip':
						// 郵便番号
						if(!$this->isZip($arrForm[$name])) {
							$arrErr[$name]['error_message'] = $this->createErrorTag($chkVal['name_kana']."は正しい形式で入力してください。");
							$arrErr[$name]['error_class'] = \Service\Constans::$error_class;
						}
						break;
					case 'date':
						// 生年月日
						if(!$this->isDate($arrForm[$name][0], $arrForm[$name][1], $arrForm[$name][2])) {
							$arrErr[$name]['error_message'] = $this->createErrorTag($chkVal['name_kana']."は正しい日付を選択してください。");
							$arrErr[$name]['error_class'] = \Service\Constans::$error_class;
						}
						break;
					case 'date2':
						// 生年月日
						if(!$this->isDate2($arrForm[$name][0], $arrForm[$name][1])) {
							$arrErr[$name]['error_message'] = $this->createErrorTag($chkVal['name_kana']."は正しい日付を選択してください。");
							$arrErr[$name]['error_class'] = \Service\Constans::$error_class;
						}
						break;
					case 'num':
						// 数値チェック
						if(!$this->isNUm($arrForm[$name])) {
							$arrErr[$name]['error_message'] = $this->createErrorTag($chkVal['name_kana']."は数字で入力してください。");
							$arrErr[$name]['error_class'] = \Service\Constans::$error_class;
						}
						break;
					default:
						if(mb_strpos($chkVal['check'][$i], "LEN_") !== FALSE) {
							// 文字数
							$count = (int)str_replace("LEN_", "", $chkVal['check'][$i]);
							if(!$this->isCharCount($arrForm[$name], $count)){
								$arrErr[$name]['error_message'] = $this->createErrorTag($chkVal['name_kana']."は".$count."以内で入力してください。");
								$arrErr[$name]['error_class'] = \Service\Constans::$error_class;
							}
						}
						break;
				}
			}
		}

		return $arrErr;
	}

    /*
     * エラーメッセージをタグで囲う
     */
    public function createErrorTag ($message) {
        return \Service\Constans::$error_start_tag . $message . \Service\Constans::$error_end_tag;
    }

	// 必須チェック
	function isRequire($str){
		if($str == "") {
			return FALSE;
		}
		return TRUE;
	}

	// 文字数チェック
	function isCharCount($str, $count) {
		if($str == "") {
			return TRUE;
		}
		if(mb_strlen($str, "utf-8") > $count) {
			return FALSE;
		}
		return TRUE;
	}

	// カテゴリタグチェック
	function isCategoryTags($str) {
		if($str == "") {
			return TRUE;
		}
		$arrTags =explode(",", $str);
		if(count($arrTags) > 10) {
			return FALSE;
		}
		return TRUE;
	}

	// 日付チェック
	function isDate($year, $month, $day) {
		if(!@checkdate($month, $day, $year)) {
			return FALSE;
		}
		return TRUE;
	}

	// 日付チェック2
	function isDate2($month, $day) {
		if($month == "" && $day == "") {
			return TRUE;
		}
		if( !is_numeric($month) || !is_numeric($day) ) {
			return FALSE;
		}
		if(date('n')>= $month && date('j') >$day){
			if( !checkdate($month, $day, date('Y')) ) {
				return FALSE;
			}
		}else{
			if( !checkdate($month, $day, date('Y')+1) ) {
				return FALSE;
			}
		}
		return TRUE;
	}

	// 開始日チェック
	function isStartDate($str) {
		if(strtotime(date('Y/m/d')) >= strtotime($str)) {
			return FALSE;
		}
		return TRUE;
	}

	// 終了日チェック
	function isEndDate($start_date, $end_date) {
		if(strtotime(date($start_date)) > strtotime(date($end_date))) {
			return FALSE;
		}
		return TRUE;
	}

	// 終了時間チェック
	function isEndTime($start_hr, $start_mi, $end_hr, $end_mi) {
		if(mktime($start_hr, $start_mi) > mktime($end_hr, $end_mi)) {
			return FALSE;
		}
		return TRUE;
	}

	// カナチェック
	function isHirakana($str1) {
		if($str1 == "" ) {
			return TRUE;
		}
		$str1 = str_replace(" ","",$str1);
		$str1 = str_replace("　","",$str1);
		if(!preg_match("/^[ぁ-ん]+$/u", $str1)) {
			return FALSE;
		}
		return TRUE;
	}

	// カナチェック
	function isKana($str1) {
		if($str1 == "" ) {
			return TRUE;
		}
		$str1 = str_replace(" ","",$str1);
		$str1 = str_replace("　","",$str1);
		if(!preg_match("/^[ァ-ヶー]+$/u", $str1)) {
			return FALSE;
		}
		return TRUE;
	}

	// メールアドレスチェック
	function isMail($str) {
		if($str == "") {
			return TRUE;
		}
		if(!\Util::isMailAddr($str)) {
			return FALSE;
		}
		return TRUE;
	}

	// 電話番号チェック
	function isTel($str1) {
		if($str1 == "") {
			return TRUE;
		}
		$str1 = str_replace("-","",$str1);
		if(!preg_match("/^[0-9]{2,4}[0-9]{2,4}[0-9]{3,4}$/", $str1) ) {
			return FALSE;
		}
		return TRUE;
	}

	// 郵便番号チェック
	function isZip($str1) {
		if($str1 == "") {
			return TRUE;
		}
		$str1 = str_replace("-","",$str1);
		if(!preg_match("/^[0-9]{3}[0-9]{4}$/", $str1)) {
			return FALSE;
		}
		return TRUE;
	}

	// 郵便番号チェック２
	function isZip2($str1) {
		if($str1 == "" ) {
			return TRUE;
		}
		if(!preg_match("/^[0-9]{3}-[0-9]{4}$/", $str1)) {
			return FALSE;
		}
		return TRUE;
	}

	// パスワードチェック
	function isPass($str) {
		if($str == "") {
			return TRUE;
		}
		if(!preg_match("/^[a-zA-Z0-9]{4,20}$/", $str)) {
			return FALSE;
		}
		return TRUE;
	}

	// 画像拡張子チェック
	function isImageExt($str) {
		if($str == "") {
			return TRUE;
		}
		$ext = $this->getImageExt($str);
		if($ext != "jpg" && $ext != "jpeg" && $ext != "JPG" && $ext != "JPEG") {
			return FALSE;
		}
		return TRUE;
	}

	// 拡張子取得
	function getImageExt($str) {
		return substr($str, strrpos($str, '.') + 1);
	}

	// 画像重複チェック
	function isImageOverlap($str) {
		if($str == "") {
			return TRUE;
		}
		$where = "image1 = ?";
		$arrVal = array($str);
		$count = $this->_objEvent->getCount($where, $arrVal);
		if($count > 0) {
			return FALSE;
		}
		return TRUE;
	}

	// ランダムなファイル名取得
	function getRandomFile($len) {
		// ランダム文字列生成（配列利用）
		$strinit = "abcdefghkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ012345679";
		$strarray = preg_split("//", $strinit, 0, PREG_SPLIT_NO_EMPTY);
		for ($i = 0, $str = null; $i < $len; $i++) {
			$str .= $strarray[array_rand($strarray, 1)];
		}

		return $str;
	}

	// 数字チェック
	function isNUm($str) {
		if($str == "") {
			return TRUE;
		}
		if(!is_numeric($str)) {
			return FALSE;
		}
		return TRUE;
	}
}
?>