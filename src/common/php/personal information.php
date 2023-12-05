<!--個人情報検索-->
<?php
        echo '<table class="table-container">';
        echo '<tr><td align="right">お名前：</td><td class="table-cell">'.$_SESSION['personal_family'].'　'.$_SESSION['personal_personal'].'</td><td>　　　　</td></tr>';
        echo '<tr><td align="right">郵便番号：</td><td class="table-cell">'.$_SESSION['personal_post'].'</td><td>　　　　</td></tr>';
        echo '<tr><td align="right">都道府県名：</td><td class="table-cell">'.$_SESSION['personal_prefectures'].'</td><td>　　　　</td></tr>';
        echo '<tr><td align="right">市区町村：</td><td class="table-cell">'.$_SESSION['personal_city'].'</td>　　　　<td></td></tr>';
        echo '<tr><td align="right">番地：</td><td class="table-cell">'.$_SESSION['personal_street'].'</td><td></td>　　　　</tr>';
        echo '<tr><td align="right">建物名:</td><td class="table-cell">'.$_SESSION['personal_buliding'].'</td><td></td>　　　　</tr>';
        echo '</table>';
?>
