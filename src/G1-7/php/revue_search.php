<?php
if(!empty($_SESSION[''])){/*接続未設定*/ 
    $total=0;
    foreach($_SESSION['PRO'] as $id=>$PRO){
        echo '<tr>';
        echo '<td>',$id,'</td>';
        echo '<td><a href="det.php?id=',$id,'">',
        $PRO['name'],'</a></td>';
        echo '<td>',$PRO['price'],'</td>';
        echo '<td>',$PRO['count'],'</td>';
        $subtotal=$PRO['price']*$PRO['count'];
        $total+=$subtotal;
        echo '<td>',$subtotal,'</td>';
        echo '<td><a href="cart-del.php?id=',$id,'">削除</a></td>';
        echo '</tr>';
    }
    echo '<tr><td>合計</td><td></td><td></td><td></td><td>',$total,
    '</td><td></td></tr>';
    echo '<table>';
}else {
    echo 'カートに商品がありません。';
}
?>