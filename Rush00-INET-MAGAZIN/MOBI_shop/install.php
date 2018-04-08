<?php
$link = mysqli_connect("localhost", "root", "maks1234");

$query = mysqli_query($link, "CREATE DATABASE IF NOT EXISTS rush00");

$link = mysqli_connect("localhost", "root", "maks1234", "rush00");

$queryItems = mysqli_query($link, "CREATE TABLE IF NOT EXISTS `items` (
      `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
      `name` varchar(160) NOT NULL,
      `type` varchar(600) NOT NULL,
      `typeof` varchar(600) NOT NULL,
      `description` varchar(700) NOT NULL,
      `price` int(100) NOT NULL,
      `img` varchar(500) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8");

$query = mysqli_query($link, "CREATE TABLE IF NOT EXISTS `order` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `login` varchar(16) DEFAULT NULL,
      `name` varchar(16) NOT NULL,
      `price` int(11) NOT NULL,
      `ordered` int(11) NOT NULL,
      `addr` varchar(30) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8");

$query = mysqli_query($link, "CREATE TABLE IF NOT EXISTS `users` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `login` varchar(16) NOT NULL,
      `email` varchar(60) NOT NULL,
      `password` varchar(500) DEFAULT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8");


$query = mysqli_query($link, "INSERT INTO rush00.items (`name`, `type`, `typeof`, `description`, `price`, `img`) VALUES ('iPhone 4s White','iPhone', '4s', 'The iPhone 4S was first shipped with iOS 5, which was released on October 12, 2011, 2 days before the release of the device. The 4S uses iOS 5.1.1, which was released on May 7, 2012. As of September 2015, the device can be updated to iOS 9. It can act as a hotspot, sharing its internet connection over WiFi, Bluetooth, or USB, and also accesses the App Store, a digital application distribution platform for iOS developed and maintained by Apple. The service allows users to browse and download applications from the iTunes Store that were developed with Xcode and the iOS SDK and were published through Apple.', 150, 'http://www.ictblog.it/uploads/iphone4whitekit.jpg')");



$query = mysqli_query($link, "INSERT INTO rush00.items (`name`, `type`, `typeof`, `description`, `price`, `img`) VALUES ('iPhone 4s Black','iPhone','4s','The iPhone 4S was first shipped with iOS 5, which was released on October 12, 2011, 2 days before the release of the device. The 4S uses iOS 5.1.1, which was released on May 7, 2012. As of September 2015, the device can be updated to iOS 9. It can act as a hotspot, sharing its internet connection over WiFi, Bluetooth, or USB, and also accesses the App Store, a digital application distribution platform for iOS developed and maintained by Apple. The service allows users to browse and download applications from the iTunes Store that were developed with Xcode and the iOS SDK and were published through Apple.',170,'https://apple-lab.com.ua/apple/images/pictures/iphone-4s.png')");




$query = mysqli_query($link, "INSERT INTO rush00.items (`name`, `type`, `typeof`, `description`, `price`, `img`) VALUES ('iPhone 5s Black','iPhone','5s','The iPhone 5S includes major internal upgrades but maintains almost the same external design as its predecessor, the iPhone 5, although the 5S received a new white/gold color scheme in addition to white/silver and space gray/black. A redesigned home button with Touch ID, a fingerprint recognition system which can be used to unlock the phone and authenticate App Store and iTunes Store purchases, was introduced. The camera was updated with a larger aperture and a dual-LED flash optimized for different color temperatures. The 5S also introduced the A7 64-bit dual-core processor, the first 64-bit processor to be used on a smartphone, accompanied by the M7 motion co - processor.',220,'https://static.fnac-static.com/multimedia/Images/PT/NR/af/30/0b/733359/1540-1/tsp20160812173917/Apple-iPhone-5s-16GB-Cinzento-Sideral.jpg)");





$query = mysqli_query($link, "INSERT INTO rush00.items (`name`, `type`, `typeof`, `description`, `price`, `img`) VALUES ('iPhone 5s White','iPhone','5s','The iPhone 5S includes major internal upgrades but maintains almost the same external design as its predecessor, the iPhone 5, although the 5S received a new white/gold color scheme in addition to white/silver and space gray/black. A redesigned home button with Touch ID, a fingerprint recognition system which can be used to unlock the phone and authenticate App Store and iTunes Store purchases, was introduced. The camera was updated with a larger aperture and a dual-LED flash optimized for different color temperatures. The 5S also introduced the A7 64-bit dual-core processor, the first 64-bit processor to be used on a smartphone, accompanied by the M7 motion co - processor.',220,'https://www.smashteckphones.ie/images/product/iphone_5_-_white_silver_2.png')");





$query = mysqli_query($link, "INSERT INTO rush00.items (`name`, `type`, `typeof`, `description`, `price`, `img`) VALUES ('iPhone 6s Black','iPhone','6s','iPhone 6S and iPhone 6S Plus (stylized and marketed as iPhone 6s and iPhone 6s Plus) are smartphones designed, developed and marketed by Apple Inc. They were announced on September 9, 2015, at the Bill Graham Civic Auditorium in San Francisco by Apple CEO Tim Cook, with pre-orders beginning September 12 and official release on September 25, 2015. The iPhone 6S and 6S Plus were succeeded by the iPhone 7 and iPhone 7 Plus in September 2016.',450,'https://www.slickwraps.com/media/catalog/product/cache/1/image/580x580/9df78eab33525d08d6e5fb8d27136e95/b/l/blackfullbody_1_3.jpg')");



$query = mysqli_query($link, "INSERT INTO rush00.items (`name`, `type`, `typeof`, `description`, `price`, `img`) VALUES ('iPhone 6s White','iPhone','6s','iPhone 6S and iPhone 6S Plus (stylized and marketed as iPhone 6s and iPhone 6s Plus) are smartphones designed, developed and marketed by Apple Inc. They were announced on September 9, 2015, at the Bill Graham Civic Auditorium in San Francisco by Apple CEO Tim Cook, with pre-orders beginning September 12 and official release on September 25, 2015. The iPhone 6S and 6S Plus were succeeded by the iPhone 7 and iPhone 7 Plus in September 2016.',400,'https://www.case-custom.com/media/wysiwyg/products/iphone6-clear-case/iphone6-2-silver.jpg')");





$query = mysqli_query($link, "INSERT INTO rush00.items (`name`, `type`, `typeof`, `description`, `price`, `img`) VALUES ('iPad Pro White','iPad','iPad','The iPad Pro is a line of tablet computers designed, developed, and marketed by Apple Inc., that runs the iOS mobile operating system. It is currently available in two screen sizes, 10.5-inch and 12.9-inch, each with three options for internal storage capacities: 64, 256 or 512 GB; the 512 GB configuration making the iPad Pro the first iOS device to offer that storage size.',777,'https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/r/fb/rfb/ipad/rfb-ipad-pro-silver-cellular-2015_AV4?wid=1000&hei=1000&fmt=jpeg&qlt=95&op_sharpen=0&resMode=bicub&op_usm=0.5,0.5,0,0&iccEmbed=0&layer=comp&.v=1470957734651')");



$query = mysqli_query($link, "INSERT INTO rush00.items (`name`, `type`, `typeof`, `description`, `price`, `img`) VALUES ('iPad Pro Black','iPad','iPad','The iPad Pro is a line of tablet computers designed, developed, and marketed by Apple Inc., that runs the iOS mobile operating system. It is currently available in two screen sizes, 10.5-inch and 12.9-inch, each with three options for internal storage capacities: 64, 256 or 512 GB; the 512 GB configuration making the iPad Pro the first iOS device to offer that storage size.',777,'https://image.coolblue.io/products/733575?width=422&height=390')");




$query = mysqli_query($link, "INSERT INTO rush00.items (`name`, `type`, `typeof`, `description`, `price`, `img`) VALUES ('iMac G3','iMac','iMac','iMac is a range of all-in-one Macintosh desktop computers designed and built by Apple Inc. It has been the primary part of Apples consumer desktop offerings since its debut in August 1998, and has evolved through seven distinct forms.',4500,'http://www.computinghistory.org.uk/userdata/images/large/PRODPIC-20988.jpg')");


$query = mysqli_query($link, "INSERT INTO rush00.items (`name`, `type`, `typeof`, `description`, `price`, `img`) VALUES ('iMac 27','iMac','iMac','iMac is a range of all-in-one Macintosh desktop computers designed and built by Apple Inc. It has been the primary part of Apples consumer desktop offerings since its debut in August 1998, and has evolved through seven distinct forms.',2500,'https://www.bhphotovideo.com/images/images2500x2500/apple_mk462ll_a_27_imac_with_retina_1190385.jpg')");
