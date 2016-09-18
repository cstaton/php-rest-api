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
  values ('Jeff', 'jeff@gmail.com', now());

INSERT INTO `users`
  (`name`, `email`, `date_created`)
  values ('Michel', 'michel@gmail.com', now());



DROP TABLE IF EXISTS products;

CREATE TABLE `products` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NUll,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  FOREIGN KEY (`user_id`) references users(`id`),
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

