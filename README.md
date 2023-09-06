# Hello Laravel

![Static Badge](https://img.shields.io/badge/PHP-v8.2.4-33CCFF)
![Static Badge](https://img.shields.io/badge/Laravel-v9.*-3388FF)
![Static Badge](https://img.shields.io/badge/Node.js-v18.17.1-338855)


## 概要・目的

家計簿をつけるwebアプリを目標としたプロジェクト．
主な機能としては以下の通り

- Todoリストの作成(使い方の勉強) -> 買い物リストに昇格するかも
- レシート・クレカ明細をスマホ等で読み取り解析
- 月ごとの利用額や買い物の種類を円グラフ、棒グラフで示す

開発動機は，形に残る，スマホ(iphone)でも見れるもがいい．iOSの開発環境は環境がないのと，画像認識や授業で行ったこと復習も兼ねてpythonやC言語が使えるものを考えた結果，webアプリに至った．
学習時間や開発の規模から，公開せずに，ローカルでの仕様を目的としている．

## 使用技術

- Windows 11/10
- XAMPP for Windows 8.2.4
- Laravel Framework 9.52.15
- PHP 8.2.4
- Apache/2.4.56
- MySQL(MariaDB) 15.1
- Node.js v18.17.1

## ER図

後日記載

## 機能（設計仕様目標）

- Todoリスト
  - 予定の作成・編集 (買い物リストで使用可能)
    - 個数も選択できるように拡張する必要あり
    - フォルダで分類して管理 -> 項目のリストの中にタグとして持たせる
  - ユーザ登録、ログイン機能 (使い方の勉強)
    - パスワードの設定機能あり
    - ユーザごとに項目を持たせられる
  - 最終的にユーザ，タグ(商品の種類)などでソートできるとよい
- レシートの読み取り
  - webアプリにアップロードする形式
  - 店舗，日付，商品名，値段，個数を抽出したい
    - データベースに登録
    - 人の目で編集可能なようにテキストフィール，ドロップダウンリストを設置
  - クレカも似たようなもの．APIで取れたらそれ使うかも
  - 方法はPythonかC++のOpenCVを使用
- グラフの作成
  - データベースから，Pythonのmatlabで作成予定
    - 他にいいものがあれば変更する
- UIはBootstrapで適当に見繕う予定

### 補足

Githubにデータベースを保存するのはよくないため，作業用TODOリストをファイルで作成し，webで更新できように変更するかも

## 以下はLaravelで自動生成されたもの

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
