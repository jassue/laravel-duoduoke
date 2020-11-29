## 拼多多-多多客API Laravel-SDK

### 环境要求

- Laravel 5+
- Composer
- ext-curl 拓展

### 安装

```
composer require jassue/laravel-duoduoke
```

### 配置

1. 在 `config/app.php` 注册 ServiceProvider 和 Facade (Laravel 5.5 + 无需手动注册)

```php
'providers' => [
    // ...
    Jassue\LaravelDuoDuoKe\ServiceProvider::class,
],
'aliases' => [
    // ...
    'DuoDuoKe' => Jassue\LaravelDuoDuoKe\Facades\Client::class,
],
```

2. 创建配置文件

```bash
php artisan vendor:publish --provider="Jassue\LaravelDuoDuoKe\ServiceProvider"
```

3. 修改应用根目录下 `config/pdd-sdk.php` 对应参数配置

### 使用

```
use Jassue\LaravelDuoDuoKe\Facades\Client;

// 获取爆款排行商品接口
// 方式一
$result = Client::topGoodsListQuery();
// 方式二
$result = Client::request('pdd.ddk.top.goods.list.query', [])
```

### 相关文档

- [多多客API 官方文档](https://open.pinduoduo.com/application/document/api?id=pdd.ddk.cms.prom.url.generate)

### License
MIT
