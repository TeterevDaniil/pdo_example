
<?php

function get_connect()
{
    include 'config.php';
    return $pdo;
}

function get_emp()
{
    $pdo = get_connect();
    $emp_id = 21046;
    $stmt = $pdo->prepare('SELECT * FROM employers WHERE id = :emp_id');
    $stmt->execute(array('emp_id' => $emp_id));

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
