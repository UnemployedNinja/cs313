<?php
  session_start();
  $session_products = array();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="browse.css">
        <title>Browse</title>
    </head>
    
    <body>
        <ul>
            <li><a href="ShopHome.html">Home</a></li>
            <li><a class="active" href="browse.php">Browse</a></li>
        </ul>
        <br><br>
        <a href="https://www.google.com/search?biw=798&bih=751&tbm=isch&sxsrf=ACYBGNRBasQULg_qaIg7oV5M5EaT8alklw%3A1579638985576&sa=1&ei=yWAnXp_oIs2stQaoo67ABA&q=tmnt+logo&oq=tmnt+logo&gs_l=img.3..0l10.4885.5801..6022...0.0..0.309.787.5j1j0j1......0....1..gws-wiz-img.......35i39j0i67j0i131i67.OlDNdiIT3LA&ved=0ahUKEwjf8O7kxZXnAhVNVs0KHaiRC0gQ4dUDCAc&uact=5#imgrc=EIx0inYsyPTb3M:">
            <img src="TMNT-Logo-Original.png">
        </a>

        <form action="order.php" method="POST">
          <table style="width:40%">
              <tr>
                <th>Season</th>
                <th>Price</th>
                <th>Order</th>
              </tr>
              <tr>
                <td>
                  <a href="https://www.google.com/search?biw=798&bih=751&tbm=isch&sxsrf=ACYBGNS7DMvY3yoggt7dH2TkTpLUqQyEvA%3A1579641632941&sa=1&ei=IGsnXsvmOJC1tAaPtLT4CA&q=tmnt+classic+cartoons+season+1&oq=tmnt+classic+cartoons+season+1&gs_l=img.3..35i39.217382.217382..217806...0.0..0.77.213.3......0....1..gws-wiz-img.yKIUL_Yyu7k&ved=0ahUKEwjL9pzTz5XnAhWQGs0KHQ8aDY8Q4dUDCAc&uact=5#imgrc=tqUHZy_HU17MWM:">
                    <img src="season1.jpg">
                </td>
                <td>
                  $6.98
                </td>
                <td>
                    <input type="checkbox" name="season[]" value="6.98"> 
                </td>
              </tr>
              <tr>
                <td>
                  <a href="https://www.google.com/search?biw=798&bih=751&tbm=isch&sxsrf=ACYBGNS7DMvY3yoggt7dH2TkTpLUqQyEvA%3A1579641632941&sa=1&ei=IGsnXsvmOJC1tAaPtLT4CA&q=tmnt+classic+cartoons+season+1&oq=tmnt+classic+cartoons+season+1&gs_l=img.3..35i39.217382.217382..217806...0.0..0.77.213.3......0....1..gws-wiz-img.yKIUL_Yyu7k&ved=0ahUKEwjL9pzTz5XnAhWQGs0KHQ8aDY8Q4dUDCAc&uact=5#imgrc=nCpCx6eNM1NLMM:">
                    <img src="season2.jpg">
                </td>
                <td>
                  $6.39
                </td>
                <td>
                    <input type="checkbox" name="season[]" value="6.39">
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="https://www.google.com/search?biw=798&bih=685&tbm=isch&sxsrf=ACYBGNRVBE9AX1KpIXu8TRtkC8L76mtH3g%3A1579642924853&sa=1&ei=LHAnXurmM_KP9PwPrJCbiAY&q=tmnt+classic+cartoons+season+3&oq=tmnt+classic+cartoons+season+3&gs_l=img.3..35i39.26069.26532..27469...0.0..0.91.304.4......0....1..gws-wiz-img.d9z_LtUkgfU&ved=0ahUKEwjqrKG71JXnAhXyB50JHSzIBmEQ4dUDCAc&uact=5#imgrc=ZsU9vEwcmp6M-M:">
                      <img src="season3.jpg">
                  </td>
                  <td>
                    $9.15
                  </td>
                  <td>
                    <input type="checkbox" name="season[]" value="9.15">
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="https://www.google.com/search?biw=798&bih=685&tbm=isch&sxsrf=ACYBGNQ_r_rX-mzhC2GEIX-eGv6KEaHB9Q%3A1579642955996&sa=1&ei=S3AnXpenPPyE9PwP3o-1qAo&q=tmnt+classic+cartoons+season+4&oq=tmnt+classic+cartoons+season+4&gs_l=img.3..35i39.20073.20388..20798...0.0..0.199.497.2j2......0....1..gws-wiz-img.cHeDcjWwFdg&ved=0ahUKEwjX-I3K1JXnAhV8Ap0JHd5HDaUQ4dUDCAc&uact=5#imgdii=buuy1dcPtZm_qM:&imgrc=yPXocnnalpbOyM:">
                      <img src="season4.jpg">
                  </td>
                  <td>
                    $6.35
                  </td>
                  <td>
                    <input type="checkbox" name="season[]" value="6.35">
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="https://www.google.com/search?biw=798&bih=685&tbm=isch&sxsrf=ACYBGNSc3vmqM2xb8g1LWlhAUQjFJrq6Zw%3A1579642978923&sa=1&ei=YnAnXoeEONW7tAa-95eYDA&q=tmnt+classic+cartoons+season+5&oq=tmnt+classic+cartoons+season+5&gs_l=img.3..35i39.52936.53359..53672...0.0..0.114.330.3j1......0....1..gws-wiz-img.pL0MyxVByRY&ved=0ahUKEwiHvYXV1JXnAhXVHc0KHb77BcMQ4dUDCAc&uact=5#imgrc=OxnHj5RKdDQd6M:">
                      <img src="season5.jpg">
                  </td>
                  <td>
                    $8.96
                  </td>
                  <td>
                    <input type="checkbox" name="season[]" value="8.96">
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="https://www.google.com/search?biw=798&bih=685&tbm=isch&sxsrf=ACYBGNRA96WgqaOk5Y93fucXmRHkUllX2A%3A1579643035396&sa=1&ei=m3AnXo_nF9vNtQa6vLzoAw&q=tmnt+classic+cartoons+season+6&oq=tmnt+classic+cartoons+season+6&gs_l=img.3..35i39.18678.19143..19441...0.0..0.108.308.3j1......0....1..gws-wiz-img.i2j-FR1IFJs&ved=0ahUKEwjPoPzv1JXnAhXbZs0KHToeDz0Q4dUDCAc&uact=5#imgrc=ygwkLVyhXlbt1M:">
                      <img src="season6.jpg">
                  </td>
                  <td>
                    $10.04
                  </td>
                  <td>
                    <input type="checkbox" name="season[]" value="10.04">
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="https://www.google.com/search?biw=798&bih=685&tbm=isch&sxsrf=ACYBGNRW6XG9KBX7CIaOrPKAFnaMvjlVVw%3A1579643057775&sa=1&ei=sXAnXqTmLom2tAbhpLnYBg&q=tmnt+classic+cartoons+season+7&oq=tmnt+classic+cartoons+season+7&gs_l=img.3..35i39.16353.16632..17039...0.0..0.107.329.3j1......0....1..gws-wiz-img.ElpseMJhxxE&ved=0ahUKEwjkgtL61JXnAhUJG80KHWFSDmsQ4dUDCAc&uact=5#imgrc=jsWqiy5W4NjrwM:">
                      <img src="season7.jpg">
                  </td>
                  <td>
                    $13.89
                  </td>
                  <td>
                    <input type="checkbox" name="season[]" value="13.89">
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="https://www.google.com/search?biw=798&bih=685&tbm=isch&sxsrf=ACYBGNRycjcgs9JJ-5vcRD0E4zqkcwr6AA%3A1579643076951&sa=1&ei=xHAnXrvVOfeD9PwPx9KQiAc&q=tmnt+classic+cartoons+season+8&oq=tmnt+classic+cartoons+season+8&gs_l=img.3..35i39.19565.19886..20273...0.0..0.111.338.3j1......0....1..gws-wiz-img.wW3mYGxxMI8&ved=0ahUKEwi7x-SD1ZXnAhX3AZ0JHUcpBHEQ4dUDCAc&uact=5#imgrc=Z8Ha7ZOIUch-bM:">
                      <img src="season8.jpg">
                  </td>
                  <td>
                    $6.88
                  </td>
                  <td>
                    <input type="checkbox name="season[]" value="6.88">
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="https://www.google.com/search?biw=798&bih=685&tbm=isch&sxsrf=ACYBGNRWbq0jsBJU6lEBgNk0ccg9ouXWzg%3A1579643099325&sa=1&ei=23AnXtDBE5PbtAa-n6_AAQ&q=tmnt+classic+cartoons+season+9&oq=tmnt+classic+cartoons+season+9&gs_l=img.3..35i39.19257.19683..20034...0.0..0.91.300.4......0....1..gws-wiz-img.IgCgOe7UQgQ&ved=0ahUKEwiQm7qO1ZXnAhWTLc0KHb7PCxgQ4dUDCAc&uact=5#imgrc=L2Pa3ewevaSlBM:">
                      <img src="season9.jpg">
                  </td>
                  <td>
                    $6.39
                  </td>
                  <td>
                    <input type="checkbox" name="season[]" value="6.39">
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="https://www.google.com/search?biw=798&bih=685&tbm=isch&sxsrf=ACYBGNQiL7Fkivy7VhT6jImZ4-0YSUM4qw%3A1579643120822&sa=1&ei=8HAnXpDlMYLVtAaU3J6AAw&q=tmnt+classic+cartoons+season+10&oq=tmnt+classic+cartoons+season+10&gs_l=img.3..35i39.18066.18727..19050...0.0..0.112.418.4j1......0....1..gws-wiz-img.E0v3Wx9LuQE&ved=0ahUKEwiQndqY1ZXnAhWCKs0KHRSuBzAQ4dUDCAc&uact=5#imgrc=YzVk3Rg5bXdzpM:">
                      <img src="season10.jpg">
                  </td>
                  <td>
                    $7.49
                  </td>
                  <td>
                    <input type="checkbox" name="season[]" value="7.49">
                  </td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Submit">
          </form>

    </body>
   
</html>