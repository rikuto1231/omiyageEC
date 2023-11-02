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