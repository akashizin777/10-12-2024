CREATE TABLE produtos (
 id INTEGER PRIMARY KEY AUTOINCREMENT,
 nome TEXT NOT NULL,
 descricao TEXT,
 preco REAL NOT NULL
);


CREATE TABLE clientes (
 id INTEGER PRIMARY KEY AUTOINCREMENT,
 nome TEXT NOT NULL,
 email TEXT UNIQUE,
 telefone TEXT
);


CREATE TABLE vendas (
 id INTEGER PRIMARY KEY AUTOINCREMENT,
 data_venda DATE NOT NULL,
 id_cliente INTEGER,
 id_produto INTEGER,
 quantidade INTEGER NOT NULL,
 valor_total REAL NOT NULL,
 FOREIGN KEY (id_cliente) REFERENCES clientes(id),
 FOREIGN KEY (id_produto) REFERENCES produtos(id)
);

