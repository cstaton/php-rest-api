
CREATE DATABASE invoicer;

USE invoicer;

CREATE TABLE customers (
  customer_id int AUTO_INCREMENT NOT NULL,
  customer_name varchar(24) NOT NULL,
  customer_email varchar(24),
  customer_address varchar(24),
  customer_city varchar(24),
  customer_zipcode int(5),
  customer_cc_number int(16),
  customer_cc_expdate date,
  PRIMARY KEY (customer_id)
);

CREATE TABLE invoices (
  invoice_id int AUTO_INCREMENT NOT NULL,
  customer_id int,
  invoice_number varchar(12),
  invoice_date date,
  invoice_item varchar(24),
  invoice_quantity int (5),
  invoice_amount DECIMAL (10, 2),
  invoice_gl_account varchar(24),
  invoice_paid DECIMAL(10, 2),
  PRIMARY KEY (invoice_id),
  FOREIGN KEY (customer_id) REFERENCES customers (customer_id)
);

CREATE TABLE payments (
  payment_id int AUTO_INCREMENT NOT NULL,
  customer_id int,
  invoices_id int,
  payment_method varchar(12),
  payment_date date,
  payment_amount DECIMAL (10, 2),
  PRIMARY KEY (payment_id),
  FOREIGN KEY (customer_id) REFERENCES customers (customer_id),
  FOREIGN KEY (invoices_id) REFERENCES invoices (invoice_id)
);