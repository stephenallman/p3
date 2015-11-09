

## P3 Laravel Basics

## Live URL
##portfolio
<http://p1.stephenallman.me>

##project 2
<http://p2.stephenallman.me>

##project 3
<http://p3.stephenallman.me>

## Description
Create a web app called Developer’s Best Friend that uses a Random Ipsum Generator and a Random User Generator. 

Let’s the user choose how many user and/or Ipsum Paragraphs they want to generate. 


## Demo
http://www.youtube.com/watch?v=A3_2IJpKdHA

## Details for teaching team

App utilizes 2 controllers: 1 to create and display ipsum text and 1 to create and display a random user.
Random users and text are created using the faker factory. 

The root of the project contains css files, an images folder, js files, index.php, and an AboutP3.pdf which we will create a link that can be accessed on each page. 

The main CSS is based on Bootstrap's mini jumbotron theme. 

We use several views for this project. The master view can be found in the masters.blade.php file located in the layouts folder.
The home page is routed through the index.blade.php. 

There is an ipusm folder and a user folder each containing a create.blade.php and show.blade.php. 

The create.blade.php files contain the form and the base ui. The show.blade.php files show the output generated from the form as recieved from the controller. 

In total there are 7 routes for this project: 1 to route to the home page and 3 routes for each of the 2 main controllers (ipsumController and userController). 




## Outside code
Bootstrap CSS
badcow/lorem-ipsum
fazninotto/Faker