 create table php_user(`user_id` int unsigned not null auto_increment, primary key(user_id), `user_name` varchar(20) not null, `user_password` varchar(50) not null, `user_privilege`INT(10)default 0);

create table `php_product`( `product_id` int unsigned not null, primary key(`product_id`), product_name varchar(20) not null,category varchar(20), price double(16,2) default 999);

insert into php_user(user_name, user_password) values('annie', '123456');