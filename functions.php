<?php

session_start();

function signup($data)
{
    $errors = array();

    // Validate 
    if (!preg_match('/^[a-zA-Z]+$/', $data['username'])) {
        $errors[] = "Please enter a valid username";
    }

    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email";
    }

    if (strlen(trim($data['password'])) < 4) {
        $errors[] = "Password must be at least 4 characters long";
    }

    if ($data['password'] != $data['password2']) {
        $errors[] = "Passwords must match";
    }

    $check = database_run("SELECT * FROM users WHERE email = :email LIMIT 1", ['email' => $data['email']]);
    if (is_array($check)) {
        $errors[] = "That email already exists";
    }

    // Save
    if (count($errors) == 0) {
        $arr['username'] = $data['username'];
        $arr['email'] = $data['email'];
        $arr['password'] = password_hash($data['password'], PASSWORD_DEFAULT); // Use password_hash
        $arr['date'] = date("Y-m-d H:i:s");

        $query = "INSERT INTO users (username, email, password, date) VALUES (:username, :email, :password, :date)";

        database_run($query, $arr);
    }
    return $errors;
}

function login($data)
{
    $errors = array();

    // Validate
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email";
    }

    if (strlen(trim($data['password'])) < 4) {
        $errors[] = "Password must be at least 4 characters long";
    }

    // Check
    if (count($errors) == 0) {
        $arr['email'] = $data['email'];
        $password = $data['password'];

        $query = "SELECT * FROM users WHERE email = :email LIMIT 1";

        $row = database_run($query, $arr);

        if (is_array($row)) {
            $row = $row[0];

            if (password_verify($password, $row->password)) { // Use password_verify
                $_SESSION['USER'] = $row;
                $_SESSION['LOGGED_IN'] = true;
            } else {
                $errors[] = "Wrong email or password";
            }
        } else {
            $errors[] = "Wrong email or password";
        }
    }
    return $errors;
}

function database_run($query, $vars = array())
{
    try {
        $string = "mysql:host=localhost;dbname=verify_db;";
        $con = new PDO($string, 'root', '');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stm = $con->prepare($query);
        $stm->execute($vars);

        $data = $stm->fetchAll(PDO::FETCH_OBJ);

        if (count($data) > 0) {
            return $data;
        }
    } catch (PDOException $e) {
        // Handle exceptions (optional: log the error message)
        return false;
    }

    return false;
}

function check_login($redirect = true)
{
    if (isset($_SESSION['USER']) && isset($_SESSION['LOGGED_IN'])) {
        return true;
    }

    if ($redirect) {
        header("Location: login.php");
        die;
    } else {
        return false;
    }
}

function check_verified()
{
    $id = $_SESSION['USER']->id;
    $query = "SELECT * FROM users WHERE id = :id LIMIT 1";
    $row = database_run($query, ['id' => $id]); // Use parameterized query

    if (is_array($row)) {
        $row = $row[0];

        if ($row->email == $row->email_verified) {
            return true;
        }
    }

    return false;
}
