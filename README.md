# co-op-coding-challenge

Welcome to the WPY Coding Challenge Repository!

This repository is intended to be a challenge representative of a task that you may encounter on a day to day basis while coding for WPY.  For those of you who may be interviewing or looking at this after an interview, there is no time limit for this challenge.  You can use basic HTML, php, or any languages you're comfortable with. If you'd like to use Laravel, how far into the laravel featureset you want to go is up to you, all this challenge intends to do is lay out a foundation for you to build upon, and set some goals.

Here are some resources to explore:

    - https://laravel.com/docs/master
    (if you choose to use Laravel/php you can just create a blade template and include your HTML form)
    - https://www.php.net/manual/en/
    - https://getbootstrap.com/docs/5.0/getting-started/introduction/


Estimated time: 4-6 hours.

Challenge:

Create a web form using HTML that can submit information about registering a new user. The information we need collected is:

    - First Name    (string max 255 characters)
    - Last Name     (string max 255 characters)
    - Email         (string, must be valid email format)
    - Password      (string, must be starred out on screen)
    - Phone Number  (standard phone number format)
    - Address       (string max 255 characters)
    - City          (string max 255 characters)
    - Province      (please use a dropdown of Canadian provinces or US states fo USA)
    - Country       (for our purposes only allow either Canada or USA)

Feel free to use javascript and jQuery for front end validation of the fields. The web form should have a responsive design if possible, to accommodate smaller screen sizes such as mobile devices.

This form should submit to a backend component of your choosing (php, python, java, etc) and on success display a message. If the input is invalid then it should display an error on the form.

Please include a sample SQL statement that would insert this data into a database of your choosing (mySQL, msSQL, mongoDB, etc). This can just be in a text file.

## Demo

Below are screenshots of both pages.

!
!

|![Form](./doc/Form.png)|![Submission](./doc/Submission.png)|
|:-:|:-:|
|Form|Submission|
