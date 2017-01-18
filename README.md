# crypt
一个简单的对称加密算法

你可以用来加密以下信息

* URL中的敏感信息
* 缓存的临时参数
* cookie或者session信息

不要用来加密用户密码，因为可以被破解哦！


使用方法

	<?php
	//加密
	$encode = \Crypt\Crypt::encrypt('crypt');
	
	//解密
	$decode = \Crypt\Crypt::encrypt($encode);
	


