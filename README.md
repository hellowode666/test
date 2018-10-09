|   配置   |    测试机     |    施压机     |
| :----: | :--------: | :--------: |
|  操作系统  | CentOS 7.4 | CentOS 7.4 |
|  vCPU  |     1      |     2      |
|   内存   |    1 GB    |    4 GB    |
|  PHP   |    7.2     |    ----    |
| Swoole| 1.9.21   |  ----    |


|参数名|必选|类型|说明|示例值|
|:----    |:---|:----- |-----   |
|sign |是  |string |签名   |AEDCo4WDUjFb4hc7PULaH9zz7o83W%2BtOt9jHeQ4gaUPoPeq%2FJyFU2S1WwfBlnNfuUCoT%2B%2FuLvl%2FK%0AIJbDXBjwA11RYI5J1uHcUkZAJLLPz77z3FM7xnE5AXDsQzCZynePwOBKlWORbbKSVuAdgtJjEtyf%0Ad1rXEhW9VtebgQMDl7c%3D%0A|
|sn |是  |int | 猫玩订单号    |180927031830E06149618|
|ucid     |是  |int | 用户ID    |614|
|usef    |是  |int | 猫币    |0.00|
|vid     |是  |string | 应用ID    |50|
|trade_type     |是  |string | 交易类型    |H5支付为MWEB|
|type     |是  |string | 使用场景    |苹果为：IOS；安卓为：Android；wap网站应用为：Wap|
|app_name     |是  |string | 应用名    |猫玩支付|
|package_name     |是  |string | 包名    |com.maowan.sdk|
|deviceid|否|string|cp方订单号|F1330088-19C7-472D-9103-5BDCFA520FE0|