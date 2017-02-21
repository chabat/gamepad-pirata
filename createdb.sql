CREATE TABLE customer(
    cpf numeric PRIMARY KEY,
    name varchar (50) NOT NULL,
    email varchar (50) NOT NULL,
    phone varchar (50),
    password varchar (50) NOT NULL,
    street varchar (50) NOT NULL,
    neighborhood varchar(50) NOT NULL,
    city varchar(50) NOT NULL,
    state varchar (50) NOT NULL
);

CREATE TABLE game(
    code serial PRIMARY KEY,
    title varchar(50) NOT NULL,
    image varchar(50) NOT NULL,
    price real NOT NULL,
    platform varchar(50) NOT NULL,
    category varchar(50) NOT NULL,
    year numeric NOT NULL,
    genre varchar(50) NOT NULL,
    selled numeric
);
