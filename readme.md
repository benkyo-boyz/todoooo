# todoooo


-mysqlをmacで使う-

.インストール
$ brew install mysql

.立ち上げる
$ mysql.server start

.ログイン
$ (新しいコンソールで)mysql -uroot

.mysql　パスワード設定 (rootとする)
mysqlログイン後
SET PASSWORD FOR root@localhost=PASSWORD('hoge');


・ログアウト
コマンドキー　＋　C

・ログインテスト
$ mysql -u root -p

・todoooo用のデータベース作成
mysqlログイン後
CREATE DATABASE todoproco;

終わり。