<?php
return array(
    /* 项目设定 */
	'URL_MODEL'=>1,
    'APP_DEBUG'             => false,                       // 是否开启调试模式
    'APP_FILE_CASE'         => true,                        // 是否检查文件的大小写 对Windows平台有效
	'LOG_RECORD'            => ture,                        // 默认不记录日志,要用要开，本地受app_debug影响，可以不为true
    'APP_GROUP_DEPR'        => '.',                         // 模块分组之间的分割符
    'APP_GROUP_LIST'        => '',                          // 项目分组设定,多个组之间用逗号分隔,例如'Home,Admin'
    'APP_UPLOAD_PATH'       => '/upload/',                  // 上传路径
    'IMG_UPLOAD_PATH'       => '/upload/imagecache/',
    'FB_UPLOAD_PATH'        => '/upload/feedback/',
    'DEFAULT_LANG'          => 'zh-cn',                     // 默认语言
	'SUPPLIER_BONUS'          => '50',                     // 供应商有奖推荐金额
    // 'LAYOUT_ON'             => true,
    // 'LAYOUT_NAME'           =>'layout',
	//'SHOW_PAGE_TRACE' =>true, // 显示页面Trace信息

	/* Cookie设置 */
    'COOKIE_EXPIRE'         => 43200,                       // Coodie有效期
    'COOKIE_DOMAIN'         => 'trip.xmzhiu.co',            // Cookie有效域名
    'COOKIE_PATH'           => '/',                         // Cookie路径
    'COOKIE_PREFIX'         => '',                          // Cookie前缀 避免冲突

    /* 默认设定 */
    'DEFAULT_APP'           => '@',                         // 默认项目名称，@表示当前项目
    'DEFAULT_GROUP'         => 'appmanage',                 // 默认分组
    'DEFAULT_MODULE'        => 'Index',                     // 默认模块名称
    'DEFAULT_ACTION'        => 'index',                     // 默认操作名称

    /* 数据库设置 */
    'DB_TYPE'               => 'mysql',                     // 数据库类型
    'DB_HOST'               => '120.25.235.39',                 // 服务器地址
    'DB_NAME'               => 'jeesite_20151220',               // 数据库名
    'DB_USER'               => 'root',                      // 用户名
    'DB_PWD'                => 'zhiU123.',                    // 密码
    'DB_PORT'               => 3306,                        // 端口
    'DB_PREFIX'             => '',							// 数据库表前缀
    'DB_FIELDS_CACHE'       => true,                        // 启用字段缓存
    'DB_CHARSET'            => 'utf8',                      // 数据库编码默认采用utf8

    /* 错误设置 */
    'ERROR_MESSAGE'         => '您浏览的页面暂时发生了错误！请稍后再试～',//错误显示信息,非调试模式有效
    'ERROR_PAGE'            => '', // 错误定向页面

    //URL地址是区分大小写
    'URL_CASE_INSENSITIVE'  => true,

    /* 模板引擎设置 */
    'TMPL_CACHE_ON'			=> false,                       // 是否开启模板编译缓存,设为false则每次都会重新编译
    'TMPL_ACTION_ERROR'     => 'public:success',            // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'   => 'public:success',            // 默认成功跳转对应的模板文件
    'TMPL_ENGINE_TYPE'      => 'Smarty',					// 模版引擎类型
    'TMPL_L_DELIM'          => '<{',                        // 模板引擎普通标签开始标记
    'TMPL_R_DELIM'          => '}>',                        // 模板引擎普通标签结束标记

    //3. session config
    'SESSION_NAME'          => '',                          // Session名称
    'SESSION_EXPIRE'        => 43200,                       // Session expire after 1800 seconds
    'SESSION_PATH'          => RUNTIME_PATH.'Session/',     // Session保存路径

    /* RBAC设置 */
    'USER_AUTH_ON'          => true,                        // 是否需要认证
    'USER_AUTH_TYPE'        => 1,                           // 认证类型
    'USER_AUTH_KEY'         => 'TripUserKey',               // user认证识别号
    'ADMIN_AUTH_KEY'        => 'TripAdminKey',              // admin认证识别号
    'REQUIRE_AUTH_MODULE'   => '',                          // 需要认证模块
    'NOT_AUTH_MODULE'       => 'Public',                    // 无需认证模块
    'REQUIRE_AUTH_ACTION'   => '',                          // 需要认证方法
    'NOT_AUTH_ACTION'       => '',                          // 无需认证方法
    'USER_AUTH_GATEWAY'     => '/Public/login',             // 认证网关
    'USER_AUTH_MODEL'       => 'SysUser',                   // 用户模型USER
    'RBAC_ROLE_TABLE'       => 'app_role',                  // 角色表名称
    'RBAC_USER_TABLE'       => 'app_role_user',             // 用户表名称
    'RBAC_ACCESS_TABLE'     => 'app_access',                // 权限表名称
    'RBAC_NODE_TABLE'       => 'app_node',                  // 节点表名称
    'RABC_MENU_ACCESS'      => 'app_menu_access',           // 菜单权限
    'RABC_ADMIN_MENU'       => 'app_admin_menu',            // 菜单表

	/* 分页设置 */
	'PAGE_ROLLPAGE'         => 5,							// 分页显示页数
	'PAGE_LISTROWS'         => 20,							// 分页每页显示记录数
	'UPLOAD_CACHE_PATH'                 => '/upload/imagecache',//上传图片缓存路径
    /****************************************************************************************************************/
    /* 第三方配置                                                                                                    */
    /****************************************************************************************************************/
    'WEBSITE_NAME'                      => '旅游电商一体机管理系统',                              // 网站名称
    'WEBSITE_URL'                       => 'www.zy.com',								// 网站域名

    //用户默认头像地址
    'USER_DEFAULT_HEADER'               => 'http://image.xmzhiu.cn/app_mobile/shop_header/default_buyer_header.jpg@!mobile-pc-header',

    //阿里云OSS
    'OSS_ACCESS_ID'                     => 'M09WtK0HVOMIkzv0',                                  //阿里云_测试服_oss_access_id
    'OSS_ACCESS_KEY'                    => '5FebmbgrnGA8jcJZNUtB4ubUM0NfdI',                    //阿里云_测试服_oss_access_key
    // 'OSS_ACCESS_ID'                     => 'lWnjmGOzMYVpTHj8',                                  //阿里云_正式服_oss_access_id
    // 'OSS_ACCESS_KEY'                    => 'DbXEeJMy861QThZM8rc1Wn5gA5qQBW',                    //阿里云_正式服_oss_access_key
    'ALI_LOG'                           => FALSE,                                               //是否输出日志
    'ALI_LOG_PATH'                      => getcwd().'/ThinkPHP/Extend/Vendor/Aliyun/logs',      //日志输出目录
    'ALI_DISPLAY_LOG'                   => FALSE,                                               //是否显示日志输出
    'ALI_LANG'                          => 'zh',                                                //语言
    'ALI_BUCKET'                        => 'zhiu-demo',                                         //存储空间 zhiu-demo
    'ALI_UPLOAD_USERHEADER'             => 'app_mobile/user_header/',                           //虚拟目录 用户头像
    'ALI_UPLOAD_SHOPHEADER'             => 'app_mobile/shop_header/',                           //虚拟目录 店铺头像
    'ALI_UPLOAD_SHOPBANNER'             => 'app_mobile/shop_banner/',                           //虚拟目录 店招图片
    'ALI_UPLOAD_SHOPQRCODE'             => 'app_mobile/shop_qrcode/',                           //虚拟目录 店铺二维码
    'ALI_UPLOAD_PRODUCTQRCODE'          => 'app_mobile/shop_product_qrcode/',                   //虚拟目录 商品二维码
    'ALI_VIEW_HOST'                     => 'http://demo.xmzhiu.cn/',                            //阿里云OSS图片域名

	'ALI_UPLOAD_PERSONAL'          => 'personal/',                         		//虚拟目录 供应商图库


	//掌上通短信接口
	'SMS_ECECCID'                       => '305703',											//接入帐号
	'SMS_PASSWORD'                      => 'Zhiujerry!',                        				//接入密码
	'SMS_TYPE'                          => '5',                                 				//短信类型，默认5
	'SMS_LONGCODE'                      => 'zhiu',                              				//扩展码，可为空
	'SMS_SING'                          => '【知游】',                           					//短信签名
	'SMS_REQUEST_URL'                   => 'http://pi.noc.cn/SendSMS.aspx',     				//请求地址

	//百度云推送
	'BAIDU_PUSH_APIKEY'                 => 'P1CDbw8dnMhjszERpdWyOGim',          				//key
	'BAIDU_PUSH_SECREKEY'               => 'UYQaMvVfGfmxFyUdXvz04VMMOu2F2N7j',  				//secrekey
	'BAIDU_PUSH_IOS_DEPLOY'             => '1',                                 				//ios模式 1-开发模式 2-生产模式

	//融云聊天
	'RONGYUN_APPKEY'                    => 'e0x9wycfxlvvq',										//融云生产环境key
	'RONGYUN_APPSECRET'                 => 'LqaA4izvOutx4',										//融云生产环境secret
	'RONGYUN_HEADER'					=> 'http://image.xmzhiu.cn/app_mobile/shop_header/default_buyer_header.jpg@!mobile-small',

	//支付宝WAP支付
	'ALIPAY_WAP_PARTNER'                => '2088811922110672',
	'ALIPAY_WAP_SELLER_ID'              => 'zcy@xmzhiu.com',
	'ALIPAY_WAP_PRIVATE_KEY'            => getcwd().'/ThinkPHP/Extend/Vendor/Alipaywap/rsa_private_key.pem',
	'ALIPAY_WAP_PUBLIC_KEY'             => getcwd().'/ThinkPHP/Extend/Vendor/Alipaywap/alipay_public_key.pem',
	'ALIPAY_WAP_SIGN_TYPE'              => 'RSA',
	'ALIPAY_WAP_CHARSET'                => 'utf-8',
	'ALIPAY_WAP_CACERT'                 => getcwd().'/ThinkPHP/Extend/Vendor/Alipaywap/cacert.pem',
	'ALIPAY_WAP_TRANSPORT'              => 'http',
	'ALIPAY_WAP_NOTIFYURL'              => 'http://sandbox.xmzhiu.cn/ApiOrder/wapnotify',

	//H5前端相关信息
	'H5PAGE_HOST'                       => 'http://sandboxshopv2.xmzhiu.cn/',                                //h5前端页面域名



	/* 支付宝 批量退款(新模式,根据订单支付来源，退回相应金额) */
		'ALI_REFUND_PARTNER'				=> '2088811922110672',                                              //支付宝PID
		'ALI_REFUND_KEY'             		=> 'ie5vhvkgpswuv7k05figz4fhk3ugah3t',                              //支付宝KEY
		'ALI_REFUND_SIGN_TYPE'       		=> strtoupper('MD5'),                                               //签名方式MD5
		'ALI_REFUND_INPUT_CHARSET'   		=> strtolower('utf-8'),                                             //字符集utf-8
		'ALI_REFUND_CACERT'          		=> getcwd().'/ThinkPHP/Extend/Vendor/Alirefund/cacert.pem',         //用于CURL中校验SSL的CA证书文件
		'ALI_REFUND_TRANSPORT'       		=> 'http',                                                          //协议 http 或 https
		'ALI_REFUND_NOTIFY_URL'      		=> 'http://xd.trip.xmzhiu.cn/index.php/Public/refundNotify',//批量退款转账异步地址
		'ALI_REFUND_ACCOUNT_NAME'    		=> '厦门知游信息科技有限公司',											//付款账户名
		'ALI_RREFUND_SELLER_EMAIL'			=> 'zcy@xmzhiu.com',												//付款账号

		'KUAIDI100_KEY'						=> '113ab3137411f5a2',
		'KUAIDI100_URL'						=> 'http://api.kuaidi100.com/api?',

);
?>