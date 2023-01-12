Firstly place the folder in the local drive "C:\xampp\htdocs".

Before running the code in the browser, launch xampp-control.exe and start Apache and MySQL

the database "cyberassign.sql" is in the "assignment" folder.

Import the cyberassign.sql database in to "http://localhost/phpmyadmin/".

username should be "root" and password should be "" and server should be "localhost".

On the browser, run "http://localhost/assignment/login.php" after starting Apache and MySQL 

Go to the (C:xampp\php) and open the PHP configuration setting file then find the [mail function]. If there is a semicolon at the start of each line, just simply remove the colon from each line which is given below:

[mail function]
For Win32 only.
http://php.net/smtp
SMTP=smtp.gmail.com
http://php.net/smtp-port
smtp_port=587
sendmail_from = "Your email"
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"

Now, go the (C:\xampp\sendmail) and open the sendmail configuration setting file then find sendmai. Find thethe following lines and pass the following values. If there is a semicolon at the start of each line given below, simply remove it:

smtp_server=smtp.gmail.com
smtp_port=587
error_logfile=error.log
debug_logfile=debug.log
auth_username=  "Your email"
auth_password= "Your password"
force_sender=  "Your email" (it's optional)
