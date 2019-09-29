-- for table 'feedback'

create table feedback(
user_id int(11) not null auto_increment primary key,
user_name varchar(256) not null,
user_email varchar(256) not null,
user_mobile varchar(30) not null,
user_msg text not null

);