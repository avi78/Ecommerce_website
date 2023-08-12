CREATE TABLE users(
    Id int PRIMARY KEY AUTO_INCREMENT,
    Username varchar(200),
    Email varchar(200),
    Age int,
    Password varchar(200)
);

CREATE TABLE checkout(
    Order_Id int PRIMARY KEY AUTO_INCREMENT,
    Username varchar(200),
    Email varchar(200),
    Phone bigint,
    Place varchar(500),
    Country varchar(50),
    City varchar(50),
    Postal_code int
);



