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

-- カートテーブル作成sql
CREATE TABLE Cart(
    cart_id int not null AUTO_INCREMENT,
    user_id int not null,
    merchandise_id int not null,
    quantity int not null,
    primary key (cart_id),
    foreign key (user_id) references User(user_id),
    foreign key (merchandise_id) references Merchandise(merchandise_id)
);

-- ポイントテーブル作成sql
CREATE TABLE Point(
    point_id int not null AUTO_INCREMENT,
    user_id int not null,
    point_use INT not null,
    point_grant int not null,
    point_date DATE not null,
    primary key (point_id),
    foreign key (user_id) references User(user_id)
);

-- 購入テーブル作成sql
CREATE TABLE Purchase(
    purchase_id int not null AUTO_INCREMENT,
    user_id int not null,
    cart_id int not null,
    purpose_date DATE not null,
    primary key (purchase_id)
);

-- 購入詳細テーブル作成sql
CREATE TABLE PurchaseDet(
    details_id int not null AUTO_INCREMENT,
    purchase_id int not null,
    merchandise_id int not null,
    quantity INT not null,
    primary key (details_id),
    foreign key (purchase_id) references Purchase(purchase_id),
    foreign key (merchandise_id) Merchandise(merchandise_id)
);