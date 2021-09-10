# xss-example
Really simple example for cross-site scripting. The example contains vulnerable and secure code which can be configured in `src/config.ini.php`

## Project Setup
### Prerequisites
- Webserver with Php support
- MySQL server


### Create Table
```sql
CREATE TABLE feedback (id INT AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(255), email VARCHAR(255), content VARCHAR(255));
```

#### Create User*
```sql
CREATE USER 'user_here'@'localhost' IDENTIFIED BY 'password_here';
```

#### Grant Permissions*
```sql
GRANT ALL PRIVILEGES ON * . * TO 'user_here'@'localhost';
```

#### Flush Privileges*
```sql
FLUSH PRIVILEGES;
```
\* Optional steps, only required if you wish to create a new mysql user.

### Configuration
The configuration can be done in `src/config.ini.php`. You have the option to provide custom credentials / configuration for the mysql client. You can enable or disable the vulnerable code by configuring the `$exampleIsSecure` variable. Setting it to `true` will patch the XSS vulnerability. Leaving it on `false` will allow Cross-site scripting.