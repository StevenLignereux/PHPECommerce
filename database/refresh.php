<?php

require_once(__DIR__ . '/../bootstrap.php');

$pdo = new PDO("pgsql:host=localhost;port=5432;dbname=commerce", 'commerce');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->exec("
DO $$ DECLARE
    r RECORD;
BEGIN
    -- if the schema you operate on is not 'current', you will want to
    -- replace current_schema() in query with 'schematodeletetablesfrom'
    -- *and* update the generate 'DROP...' accordingly.
    FOR r IN (SELECT tablename FROM pg_tables WHERE schemaname = current_schema()) LOOP
        EXECUTE 'DROP TABLE IF EXISTS ' || quote_ident(r.tablename) || ' CASCADE';
    END LOOP;
    END $$;
");

$pdo->exec('CREATE TABLE admins(
    id SERIAL,
    name TEXT UNIQUE,
    password TEXT
)');

$pdo->exec('CREATE TABLE products(
    id SERIAL,
    name TEXT,
    description TEXT
)');
