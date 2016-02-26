# cakephp-demo
This is just a basic demo of using the cake php framework. This was my first PHP project.

[See demo of project here]( http://cakeproject-bhobbs.rhcloud.com)

##Scenario

+-----------+
| Customers |
+-----------+
| ID | Name |
+-----------+

+----------------------+
| Parts                |
+----------------------+
| ID | Name | Category |
+----------------------+

+------------+
| Categories |
+------------+
| ID | Name  |
+------------+

+--------+
| Orders |
+--------+
| ?????? |
+--------+

Using the DB schema above (You have free reign on what the 'Orders'
table looks like) create a web application to allow customers to order
parts.
The table schema is not set in stone, you may change whatever is
necessary to get it working.
Customers should be able to choose categories to view, add items to a
shopping cart, and checkout an order.
No money is expected to be involved in this system, pretend all parts are free!
A customer should be able to order multiple parts per order, and view
their order history.

An order page, given an order ID in the request parameter, should look
something like this:
URL: http://www.somesite.com/vieworder?id=1
+------------------------------------------+
| Order ID: 1                              |
| Customer Name: ????????                  |
+------------------------------------------+
| Part        | Category       | Quantity  |
| ?????????   | ???????????    | ##        |
| ?????????   | ???????????    | ##        |
| ?????????   | ???????????    | ##        |
| ?????????   | ???????????    | ##        |
| ?????????   | ???????????    | ##        |
+------------------------------------------+
| Total parts ordered: ##                  |
+-------------------------------------------
