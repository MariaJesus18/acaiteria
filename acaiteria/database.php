<?php

use Lem\Acai\Models\Model;
// Criando o banco de dados. Outras duas entidades foram salvas nas proprias páginas de coleta de dados

Model::registerConection(new SQLite3(__DIR__.'/banco.db'));
Model::registerModel('CREATE TABLE IF NOT EXISTS users(username TEXT, password TEXT )');