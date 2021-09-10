# xss-example
Really simple example for cross-site scripting. The example contains vulnerable and secure code which can be configured in `src/config.ini.php`

## MySQL Setup
### Create Table
```sql
CREATE TABLE feedback (id INT AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(255), email VARCHAR(255), content VARCHAR(255));
```

### Create User
```sql
CREATE USER 'user'@'localhost' IDENTIFIED BY 'supersecure';
```

### Grant Permissions
```sql
GRANT ALL PRIVILEGES ON * . * TO 'user'@'localhost';
```

### Flush Privileges
```sql
FLUSH PRIVILEGES;
```

## Project Setup
### Prerequisites
- Webserver with Php support
- MySQL server