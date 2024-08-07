# DBMS Mini Project

## Description
This is an event management database used by a college to conduct various competitions in an event.

## Table of Contents
- [Software Used](#software-used)
- [Languages](#languages)
- [Installation](#installation)
- [Pages Overview](#pages-overview)
  - [Home Page](#home-page)
- [Screenshots](#screenshots)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Software Used
- VS Code
- XAMPP Server

## Languages
- PHP
- HTML
- CSS
- JavaScript

## Installation

### Prerequisites
- [XAMPP](https://www.apachefriends.org/index.html) installed on your machine.
- A web browser.

### Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/kottarivaibhav/dbms_mini_project.git
   ```


    
2. **Move to the Project Directory**
    cd dbms_mini_project

3.  **Copy the Project Files to XAMPP's htdocs Directory**
    cp -r * /path/to/xampp/htdocs/dbms_mini_project

    Replace /path/to/xampp/htdocs with the actual path to your XAMPP htdocs directory.

    Start XAMPP

4. Open XAMPP Control Panel.
   Start the Apache and MySQL modules.
   Import the Database

5. Open your web browser and go to  
    ```bash
   http://localhost/phpmyadmin.
   ```
    Create a new database named event_management.
    Import the SQL file located in the project directory (event_management.sql).
6.  Access the Project
    Open your web browser and go to http://localhost/dbms_mini_project.

    



## Pages Overview
<br>So I will just explain in brief about the various pages that u will come across in our website
<br><br><b>HOME PAGE:</b>
<br>• It has 3 headers options home, event and admin login.
<br>• As you drag down you get event database.
<br>• In the event database the participants get option for choosing the event of their choice.
<br>This is a predefined database. When a participant enter their choice of event, the values
will then be partially stored in the database. It will be stored permanently only when
the participant completes the registration process.
<br>• Below that is a small section which gives information about the college.<br>
<br>![image](https://github.com/kottarivaibhav/dbms_mini_project/assets/114846137/6169da01-b680-40f9-b86c-78d32c861729)
<br><br>![image](https://github.com/kottarivaibhav/dbms_mini_project/assets/114846137/ecb67e65-b835-4453-ba0b-4f61da0ec8a3)
<br><br>![image](https://github.com/kottarivaibhav/dbms_mini_project/assets/114846137/6fadc51f-f5d9-4d02-a383-dce1628b62f7)
<br><br><b>REGISTRATION PAGE:</b>
<br>• Registration page is the page that you will be directed as soon as you press any of the
event of your choice.
<br>• Here you have to fill all your details like – name, phone number, branch , college and
email.
<br>• After you fill, you have to press submit for the registration process to get completed.
<br>• Once the registration is done, your data will be stored in the database.
<br>• After that you will be re-directed to the homepage.<br><br>
<br>![image](https://github.com/kottarivaibhav/dbms_mini_project/assets/114846137/24525be5-6fa2-4fbf-aae3-32e2b48359d5)
<br>![image](https://github.com/kottarivaibhav/dbms_mini_project/assets/114846137/e622fcd6-e9ab-4fe7-bd0d-11cd219c81d5)
<br><br><b>ADMIN-PAGE:</b>
<br>• Here all the person who are incharge of the event will be made admin and will be given
with a personal username and password.
<br>• Once they enter the user name and password they will enter into the CRUD page which
basically is a page to perform the CRUD operation (Create Read Update Delete).<br><br>
<br>![image](https://github.com/kottarivaibhav/dbms_mini_project/assets/114846137/666f48b6-b96a-440d-82ab-508ff2cf9a75)

<br><br><b>CRUD PAGE:</b>
<br>• This is the page which shows up once the admin login.
<br>• In this page the admin can alter the participants details like :
<br>• Read: For some reason if the admin wants to get the list of participants in a particular
event he can access it using the search bar option.
<br>• Update: If a participant wants to update his existing details like name, phone-number,
email etc , he can request the admin to do the changes.
<br>• Delete: If a admin wants to remove a participant due to some reason he can do this by
removing the participant id from the delete option provided.
<br>• Create: If there is vacant place for a participant to join but the registration portal has
been closed . In such case the admin can make add a participant from the create option
provided .
<br>• All these changes is possible in the crud page.<br><br>
<br>![image](https://github.com/kottarivaibhav/dbms_mini_project/assets/114846137/c38bbad3-f901-4405-8e22-eed3a0f82c19)
<br>![image](https://github.com/kottarivaibhav/dbms_mini_project/assets/114846137/d3ac0b6c-bf04-457f-82b7-971b9339c0a3)
<br>![image](https://github.com/kottarivaibhav/dbms_mini_project/assets/114846137/3cc5fef2-8789-4622-996f-50c78319cf2b)

<br><br>
<br><br>ER diagram :
<br>![image](https://github.com/kottarivaibhav/dbms_mini_project/assets/114846137/beb6d9f8-4ca7-4124-9bef-dec28043393e)
<br><br>
Schema Diagram :
<br>![image](https://github.com/kottarivaibhav/dbms_mini_project/assets/114846137/57cd6414-f705-40d0-81bb-c877f7b6ab68)

## Contributing
If you would like to contribute to this project, please fork the repository and submit a pull request.

## Contact
For further communication , feel free to communicate with me  - [Vaibhav's Mail](mailto:Kottarivaibhav@gmail.com)


