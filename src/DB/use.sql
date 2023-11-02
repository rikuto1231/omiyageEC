-- ユーザテーブル作成sql
CREATE TABLE User(
    user_id int not null AUTO_INCREMENT,
    name_family varchar(20) not null,
    name_personal varchar(20) not null,
    name_family_kana varchar(20) not null,
    name_personal_kana varchar(20) not null,
    post_code int not null,
    prefecture varchar(20) not null,
    city_address varchar(50) not null,
    street_address varchar(20) not null,
    building varchar(20) not null,
    tel int not null,
    mail_address varchar(50) not null,
    password varchar(128) not null,
    point int not null,
    primary key (user_id)

);

-- 商品テーブル作成sql
CREATE TABLE Merchandise(
    merchandise_id int not null AUTO_INCREMENT,
    merchandise_name varchar(20) not null,
    category varchar(20) not null,
    brand varchar(20) not null,
    price int not null,
    stock int not null,
    primary key (merchandise_id)
);