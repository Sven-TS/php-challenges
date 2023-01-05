create table categories
(
    id    int auto_increment
        primary key,
    title varchar(255) not null
);

create table customers
(
    id   int auto_increment
        primary key,
    name varchar(255) not null
);

create table orders
(
    id          int auto_increment
        primary key,
    customer_id int not null,
    constraint orders_customers_id_fk
        foreign key (customer_id) references customers (id)
);

create table products
(
    id          int auto_increment
        primary key,
    category_id int          not null,
    title       varchar(255) not null,
    price       float        not null,
    constraint products_categories_id_fk
        foreign key (category_id) references categories (id)
);

create table ordered_products
(
    order_id   int   not null,
    product_id int   not null,
    price      float null,
    quantity   int   null,
    primary key (order_id, product_id),
    constraint ordered_products_products_id_fk
        foreign key (product_id) references products (id)
);


