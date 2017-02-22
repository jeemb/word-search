# _Word Search_

#### Behavior Driven Development PHPUnit Testing Program 2.17.2017

#### By Jennifer Beem

## Description

This program searches a user-inputted phrase for a user-inputted word and publishes the number of full-word occurrences.

### Application Specifications

|Behavior|Input|Output|
|--------|-----|------|
|App searches if user-inputted word exists in user-inputted string|word: "is" phrase:"is"|1|
|App will search if user-inputted word exists in multiple word string | word: “is” phrase: “substr_count is a pretty cool function” | 1 |
|App will only match full words (no partial matches)|word: “is” phrase: “this is a pretty great function” |1|
|App will search string for word regardless of capitalization |word: “IS” phrase: “this is a pretty cool function”|1|
|App publishes a value of "0" if no matches exist|word: "is" phrase: "zero"|0|
|App does not read punctuation at end of string|word:"function" phrase: "this is a pretty cool function."|1|

## Setup/Installation Requirements

* Clone this repository
* Open up computer terminal
* Run `$ composer install`
* Navigate into this project's "web" folder. Run `$ cd web`
* Run `php -S localhost:8000` to setup document root
* Open up web browser and navigate to **`localhost:8000`** to view program

## Known Bugs

None known.

## Support and contact details

Feel free to contact me at: jenniferbeem@gmail.com if any questions come up!

## Technologies Used

* PHP/Silex
* HTML/Twig
* PHPUnit for testing
* CSS/Bootstrap

### License

Copyright (c) 2017 Jennifer Beem
This software is licensed under the MIT license.
