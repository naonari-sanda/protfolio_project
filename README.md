# 概要

- 海外に興味ある方がお気に入りの国を見つけるwebアプリ(国は主にG20)

# なぜこのアプリを制作したか

1. 昨今海外旅行に行きたい方が沢山いるが、コロナの影響の為多くの国が入国制限をしている、しかしながら昨今日本からの入国を緩和している国があるがそれらをまとめているサイトなどが少なく、わかりにくい。
  解決→入国緩和制限をしている国を一発検索でき、その国のコロナ状況も把握できる。

2. 現状行きたい国が決まっているがインターネットで情報を集めるが旅行ブログ記事等などからしか情報を収集するがそれらの情報は製作者の主観なので様々なブログ記事を読まなければいけなくなり、面倒。
  解決→レビュー機能を入れその国の情報を様々な方から入手できる。(レビューを簡単にできる仕組みとして星評価機能を追加)

3. 現状様々な国をまとめているサイトが少なく、あったとしてもかなり情報が限定されていて旅行者の必要な情報が得られにくい。
  解決→様々な国をまとめ、旅行者に関して必要な情報が手に入り(言語や宗教,物価など)、レビュー機能、フォトギャラリー機能を入れコアな情報も入手可能。

4. 個人的な趣味ですが様々な国の情報(人口やgdpなど)を数値化しランキング形式にし、様々な情報の知見を広げたかった。

# 機能

相性の良い相方を表示させる機能
ボケの芸人に対してツッコミの芸人を表示させるなど、5項目で選定
マッチング率表示
ページネーション付き検索機能
おみくじ検索（ランダムで１名表示）
AND検索、OR検索
キーワード検索（半角・全角スペースで区切られた複数のキーワードの検索も可能）
並び替え（人気順、新規登録順、年齢が若い順、ランダム順）
ダイレクトメッセージ機能
受信メッセージ・送信済みメッセージの表示
未読・既読表示の切り替え
未読メッセージ数をバッヂで表示
閲覧履歴・あしあと機能
自己が、プロフィール詳細を閲覧した芸人を、最新の10名表示
自己のプロフィール詳細を閲覧した芸人を、最新の20名表示
お気に入り登録機能
お気に入り登録後、解除ボタン表示
お気に入り解除後、登録ボタン表示
登録数をバッヂで表示
その他の機能
ランキング機能（お気に入り登録された数に基づく）
メッセージ受信時お知らせメール送信機能（AWSのSES利用）
プロフィール画像アップロード機能(AWSのS3保存)
プロフィール編集機能
新規登録・ログイン・ログアウト機能
パスワード変更・アカウント削除機能
Twitterのシェアボタン機能
地図表示（Google Map API利用）
Featureテスト機能

#技術

php7.3.3, Laravel5.8.15
Bootstrap4
MySQL5.7.25
AWS
EC2へデプロイ
Route53でDNSレコードを管理
ACMでSSL証明書を管理、ALBで使用
Docker、Laradock
