CREATE TABLE form_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    surname VARCHAR(50),
    organization VARCHAR(100),
    mobile_number VARCHAR(20),
    alternative_number VARCHAR(20),
    email VARCHAR(100),
    address TEXT,
    region VARCHAR(50),
    commission VARCHAR(50),
    date DATETIME
);
