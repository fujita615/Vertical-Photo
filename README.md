# 縦長写真共有サービス VerticalPhoto ver.2
縦長写真専用のアップロード・ダウンロードができるWEBサイトです。

## ver.1からの変更点
 フロントエンドとバックエンドを分離して別サーバーに配置
  ### backend 
  - laravelをver.10から11に変更
  #### 開発環境
  - WEBserverコンテナをamazonLinux(Redhat系)からdebian系に変更 
  - キャッシュ管理用にredisコンテナを追加 
  
### frontend 
 - 投稿機能に多重送信防止策を追加
  #### 開発環境
- vite server


## 背景
ポートフォリオとして制作したWEBサービスのサンプルです.

## URL
https://www.yf5160.com

## 機能
- 写真の一覧表示 詳細表示 タグ検索 
- ユーザー情報登録・更新・削除
- 写真の投稿（タグ付け）・削除・ダウンロード
- 他ユーザーの投稿写真へのいいね・コメント・ダウンロード
- レスポンシブデザイン

## 使用言語
- PHP(Laravel __ver.11__)
- JavaScript(Vue3)
- CSS(SASS/FLOCSS設計)


## 開発環境
### backend
Docker 
  - php-fpm
  - apache2
  - mysql 
  - __redis__(キャッシュ管理用に追加)

### frontend
 Vite  (server & Build Tools) 



