## Facebook sign up with Laravel

As we know social media becomes more and more popular in the world. Everyone has social accounts like Gmail, Facebook, etc. I think also most of have a Facebook account. So if your application has a login with social then it becomes awesome. you got more people to connect with your website because most of the people do not want to fill out the signup or sign-in form. If there login with social then it becomes awesome.

Step 1: Install Laravel 9
This is optional; however, if you have not created the laravel app, then you may go ahead and execute the below command:
composer create-project laravel/laravel facebook-login-app

Step 2: Setup Environment 
If you created new laravel app then you need to create database and connect it.Then run migration with below command:
php artisan migrate

Step 3: Install Socialite
In first step we will install Socialite Package that provide api to connect with facebook account. So, first open your terminal and run bellow command:

composer require laravel/socialite

Step 4: Create Facebook App

First we need to create Facebook App and get ID and Secret. So, let's follow bellow steps as well:
 1: Go to Facebook Developer App to click here: https://developers.facebook.com and login if you don't have account so please create it.

 2: Then click to "Create App" button as here
 
<p align="center"><img src="{{ url('public/facebook-config/image_1.png'); }}" alt="image 1"></p>
<p>Please refer to this image which is located here public/facebook-config/image_1.png</p>

 3: Then Choose consumer here:

<p align="center"><img src="{{ url('public/facebook-config/image_2.png'); }}" alt="image 2"></p>
<p>Please refer to this image which is located public/facebook-config/image_2.png</p>

 4: Then Add App name as bellow, then after click to create app button:

<p align="center"><img src="{{ url('public/facebook-config/image_3.png'); }}" alt="image 3"></p>
<p>Please refer to this image which is located public/facebook-config/image_3.png</p>

 5: Now, you will get app id and secret, Then you need to add this details to .env file:

<p align="center"><img src="{{ url('public/facebook-config/image_4.png'); }}" alt="image 4"></p>
<p>Please refer to this image which is located public/facebook-config/image_4.png</p>

 6: If you want to upload on production then you need to specify domain as well. But, you are checking with local then you don't need to add this urls:

<p align="center"><img src="{{ url('public/facebook-config/image_5.png'); }}" alt="image 5"></p>
<p>Please refer to this image which is located public/facebook-config/image_5.png</p>

<p align="center"><img src="{{ url('public/facebook-config/image_6.png'); }}" alt="image 6"></p>
<p>Please refer to this image which is located public/facebook-config/image_6.png</p>

Now you have to set app id, secret and call back url in config file so open config/services.php and set id and secret

Then you need to add client id and client secret in .env file:

Step 5: Add Database Column

In this step first we have to create migration for add facebook_id in your user table. So let's run bellow command:

php artisan make:migration add_facebook_id_column

Update model of user for facebook_id key 


Step 6: Create Routes
After adding facebook_id column first we have to add new route for facebook login. so check routes/web.php and update your routes.

Step 7: Create Controller

After add route, we need to add method of facebook auth that method will handle facebook callback url and etc, then check  code and  of FacebookAuth.php Controller.

Step 8: Update Blade File
Ok, now at last we need to add blade view so first create new file login.blade.php file and dashboard.blade.php and check code of project file. 




