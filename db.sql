
CREATE DATABASE myshop;
USE myshop;

CREATE TABLE client (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO client (name, email, phone, address) VALUES
( 'John Doe', 'john@gmai.com', '123456789', '123 Main St, New York, NY 10001'),
( 'Emma Smith', 'emma@yhoo.com', '987654321', '456 Park Ave, New York, NY 10002'),
( 'Michael Johnson', 'michel@gmail.com', '456123789', '789 Broadway, New York, NY 10003');
