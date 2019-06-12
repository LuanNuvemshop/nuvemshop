# nuvemshop

* Two tables were created with ```1:N``` relationship, one for the main information of the product and another for inclusion of images based on each product.
* Crud was created with Laravel's ```make: resource```.
* The tables were created directly in the MySQL database.
* I've tried to implement custom routes to exclude images but keep the product. The idea is to get the image ```id``` in the user click action and pass it as a parameter in the request, but because I'm not very familiar with Framwork's PHP, I've encountered a certain difficulty to complete.
