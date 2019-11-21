# Live slideshow
Create a simple slideshow that reads pictures from a folder using Owl Carousel 2.

⭐ PHP + Jquery ⭐

# TL;DR;

Put your images inside pictures folder it will slideshow every picture 5 seconds each.

If you add more pictures after no problem, after 5 minutes it updates with the new pictures.

# Problem
you can only put 60 pictures inside the folder, the reason is that the default configuration is

Every 5 seconds it changes the picture, but after five minutes it refresh itsel to look if there's more picture.

or 300000 ( 5 minutes ) / 5000 (every 5 seconds ) = 60

# Solution

You can set more pictures, inside the index.html you can set the update time, or the time of transition

transitionTime = 5000 ( 5 secondes )
updateTime = 300000 (5 minutes)

So if you have a updateTime of 600000 it will transition 120 pictures.


# Changes
You can change the update time. It means that if you

You can change the type of the animation inside the slider, that is made withi animate.css

https://daneden.github.io/animate.css/

i am Also using Owl Carousel 2 to create the Slideshow.

https://owlcarousel2.github.io/OwlCarousel2/


# WARNING

JQUERY is on CDN so you can use only online, for offline version download JQUERY and use local.







