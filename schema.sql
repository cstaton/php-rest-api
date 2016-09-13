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
  `user_id` int(20) NOT NUll,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  FOREIGN KEY (`user_id`) references users(`id`),
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `products`
  (`name`, `user_id`)
  values ('Test Product', 1);

INSERT INTO `products`
  (`name`, `user_id`)
  values ('Card Holder', 1);

INSERT INTO `products`
  (`name`, `user_id`)
  values ('Business Portal', 1);

INSERT INTO `products`
  (`name`, `user_id`)
  values ('Shinobi', 1);

INSERT INTO `products`
  (`name`, `user_id`)
  values ('Test Product', 2);

INSERT INTO `products`
  (`name`, `user_id`)
  values ('Card Holder', 3);

INSERT INTO `products`
  (`name`, `user_id`)
  values ('Business Portal', 3);

INSERT INTO `products`
  (`name`, `user_id`)
  values ('Shinobi', 3);