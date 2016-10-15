<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>業務管理システム Guy's System</title>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/page.css">
<link rel="stylesheet" href="css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/function.js"></script>
<style>
#loginPage h1 {
    margin-bottom: 1em;
    padding-top: 1em;
    text-align: center;
}
#loginPage section {
    background: #fff none repeat scroll 0 0;
    border-radius: 3px;
    box-sizing: border-box;
    margin: 0 auto;
    padding: 1em ;
    width: auto;
	margin-left:1em;
	margin-right:1em
}
table td{
	border:solid 1px #ccc;}
tr:nth-child(2n+1) {background-color:#E8F2F7;}
</style>
</head>
<body id="loginPage">
	<h1><a target="_blank" href="/"><img src="img/logo_login.png" height="62" width="255" alt="GUY’S COMPANY Oparation Management System"></a></h1>
	<section>
		<h2>ファイル一覧 </h2>
		<p>※<span style="color: #A7A6A6">■</span>色の地色はPDF出力動作などのモックアップ未対応箇所です。</p>

		<table cellspacing="0" cellpadding="0">
			<tr>
				<th bgcolor="#94C3BF">ID</th>
				<th bgcolor="#94C3BF">PDF</th>
				<th bgcolor="#94C3BF">頁名称</th>
				<th bgcolor="#94C3BF">title</th>
				<th bgcolor="#94C3BF">URL　</th>
			</tr>
			<tr>
				<td>ID_0001</td>
				<td>2</td>
				<td>ログイン</td>
				<td>業務管理システム Guy's System</td>
				<td><a href="http://system3.mdc-group.co.jp/index.php" target="_blank">http://system3.mdc-group.co.jp/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0002</td>
				<td>-</td>
				<td>ホーム （総合トップ）</td>
				<td>ホーム：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/top.php">http://system3.mdc-group.co.jp/top.php</a></td>
			</tr>
			<tr>
				<td>ID_0003</td>
				<td>3</td>
				<td>社員一覧／登録・編集 社員一覧</td>
				<td>社員一覧／登録・編集 社員一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/staff/index.php">http://system3.mdc-group.co.jp/staff/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0004</td>
				<td>4</td>
				<td>社員登録／編集 閲覧・操作権限 設定</td>
				<td>社員登録／編集 閲覧・操作権限 設定：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/staff/edit.php">http://system3.mdc-group.co.jp/staff/edit.php</a></td>
			</tr>
			<tr>
				<td>ID_0005</td>
				<td>5</td>
				<td>企業一覧／登録・編集 企業名検索</td>
				<td>企業一覧／登録・編集 企業名検索：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/company/index.php">http://system3.mdc-group.co.jp/company/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0006</td>
				<td>6</td>
				<td>取引先ページ 新規作成（登録・編集） 基本情報</td>
				<td>取引先ページ：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/client/index.php">http://system3.mdc-group.co.jp/client/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0007</td>
				<td>7</td>
				<td>販売系 経理情報</td>
				<td>販売系 経理情報：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/client/hanbai-keiri.php">http://system3.mdc-group.co.jp/client/hanbai-keiri.php</a></td>
			</tr>
			<tr>
				<td>ID_0008</td>
				<td>8</td>
				<td>仕入系 経理情報</td>
				<td>仕入系 経理情報：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/client/shiire-keiri.php">http://system3.mdc-group.co.jp/client/shiire-keiri.php</a></td>
			</tr>
			<tr>
				<td>ID_0009</td>
				<td>9</td>
				<td>発注書設定 ※材料発注 チェック時のみ</td>
				<td>発注書設定：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/client/hacchu/index.php">http://system3.mdc-group.co.jp/client/hacchu/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0010</td>
				<td>10</td>
				<td>発注書 設定画面</td>
				<td>発注書 設定：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/client/hacchu/hacchusho.php">http://system3.mdc-group.co.jp/client/hacchu/hacchusho.php</a></td>
			</tr>
			<tr>
				<td>ID_0011</td>
				<td>11</td>
				<td>作業員情報 ※工事発注 チェック時のみ 〈 ＣＳＶ出力 〉</td>
				<td>作業員情報：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/client/worker/index.php">http://system3.mdc-group.co.jp/client/worker/index.php</a></td>
			</tr>
			<tr>
				<td bgcolor="#ddd">ID_0012</td>
				<td bgcolor="#ddd">─</td>
				<td bgcolor="#ddd">【 作業員登録カード① 】 ※代表者用</td>
				<td bgcolor="#ddd">　</td>
				<td bgcolor="#ddd">　</td>
			</tr>
			<tr>
				<td bgcolor="#ddd">ID_0013</td>
				<td bgcolor="#ddd">─</td>
				<td bgcolor="#ddd">【 作業員登録カード② 】 ※その他 作業員用</td>
				<td bgcolor="#ddd">　</td>
				<td bgcolor="#ddd">　</td>
			</tr>
			<tr>
				<td>ID_0014</td>
				<td>12</td>
				<td>立替金情報</td>
				<td>立替金情報：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/client/tatekae/index.php">http://system3.mdc-group.co.jp/client/tatekae/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0015</td>
				<td>13</td>
				<td>立替金 親身登録／編集</td>
				<td>立替金 親身登録／編集：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/client/tatekae/tatekaekin.php">http://system3.mdc-group.co.jp/client/tatekae/tatekaekin.php</a></td>
			</tr>
			<tr>
				<td>ID_0016</td>
				<td>14</td>
				<td>依頼／受注履歴</td>
				<td>依頼／受注履歴：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/client/request/index.php">http://system3.mdc-group.co.jp/client/request/index.php</a></td>
			</tr>
			<tr>
				<td bgcolor="#ddd">ID_0017</td>
				<td bgcolor="#ddd">─</td>
				<td bgcolor="#ddd">【 合算完了報告書 】</td>
				<td bgcolor="#ddd">　</td>
				<td bgcolor="#ddd">　</td>
			</tr>
			<tr>
				<td>ID_0018</td>
				<td>15</td>
				<td>請求書一覧 【！】 請求書　破棄・訂正</td>
				<td>請求書一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/client/seikyusho/index.php">http://system3.mdc-group.co.jp/client/seikyusho/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0019</td>
				<td>16</td>
				<td>売掛情報 期間＆表示方法 選択</td>
				<td>売掛情報：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/client/urikake/index.php">http://system3.mdc-group.co.jp/client/urikake/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0020</td>
				<td>17</td>
				<td>売掛情報 【！】 入金処理訂正</td>
				<td>売掛情報：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/client/urikake/urikake-joho.php">http://system3.mdc-group.co.jp/client/urikake/urikake-joho.php</a></td>
			</tr>
			<tr>
				<td>ID_0021</td>
				<td>18</td>
				<td>未入金・不足 工事一覧</td>
				<td>未入金・不足 工事一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/client/minyukin/index.php">http://system3.mdc-group.co.jp/client/minyukin/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0022</td>
				<td>19</td>
				<td>仕入・発注履歴</td>
				<td>仕入・発注履歴：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/client/shiire-rireki/index.php">http://system3.mdc-group.co.jp/client/shiire-rireki/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0023</td>
				<td>20</td>
				<td>買掛情報 期間＆表示方法 選択</td>
				<td>買掛情報：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/client/kaikake/index.php">http://system3.mdc-group.co.jp/client/kaikake/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0024</td>
				<td>21</td>
				<td>買掛情報 【！】 支払処理訂正</td>
				<td>買掛情報：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/client/kaikake/kaikake-joho.php">http://system3.mdc-group.co.jp/client/kaikake/kaikake-joho.php</a></td>
			</tr>
			<tr>
				<td>ID_0025</td>
				<td>22</td>
				<td>取引先 検索結果 ※Topでの検索結果表示</td>
				<td>取引先 検索結果：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/client_search/index.php">http://system3.mdc-group.co.jp/client_search/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0026</td>
				<td>23</td>
				<td>新規工事登録 初期登録情報編集</td>
				<td>新規工事登録 初期登録情報編集：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/new_koji/index.php">http://system3.mdc-group.co.jp/new_koji/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0027</td>
				<td>24</td>
				<td>工事情報 検索結果</td>
				<td>工事情報 検索結果：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/koji_search/index.php">http://system3.mdc-group.co.jp/koji_search/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0028</td>
				<td>25</td>
				<td>基本情報 ※各工事情報 Ｔｏｐ</td>
				<td>基本情報：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/koji_search/index02_025.php">http://system3.mdc-group.co.jp/koji_search/index02_025.php</a></td>
			</tr>
			<tr>
				<td bgcolor="#ddd">ID_0029</td>
				<td bgcolor="#ddd">─</td>
				<td bgcolor="#ddd">【 各工事表紙出力 】 ※3種あり</td>
				<td bgcolor="#ddd">　</td>
				<td bgcolor="#ddd">　</td>
			</tr>
			<tr>
				<td>ID_0030</td>
				<td>26</td>
				<td>見積</td>
				<td>見積：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/koji_search/index03_026.php">http://system3.mdc-group.co.jp/koji_search/index03_026.php</a></td>
			</tr>
			<tr>
				<td bgcolor="#ddd">ID_0031</td>
				<td bgcolor="#ddd">─</td>
				<td bgcolor="#ddd">【 見積出力 】</td>
				<td bgcolor="#ddd">　</td>
				<td bgcolor="#ddd">　</td>
			</tr>
			<tr>
				<td>ID_0032</td>
				<td>27</td>
				<td>詳細見積作成　※ID_0030でのJS追加</td>
				<td>詳細見積作成：Guy's System</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td bgcolor="#ddd">ID_0033</td>
				<td bgcolor="#ddd">─</td>
				<td bgcolor="#ddd">【 見積詳細出力 】</td>
				<td bgcolor="#ddd">　</td>
				<td bgcolor="#ddd">　</td>
			</tr>
			<tr>
				<td>ID_0034</td>
				<td>28</td>
				<td>詳細見積作成　※ID_0030でのJS追加</td>
				<td>詳細見積作成：Guy's System</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td bgcolor="#ddd">ID_0035</td>
				<td bgcolor="#ddd">─</td>
				<td bgcolor="#ddd">【 追加見積出力 】</td>
				<td bgcolor="#ddd">　</td>
				<td bgcolor="#ddd">　</td>
			</tr>
			<tr>
				<td>ID_0036</td>
				<td>29</td>
				<td>積算ＣＳＶファイル インポート</td>
				<td>積算ＣＳＶファイル インポート：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/koji_search/index06_029.php">http://system3.mdc-group.co.jp/koji_search/index06_029.php</a></td>
			</tr>
			<tr>
				<td>ID_0037</td>
				<td>30</td>
				<td>初期積算データ</td>
				<td>初期積算データ：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/koji_search/index07_030.php">http://system3.mdc-group.co.jp/koji_search/index07_030.php</a></td>
			</tr>
			<tr>
				<td>ID_0038</td>
				<td>31</td>
				<td>積算データ成形 初期積算データリンク ※並べ替え機能／増減機能</td>
				<td>積算データ成形 初期積算データリンク：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/koji_search/index08_031.php">http://system3.mdc-group.co.jp/koji_search/index08_031.php</a></td>
			</tr>
			<tr>
				<td>ID_0039</td>
				<td>32</td>
				<td>見込原価 ※並べ替え機能／増減機能</td>
				<td>見込原価：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/koji_search/index09_033.php">http://system3.mdc-group.co.jp/koji_search/index09_033.php</a></td>
			</tr>
			<tr>
				<td>ID_0040</td>
				<td>33</td>
				<td>発注</td>
				<td>発注：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/koji_search/hacchu/index.php">http://system3.mdc-group.co.jp/koji_search/hacchu/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0041</td>
				<td>34</td>
				<td>発注リスト プレビュー 　※ポップアップ</td>
				<td>発注リスト プレビュー：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/koji_search/hacchu/popup_001.php">http://system3.mdc-group.co.jp/koji_search/hacchu/popup_001.php</a></td>
			</tr>
			<tr>
				<td bgcolor="#ddd">ID_0042</td>
				<td bgcolor="#ddd">─</td>
				<td bgcolor="#ddd">【画面プリントアウト】</td>
				<td bgcolor="#ddd">　</td>
				<td bgcolor="#ddd">　</td>
			</tr>
			<tr>
				<td>ID_0043</td>
				<td>35</td>
				<td>個別発注画面／発注設定</td>
				<td>個別発注画面／発注設定：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/koji_search/hacchu/kobetsu.php">http://system3.mdc-group.co.jp/koji_search/hacchu/kobetsu.php</a></td>
			</tr>
			<tr>
				<td bgcolor="#ddd">ID_0044</td>
				<td bgcolor="#ddd">─</td>
				<td bgcolor="#ddd">【 各種発注書出力 】</td>
				<td bgcolor="#ddd">　</td>
				<td bgcolor="#ddd">　</td>
			</tr>
			<tr>
				<td>ID_0045</td>
				<td>36</td>
				<td>見積書・発注書・完了報告一覧</td>
				<td>見積書・発注書・完了報告一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/koji_search/index11_036.php">http://system3.mdc-group.co.jp/koji_search/index11_036.php</a></td>
			</tr>
			<tr>
				<td>ID_0046</td>
				<td>37</td>
				<td>工事経費 工事経費 新規登録・編集</td>
				<td>工事経費 工事経費 新規登録・編集：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/koji_search/index12_037.php">http://system3.mdc-group.co.jp/koji_search/index12_037.php</a></td>
			</tr>
			<tr>
				<td>ID_0047</td>
				<td>38</td>
				<td>実行原価</td>
				<td>実行原価：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/koji_search/jikogenka/index.php">http://system3.mdc-group.co.jp/koji_search/jikogenka/index.php</a></td>
			</tr>
			<tr>
				<td bgcolor="#ddd">ID_0048</td>
				<td bgcolor="#ddd">─</td>
				<td bgcolor="#ddd">【 工事台帳出力 】</td>
				<td bgcolor="#ddd">　</td>
				<td bgcolor="#ddd">　</td>
			</tr>
			<tr>
				<td>ID_0049</td>
				<td>39</td>
				<td>入出金一覧</td>
				<td>入出金一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/koji_search/nyushukkin/index.php">http://system3.mdc-group.co.jp/koji_search/nyushukkin/index.php</a></td>
			</tr>
			<tr>
				<td bgcolor="#ddd">ID_0050</td>
				<td bgcolor="#ddd">─</td>
				<td bgcolor="#ddd">【 経理用 工事台帳出力 】</td>
				<td bgcolor="#ddd">　</td>
				<td bgcolor="#ddd">　</td>
			</tr>
			<tr>
				<td>ID_0051</td>
				<td>40</td>
				<td>各種ファイルアップロード 　※ポップアップ</td>
				<td>各種ファイルアップロード：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/koji_search/upload/index.php">http://system3.mdc-group.co.jp/koji_search/upload/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0052</td>
				<td>41</td>
				<td>アップロードファイル一覧</td>
				<td>アップロードファイル一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/koji_search/upload/list.php">http://system3.mdc-group.co.jp/koji_search/upload/list.php</a></td>
			</tr>
			<tr>
				<td>ID_0053</td>
				<td>42</td>
				<td>材料納品書照合 取引先選択</td>
				<td>材料納品書照合 取引先選択：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/material-nohinsho/index.php">http://system3.mdc-group.co.jp/material-nohinsho/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0054</td>
				<td>43</td>
				<td>納品書照合画面 ※納品日が入っているもののみ表示</td>
				<td>納品書照合画面：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/material-nohinsho/sansho/index.php">http://system3.mdc-group.co.jp/material-nohinsho/sansho/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0055</td>
				<td>44</td>
				<td>相違確認依頼書作成</td>
				<td>相違確認依頼書作成：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/material-nohinsho/sansho/soi-kakunin.php">http://system3.mdc-group.co.jp/material-nohinsho/sansho/soi-kakunin.php</a></td>
			</tr>
			<tr>
				<td bgcolor="#ddd">ID_0056</td>
				<td bgcolor="#ddd">─</td>
				<td bgcolor="#ddd">【 相違確認依頼書出力 】</td>
				<td bgcolor="#ddd">　</td>
				<td bgcolor="#ddd">　</td>
			</tr>
			<tr>
				<td>ID_0057</td>
				<td>45</td>
				<td>労務申請・承認 ※スマホ対応要す</td>
				<td>労務申請・承認：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/romu-shinsei/index.php">http://system3.mdc-group.co.jp/romu-shinsei/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0058</td>
				<td>46</td>
				<td>労務申請 ※スマホ対応要す</td>
				<td>労務申請：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/romu-shinsei/shinsei/index.php">http://system3.mdc-group.co.jp/romu-shinsei/shinsei/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0059</td>
				<td>47</td>
				<td>労務申請一覧 表示選択 ※スマホ対応要す</td>
				<td>労務申請一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/romu-shinsei/list/index.php">http://system3.mdc-group.co.jp/romu-shinsei/list/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0060</td>
				<td>48</td>
				<td>申請一覧結果 ※スマホ対応要す</td>
				<td>申請一覧結果：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/romu-shinsei/list/result.php">http://system3.mdc-group.co.jp/romu-shinsei/list/result.php</a></td>
			</tr>
			<tr>
				<td>ID_0061</td>
				<td>49</td>
				<td>労務申請／承認 承認実行 ※スマホ対応要す</td>
				<td>労務申請／承認 承認実行：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/romu-shinsei/approval">http://system3.mdc-group.co.jp/romu-shinsei/approval</a></td>
			</tr>
			<tr>
				<td>ID_0062</td>
				<td>50</td>
				<td>在庫一覧／登録 在庫一覧画面</td>
				<td>在庫一覧／登録 在庫一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/zaiko/index.php">http://system3.mdc-group.co.jp/zaiko/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0063</td>
				<td>51</td>
				<td>新規登録・編集</td>
				<td>新規登録・編集：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/zaiko/edit.php">http://system3.mdc-group.co.jp/zaiko/edit.php</a></td>
			</tr>
			<tr>
				<td>ID_0064</td>
				<td>52</td>
				<td>品番登録／編集 登録済み品番一覧</td>
				<td>品番登録／編集 登録済み品番一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/hinban/index.php">http://system3.mdc-group.co.jp/hinban/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0065</td>
				<td>53</td>
				<td>新規登録・編集</td>
				<td>新規登録・編集：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/hinban/edit.php">http://system3.mdc-group.co.jp/hinban/edit.php</a></td>
			</tr>
			<tr>
				<td>ID_0066</td>
				<td>54</td>
				<td>経理処理 Top</td>
				<td>経理処理：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/index.php">http://system3.mdc-group.co.jp/keiri/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0067</td>
				<td>55</td>
				<td>請求書発行 取引先選択・表示単位選択</td>
				<td>請求書発行：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/seikyusho/index.php">http://system3.mdc-group.co.jp/keiri/seikyusho/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0068</td>
				<td>56.57</td>
				<td>個別請求書発行画面</td>
				<td>個別請求書発行：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/seikyusho/kobetsu-hakko.php">http://system3.mdc-group.co.jp/keiri/seikyusho/kobetsu-hakko.php</a></td>
			</tr>
			<tr>
				<td bgcolor="#ddd">ID_0069</td>
				<td bgcolor="#ddd">─</td>
				<td bgcolor="#ddd">【 請求書／請求明細書 出力 】</td>
				<td bgcolor="#ddd">　</td>
				<td bgcolor="#ddd">　</td>
			</tr>
			<tr>
				<td>ID_0070</td>
				<td>58</td>
				<td>入金処理 入金元選択</td>
				<td>入金処理：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/nyukin-shori/index.php">http://system3.mdc-group.co.jp/keiri/nyukin-shori/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0071</td>
				<td>59</td>
				<td>入金処理 請求書選択</td>
				<td>入金処理：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/nyukin-shori/seikyusho/index.php">http://system3.mdc-group.co.jp/keiri/nyukin-shori/seikyusho/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0072</td>
				<td>60</td>
				<td>入金処理画面 ※各種消し込み</td>
				<td>入金処理：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/nyukin-shori/seikyusho/shori-gamen.php">http://system3.mdc-group.co.jp/keiri/nyukin-shori/seikyusho/shori-gamen.php</a></td>
			</tr>
			<tr>
				<td>ID_0073</td>
				<td>61</td>
				<td>入金予定表 特定月内表示／月単位表示 各種選択</td>
				<td>入金予定表：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/nyukin-yotei/index.php">http://system3.mdc-group.co.jp/keiri/nyukin-yotei/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0074</td>
				<td>62</td>
				<td>特定月内 表示画面</td>
				<td>特定月内 表示：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/nyukin-yotei/spc-month.php">http://system3.mdc-group.co.jp/keiri/nyukin-yotei/spc-month.php</a></td>
			</tr>
			<tr>
				<td>ID_0075</td>
				<td>63</td>
				<td>月単位 表示画面</td>
				<td>月単位 表示：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/nyukin-yotei/month.php">http://system3.mdc-group.co.jp/keiri/nyukin-yotei/month.php</a></td>
			</tr>
			<tr>
				<td>ID_0076</td>
				<td>64</td>
				<td>売掛情報 対象月選択</td>
				<td>売掛情報：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/urikake/index.php">http://system3.mdc-group.co.jp/keiri/urikake/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0077</td>
				<td>65</td>
				<td>売掛情報表示画面</td>
				<td>売掛情報表示：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/urikake/info.php">http://system3.mdc-group.co.jp/keiri/urikake/info.php</a></td>
			</tr>
			<tr>
				<td>ID_0078</td>
				<td>66</td>
				<td>受請求処理 取引先選択・表示単位選択</td>
				<td>受請求処理：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/uke-seikyu/index.php">http://system3.mdc-group.co.jp/keiri/uke-seikyu/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0079</td>
				<td>67.68</td>
				<td>受請求処理画面</td>
				<td>受請求処理：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/uke-seikyu/monitor.php">http://system3.mdc-group.co.jp/keiri/uke-seikyu/monitor.php</a></td>
			</tr>
			<tr>
				<td bgcolor="#ddd">ID_0080</td>
				<td bgcolor="#ddd">─</td>
				<td bgcolor="#ddd">【 支払い通知書出力 】 ※協力会社のみ</td>
				<td bgcolor="#ddd">　</td>
				<td bgcolor="#ddd">　</td>
			</tr>
			<tr>
				<td bgcolor="#ddd">ID_0081</td>
				<td bgcolor="#ddd">─</td>
				<td bgcolor="#ddd">【 受請求書出力 】 ※協力会社のみ</td>
				<td bgcolor="#ddd">　</td>
				<td bgcolor="#ddd">　</td>
			</tr>
			<tr>
				<td>ID_0082</td>
				<td>69</td>
				<td>支払処理 支払先選択</td>
				<td>支払処理：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/shiharai-shori/index.php">http://system3.mdc-group.co.jp/keiri/shiharai-shori/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0083</td>
				<td>70</td>
				<td>支払処理</td>
				<td>支払処理：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/shiharai-shori/shori.php">http://system3.mdc-group.co.jp/keiri/shiharai-shori/shori.php</a></td>
			</tr>
			<tr>
				<td>ID_0084</td>
				<td>71</td>
				<td>自社経費登録 単発経費／継続経費</td>
				<td>自社経費登録 単発経費／継続経費：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/jisha-keihi/index.php">http://system3.mdc-group.co.jp/keiri/jisha-keihi/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0085</td>
				<td>72</td>
				<td>単発経費 一覧</td>
				<td>単発経費 一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/tanpatsu-keihi/index.php">http://system3.mdc-group.co.jp/keiri/tanpatsu-keihi/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0086</td>
				<td>73</td>
				<td>単発経費 新規登録・編集</td>
				<td>単発経費 新規登録・編集：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/tanpatsu-keihi/edit.php">http://system3.mdc-group.co.jp/keiri/tanpatsu-keihi/edit.php</a></td>
			</tr>
			<tr>
				<td>ID_0087</td>
				<td>74</td>
				<td>継続経費 一覧</td>
				<td>継続経費 一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/keizoku-keihi/index.php">http://system3.mdc-group.co.jp/keiri/keizoku-keihi/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0088</td>
				<td>75</td>
				<td>継続経費 新規登録・編集</td>
				<td>継続経費 新規登録・編集：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/keizoku-keihi/edit.php">http://system3.mdc-group.co.jp/keiri/keizoku-keihi/edit.php</a></td>
			</tr>
			<tr>
				<td>ID_0089</td>
				<td>76</td>
				<td>支払経費一覧 期間選択 結果一覧</td>
				<td>支払経費一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/shiharai-keihi/index.php">http://system3.mdc-group.co.jp/keiri/shiharai-keihi/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0090</td>
				<td>77</td>
				<td>支払予定表 対象月選択・出金科目選択</td>
				<td>支払予定表：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/shiharai-yotei/index.php">http://system3.mdc-group.co.jp/keiri/shiharai-yotei/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0091</td>
				<td>78</td>
				<td>支払予定表</td>
				<td>支払予定表：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/shiharai-yotei/shiharai-yotei.php">http://system3.mdc-group.co.jp/keiri/shiharai-yotei/shiharai-yotei.php</a></td>
			</tr>
			<tr>
				<td>ID_0092</td>
				<td>79</td>
				<td>買掛情報 対象月選択</td>
				<td>買掛情報：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/kaikake/index.php">http://system3.mdc-group.co.jp/keiri/kaikake/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0093</td>
				<td>80</td>
				<td>買掛情報表示</td>
				<td>買掛情報表示：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/kaikake/info.php">http://system3.mdc-group.co.jp/keiri/kaikake/info.php</a></td>
			</tr>
			<tr>
				<td>ID_0094</td>
				<td>81</td>
				<td>仕掛金（未成工事支出金）一覧 各種表示絞り込み</td>
				<td>仕掛金（未成工事支出金）一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/shikakekin/index.php">http://system3.mdc-group.co.jp/keiri/shikakekin/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0095</td>
				<td>82</td>
				<td>仕掛金表示画面</td>
				<td>仕掛金表示：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/shikakekin/monitor.php">http://system3.mdc-group.co.jp/keiri/shikakekin/monitor.php</a></td>
			</tr>
			<tr>
				<td>ID_0096</td>
				<td>83</td>
				<td>入出金一覧 対象期間選択</td>
				<td>入出金一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/nyushukkin/index.php">http://system3.mdc-group.co.jp/keiri/nyushukkin/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0097</td>
				<td>84</td>
				<td>入出金一覧 表示画面</td>
				<td>入出金一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/keiri/nyushukkin/monitor.php">http://system3.mdc-group.co.jp/keiri/nyushukkin/monitor.php</a></td>
			</tr>
			<tr>
				<td>ID_0098</td>
				<td>85</td>
				<td>自社発注 自社発注履歴表示</td>
				<td>自社発注 自社発注履歴：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/in-house_order/index.php">http://system3.mdc-group.co.jp/in-house_order/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0099</td>
				<td>86</td>
				<td>個別発注画面／発注設定</td>
				<td>個別発注画面／発注設定：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/in-house_order/kobetsu.php">http://system3.mdc-group.co.jp/in-house_order/kobetsu.php</a></td>
			</tr>
			<tr>
				<td bgcolor="#ddd">ID_0100</td>
				<td bgcolor="#ddd">─</td>
				<td bgcolor="#ddd">【 各種発注書出力 】</td>
				<td bgcolor="#ddd">　</td>
				<td bgcolor="#ddd">　</td>
			</tr>
			<tr>
				<td>ID_0101</td>
				<td>87</td>
				<td>先行発注 先行発注履歴表示</td>
				<td>先行発注 先行発注履歴：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/preceding_order/index.php">http://system3.mdc-group.co.jp/preceding_order/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0102</td>
				<td>88</td>
				<td>個別発注画面／発注設定</td>
				<td>個別発注画面／発注設定：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/preceding_order/kobetsu01.php">http://system3.mdc-group.co.jp/preceding_order/kobetsu01.php</a></td>
			</tr>
			<tr>
				<td bgcolor="#ddd">ID_0103</td>
				<td bgcolor="#ddd">─</td>
				<td bgcolor="#ddd">【 各種発注書出力 】</td>
				<td bgcolor="#ddd">　</td>
				<td bgcolor="#ddd">　</td>
			</tr>
			<tr>
				<td>ID_0104</td>
				<td>89</td>
				<td>材料販売登録 材料販売履歴一覧</td>
				<td>材料販売登録 材料販売履歴一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/material-hanbai/index.php">http://system3.mdc-group.co.jp/material-hanbai/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0105</td>
				<td>90</td>
				<td>材料販売新規登録 ※基本情報編集のリンク先</td>
				<td>材料販売新規登録：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/material-hanbai/material-edit.php">http://system3.mdc-group.co.jp/material-hanbai/material-edit.php</a></td>
			</tr>
			<tr>
				<td>ID_0106</td>
				<td>91</td>
				<td>材料販売個別情報 見積</td>
				<td>材料販売個別情報 見積：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/material-hanbai/material-info/index.php">http://system3.mdc-group.co.jp/material-hanbai/material-info/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0107</td>
				<td>92</td>
				<td>発注</td>
				<td>発注：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/material-hanbai/material-info/hacchu.php">http://system3.mdc-group.co.jp/material-hanbai/material-info/hacchu.php</a></td>
			</tr>
			<tr>
				<td>ID_0108</td>
				<td>93</td>
				<td>個別発注書設定</td>
				<td>個別発注書設定：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/material-hanbai/material-info/kobetsu.php">http://system3.mdc-group.co.jp/material-hanbai/material-info/kobetsu.php</a></td>
			</tr>
			<tr>
				<td>ID_0109</td>
				<td>94</td>
				<td>見積書・発注書一覧</td>
				<td>見積書・発注書一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/material-hanbai/material-info/list.php">http://system3.mdc-group.co.jp/material-hanbai/material-info/list.php</a></td>
			</tr>
			<tr>
				<td>ID_0110</td>
				<td>95</td>
				<td>集計</td>
				<td>集計：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/total/index.php">http://system3.mdc-group.co.jp/total/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0111</td>
				<td>96</td>
				<td>売上金額 集計結果</td>
				<td>売上金額 集計：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/total/index02_096_.php">http://system3.mdc-group.co.jp/total/index02_096_.php</a></td>
			</tr>
			<tr>
				<td>ID_0112</td>
				<td>97</td>
				<td>粗利金額 集計結果</td>
				<td>粗利金額 集計：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/total/index03_097_.php">http://system3.mdc-group.co.jp/total/index03_097_.php</a></td>
			</tr>
			<tr>
				<td>ID_0113</td>
				<td>98</td>
				<td>材料・工事発注 金額集計結果</td>
				<td>材料・工事発注 金額集計：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/total/index04_098_.php">http://system3.mdc-group.co.jp/total/index04_098_.php</a></td>
			</tr>
			<tr>
				<td>ID_0114</td>
				<td>99</td>
				<td>労務集計結果</td>
				<td>労務集計：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/total/index05_099_.php">http://system3.mdc-group.co.jp/total/index05_099_.php</a></td>
			</tr>
			<tr>
				<td>ID_0115</td>
				<td>100</td>
				<td>各種マスタ編集 マスタ・カテゴリ一覧</td>
				<td>各種マスタ編集 マスタ・カテゴリ一覧：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/master-edit/index.php">http://system3.mdc-group.co.jp/master-edit/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0116</td>
				<td>101</td>
				<td>共通系・その他マスタ</td>
				<td>共通系・その他マスタ：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/master-edit/index02_101_.php">http://system3.mdc-group.co.jp/master-edit/index02_101_.php</a></td>
			</tr>
			<tr>
				<td>ID_0117</td>
				<td>102</td>
				<td>各種ステータス・マスタ</td>
				<td>各種ステータス・マスタ：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/master-edit/index03_102_.php">http://system3.mdc-group.co.jp/master-edit/index03_102_.php</a></td>
			</tr>
			<tr>
				<td>ID_0118</td>
				<td>103</td>
				<td>原価計算項目 マスタ</td>
				<td>原価計算項目 マスタ：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/master-edit/index04_103_.php">http://system3.mdc-group.co.jp/master-edit/index04_103_.php</a></td>
			</tr>
			<tr>
				<td>ID_0119</td>
				<td>104</td>
				<td>見積系マスタ</td>
				<td>見積系マスタ：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/master-edit/index05_104_.php">http://system3.mdc-group.co.jp/master-edit/index05_104_.php</a></td>
			</tr>
			<tr>
				<td>ID_0120</td>
				<td>105</td>
				<td>請求系マスタ</td>
				<td>請求系マスタ：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/master-edit/index06_105_.php">http://system3.mdc-group.co.jp/master-edit/index06_105_.php</a></td>
			</tr>
			<tr>
				<td>ID_0121</td>
				<td>106</td>
				<td>発注系マスタ</td>
				<td>発注系マスタ：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/master-edit/index07_106_.php">http://system3.mdc-group.co.jp/master-edit/index07_106_.php</a></td>
			</tr>
			<tr>
				<td>ID_0122</td>
				<td>107</td>
				<td>支払系マスタ</td>
				<td>支払系マスタ：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/master-edit/index08_107_.php">http://system3.mdc-group.co.jp/master-edit/index08_107_.php</a></td>
			</tr>
			<tr>
				<td>ID_0123</td>
				<td>108</td>
				<td>見積書テンプレートマスタ</td>
				<td>見積書テンプレートマスタ：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/master-edit/template/index.php">http://system3.mdc-group.co.jp/master-edit/template/index.php</a></td>
			</tr>
			<tr>
				<td>ID_0124</td>
				<td>109</td>
				<td>個別 見積書テンプレート登録 新規登録・編集</td>
				<td>個別 見積書テンプレート登録：Guy's System</td>
				<td><a target="_blank" href="http://system3.mdc-group.co.jp/master-edit/template/edit.php">http://system3.mdc-group.co.jp/master-edit/template/edit.php</a></td>
			</tr>
		</table>
	</section>
	<footer>© GUY’S COMPANY All Rights Reserved</footer>
</body>
</html>