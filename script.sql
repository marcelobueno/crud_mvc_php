/* 
|--------------------------------------------------------------------------------------------|
| Banco de dados                                                                             |
|--------------------------------------------------------------------------------------------|
|                                                                                            |
| Neste arquivo ficam contidos os scripts para o banco de dados da aplicação                 |
|                                                                                            |
|--------------------------------------------------------------------------------------------|
*/

/* 
    Tabela de produtos
*/

CREATE TABLE IF NOT EXISTS products(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    sku VARCHAR(20) NOT NULL,
    description TEXT NOT NULL,
    quantity INT NOT NULL,
    price DOUBLE(10,2) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

/* 
    Tabela de categorias
*/

CREATE TABLE IF NOT EXISTS categories(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

/* 
    Para solucionar o relacionamento N para N entre produtos e categorias criei uma
    tabela pivot que armazenará as informações de quais categorias o produto faz parte
    e que produtos fazem parte de cada categoria.
*/

CREATE TABLE IF NOT EXISTS categories_products(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    product_id INT NOT NULL,
    category_id INT NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_product_id FOREIGN KEY (product_id) REFERENCES products (id),
    CONSTRAINT fk_category_id FOREIGN KEY (category_id) REFERENCES categories (id)
);

/* 
    Inserts para teste
*/

INSERT INTO `products`(`id`, `name`, `sku`, `description`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(DEFAULT, 'Frauda Pampers P', '25879-7852', 'Frauda infantil Pampers tamanho P', 100, 29.90, DEFAULT, DEFAULT),
(DEFAULT, 'Frauda Pampers M', '25879-7853', 'Frauda infantil Pampers tamanho M', 100, 39.90, DEFAULT, DEFAULT),
(DEFAULT, 'Frauda Pampers G', '25879-7854', 'Frauda infantil Pampers tamanho G', 100, 49.90, DEFAULT, DEFAULT),
(DEFAULT, 'Arroz Prato Fino', '49866-6445', 'Arroz Prato Fino tipo 1', 1000, 21.90, DEFAULT, DEFAULT),
(DEFAULT, 'Feijão Namorado', '78444-4885', 'Feijão carioca Namorado', 1000, 5.90, DEFAULT, DEFAULT),
(DEFAULT, 'Coca Cola 2L', '84522-4886', 'Refrigerante Coca Cola 2 Litros', 500, 8.90, DEFAULT, DEFAULT);


INSERT INTO `categories`(`id`, `name`, `created_at`, `updated_at`) VALUES
(DEFAULT, 'Infantil', DEFAULT, DEFAULT),
(DEFAULT, 'Higiene', DEFAULT, DEFAULT),
(DEFAULT, 'Saúde', DEFAULT, DEFAULT),
(DEFAULT, 'Alimentos', DEFAULT, DEFAULT),
(DEFAULT, 'Bebidas', DEFAULT, DEFAULT);


INSERT INTO `categories_products`(`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(DEFAULT, 1, 1, DEFAULT, DEFAULT),
(DEFAULT, 1, 2, DEFAULT, DEFAULT),
(DEFAULT, 1, 3, DEFAULT, DEFAULT),
(DEFAULT, 2, 1, DEFAULT, DEFAULT),
(DEFAULT, 2, 2, DEFAULT, DEFAULT),
(DEFAULT, 2, 3, DEFAULT, DEFAULT),
(DEFAULT, 3, 1, DEFAULT, DEFAULT),
(DEFAULT, 3, 2, DEFAULT, DEFAULT),
(DEFAULT, 3, 3, DEFAULT, DEFAULT),
(DEFAULT, 4, 4, DEFAULT, DEFAULT),
(DEFAULT, 5, 5, DEFAULT, DEFAULT);
