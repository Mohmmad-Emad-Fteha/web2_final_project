CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY ,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL ,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL ,
    user_photo VARCHAR(255) DEFAULT NULL,
    user_licence VARCHAR(255) DEFAULT NULL ,
    user_place VARCHAR(255) NOT NULL ,
    role TINYINT NOT NULL DEFAULT 0 CHECK (role IN ( 0 , 1 )) ,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);

CREATE TABLE cars (
    id INT AUTO_INCREMENT PRIMARY KEY ,
    car_photo VARCHAR(255) DEFAULT NULL , 
    car_name VARCHAR(255) NOT NULL , 
    model_year INT(4) NOT NULL ,
    car_color VARCHAR(10) NOT NULL , 
    price int(10) NOT NULL 
);

CREATE TABLE problem (
    id INT AUTO_INCREMENT PRIMARY KEY ,
    problem_title VARCHAR(255) NOT NULL ,
    problem VARCHAR(750) NOT NULL 
);

CREATE TABLE booking_detailes (
    id INT AUTO_INCREMENT PRIMARY KEY ,
    user_id INT(5) NOT NULL ,
    username VARCHAR(255) NOT NULL ,
    user_phone VARCHAR(20) NOT NULL ,
    user_place VARCHAR(255) NOT NULL ,
    booking_price VARCHAR(255) NOT NULL ,
    car_name VARCHAR(255) NOT NULL ,
    model_year INT(4) NOT NULL ,
    car_color VARCHAR(255) NOT NULL ,
    booking_date VARCHAR(100) NOT NULL 
);