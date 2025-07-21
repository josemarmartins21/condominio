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

    function buscarPorNome($nome = null) {
       $stmt = conn()->prepare("SELECT m.nome,  m.rua, c.numero_da_casa FROM morador as m join casa as c
                on m.idcasa = c.idcasa WHERE c.numero_da_casa  like ? LIMIT 1");
       $stmt->execute(["%" . $nome . "%"]); 

       return $stmt->fetch(PDO::FETCH_ASSOC);
    }
   
    