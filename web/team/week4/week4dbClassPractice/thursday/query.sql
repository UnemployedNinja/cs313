\echo '*********************List all restaurant names*********************'
-- write your query here
SELECT name FROM w4_restaurant;
\echo '****************List restaurant names and addresses****************'
-- write your query here
SELECT name, address FROM w4_restaurant;
\echo '************************List  all customers************************'
-- write your query here
SELECT * FROM w4_customer;
\echo '**List  all menu item names and prices of a particular restaurant**'
-- write your query here
SELECT name, price FROM w4_menu_item WHERE restaurant_id = 1;
\echo '*View all orders of a particular customer - show the customer name*'
-- write your query here
SELECT * FROM w4_order INNER JOIN w4_customer ON w4_order.customer_id = w4_customer.id;
\echo '************List  all orders of a particular restaurant************'
-- write your query here
SELECT * FROM w4_order_menu_items INNER JOIN menu_item_id ON w4_menu_items = 

INNER JOIN w4_order_menu_items ON w4_restaurant.id = 1; 


