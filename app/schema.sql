CREATE DATABASE autopay;

USE autopay;

CREATE TABLE users (
  id int AUTO_INCREMENT NOT NULL,
  name varchar(64) NOT NULL,
  email varchar(64),
  PRIMARY KEY (id)
);

CREATE TABLE merchants (
  id int AUTO_INCREMENT NOT NULL,
  name varchar(64) NOT NULL,
  PRIMARY KEY (invoice_id),
  FOREIGN KEY (customer_id) REFERENCES customers (customer_id)
);

CREATE TABLE links (
  id int AUTO_INCREMENT NOT NULL,
  user_id int NOT NULL,
  merchant_id NOT NULL,
  custom_key varchar(64),
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES users (id),
  FOREIGN KEY (merchant_id) REFERENCES merchants (id)
);

CREATE TABLE enrollments (
  id int AUTO_INCREMENT NOT NULL,

)