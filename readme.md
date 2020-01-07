<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About our Mansory Blog

Laravel is accessible, powerful, and provides tools required for large, robust applications.
Mansory is a web application, main idea of this web app is to be an interactive blog where users that are keen on Software and Tech can post useful stories and posts about various software, hardware and tools. 

It is also important that nowdays we educate people and children about these topics, this blog app can be useful for elder and younger people, it can educate them in techincal way or it can help them improve their theoretical or practical knowledge.

## Using the application

Main focus of this web application is that users are free to do most of the things, you can upload pictures, posts, texts, but you can also delete and edit them, you have your own dashboard that only you can see, but you also can access blog page where you can see all the blogs.
In the service page you can see all the topics people should focus on and talk about, but there can be much more than that.

# Please read this carefully before testing 
## Important hint for testing the application

If you run the web app on your machine there may not be any dummy data, so you will need to do db:seed command, once you do that, you will get one user and one post. Only problem that occurs is that when you want to log in with that user, website won't let you, because I use encryption for password so it will behave like they don't recongize that user, but actually he is there and the post exists so you will have to register with your own account and then test the app and you will see when you go to the blog page, that user from dummy data actually exists as well as his post.
