
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

