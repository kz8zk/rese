# アプリケーション名
飲食店予約サービス【Rese(リーズ)】
ログイン後、店舗の予約やお気に入りを追加できます。

## 作成した目的
企業様の飲食店予約サービスを作成した。

## アプリケーションURL
* 開発環境: http://localhost
* phpMyAdmin: http://localhost:8080

## 他のリポジトリ  
特になし

## 機能一覧
* ログイン機能
* メール認証
* お気に入り追加/削除
* 予約追加/変更

## 使用技術（実行環境）
* HTML
* CSS
* PHP 7.4.9
* Laravel 8.83.27
* MySQL 10.3.39

## テーブル設計
<img width="343" alt="テーブル設計" src="https://github.com/user-attachments/assets/cdce8774-3611-4d9d-9f09-d4509c399c1d" />

## ER図
<img width="1035" alt="ER" src="https://github.com/user-attachments/assets/5759fcc4-11be-4eac-bd4c-0c0658b85b4e" />

# 環境構築　　
Dockerビルド  
　1.　```git clone git@github.com:kz8zk/rese.git```  
　2.　DockerDesktopを立ち上げる  
　3.　```docker-compose up -d --build```

Laravel環境構築  
　1.　```docker-compose exec php bash```  
　2.　```composer install```  
　3.　「.env.example」ファイルを 「.env」ファイルに命名を変更。または、新しく.envファイルを作成する  
　4.　.envに以下の環境変数を追加  
 ```
　　　DB_CONNECTION=mysql  
　　　DB_HOST=mysql  
　　　DB_PORT=3306  
　　　DB_DATABASE=laravel_db  
　　　DB_USERNAME=laravel_user  
　　　DB_PASSWORD=laravel_pass  
```
  5. マイグレーションの実行  
   ```php artisan migrate```
     
  6. シーディングの実行  
   ```php artisan db:seed```

## 他に記載することがあれば記述する  
現在開発途中段階です。
