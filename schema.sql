use my_app_db;

DROP TABLE IF EXISTS users;

CREATE TABLE `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` datetime NOT NUll,
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users`
  (`name`, `email`, `date_created`)
  values ('cstat', 'cpa.staton@gmail.com', now());

INSERT INTO `users`
  (`name`, `email`, `date_created`)
  values ('Jeff', 'jeff@plastiq.com', now());

INSERT INTO `users`
  (`name`, `email`, `date_created`)
  values ('Michel', 'michel@plastiq.com', now());



DROP TABLE IF EXISTS products;

CREATE TABLE `products` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `products`
  (`name`)
  values ('Test Product');

INSERT INTO `products`
  (`name`)
  values ('Card Holder');

INSERT INTO `products`
  (`name`)
  values ('Business Portal');

INSERT INTO `products`
  (`name`)
  values ('Shinobi');