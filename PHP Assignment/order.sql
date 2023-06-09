CREATE TABLE orders(
    id INT Auto_INCREMENT PRIMARY KEY,
    orderId INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    size VARCHAR(255) NOT NULL,
    toppings VARCHAR(255) NOT NULL,
    delivery_address VARCHAR(255) NOT NULL


);