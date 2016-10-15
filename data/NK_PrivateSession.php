<?php
/*** PRIVATE SESSION Class ***/

// ライブラリ読込
require_once(BASE_DIR."NK_Database.php");
require_once(BASE_DIR."NK_Util.php");


class NK_PrivateSession {

	var $db;

	public function __construct() {

	}

	public function __destruct() {

		if ($this->db) {
			$this->db->disconnect();
		}

	}


	// 二重ログインセッションを開始する
	function startPrivateSession() {
		// ユーザー情報
		list($userid, $user_session_id) = $this->__getSessionUser();

		$this->db = new NK_Database();
		$this->db->init();
		$this->db->connect();

		$db_sess = $this->__getPrivateSession($kaisha_id, $sub_kaisha_id, $course_id, $userid);
		if ($db_sess === false)
		{
			// セッション未登録なら新規登録
			$this->__insertPrivateSession($kaisha_id, $sub_kaisha_id, $course_id, $userid, $user_session_id);
		}
		else
		{
			// セッション登録済
			/*
			if ($this->__isTimeoutPrivateSession($db_sess['expired_date']))
			{
				// タイムアウト

				// セッション再登録
				$this->__deleteAllPrivateSession($kaisha_id, $course_id, $userid);
				$this->__insertPrivateSession($kaisha_id, $course_id, $userid, $user_session_id);
			}
			else
			{
			*/
				// タイムアウト時間内
				if ($user_session_id === $db_sess['user_session_id'])
				{
					//有効期限を更新する
					$this->__updatePrivateSession($kaisha_id, $sub_kaisha_id, $course_id, $userid, $user_session_id);
				}
				else
				{
					// 二重ログインだがログインのみは許可するため何もしない
					$this->__jumpErrorPage($kaisha_id, $sub_kaisha_id, $course_id, $userid, "nosession");
				}
			/*
			}
			*/
		}
		$this->db->disconnect();
	}


	/**
	 * 二重ログインセッションを判定する
	 */
	function validPrivateSession($update_chk = 1)
	{
		// ユーザー情報
		list($kaisha_id, $sub_kaisha_id, $course_id, $userid, $user_session_id) = $this->__getSessionUser();

		$this->db = new NK_Database();
		$this->db->init();
		$this->db->connect();

		$db_sess = $this->__getPrivateSession($kaisha_id, $sub_kaisha_id, $course_id, $userid);
		if ($db_sess === false)
		{
			// 当事者以外のユーザーは後勝ちでセッション再登録
			$this->__insertPrivateSession($kaisha_id, $sub_kaisha_id, $course_id, $userid, $user_session_id);
		}

		// セッション登録済
//		if ($this->__isTimeoutPrivateSession($db_sess['expired_date']))
//		{
			// タイムアウト

			/* ユーザーにタイムアウトの概念を明示する場合。再ログインさせる */
//			if ($user_session_id === $db_sess['user_session_id'])
//			{
				// タイムアウト当事者
//				$this->__jumpErrorPage($kaisha_id, $course_id, $userid, "timeout");
//			}
//			else
//			{
				// 当事者以外のユーザーは後勝ちでセッション再登録
//				$this->__deleteAllPrivateSession($kaisha_id, $course_id, $userid);
//				$this->__insertPrivateSession($kaisha_id, $course_id, $userid, $user_session_id);
//			}
			/* // ユーザーにタイムアウトの概念を明示する場合。再ログインさせる */


			/* ユーザーにタイムアウトの概念を明示しない場合、後勝ちで二重ログインセッションを勝ち取る */
			/*
			// セッション再登録
			$this->__deleteAllPrivateSession($kaisha_id, $course_id, $userid);
			$this->__insertPrivateSession($kaisha_id, $course_id, $userid, $user_session_id);
			*/
			/* // ユーザーにタイムアウトの概念を明示しない場合、後勝ちで二重ログインセッションを勝ち取る */
//		}
//		else
//		{
			// タイムアウト時間内
			if ($user_session_id === $db_sess['user_session_id'])
			{
				//有効期限を更新する
//				if ($update_chk == 2) {
//					$this->__updatePrivateSession($kaisha_id, $course_id, $userid, $user_session_id);
//				}
			}
			else
			{
				// 二重ログイン
				$this->__jumpErrorPage($kaisha_id, $sub_kaisha_id, $course_id, $userid, "nosession");
			}
//		}

		$this->db->disconnect();
	}


	/**
	 * ログアウト
	 */
	function logoutPrivateSession()
	{
		$kaisha_id = $_SESSION['KAISYA_ID'];
		$sub_kaisha_id = $_SESSION['SUB_KAISYA_ID'];
		$course_id = $_SESSION['COURSE_ID'];
		$userid = $_SESSION['USER_ID'];
		$user_session_id = session_id();

		if ((empty($kaisha_id)) /*|| (empty($course_id))*/ || (empty($sub_kaisha_id)) || (empty($userid)))
			return;

		$this->db = new NK_Database();

		$this->db->init();
		$this->db->connect();
		$this->__deletePrivateSession($kaisha_id, $sub_kaisha_id, $course_id, $userid, $user_session_id);
		$this->db->disconnect();
	}


	/**
	 * タイムアウト日時
	 */
	function __getExpiredTime($now = 0)
	{
		$now = ($now ? $now : time());
		$timeout = PRIVATE_SESSION_TIMEOUT * 60 + $now; // from base.php(min) * 60(sec) + now(sec)

		return date('YmdHis', $timeout);
	}


	/**
	 * 二重ログイン タイムアウトしたかどうか
	 */
	function __isTimeoutPrivateSession($expired_date)
	{
		// 現在日時
		$ex = date('YmdHis');

		return ($expired_date < $ex);
	}


	/**
	 * 二重ログイン セッション取得
	 */
	function __getPrivateSession($kaisha_id, $sub_kaisha_id, $course_id, $userid)
	{
//		$sql = <<< SQL
//SELECT *
//FROM ELTuserSession
//WHERE `kaisha_id` = '?'
//AND `course_id` = '?'
//AND `userid` = '?'
//SQL;
		$sql = <<< SQL
SELECT *
FROM ELTuserSession
WHERE `kaisha_id` = '?'
AND `sub_kaisha_id` = '?'
AND `userid` = '?'
SQL;
		$param = array();
		$param[] = $kaisha_id;
		$param[] = $sub_kaisha_id;
		// $param[] = $course_id;
		$param[] = $userid;

		$result = $this->db->query($sql, $param);
		if (count($result) > 0)
		{
			return $result[0];
		}

		return false;
	}


	/**
	 * 二重ログイン セッションINSERT
	 */
	function __insertPrivateSession($kaisha_id, $sub_kaisha_id, $course_id, $userid, $user_session_id)
	{
		$now = time(); //基準日
		$touroku_date = date('YmdHis', $now); // セッション開始日時
		$expired_date = $this->__getExpiredTime($now); // タイムアウト日時

		$sql = <<< SQL
INSERT INTO ELTuserSession
VALUES ('?', '?', '?', '?', '?', '?', '?')
SQL;

		$param = array();
		$param[] = $kaisha_id;
		$param[] = $sub_kaisha_id;
		$param[] = $course_id;
		$param[] = $userid;
		$param[] = $user_session_id;
		$param[] = $expired_date;
		$param[] = $touroku_date;

		$result = $this->db->sqlexec($sql, $param);

		return $result;
	}


	/**
	 * 二重ログイン セッションUPDATE
	 */
	function __updatePrivateSession($kaisha_id, $sub_kaisha_id, $course_id, $userid, $user_session_id)
	{
		// タイムアウト日時
		$expired_date = $this->__getExpiredTime();

		$sql = <<< SQL
UPDATE ELTuserSession
SET `expired_date` = '?'
WHERE `kaisha_id` = '?'
AND `sub_kaisha_id` = '?'
AND `course_id` = '?'
AND `userid` = '?'
AND `user_session_id` = '?'
SQL;
		$param = array();
		$param[] = $expired_date;
		$param[] = $kaisha_id;
		$param[] = $sub_kaisha_id;
		$param[] = $course_id;
		$param[] = $userid;
		$param[] = $user_session_id;

		$result = $this->db->sqlexec($sql, $param);

		return $result;
	}


	/**
	 * 二重ログイン セッションDELETE
	 */
	function __deletePrivateSession($kaisha_id, $sub_kaisha_id, $course_id, $userid, $user_session_id)
	{

		$sql = <<< SQL
DELETE FROM ELTuserSession
WHERE `kaisha_id` = '?'
AND `sub_kaisha_id` = '?'
AND `course_id` = '?'
AND `userid` = '?'
AND `user_session_id` = '?'
SQL;
		$param = array();
		$param[] = $kaisha_id;
		$param[] = $sub_kaisha_id;
		$param[] = $course_id;
		$param[] = $userid;
		$param[] = $user_session_id;
var_dump($sql);
var_dump($param);
		$result = $this->db->sqlexec($sql, $param);
var_dump($result);

		return $result;
	}


	/**
	 * 二重ログイン セッションDELETE(SESSID無関係)
	 */
	function __deleteAllPrivateSession($kaisha_id, $sub_kaisha_id, $course_id, $userid)
	{

		$sql = <<< SQL
DELETE FROM ELTuserSession
WHERE `kaisha_id` = '?'
AND `sub_kaisha_id` = '?'
AND `course_id` = '?'
AND `userid` = '?'
SQL;
		$param = array();
		$param[] = $kaisha_id;
		$param[] = $sub_kaisha_id;
		$param[] = $course_id;
		$param[] = $userid;

		$result = $this->db->sqlexec($sql, $param);

		return $result;
	}


	/**
	 * 二重ログイン ログイン状態チェック
	 */
	function __getSessionUser()
	{
		$user_session_id = session_id();
		if (empty($user_session_id))
			__error('セッションが開始されていません');

		$kaisha_id = $_SESSION['KAISYA_ID'];
		$sub_kaisha_id = $_SESSION['SUB_KAISYA_ID'];
		if (empty($kaisha_id))
			__error('セッションが開始されていません(KAISYA_ID)');
		if (empty($sub_kaisha_id))
			__error('セッションが開始されていません(SUB_KAISYA_ID)');

		$course_id = "";
// 未使用		$course_id = $_SESSION['COURSE_ID'];
// 未使用			if (empty($course_id))
// 未使用				__error('セッションが開始されていません(COURSE_ID)');

		$userid = $_SESSION['USER_ID'];
		if (empty($userid))
			__error('セッションが開始されていません(USER_ID)');

		return array($kaisha_id, $sub_kaisha_id, $course_id, $userid, $user_session_id);
	}


	/**
	 * 二重ログイン 操作エラー
	 */
	function __jumpErrorPage($kaisha_id, $sub_kaisha_id, $course_id, $userid, $msg)
	{
		if ($this->db)
			$this->db->disconnect();

		$util = new NK_Util();
		$enc_kaisha_id = $util->el_crypt($kaisha_id);
		$enc_sub_kaisha_id = $util->el_crypt($sub_kaisha_id);
		$url = $_SERVER["REQUEST_URI"];
		//var_dump("Location: ".ADMIN_URL."user/login.php?course_id=".rawurlencode($course_id)."&kaisha=".rawurlencode($enc_kaisha_id)."&userid=".rawurlencode($userid)."&msg=".$msg."&url=".$url);
		// header("Location: ".ADMIN_URL."user/login.php?course_id=".rawurlencode($course_id)."&kaisha=".rawurlencode($enc_kaisha_id)."&userid=".rawurlencode($userid)."&msg=".$msg."&url=".$url);
		// header("Location: ".ADMIN_URL."user/login.php?kaisha_id=".rawurlencode($enc_kaisha_id)."&msg=".$msg."&url=".$url);
		if ($kaisha_id == $sub_kaisha_id) {
			header("Location: ".ADMIN_URL."e-learning/user/login.php?kaisha_id=".rawurlencode($enc_kaisha_id)."&msg=".$msg."&url=".$url);
		} else {
			header("Location: ".ADMIN_URL."e-learning/user/login.php?kaisha_id=".rawurlencode($enc_kaisha_id)."&sub_kaisha_id=".rawurlencode($enc_sub_kaisha_id)."&msg=".$msg."&url=".$url);
		}
		exit();
	}


	/**
	 * 二重ログイン 異常終了エラー
	 */
	function __error($msg)
	{
		die($msg);
	}


	/**
	 * 二重ログインセッションを判定する（ログインAJAX用）
	 */
	function validPrivateSessionAjax($kaisha_id, $sub_kaisha_id, $userid) {
		// 変数指定
		$course_id = "";
		$user_session_id = session_id();
		$check_code = 1;

		$this->db = new NK_Database();
		$this->db->init();
		$this->db->connect();

		// セッションDBに値があるかどうか
		$db_sess = $this->__getPrivateSession($kaisha_id, $sub_kaisha_id, $course_id, $userid);
		if ($db_sess === false) {
			// セッション情報無し
			// $check_code = 1;
		} else {
			// セッション情報有り
			/*
			if ($this->__isTimeoutPrivateSession($db_sess['expired_date'])) {
				// タイムアウトしている
				// $check_code = 1;
			} else {
			*/
				// タイムアウトしていない
				if ($user_session_id === $db_sess['user_session_id']) {
					// DBセッションとブラウザセッションが同じ
					// $check_code = 1;
				} else {
					// DBセッションとブラウザセッションが違う（二重ログイン）
					$check_code = 2;
				}
			/*
			}
			*/
		}
		$this->db->disconnect();

		return $check_code;
	}

	/**
	 * 二重ログインセッションを開始する（強制ログイン
	 */
	function startPrivateSessionComp() {
		// ユーザー情報
		list($kaisha_id, $sub_kaisha_id, $course_id, $userid, $user_session_id) = $this->__getSessionUser();

		$this->db = new NK_Database();
		$this->db->init();
		$this->db->connect();

		$db_sess = $this->__getPrivateSession($kaisha_id, $sub_kaisha_id, $course_id, $userid);
		if ($db_sess === false) {
			// セッション未登録なら新規登録
			$this->__insertPrivateSession($kaisha_id, $sub_kaisha_id, $course_id, $userid, $user_session_id);
		} else {
			// 強制再登録
			$this->__deleteAllPrivateSession($kaisha_id, $sub_kaisha_id, $course_id, $userid);
			$this->__insertPrivateSession($kaisha_id, $sub_kaisha_id, $course_id, $userid, $user_session_id);
		}
		$this->db->disconnect();
	}




}
?>