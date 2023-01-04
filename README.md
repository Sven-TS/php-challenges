# testsieger.de 

# MySql 

> **Please explain the differences** 

~~~~sql 
SELECT DISTINCT p.*, d.*
FROM products p
JOIN descriptions d ON p.EAN = d.EAN
WHERE p.updated_at > NOW() - INTERVAL 3 HOUR
~~~~

~~~~sql
SELECT DISTINCT p.*, d.*
FROM products p
INNER JOIN descriptions d ON p.EAN = d.EAN
WHERE p.updated_at > NOW() - INTERVAL 3 HOUR
~~~~
~~~~sql 
SELECT DISTINCT p.*, d.*
FROM products p
INNER JOIN descriptions d ON p.EAN = d.EAN
WHERE p.EAN IN (SELECT EAN FROM products WHERE updated_at > NOW() - INTERVAL 3 HOUR)
~~~~

* which from the above is the most performant and what can you do check fact it?

----
> ## Write some code

* Write a query to find the products that have not been ordered.
~~~~sql 
SELECT p.product_name
FROM products p
LEFT JOIN orders o
ON p.product_id = o.product_id
WHERE o.product_id IS NULL;
~~~~

* Write a query to find the total number of products with a price greater than $50.
~~~~sql 
SELECT COUNT(*)
FROM products
WHERE price > 50;
~~~~

* Write a query to find the customer who has placed the most orders.
~~~~sql 
SELECT customer_name, COUNT(*) AS num_orders
FROM orders
GROUP BY customer_name
ORDER BY COUNT(*) DESC
LIMIT 1;
~~~~

* Write a query to find the total number of orders and the total number of customers.
~~~~sql 
SELECT 'Total Orders' AS metric, COUNT(*) AS value
FROM orders
UNION
SELECT 'Total Customers', COUNT(DISTINCT customer_name)
FROM orders;
~~~~

* Write a query to display the number of products in each category, along with the total number of products.
~~~~sql 
SELECT COUNT(*) AS total_products, category
FROM products
GROUP BY category
UNION
SELECT COUNT(*), 'Total'
FROM products;
~~~~

* Write a query to display a list of products and their average price, rounded to two decimal places.
~~~~sql 
SELECT product_name, ROUND(AVG(price), 2) AS avg_price
FROM products
GROUP BY product_name;
~~~~

* Write a query to find the top 10 customers by total purchase amount.
~~~~sql 
SELECT customer_name, SUM(order_total)
FROM orders
GROUP BY customer_name
ORDER BY SUM(order_total) DESC
LIMIT 10;
~~~~
