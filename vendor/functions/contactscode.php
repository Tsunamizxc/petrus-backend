<?php
header('Content-Type: application/json');
include 'core.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'success' => false,
        'message' => 'Метод запроса должен быть POST'
    ]);
    exit;
}

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$company = trim($_POST['company'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];

if (empty($name)) {
    $errors[] = 'Имя обязательно для заполнения';
}
if (empty($company)) {
    $errors[] = 'Название компании обязательно для заполнения';
}
if (empty($phone)) {
    $errors[] = 'Телефон обязателен для заполнения';
} elseif (!preg_match('/^[\d\s\-\+\(\)]+$/', $phone)) {
    $errors[] = 'Некорректный формат телефона';
}

if (empty($email)) {
    $errors[] = 'Email обязателен для заполнения';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Некорректный формат email';
}

if (!empty($errors)) {
    echo json_encode([
        'success' => false,
        'message' => implode('<br>', $errors)
    ]);
    exit;
}

$addContacts = $link->query("INSERT INTO `contacts`(`name`, `phone`, `email`, `company`, `message`) 
VALUES ('$name','$phone','$email','$company','$message')");

echo json_encode([
    'success' => true,
    'message' => 'Ваша заявка успешно отправлена! Мы свяжемся с вами в ближайшее время.'
]);