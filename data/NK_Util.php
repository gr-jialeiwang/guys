<?php
/*** UTIL Class ***/

// ライブラリ読込
require_once("base.php");


class NK_Util {

	var $err;
	var $disp_name;
	var $length;
	var $arrCheck;

	function NK_Util() {
		$this->err = array();
		$this->disp_name = array();
		$this->length = array();
		$this->arrCheck = array();
	}

	// 暗号化処理
	function el_crypt($plain_text) {

		$key = md5(KEYS);

		// 暗号化モジュール使用開始
		$td  = mcrypt_module_open('des', '', 'ecb', '');
		$key = substr($key, 0, mcrypt_enc_get_key_size($td));
		$iv  = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);

		// 暗号化モジュール初期化
		if (mcrypt_generic_init($td, $key, $iv) < 0) {
			return 'error';

		}
		// データを暗号化
		$crypt_text = base64_encode(mcrypt_generic($td, $plain_text));

		// 暗号化モジュール使用終了
		mcrypt_generic_deinit($td);
		mcrypt_module_close($td);

		return rawurlencode($crypt_text);

	}

	// 復号化処理
	function el_decrypt($crypt_text) {

		$key = md5(KEYS);
		$crypt_text = rawurldecode($crypt_text);

		// 復号化モジュール使用開始
		$td  = mcrypt_module_open('des', '', 'ecb', '');
		$key = substr($key, 0, mcrypt_enc_get_key_size($td));
		$iv  = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);

		// 復号化モジュール初期化
		if (mcrypt_generic_init($td, $key, $iv) < 0) {
			return 'error';
		}

		// データを復号化
		$plain_text = mdecrypt_generic($td, base64_decode($crypt_text));

		//暗号化モジュール使用終了
		mcrypt_generic_deinit($td);
		mcrypt_module_close($td);

		return trim($plain_text);

	}

	function my_str_replace($search, $replace, $target, $encoding = "UTF-8") {

		$notArray = !is_array($target) ? TRUE : FALSE;
		$target = $notArray ? array($target) : $target;
		$search_len = mb_strlen($search, $encoding);
		$replace_len = mb_strlen($replace, $encoding);

		foreach ($target as $i => $tar) {
			$offset = mb_strpos($tar, $search);
			while ($offset !== FALSE) {
				$tar = mb_substr($tar, 0, $offset).$replace.mb_substr($tar, $offset + $search_len);
				$offset = mb_strpos($tar, $search, $offset + $replace_len);
			}
			$target[$i] = $tar;
		}

		return $notArray ? $target[0] : $target;

	}

	function mb_str_replace($search, $replace, $target) {

		if (is_array($search)) {
			if (!is_array($replace)) {
				$replace = array($replace);
			}

			foreach ($search as $i => $needle) {
				$rep = isset($replace[$i]) ? $replace[$i] : $replace[0];
				$target = my_str_replace($needle, $rep, $target);
			}

			return $target;
		} else {
			return NK_Util::my_str_replace($search, $replace, $target);
		}

	}

	function half($str) {

		return mb_convert_kana($str,"rnas","UTF-8");

	}

	function all($str) {

		return mb_convert_kana($str,"RNASKV","UTF-8");

	}

	function addParam($disp_name, $err="", $length = "", $arrCheck = array()) {

		$this->err[] = $err;
		$this->disp_name[] = $disp_name;
		$this->length[] = $length;
		$this->arrCheck[] = $arrCheck;

	}

	function checkError($target = array()) {

		$arrError = array();

		if (count($target) <= 0) {
			return $arrError;
		}

		$cnt = 0;
		foreach ($this->disp_name as $key) {
			if (!isset($target[$key])) {
				$target[$key] = "";
			}

			foreach ($this->arrCheck[$cnt] as $func) {
				switch($func) {
					case 'EXIST_CHECK':
						if (strlen($target[$key]) == 0) {
							$arrError[$key] = $this->err[$cnt];
						}

						break;

					case 'MAXLENGTH_CHECK':
						if (mb_strlen($target[$key]) > $this->length[$cnt]) {
							$arrError[$key] = $this->err[$cnt];
						}

						break;

					case 'MINLENGTH_CHECK':
						if (mb_strlen($target[$key]) < $this->length[$cnt]) {
							$arrError[$key] = $this->err[$cnt];
						}

						break;

					case 'NUM_CHECK':
						if (strlen($target[$key]) > 0 && !EregI("^[[:digit:]]+$", $target[$key])) {
							$arrError[$key] = $this->err[$cnt];
						}

						break;

					case 'ALPHA_CHECK':
						if (strlen($target[$key]) > 0 && !EregI("^[[:alpha:]]+$", $target[$key])) {
							$arrError[$key] = $this->err[$cnt];
						}

						break;

					case 'TEL_CHECK':
						$tel = str_replace("-","",$target[$key]);
						if (strlen($tel) > 0 && !EregI("^[[:digit:]]+$", $tel)) {
							$arrError[$key] = $this->err[$cnt];
						}

						break;

					case 'TELFORMAT_CHECK':
						$tel = str_replace("-","",$target[$key]);
						if (strlen($tel) > 0 && !preg_match("/^0\d{9,10}$/", $tel)) {
							$arrError[$key] = $this->err[$cnt];
						}

						break;

					case 'KANA_CHECK':
						if (strlen($target[$key]) > 0 && !preg_match("/^[ァ-ヶー　]+$/u", $target[$key])) {
							$arrError[$key] = $this->err[$cnt];
						}

						break;

					case 'ALNUM_CHECK':
						if (strlen($target[$key]) > 0 && !EregI("^[[:alnum:]]+$", $target[$key])) {
							$arrError[$key] = $this->err[$cnt];
						}

						break;

					case 'ALNUMK_CHECK':
						if (strlen($target[$key]) > 0 && !ereg("^[a-zA-Z0-9_\.*@\+\?-]+$", $target[$key])) {
								$arrError[$key] = $this->err[$cnt];
						}

						break;

					case 'EMAIL_CHECK':
						if (strlen($target[$key]) > 0 && !ereg("^[^@]+@[^.^@]+\..+", $target[$key])) {
							$arrError[$key] = $this->err[$cnt];
						}
						if (strlen($target[$key]) > 0 && !ereg("^[a-zA-Z0-9_\.@\+\?-]+$", $target[$key])) {
							$arrError[$key] = $this->err[$cnt];
						}

						break;

					case 'DATE_CHECK':
						list($year, $month, $day) = explode("/", $target[$key]);
						if(!checkdate($month, $day, $year)) {
							$arrError[$key] = $this->err[$cnt];
						}

						break;

					case 'URL_CHECK':
						if (strlen($target[$key]) > 0 && !preg_match('/^(https?|ftp)(:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+)$/', $target[$key])) {
								$arrError[$key] = $this->err[$cnt];
						}

						break;

					default:

						break;

				}
			}
			$cnt++;
		}

		return $arrError;

	}

	// ハイフン無し電話番号を市外局番で分けて配列で返す
	function tel_separate($tel) {

		$tel5_arr = array('01267', '01372', '01374', '01377', '01392', '01397', '01398', '01456', '01457', '01466', '01547', '01558', '01564', '01586', '01587', '01632', '01634', '01635', '01648', '01654', '01655', '01656', '01658', '04992', '04994', '04996', '04998', '05769', '05979', '07468', '08387', '08388', '08396', '08477', '08512', '08514', '08636', '09496', '09802', '09912', '09913');
		$tel4_arr = array('0123', '0124', '0125', '0126', '0133', '0134', '0135', '0136', '0137', '0138', '0139', '0142', '0143', '0144', '0145', '0146', '0152', '0153', '0154', '0155', '0156', '0157', '0158', '0162', '0163', '0164', '0165', '0166', '0167', '0172', '0173', '0174', '0175', '0176', '0178', '0179', '0182', '0183', '0184', '0185', '0186', '0187', '0191', '0192', '0193', '0194', '0195', '0197', '0198', '0220', '0223', '0224', '0225', '0226', '0228', '0229', '0233', '0234', '0235', '0237', '0238', '0240', '0241', '0242', '0243', '0244', '0246', '0247', '0248', '0250', '0254', '0255', '0256', '0257', '0258', '0259', '0260', '0261', '0263', '0264', '0265', '0266', '0267', '0268', '0269', '0270', '0274', '0276', '0277', '0278', '0279', '0280', '0282', '0283', '0284', '0285', '0287', '0288', '0289', '0291', '0293', '0294', '0295', '0296', '0297', '0299', '0422', '0428', '0436', '0438', '0439', '0460', '0463', '0465', '0466', '0467', '0470', '0475', '0476', '0478', '0479', '0480', '0493', '0494', '0495', '0531', '0532', '0533', '0536', '0537', '0538', '0539', '0544', '0545', '0547', '0548', '0550', '0551', '0553', '0554', '0555', '0556', '0557', '0558', '0561', '0562', '0563', '0564', '0565', '0566', '0567', '0568', '0569', '0572', '0573', '0574', '0575', '0576', '0577', '0578', '0581', '0584', '0585', '0586', '0587', '0594', '0595', '0596', '0597', '0598', '0599', '0721', '0725', '0735', '0736', '0737', '0738', '0739', '0740', '0742', '0743', '0744', '0745', '0746', '0747', '0748', '0749', '0761', '0763', '0765', '0766', '0767', '0768', '0770', '0771', '0772', '0773', '0774', '0776', '0778', '0779', '0790', '0791', '0794', '0795', '0796', '0797', '0798', '0799', '0820', '0823', '0824', '0826', '0827', '0829', '0833', '0834', '0835', '0836', '0837', '0838', '0845', '0846', '0847', '0848', '0852', '0853', '0854', '0855', '0856', '0857', '0858', '0859', '0863', '0865', '0866', '0867', '0868', '0869', '0875', '0877', '0879', '0880', '0883', '0884', '0885', '0887', '0889', '0892', '0893', '0894', '0895', '0896', '0897', '0898', '0920', '0930', '0940', '0942', '0943', '0944', '0946', '0947', '0948', '0949', '0950', '0952', '0954', '0955', '0956', '0957', '0959', '0964', '0965', '0966', '0967', '0968', '0969', '0972', '0973', '0974', '0977', '0978', '0979', '0980', '0982', '0983', '0984', '0985', '0986', '0987', '0993', '0994', '0995', '0996');
		$telmob_arr = array('090', '080', '070', '050');
		$tel3_arr = array('011', '015', '017', '018', '019', '022', '023', '024', '025', '026', '027', '028', '029', '042', '043', '044', '045', '046', '047', '048', '049', '052', '053', '054', '055', '058', '059', '072', '073', '075', '076', '077', '078', '079', '082', '083', '084', '086', '087', '088', '089', '092', '093', '095', '096', '097', '098', '099');
		$tel2_arr = array('03', '04', '06');

		$tel5 = in_array(substr($tel, 0, 5), $tel5_arr);
		if ($tel5) {
			$tel_arr[0] = substr($tel, 0, 5);
			$tel_arr[1] = substr($tel, 5, 1);
			$tel_arr[2] = substr($tel, 6);
		} else {
			$tel4 = in_array(substr($tel, 0, 4), $tel4_arr);
			if ($tel4) {
				$tel_arr[0] = substr($tel, 0, 4);
				$tel_arr[1] = substr($tel, 4, 2);
				$tel_arr[2] = substr($tel, 6);
			} else {
				$telmob = in_array(substr($tel, 0, 3), $telmob_arr);
				if ($telmob) {
					$tel_arr[0] = substr($tel, 0, 3);
					$tel_arr[1] = substr($tel, 3, 4);
					$tel_arr[2] = substr($tel, 7);
				} else {
					$tel3 = in_array(substr($tel, 0, 3), $tel3_arr);
					if ($tel3) {
						$tel_arr[0] = substr($tel, 0, 3);
						$tel_arr[1] = substr($tel, 3, 3);
						$tel_arr[2] = substr($tel, 6);
					} else {
						$tel2 = in_array(substr($tel, 0, 2), $tel2_arr);
						if ($tel2) {
							$tel_arr[0] = substr($tel, 0, 2);
							$tel_arr[1] = substr($tel, 2, 4);
							$tel_arr[2] = substr($tel, 6);
						} else {
							$tel_arr[0] = substr($tel, 0, 4);
							$tel_arr[1] = substr($tel, 4, 2);
							$tel_arr[2] = substr($tel, 6);
						}
					}
				}
			}
		}

		return $tel_arr;

	}

	// UAから端末情報を戻す
	function uaCheck($useragent) {

		// iPhone 判別
		if (preg_match('/iPhone/', $useragent)) {
			preg_match("/(iPhone\sOS\s([0-9\_]*))/", $useragent, $ua_arr);
			list($major, $minor) = explode("_", $ua_arr[2]);
			$arrMobileUA['os'] = "iphone";
			$arrMobileUA['major'] = $major;
			$arrMobileUA['minor'] = $minor;

			// Browser 判別
			if (preg_match('/Safari/', $useragent) && !preg_match('/Chrome/', $useragent)) {
				$arrMobileUA['browser'] = "Safari";
			} elseif (preg_match('/aeru/', $useragent)) {
				$arrMobileUA['browser'] = "Safari";
			} else {
				$arrMobileUA['browser'] = "Other";
			}
		}

		// iPad 判別
		if (preg_match('/iPad/', $useragent)) {
			preg_match("/(CPU\sOS\s([0-9\_]*))/", $useragent, $ua_arr);
			list($major, $minor) = explode("_", $ua_arr[2]);
			$arrMobileUA['os'] = "ipad";
			$arrMobileUA['major'] = $major;
			$arrMobileUA['minor'] = $minor;

			// Browser 判別
			if (preg_match('/Safari/', $useragent) && !preg_match('/Chrome/', $useragent)) {
				$arrMobileUA['browser'] = "Safari";
			} elseif (preg_match('/aeru/', $useragent)) {
				$arrMobileUA['browser'] = "Safari";
			} else {
				$arrMobileUA['browser'] = "Other";
			}
		}

		// Android 判別
		if (preg_match('/Android/', $useragent)) {
			preg_match("/(Android\s([0-9\.]*))/", $useragent, $ua_arr);
			list($major, $minor) = explode(".", $ua_arr[2]);
			$arrMobileUA['os'] = "android";
			$arrMobileUA['major'] = $major;
			$arrMobileUA['minor'] = $minor;

			// Browser 判別
			if ($major < 4) {
				if (preg_match('/Safari/', $useragent)) {
					if (preg_match('/Chrome/', $useragent)) {
						$arrMobileUA['browser'] = "Other";
					} else {
						$arrMobileUA['browser'] = "Android";
					}
				} elseif (preg_match('/aeru/', $useragent)) {
					$arrMobileUA['browser'] = "Android";
				} else {
					$arrMobileUA['browser'] = "Other";
				}
			} elseif ($major == 4 && $minor < 1) {
				if (preg_match('/Safari/', $useragent)) {
					if (preg_match('/Chrome/', $useragent)) {
						if (preg_match('/Version/', $useragent)) {
							$arrMobileUA['browser'] = "Android";
						} else {
							$arrMobileUA['browser'] = "Other";
						}
					} else {
						$arrMobileUA['browser'] = "Android";
					}
				} elseif (preg_match('/aeru/', $useragent)) {
					$arrMobileUA['browser'] = "Android";
				} else {
					$arrMobileUA['browser'] = "Other";
				}
			} elseif ($major == 4 && $minor <= 3) {
				if (preg_match('/Safari/', $useragent)) {
					if (preg_match('/Chrome/', $useragent)) {
						if (preg_match('/Version/', $useragent)) {
							$arrMobileUA['browser'] = "Android";
						} else {
							$arrMobileUA['browser'] = "Chrome";
						}
					} else {
						$arrMobileUA['browser'] = "Android";
					}
				} elseif (preg_match('/aeru/', $useragent)) {
					$arrMobileUA['browser'] = "Android";
				} else {
					$arrMobileUA['browser'] = "Other";
				}
			} else {
				if (preg_match('/Safari/', $useragent)) {
					if (preg_match('/Chrome/', $useragent)) {
						if (preg_match('/Version/', $useragent)) {
							$arrMobileUA['browser'] = "Android";
						} else {
							$arrMobileUA['browser'] = "Chrome";
						}
					} else {
						$arrMobileUA['browser'] = "Android";
					}
				} elseif (preg_match('/aeru/', $useragent)) {
					$arrMobileUA['browser'] = "Android";
				} else {
					$arrMobileUA['browser'] = "Other";
				}
			}
		}

		// Windows Phone 判別
		if (preg_match('/Windows Phone/', $useragent)) {
			if (preg_match('/Windows Phone OS/', $useragent)) {
				preg_match("/(Windows\sPhone\sOS\s([0-9\.]*))/", $useragent, $ua_arr);
			} else {
				preg_match("/(Windows\sPhone\s([0-9\.]*))/", $useragent, $ua_arr);
			}
			list($major, $minor) = explode(".", $ua_arr[2]);
			$arrMobileUA['os'] = "windowsphone";
			$arrMobileUA['major'] = $major;
			$arrMobileUA['minor'] = $minor;
			$arrMobileUA['browser'] = "Other";
		}

		// Blackberry 判別
		if (preg_match('/BlackBerry|BB/', $useragent)) {
			$arrMobileUA['os'] = "brackberry";
			$arrMobileUA['major'] = 0;
			$arrMobileUA['minor'] = 0;
			$arrMobileUA['browser'] = "Other";
		}

		// その他
		if (!is_array($arrMobileUA)) {
			$arrMobileUA['os'] = "PC";
			$arrMobileUA['major'] = 0;
			$arrMobileUA['minor'] = 0;
			$arrMobileUA['browser'] = "Other";
		}

		return $arrMobileUA;

	}

	// ランダム英数字を返す（指定無しの場合8桁）
	function getRandomString($nLengthRequired = 8) {

		$sCharList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		mt_srand();
		$sRes = "";
		for ($i = 0; $i < $nLengthRequired; $i++) {
			$sRes .= $sCharList[mt_rand(0, strlen($sCharList) - 1)];
		}

		return $sRes;

	}

	// メール送信（mb_send_mail）
	function sendMail($to, $subject, $body, $from = FROM_MAIL) {

		mb_language("japanese");
		mb_internal_encoding("utf-8");
		mb_send_mail($to, $subject, $body, "From:".$from.PHP_EOL);

	}

	// メール送信（mail）
	function sendMailJP($to, $subject, $body, $from = FROM_MAIL, $cc_address) {

		$subject = strtr(mb_encode_mimeheader($subject, 'ISO-2022-JP-MS', 'UTF-8'), array("\r" => ""));
		$body = mb_convert_encoding($body, 'ISO-2022-JP-MS', 'UTF-8');
		$mail_header .= "Content-Type: text/plain; charset=ISO-2022-JP\n";
		$mail_header .= "Content-Transfer-Encoding: 7bit\n";
		$mail_header .= "From:".$from;
		if ($cc_address) {
			$mail_header .= "\nCc:".$cc_address;
		}
		mail($to, $subject, $body, $mail_header);

	}

	// サニタイズ（SQLインジェクション対策）
	function sanitize($str) {
		$str = strip_tags(htmlspecialchars($str));
		// return preg_replace(array('/[~;\'\"]/', '/-/'), '', $str);
		return preg_replace(array('/[~;\'\"]/'), '', $str);
	}

	// ページング
	function paging($dataCnt, $pageLimit, $page) {
		// ページ数：総数/1ページ分の件数で割る
		$pageCnt = ceil($dataCnt / $pageLimit);

		// offset
		$offset = "";

		// 次へボタン
		$next = "";

		// 戻るボタン
		$rev = "";

		// ページ移動かどうかの判定
		if (!empty($page)) {
			$offset = $pageLimit * $page - $pageLimit;

			//現在ページが１より上なら戻るボタン付けます
			if ($page > 1) {
				$rev = $page - 1;
			}
		} else {
			//ページ移動でなければ1ページ目スタート
			$offset = 0;
			$page = 1;
		}

		//現在ページが全ページ数より下なら次へボタン付けます
		if ($page < $pageCnt) {
			$next = $page + 1;
		}

		/*   ↓$p_start   ↓$p_end			*/
		/* 前 1 2 3 4 5 6 7 次 ←7ページ分出す*/
		//初期値
		$p_start = 1;
		$p_end = $pageCnt;
		//全ページが７ｐ以下ならスルー
		if ($pageCnt > 7) {
			//現ページが３ページ以下ならstart:0;end:7;
			if ($page <= 3) {
				$p_end = 7;
			} else {
				//現ページから最後のページまでの総数
				$pendcnt = $pageCnt - $page;
				//現ページから終わりまでが３ページ以下なら
				if ($pendcnt <= 3) {
					$p_start = $pageCnt - 6;
					$p_end = $pageCnt;
				//その他は現ページ前後３ページづつ
				} else {
					$p_start = $page - 3;
					$p_end = $page + 3;
				}
			}
		}

		//配列に取り込み
		$paging["p_cnt"] = $pageCnt;
		$paging["p_start"] = $p_start;
		$paging["p_end"] = $p_end;
		$paging["p_end_plus"] = $p_end + 1;
		$paging["offset"] = $offset;
		$paging["next"] = $next;
		$paging["rev"] = $rev;
		$paging["limit"] = $pageLimit;

		return $paging;
	}


}
?>
