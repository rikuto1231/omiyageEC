-- カートテーブル作成sql
CREATE TABLE Cart (
    cart_id int not null AUTO_INCREMENT,
    user_id int not null,
    merchandise_id int not null,
    quantity int not null,
    primary key (cart_id),
    foreign key (user_id) references User(user_id),
    foreign key (merchandise_id) references Merchandise(merchandise_id)
);

-- 購入テーブル作成sql
CREATE TABLE Purchase (
    purchase_id int not null AUTO_INCREMENT,
    user_id int not null,
    cart_id int not null,
    purpose_date DATE not null,
    primary key (purchase_id),
    foreign key (user_id) references User(user_id),
    foreign key (cart_id) references Cart(cart_id)
);

-- 購入詳細テーブル作成sql
CREATE TABLE PurchaseDet (
    details_id int not null AUTO_INCREMENT,
    purchase_id int not null,
    merchandise_id int not null,
    quantity INT not null,
    primary key (details_id),
    foreign key (purchase_id) references Purchase(purchase_id),
    foreign key (merchandise_id) references Merchandise(merchandise_id)
);
