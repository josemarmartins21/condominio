<?php

    function conn(): PDO {
        try {
        $pdo = new PDO("mysql:host=localhost;dbname=condominio_sonangol", "root", '');
        $pdo->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
        return $pdo;
        } catch (\PDOException $err) {
            exit('Erro de conexão ' . $err->getMessage());
        }
    }

    function getData() {
        $stmt = conn()->query("SELECT m.nome,  m.rua, c.numero_da_casa from morador as m join casa as c
                        on m.idcasa = c.idcasa
                        order by m.nome");
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $data;
        } 

        return false;
    }
   
    