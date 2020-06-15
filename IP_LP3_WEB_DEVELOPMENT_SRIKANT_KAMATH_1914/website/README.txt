Please Read this 'README' File Completely to get a hold of my App.

For Running this project the PREREQUISITES would be Installation of Python, Django and Pillow Module.
Once installed then this program can be run on 'localhost' using the command: 'python manage.py runserver'

The Front-End consists of: HTML/CSS/JS/Bootstrap Framework
The Web Application Built by uses Python Django as the Backend Tech.
The Database used for this Project is the DEFAULT SQLite3 Supported by Django.
Also since this Project has JS/CSS Use, Please Access it Patiently for a Good Experience.

The Database and its Data can be Accessed by Django-Admin by the following link: 127.0.0.1:8000/admin
Similarly the DB operations can be Performed Over there as well.
ALSO PLEASE DO NOT DELETE ANY ENTRY FROM THE 'BLOGPOST' DB AS EVERY ENTRY GETS MAPPED TO A UNIQUE ID JUST LIKE NORMAL DATABASES..and DELETING ONE ENTRY WOULD CAUSE THE WHOLE INDEXING LOGIC TO BE DISTURBED.

For Facebook Comment to be Added into the Blogpost, You need to be Logged into Facebook..
The Same applies for the Comment Deletion.

CONTACT FORM EXPLAINED:
'Contact' Form has a Functionality that it would send an Email to the Email_id Hosting the Local Email Server..
Till then NO Data would be Stored in the DB.

So firstly for using 'Contact Form' Functionality, Please go to the 'settings.py' File and under 'EMAIL_HOST_USER' Enter your Email Id which would act as HOST for LOCAL EMAIL server i.e the email delivered to the destination would be from here..
Similarly add your Corresponding email's Password in 'EMAIL_HOST_PASSWORD'

Next Log in to your Gmail Account in Web Browser and ALLOW the ACCESS FOR LESS-SECURED APPS.
THIS STEP IS MANDATORY BECAUSE IF THIS ISN'T DONE THEN 'CONTACT-FORM' ENTRY CANNOT BE SUBMITTED AND ERROR 535 WOULD BE RETURNED.

TO ALLOW ACCESS FOR LESS SECURED APPS:
After Logging in To your Gmail Account, Go to the Following Link and Allow the Access:
https://myaccount.google.com/lesssecureapps

SOMETIMES DUE TO NO RECENT ACTIVITY,EVEN THIS MAY FAIL,so For correcting it first we need to perform the UNLOCK-CAPTCHA PROCEDURE..
Firstly log in to your Gmail Account and then go to the Following Link for Allowing Access:
https://accounts.google.com/DisplayUnlockCaptcha
Then we need to go the Earlier Link and ALLOW LESS-SECURE APP ACCESS AGAIN..

The 'destination' where we want to RECEIVE the SENT MAIL can be set in 'send_mail' function in 'webapp/views.py' File.
The EMAIL DESTINATION IS TO BE SPECIFIED WITHIN an 'ARRAY' IN THE 4th Parameter..

BLOG POST EXPLAINED:
Whatever Data we want to Render from Website it Gets Automatically rendered via the Logic in 'blogpost.html' Page..
But if we ADD a NEW BLOG then For Maintaining Page Index Properly in 'blogpost.html' File we need to change the value iterating through 'if' statement:
    {% if blog.post_id > 1 and blog.post_id < 3 %}          

It is '3' currently because I have ADDED 3 blogs..the MORE/LESS the Blogs You ADD, the Number must be SET ACCORDINGLY TO THE TOTAL NUMBER OF BLOGS..

ACCESING REST FRAMEWORK DATA:
Once You run the Project the DEFAULT URL OPENS which is: 127.0.0.1:8000
If we want to Access the Current date and Time that is currently being rendered by REST FRAMEWORK then we need to simply Type the url given below:
    127.0.0.1:8000/dt

